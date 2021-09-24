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

    //------------------------TAMBAH_UMK---------------------
    public function tambah_umk()
    {
        $data = [
            'title' => 'Form Tambah Permintaan UMK',
            'validation' => \Config\Services::validation()
        ];

        return view('permintaanumk/tambah_umk', $data);
    }

    // public function sendEmail()
    // {
    //     $email = \Config\Services::email();
    //     $id_user = $this->request->getVar('id_user');

    //     $email->setTo('derago118@gmail.com');
    //     $email->setFrom('johndoe@gmail.com');

    //     $email->setSubject("Invoice Permintaan UMK");
    //     $email->setMessage("id user" . $id_user);

    //     if ($email->send() == TRUE) {
    //         echo 'Email successfully sent';
    //     } else {
    //         echo "email gagal kirim";
    //     }

    //     $email->send();
    // }

    public function save_tambah_umk()
    {
        //validasi input
        if (!$this->validate([
            'dokumen' => [
                'rules' => 'max_size[dokumen,1024]|is_image[dokumen]|mime_in[dokumen,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Bukan gambar',
                    'mime_in' => 'Bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/produk/create')->withInput()->with('validation', $validation);
            return redirect()->to('/permintaanumk/tambah_umk')->withInput();
        }
        // ambil gambar
        $fileDokumen = $this->request->getFile('dokumen');
        // Apakah tidak ada gambar diupload
        if ($fileDokumen->getError() == 4) {
            $namaDokumen = 'default.jpg';
        } else {
            // Generate nama foto random
            $namaDokumen = $fileDokumen->getRandomName();
            // pindahkan file ke folder img
            $fileDokumen->move('img', $namaDokumen);
        }

        $id         = $this->request->getVar('id');
        $no_erp     = $this->request->getVar('no_erp');
        $tgl_umk    = $this->request->getVar('tgl_umk');
        $user       = $this->request->getVar('user');
        $jumlah_umk = $this->request->getVar('jumlah_umk');
        $status     = $this->request->getVar('status');
        $dokumen    = $namaDokumen;

        $this->PermintaanUMKModel->save([
            'id'         => $id,
            'no_erp'     => $no_erp,
            'tgl_umk'    => $tgl_umk,
            'user'       => $user,
            'jumlah_umk' => $jumlah_umk,
            'status'     => $status,
            'dokumen'    => $dokumen,
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');
        return redirect()->to('/permintaanumk');
    }

    //---------------------------TERIMA_UMK------------------------
    public function terima_umk($id)
    {
        $data = [
            'title' => 'Form Edit Permintaan UMK',
            'validation' => \Config\Services::validation(),
            'tbl_umk' => $this->PermintaanUMKModel->getTerimaUMK($id)
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_umk');
        $query = $builder->select('id', 'no_erp', 'tgl_umk', 'batas_pumk', 'user', 'jumlah_umk', 'sisa', 'status')
            ->where('id', $id)->get();
        $data['permintaanumk'] = $query->getRow();

        return view('permintaanumk/terima_umk', $data);
    }

    public function update_terima_umk($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_umk');

        $data = [
            'id'         => $id,
            'no_erp'     => $this->request->getVar('no_erp'),
            'tgl_umk'    => $this->request->getVar('tgl_umk'),
            'user'       => $this->request->getVar('user'),
            'batas_pumk' => $this->request->getVar('batas_pumk'),
            'jumlah_umk' => $this->request->getVar('jumlah_umk'),
            'sisa'       => $this->request->getVar('sisa'),
            'status'     => $this->request->getVar('status'),
        ];

        $builder->replace($data);

        return redirect()->to('/permintaanumk');
    }

    //---------------------------TUTUP_UMK------------------------
    public function tutup_umk($id)
    {
        $data = [
            'title' => 'Form Tutup UMK',
            'validation' => \Config\Services::validation(),
            'tbl_umk' => $this->PermintaanUMKModel->getTerimaUMK($id)
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_umk');
        $query = $builder->select('id', 'no_erp', 'tgl_umk', 'batas_pumk', 'user', 'jumlah_umk', 'sisa', 'status')
            ->where('id', $id)->get();
        $data['permintaanumk'] = $query->getRow();

        return view('permintaanumk/tutup_umk', $data);
    }

    public function update_tutup_umk($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_umk');

        $data = [
            'id'         => $id,
            'status'    => $this->request->getVar('status'),
        ];

        $builder->replace($data);

        return redirect()->to('/permintaanumk');
    }

    //--------------------------LIST_PUMK----------------------------
    public function list_pumk($id)
    {
        $currentPage = $this->request->getVar('page_list_pumk') ? $this->request->getVar('page_list_pumk') : 1;

        $data = [
            'title' => 'Form Edit Permintaan UMK',
            'validation' => \Config\Services::validation(),
            'tbl_umk' => $this->PermintaanUMKModel->getListPUMK($id),
            'pager' => $this->PermintaanUMKModel->pager,
            'currentPage' => $currentPage
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_umk');
        $query = $builder->select('id', 'no_erp', 'tgl_umk', 'batas_pumk', 'user', 'jumlah_umk', 'sisa', 'status')
            ->where('id', $id)->get();
        $data['permintaanumk'] = $query->getRow();

        return view('permintaanumk/list_pumk', $data);
    }

    //------------------------------FORM_PUMK-------------------------
    public function form_pumk($id)
    {
        $data = [
            'title' => 'Form Edit Permintaan UMK',
            'validation' => \Config\Services::validation(),
            'tbl_umk' => $this->PermintaanUMKModel->getTerimaUMK($id)
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_umk');
        $query = $builder->select('id', 'no_erp', 'tgl_umk', 'batas_pumk', 'user', 'jumlah_umk', 'sisa', 'status')
            ->where('id', $id)->get();
        $data['permintaanumk'] = $query->getRow();

        return view('permintaanumk/form_pumk', $data);
    }

    public function update_form_pumk($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_umk');

        if (!$this->validate([
            'dokumen' => [
                'rules' => 'max_size[dokumen,1024]|is_image[dokumen]|mime_in[dokumen,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Bukan gambar',
                    'mime_in' => 'Bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/permintaanumk/list_pumk/' . $this->request->getVar('slug'))->withInput();
        }

        $fileDokumen = $this->request->getFile('dokumen');

        // cek gambar apakah tetap gambar lama
        if ($fileDokumen->getError() == 4) {
            $namaDokumen = $this->request->getVar('dokumenLama');
        } else {
            // generate nama file random
            $namaDokumen = $fileDokumen->getRandomName();
            // pindahkan gambar
            $fileDokumen->move('img', $namaDokumen);

            // hapus file lama
            unlink('img/' . $this->request->getVar('dokumenLama'));
        }

        $data = [
            'id'         => $id,
            'batas_pumk' => $this->request->getVar('batas_pumk'),
            'jumlah_umk' => $this->request->getVar('jumlah_umk'),
            'dokumen'    => $namaDokumen
        ];

        $builder->replace($data);

        return redirect()->to('/permintaanumk');
    }

    //----------------------------EDIT_PUMK--------------------------
    public function edit_pumk($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_umk');

        $data = [
            'id'         => $id,
            'no_erp'     => $this->request->getVar('no_erp'),
            'tgl_umk'    => $this->request->getVar('tgl_umk'),
            'batas_pumk' => $this->request->getVar('batas_pumk'),
            'user'       => $this->request->getVar('user'),
            'jumlah_umk' => $this->request->getVar('jumlah_umk'),
            'sisa'       => $this->request->getVar('sisa')
        ];

        $builder->replace($data);

        return view('permintaanumk/edit_pumk', $data);
    }

    public function update_edit_pumk($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_umk');

        if (!$this->validate([
            'dokumen' => [
                'rules' => 'max_size[dokumen,1024]|is_image[dokumen]|mime_in[dokumen,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Bukan gambar',
                    'mime_in' => 'Bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/permintaanumk/list_pumk/' . $this->request->getVar('slug'))->withInput();
        }

        $fileDokumen = $this->request->getFile('dokumen');

        // cek gambar apakah tetap gambar lama
        if ($fileDokumen->getError() == 4) {
            $namaDokumen = $this->request->getVar('dokumenLama');
        } else {
            // generate nama file random
            $namaDokumen = $fileDokumen->getRandomName();
            // pindahkan gambar
            $fileDokumen->move('img', $namaDokumen);

            // hapus file lama
            unlink('img/' . $this->request->getVar('dokumenLama'));
        }

        $data = [
            'id'         => $id,
            'no_erp'     => $this->request->getVar('no_erp'),
            'tgl_umk'    => $this->request->getVar('tgl_umk'),
            'batas_pumk' => $this->request->getVar('batas_pumk'),
            'user'       => $this->request->getVar('user'),
            'jumlah_umk' => $this->request->getVar('jumlah_umk'),
            'sisa'       => $this->request->getVar('sisa'),
            'dokumen'    => $namaDokumen,
        ];

        $builder->replace($data);

        return redirect()->to('/permintaanumk');
    }


    TEst
}
