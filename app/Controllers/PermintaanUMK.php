<?php

namespace App\Controllers;

use App\Models\PermintaanUMKModel;

class PermintaanUMK extends BaseController
{
    protected $PermintaanUMKModel, $builder, $db;

    public function __construct()
    {
        $this->PermintaanUMKModel = new PermintaanUMKModel();
    }

    public function index()
    {

        $currentPage = $this->request->getVar('page_permintaan') ? $this->request->getVar('page_permintaan') : 1;

        $data = [
            'title' => 'Permintaan UMK',
            'tbl_umk' => $this->PermintaanUMKModel->paginate(6),
            'pager' => $this->PermintaanUMKModel->pager,
            'currentPage' => $currentPage
        ];

        return view('permintaanumk/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Permintaan UMK',
            'validation' => \Config\Services::validation()
        ];

        return view('permintaanumk/create', $data);
    }

    public function sendEmail()
    {
        $email = \Config\Services::email();
        $id_user = $this->request->getVar('id_user');

        $email->setTo('derago118@gmail.com');
        $email->setFrom('johndoe@gmail.com');

        $email->setSubject("Invoice Permintaan UMK");
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
        $no_umk = $this->request->getVar('no_umk');
        $tgl_umk = $this->request->getVar('tgl_umk');
        $batas_pumk = $this->request->getVar('batas_pumk');
        $user = $this->request->getVar('user');
        $jumlah = $this->request->getVar('jumlah');
        $sisa = $this->request->getVar('sisa');
        $status = $this->request->getVar('status');

        $this->PermintaanUMKModel->save([
            'id_user'    => $id_user,
            'no_umk'     => $no_umk,
            'tgl_umk'    => $tgl_umk,
            'batas_pumk' => $batas_pumk,
            'user'       => $user,
            'jumlah'     => $jumlah,
            'sisa'       => $sisa,
            'status'     => $status
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');

        return redirect()->to('/permintaanumk');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Edit Permintaan UMK',
            'validation' => \Config\Services::validation(),
            'tbl_umk' => $this->PermintaanUMKModel->getDetailPermintaan($id)
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_umk');
        $query = $builder->select('id', 'no_erp', 'tgl_umk', 'batas_pumk', 'user', 'jumlah', 'sisa', 'status')
            ->where('id', $id)->get();

        $data['permintaanumk'] = $query->getRow();

        return view('permintaanumk/edit', $data);
    }

    public function update($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_umk');

        $data = [
            'id'         => $id,
            'no_erp'     => $this->request->getVar('no_erp'),
            'tgl_umk'    => $this->request->getVar('tgl_umk'),
            'batas_pumk' => $this->request->getVar('batas_pumk'),
            'user'       => $this->request->getVar('user'),
            'jumlah'     => $this->request->getVar('jumlah'),
            'sisa'       => $this->request->getVar('sisa'),
            'status'     => $this->request->getVar('status')
        ];

        $builder->replace($data);

        return redirect()->to('/permintaanumk');
    }

    public function delete($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_umk');

        $builder->delete(['id' => $id]);

        return redirect()->to('/permintaanumk');
    }
}
