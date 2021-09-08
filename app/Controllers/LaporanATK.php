<?php

namespace App\Controllers;

use App\Models\LaporanATKModel;

class LaporanATK extends BaseController
{
    protected $laporanATKModel, $builder;

    public function __construct()
    {
        $this->laporanATKModel = new LaporanATKModel();
    }

    public function index()
    {

        $currentPage = $this->request->getVar('page_laporan_atk') ? $this->request->getVar('page_laporan_atk') : 1;

        $data = [
            'title' => 'Laporan Alat Tulis',
            'laporan_atk' => $this->laporanATKModel->paginate(6, 'laporan_atk'),
            'pager' => $this->laporanATKModel->pager,
            'currentPage' => $currentPage
        ];

        return view('laporanatk/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Laporan ATK',
            'validation' => \Config\Services::validation()
        ];

        return view('laporanatk/create', $data);
    }

    public function save()
    {
        $this->laporanATKModel->save([
            'tanggalLaporan' => $this->request->getVar('tanggalLaporan'),
            'perihal'        => $this->request->getVar('perihal')
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');

        return redirect()->to('/laporanatk');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Update Laporan ATK',
            'validation' => \Config\Services::validation(),
            'laporan_atk' => $this->laporanATKModel->getLaporanATK($id)
        ];

        return view('laporanatk/edit', $data);
    }

    public function update($id)
    {
        $this->laporanATKModel->save([
            'id'             => $id,
            'tanggalLaporan' => $this->request->getVar('tanggalLaporan'),
            'perihal'        => $this->request->getVar('perihal')
        ]);

        session()->setFlashdata('pesan', 'Berhasil diupdate');

        return redirect()->to('/laporanatk');
    }

    public function delete($id)
    {
        $this->laporanATKModel->delete($id);
        session()->setFlashdata('pesan', 'Berhasil dihapus');
        return redirect()->to('/laporanatk');
    }
}
