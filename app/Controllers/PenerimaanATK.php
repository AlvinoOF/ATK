<?php

namespace App\Controllers;

use App\Models\PenerimaanATKModel;

class PenerimaanATK extends BaseController
{
    protected $PenerimaanATKModel, $builder;

    public function __construct()
    {
        $this->PenerimaanATKModel = new PenerimaanATKModel();
    }

    public function index()
    {

        $currentPage = $this->request->getVar('page_penerimaan') ? $this->request->getVar('page_penerimaan') : 1;

        $data = [
            'title' => 'Penerimaan Alat Tulis',
            'tbl_penerimaan' => $this->PenerimaanATKModel->paginate(6, 'tbl_penerimaan'),
            'pager' => $this->PenerimaanATKModel->pager,
            'currentPage' => $currentPage
        ];

        return view('penerimaanatk/index', $data);
    }

    public function detail($id = 0)
    {
        $currentPage = $this->request->getVar('page_penerimaan') ? $this->request->getVar('page_penerimaan') : 1;

        $data = [
            'title' => 'Detail PenerimaanATK',
            'currentPage' => $currentPage
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_det_penerimaan');
        $query = $builder->select('tbl_det_penerimaan.id_penerimaan, id_det_pemesanan, jumlah,id')
            ->join('tbl_penerimaan', 'tbl_det_penerimaan.id_penerimaan = tbl_penerimaan.id')
            ->where('tbl_penerimaan.id', $id)->get();

        $data['tbl_det_penerimaan'] = $query->getRow();


        return view('penerimaanatk/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Laporan ATK',
            'validation' => \Config\Services::validation()
        ];

        return view('penerimaanatk/create', $data);
    }

    public function save()
    {
        $this->PenerimaanATKModel->save([
            'id_pesan' => $this->request->getVar('id_pesan'),
            'tgl_terima'        => $this->request->getVar('tgl_terima'),
            'id_user'        => $this->request->getVar('id_user')
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');

        return redirect()->to('/penerimaanatk');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Update Penerimaan ATK',
            'validation' => \Config\Services::validation(),
            'tbl_penerimaan' => $this->PenerimaanATKModel->getPenerimaanATK($id)
        ];

        return view('penerimaanatk/edit', $data);
    }

    public function update($id)
    {
        $this->PenerimaanATKModel->save([
            'id'             => $id,
            'id_pesan' => $this->request->getVar('id_pesan'),
            'tgl_terima'        => $this->request->getVar('tgl_terima'),
            'id_user'        => $this->request->getVar('id_user')
        ]);

        session()->setFlashdata('pesan', 'Berhasil diupdate');

        return redirect()->to('/penerimaanatk');
    }

    public function delete($id)
    {
        $this->PenerimaanATKModel->delete($id);
        session()->setFlashdata('pesan', 'Berhasil dihapus');
        return redirect()->to('/penerimaanatk');
    }

    // ============================DETAIL PENERIMAAN==========================================

    public function indexDetPenerimaan()
    {
        $currentPage = $this->request->getVar('page_det_penerimaan') ? $this->request->getVar('page_det_penerimaan') : 1;

        $data = [
            'title' => 'Laporan Detail Penerimaan',
            'tbl_det_penerimaan' => $this->DetailPenerimaanModel->paginate(6, 'tbl_det_penerimaan'),
            'pager' => $this->DetailPenerimaanModel->pager,
            'currentPage' => $currentPage
        ];

        return view('detailpenerimaan/index', $data);
    }

    // public function detail($id = 0)
    // {
    //     $data = [
    //         'title' => 'Detail Penerimaan ATK'
    //     ];

    //     $this->builder->select('*');
    //     $this->builder->where('tbl_det_penerimaan.id', $id);
    //     $query = $this->builder->get();

    //     return view('detailpenerimaan/detail', $data);
    // }

    public function createDetPenerimaan()
    {
        $data = [
            'title' => 'Form Tambah Detail Penerimaan',
            'validation' => \Config\Services::validation()
        ];

        return view('detailpenerimaan/create', $data);
    }

    public function saveDetPenerimaan()
    {
        $this->DetailPenerimaanModel->save([
            'id_penerimaan' => $this->request->getVar('id_penerimaan'),
            'id_det_pemesanan'        => $this->request->getVar('id_det_pemesanan'),
            'jumlah'        => $this->request->getVar('jumlah')
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');

        return redirect()->to('/detailpenerimaan');
    }

    public function editDetPenerimaan($id)
    {
        $data = [
            'title' => 'Form Edit Detail Penerimaan',
            'validation' => \Config\Services::validation(),
            'tbl_det_penerimaan' => $this->DetailPenerimaanModel->getDetailPenerimaan($id)
        ];

        return view('detailpenerimaan/edit', $data);
    }

    public function updateDetPenerimaan($id)
    {
        $this->DetailPenerimaanModel->save([
            'id'             => $id,
            'id_penerimaan' => $this->request->getVar('id_penerimaan'),
            'id_det_pemesanan'        => $this->request->getVar('id_det_pemesanan'),
            'jumlah'        => $this->request->getVar('jumlah')
        ]);

        session()->setFlashdata('pesan', 'Berhasil diupdate');

        return redirect()->to('/detailpenerimaan');
    }

    public function deleteDetPenerimaan($id)
    {
        $this->DetailPenerimaanModel->delete($id);
        session()->setFlashdata('pesan', 'Berhasil dihapus');
        return redirect()->to('/detailpenerimaan');
    }
}
