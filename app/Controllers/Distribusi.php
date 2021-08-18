<?php

namespace App\Controllers;

use App\Models\DistribusiModel;

class Distribusi extends BaseController
{
    protected $DistribusiModel, $builder;

    public function __construct()
    {
        $this->DistribusiModel = new DistribusiModel();
    }

    public function index()
    {

        $currentPage = $this->request->getVar('page_distribusi') ? $this->request->getVar('page_distribusi') : 1;

        $data = [
            'title' => 'Laporan Distribusi',
            'tbl_distribusi' => $this->DistribusiModel->paginate(6, 'tbl_distribusi'),
            'pager' => $this->DistribusiModel->pager,
            'currentPage' => $currentPage
        ];

        return view('distribusi/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Detail Distribusi',
            'validation' => \Config\Services::validation()
        ];

        return view('distribusi/create', $data);
    }

    public function save()
    {
        $this->DistribusiModel->save([
            'id_permintaan' => $this->request->getVar('id_permintaan'),
            'tgl_distribusi'        => $this->request->getVar('tgl_distribusi'),
            'id_user'        => $this->request->getVar('id_user')
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');

        return redirect()->to('/distribusi');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Edit Detail Distribusi',
            'validation' => \Config\Services::validation(),
            'tbl_det_dist' => $this->DistribusiModel->getDistribusi($id)
        ];

        return view('distribusi/edit', $data);
    }

    public function update($id)
    {
        $this->DistribusiModel->save([
            'id'             => $id,
            'id_permintaan' => $this->request->getVar('id_permintaan'),
            'tgl_distribusi'        => $this->request->getVar('tgl_distribusi'),
            'id_user'        => $this->request->getVar('id_user')
        ]);

        session()->setFlashdata('pesan', 'Berhasil diupdate');

        return redirect()->to('/distribusi');
    }

    public function delete($id)
    {
        $this->DistribusiModel->delete($id);
        session()->setFlashdata('pesan', 'Berhasil dihapus');
        return redirect()->to('/distribusi');
    }

    // =============================DETAIL DISTRIBUSI=================================
    public function indexDetDistribusi()
    {

        $currentPage = $this->request->getVar('page_det_dist') ? $this->request->getVar('page_det_dist') : 1;

        $data = [
            'title' => 'Laporan Detail Distribusi',
            'tbl_det_dist' => $this->DetailDistribusiModel->paginate(6, 'tbl_det_dist'),
            'pager' => $this->DetailDistribusiModel->pager,
            'currentPage' => $currentPage
        ];

        return view('detaildistribusi/index', $data);
    }

    public function createDetDistribusi()
    {
        $data = [
            'title' => 'Form Tambah Detail Distribusi',
            'validation' => \Config\Services::validation()
        ];

        return view('detaildistribusi/create', $data);
    }

    public function saveDetDistribusi()
    {
        $this->DetailDistribusiModel->save([
            'id_dist' => $this->request->getVar('id_dist'),
            'jumlah'        => $this->request->getVar('jumlah'),
            'status'        => $this->request->getVar('status')
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');

        return redirect()->to('/detaildistribusi');
    }

    public function editDetDistribusi($id)
    {
        $data = [
            'title' => 'Form Edit Detail Distribusi',
            'validation' => \Config\Services::validation(),
            'tbl_det_dist' => $this->DetailDistribusiModel->getPermintaanATK($id)
        ];

        return view('detaildistribusi/edit', $data);
    }

    public function updateDetDistribusi($id)
    {
        $this->DetailDistribusiModel->save([
            'id'             => $id,
            'id_dist' => $this->request->getVar('id_dist'),
            'jumlah'        => $this->request->getVar('jumlah')
        ]);

        session()->setFlashdata('pesan', 'Berhasil diupdate');

        return redirect()->to('/detaildistribusi');
    }

    public function deleteDetDistribusi($id)
    {
        $this->DetailDistribusiModel->delete($id);
        session()->setFlashdata('pesan', 'Berhasil dihapus');
        return redirect()->to('/detaildistribusi');
    }
}
