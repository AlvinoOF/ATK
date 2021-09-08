<?php

namespace App\Controllers;

use App\Models\MasterJenisModel;

class MasterJenis extends BaseController
{
    protected $MasterJenisModel, $builder;

    public function __construct()
    {
        $this->MasterJenisModel = new MasterJenisModel();
    }

    public function index()
    {

        $currentPage = $this->request->getVar('page_master_jenis') ? $this->request->getVar('page_master_jenis') : 1;

        $data = [
            'title' => 'Laporan Jenis Alat Tulis',
            'master_jenis' => $this->MasterJenisModel->paginate(6, 'master_jenis'),
            'pager' => $this->MasterJenisModel->pager,
            'currentPage' => $currentPage
        ];

        return view('masterjenis/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Jenis ATK',
            'validation' => \Config\Services::validation()
        ];

        return view('masterjenis/create', $data);
    }

    public function save()
    {
        $this->MasterJenisModel->save([
            'nama_jenis' => $this->request->getVar('nama_jenis')
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');

        return redirect()->to('/masterjenis');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Update Jenis ATK',
            'validation' => \Config\Services::validation(),
            'master_jenis' => $this->MasterJenisModel->getMasterJenis($id)
        ];

        return view('masterjenis/edit', $data);
    }

    public function update($id)
    {
        $this->MasterJenisModel->save([
            'id'             => $id,
            'nama_jenis' => $this->request->getVar('nama_jenis')
        ]);

        session()->setFlashdata('pesan', 'Berhasil diupdate');

        return redirect()->to('/masterjenis');
    }

    public function delete($id)
    {
        $this->MasterJenisModel->delete($id);
        session()->setFlashdata('pesan', 'Berhasil dihapus');
        return redirect()->to('/masterjenis');
    }
}
