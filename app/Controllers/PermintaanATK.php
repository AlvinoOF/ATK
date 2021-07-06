<?php

namespace App\Controllers;

use App\Models\PermintaanATKModel;

class PermintaanATK extends BaseController
{
    protected $PermintaanATKModel, $builder, $db;

    public function __construct()
    {
        $this->PermintaanATKModel = new PermintaanATKModel();
    }

    public function index()
    {

        $currentPage = $this->request->getVar('page_permintaan') ? $this->request->getVar('page_permintaan') : 1;

        $data = [
            'title' => 'Permintaan Alat Tulis',
            'tbl_permintaan' => $this->PermintaanATKModel->paginate(6, 'tbl_permintaan'),
            'pager' => $this->PermintaanATKModel->pager,
            'currentPage' => $currentPage
        ];

        return view('permintaanatk/index', $data);
    }

    public function detail($id_permintaan = 0)
    {
        $data = [
            'title' => 'Detail Alat Tulis'
        ];

        $this->builder->select('id_det_pemesanan, tbl_det_pemesanan.id_pemesanan as pemesananid, id_atk, jumlah, harga');
        $this->builder->join('tbl_pemesanan', 'tbl_det_pemesanan.id_pemesanan = tbl_pemesanan.id');
        $this->builder->where('tbl_det_pemesanan.id_pemesanan', $id_permintaan);
        $query = $this->builder->get();

        $data['tbl_det_pemesanan'] = $query->getRow();

        return view('permintaan/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Permintaan ATK',
            'validation' => \Config\Services::validation()
        ];

        return view('permintaanatk/create', $data);
    }

    public function save()
    {
        $this->PermintaanATKModel->save([
            'id_user' => $this->request->getVar('id_user'),
            'tgl_permintaan'        => $this->request->getVar('tgl_permintaan'),
            'status'        => $this->request->getVar('status')
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');

        return redirect()->to('/permintaanatk');
    }

    public function edit($id_permintaan)
    {
        $data = [
            'title' => 'Form Edit Permintaan ATK',
            'validation' => \Config\Services::validation(),
            'tbl_permintaan' => $this->PermintaanATKModel->getPermintaanATK($id_permintaan)
        ];

        return view('permintaanatk/edit', $data);
    }

    public function update($id_permintaan)
    {
        $this->PermintaanATKModel->save([
            'id_permintaan'             => $id_permintaan,
            'id_user' => $this->request->getVar('id_user'),
            'tgl_permintaan'        => $this->request->getVar('tgl_permintaan'),
            'status'        => $this->request->getVar('status')
        ]);

        session()->setFlashdata('pesan', 'Berhasil diupdate');

        return redirect()->to('/permintaanatk');
    }

    public function delete($id_permintaan)
    {
        $this->PermintaanATKModel->delete($id_permintaan);
        session()->setFlashdata('pesan', 'Berhasil dihapus');
        return redirect()->to('/permintaanatk');
    }

    // ================================DETAIL PERMINTAAN=================================================

    public function indexDetPermintaan()
    {
        $currentPage = $this->request->getVar('page_det_permintaan') ? $this->request->getVar('page_det_permintaan') : 1;

        $data = [
            'title' => 'Laporan Detail Permintaan',
            'tbl_det_dist' => $this->DetailPermintaanModel->paginate(6, 'tbl_det_permintaan'),
            'pager' => $this->DetailPermintaanModel->pager,
            'currentPage' => $currentPage
        ];

        return view('detailpermintaan/index', $data);
    }

    // public function detail($id_det_permintaan = 0)
    // {
    //     $data = [
    //         'title' => 'Detail Penerimaan ATK'
    //     ];

    //     $this->builder->select('*');
    //     $this->builder->where('tbl_det_permintaan.id', $id_det_permintaan);
    //     $query = $this->builder->get();

    //     return view('detailpermintaan/detail', $data);
    // }

    public function createDetPermintaan()
    {
        $data = [
            'title' => 'Form Tambah Detail Permintaan',
            'validation' => \Config\Services::validation()
        ];

        return view('detailpermintaan/create', $data);
    }

    public function saveDetPermintaan()
    {
        $this->DetailPermintaanModel->save([
            'id_permintaan' => $this->request->getVar('id_permintaan'),
            'id_atk'        => $this->request->getVar('id_atk'),
            'jumlah'        => $this->request->getVar('jumlah')
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');

        return redirect()->to('/detailpermintaan');
    }

    public function editDetPermintaan($id_det_permintaan)
    {
        $data = [
            'title' => 'Form Edit Detail Permintaan',
            'validation' => \Config\Services::validation(),
            'tbl_det_permintaan' => $this->DetailPermintaanModel->getDetailPermintaan($id_det_permintaan)
        ];

        return view('detailpermintaan/edit', $data);
    }

    public function updateDetPermintaan($id_det_permintaan)
    {
        $this->DetailPermintaanModel->save([
            'id_det_permintaan'             => $id_det_permintaan,
            'id_permintaan' => $this->request->getVar('id_permintaan'),
            'id_atk'        => $this->request->getVar('id_atk'),
            'jumlah'        => $this->request->getVar('jumlah')
        ]);

        session()->setFlashdata('pesan', 'Berhasil diupdate');

        return redirect()->to('/detailpermintaan');
    }

    public function deleteDetPermintaan($id_det_permintaan)
    {
        $this->DetailPermintaanModel->delete($id_det_permintaan);
        session()->setFlashdata('pesan', 'Berhasil dihapus');
        return redirect()->to('/detailpermintaan');
    }
}
