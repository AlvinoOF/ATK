<?php

namespace App\Controllers;

use App\Models\MasterBarangModel;

class MasterBarang extends BaseController
{
    protected $MasterBarangModel, $builder;

    public function __construct()
    {
        $this->MasterBarangModel = new MasterBarangModel();
    }

    public function index()
    {

        $currentPage = $this->request->getVar('page_master_barang') ? $this->request->getVar('page_master_barang') : 1;

        $data = [
            'title' => 'Laporan Barang',
            'master_barang' => $this->MasterBarangModel->paginate(6, 'master_barang'),
            'pager' => $this->MasterBarangModel->pager,
            'currentPage' => $currentPage
        ];

        return view('masterbarang/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Barang',
            'validation' => \Config\Services::validation()
        ];

        return view('masterbarang/create', $data);
    }

    public function save()
    {
        $this->MasterBarangModel->save([
            'grup_id' => $this->request->getVar('grup_id'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'stok_awal' => $this->request->getVar('stok_awal'),
            'kode_erp' => $this->request->getVar('kode_erp')
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');

        return redirect()->to('/masterbarang');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Update Barang',
            'validation' => \Config\Services::validation(),
            'master_barang' => $this->MasterBarangModel->getMasterBarang($id)
        ];

        return view('masterbarang/edit', $data);
    }

    public function update($id)
    {
        $this->MasterBarangModel->save([
            'id'             => $id,
            'grup_id' => $this->request->getVar('grup_id'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'stok_awal' => $this->request->getVar('stok_awal'),
            'kode_erp' => $this->request->getVar('kode_erp')
        ]);

        session()->setFlashdata('pesan', 'Berhasil diupdate');

        return redirect()->to('/masterbarang');
    }

    public function delete($id)
    {
        $this->MasterBarangModel->delete($id);
        session()->setFlashdata('pesan', 'Berhasil dihapus');
        return redirect()->to('/masterbarang');
    }
}
