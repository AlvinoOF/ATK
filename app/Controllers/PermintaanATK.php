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
            'tbl_permintaan' => $this->PermintaanATKModel->paginate(6),
            'pager' => $this->PermintaanATKModel->pager,
            'currentPage' => $currentPage
        ];

        return view('permintaanatk/index', $data);
    }

    public function detail($id = 0)
    {
        $currentPage = $this->request->getVar('page_permintaan') ? $this->request->getVar('page_permintaan') : 1;

        $data = [
            'title' => 'Detail PermintaanATK',
            'currentPage' => $currentPage
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_det_permintaan');
        $query = $builder->select('id_det_permintaan, tbl_det_permintaan.id_permintaan as permintaanid, id_atk, jumlah')
            ->join('tbl_permintaan', 'tbl_det_permintaan.id_permintaan = tbl_permintaan.id')
            ->where('tbl_permintaan.id', $id)->get();

        $data['tbl_det_permintaan'] = $query->getRow();

        return view('permintaanatk/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Permintaan ATK',
            'validation' => \Config\Services::validation()
        ];

        return view('permintaanatk/create', $data);
    }

    public function sendEmail()
    {
        $email = \Config\Services::email();
        $id_user = $this->request->getVar('id_user');

        $email->setTo('derago118@gmail.com');
        $email->setFrom('johndoe@gmail.com');

        $email->setSubject("Invoice Permintaan ATK");
        $email->setMessage("id user" . $id_user);

        if ($email->send() == TRUE) {
            echo 'Email successfully sent';
        } else {
            echo "email gagal kirim";
        }

        $email->send();
    }

    public function save()
    {
        $this->sendEmail();
        $id_user = $this->request->getVar('id_user');
        $tgl_permintaan = $this->request->getVar('tgl_permintaan');
        $status = $this->request->getVar('status');

        $this->PermintaanATKModel->save([
            'id_user'        => $id_user,
            'tgl_permintaan' => $tgl_permintaan,
            'status'         => $status
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');

        return redirect()->to('/permintaanatk');
    }

    public function edit($id_det_permintaan)
    {
        $data = [
            'title' => 'Form Edit Permintaan ATK',
            'validation' => \Config\Services::validation(),
            'tbl_permintaan' => $this->PermintaanATKModel->getDetailPermintaan($id_det_permintaan)
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_det_permintaan');
        $query = $builder->select('id_det_permintaan, tbl_det_permintaan.id_permintaan, id_atk, jumlah')
            ->join('tbl_permintaan', 'tbl_det_permintaan.id_permintaan = tbl_permintaan.id')
            ->where('tbl_det_permintaan.id_det_permintaan', $id_det_permintaan)->get();

        $data['permintaanatk'] = $query->getRow();

        return view('permintaanatk/edit', $data);
    }

    public function update($id_det_permintaan)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_det_permintaan');

        $data = [
            'id_det_permintaan'             => $id_det_permintaan,
            'jumlah' => $this->request->getVar('jumlah')
        ];

        $builder->replace($data);

        return redirect()->to('/permintaanatk');
    }

    public function delete($id_det_permintaan)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_det_permintaan');

        $builder->delete(['id_det_permintaan' => $id_det_permintaan]);

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
