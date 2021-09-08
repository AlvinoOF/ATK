<?php

namespace App\Controllers;

use App\Models\PemesananATKModel;

class PemesananATK extends BaseController
{
    protected $PemesananATKModel, $builder;

    public function __construct()
    {
        $this->PemesananATKModel = new PemesananATKModel();
        $this->email = \Config\Services::email();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_pemesanan') ? $this->request->getVar('page_pemesanan') : 1;

        $data = [
            'title' => 'Pemesanan Alat Tulis',
            'tbl_pemesanan' => $this->PemesananATKModel->paginate(6),
            'pager' => $this->PemesananATKModel->pager,
            'currentPage' => $currentPage,
        ];

        return view('pemesananatk/index', $data);
    }

    public function detail($id)
    {
        $currentPage = $this->request->getVar('page_pemesanan') ? $this->request->getVar('page_pemesanan') : 1;

        $data = [
            'title' => 'Detail PemesananATK',
            'currentPage' => $currentPage
        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_det_pemesanan');
        $query = $builder->select('id_det_pemesanan, tbl_det_pemesanan.id_pemesanan as pemesananid, id_atk, jumlah, harga')
            ->join('tbl_pemesanan', 'tbl_det_pemesanan.id_pemesanan = tbl_pemesanan.id')
            ->where('tbl_pemesanan.id', $id)->get();

        $data['tbl_det_pemesanan'] = $query->getRow();

        return view('pemesananatk/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Pemesanan ATK',
            'validation' => \Config\Services::validation()
        ];

        return view('pemesananatk/create', $data);
    }

    public function sendEmail()
    {
        $email = \Config\Services::email();
        $id_user = $this->request->getVar('id_user');

        $email->setTo('derago118@gmail.com');
        $email->setFrom('johndoe@gmail.com');

        $email->setSubject("Invoice Pemesanan ATK");
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
        $tgl_pemesanan = $this->request->getVar('tgl_pemesanan');
        $no_erp =  $this->request->getVar('no_erp');
        $status = $this->request->getVar('status');
        $this->PemesananATKModel->save([
            'id_user' => $id_user,
            'tgl_pemesanan'        => $tgl_pemesanan,
            'no_erp'        => $no_erp,
            'status'        => $status,
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');
        return redirect()->to('/pemesananatk');
    }

    public function edit($id_det_pemesanan)
    {
        $data = [
            'title' => 'Form Update Pemesanan ATK',
            'validation' => \Config\Services::validation(),
            'tbl_det_pemesanan' => $this->PemesananATKModel->getDetailPemesanan($id_det_pemesanan)
        ];
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_det_pemesanan');
        $query = $builder->select('id_det_pemesanan, tbl_det_pemesanan.id_pemesanan, id_atk, jumlah, harga')
            ->join('tbl_pemesanan', 'tbl_det_pemesanan.id_pemesanan = tbl_pemesanan.id')
            ->where('tbl_det_pemesanan.id_det_pemesanan', $id_det_pemesanan)->get();

        $data['testgetdata'] = $query->getRow();

        return view('pemesananatk/edit', $data);
    }

    public function update($id_det_pemesanan)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_det_pemesanan');

        $data = [
            'id_pemesanan' => $this->request->getVar('id_pemesanan'),
            'id_atk'    =>   $this->request->getVar('id_atk'),
            'id_det_pemesanan'             => $id_det_pemesanan,
            'jumlah' => $this->request->getVar('jumlah'),
            'harga'        => $this->request->getVar('harga')
        ];

        $builder->replace($data);

        return redirect()->to('/pemesananatk');
    }

    public function delete($id_det_pemesanan)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_det_pemesanan');

        $builder->delete(['id_det_pemesanan' => $id_det_pemesanan]);

        return redirect()->to('/pemesananatk');
    }

    public function sendEmailPemesanan()
    {
        $this->email->setFrom('derago118@gmail.com', 'Admin');
        $this->email->setTo('derago118@gmail.com');
        $this->email->setSubject('Pemesanan ATK');

        $this->email->setMessage('Tes email');

        if (!$this->email->send()) {
            return false;
        } else {
            echo 'Success to send email';
        }
    }

    // ========================DETAIL PEMESANAN=======================================
    public function indexDetPemesanan()
    {
        $currentPage = $this->request->getVar('page_det_pemesanan') ? $this->request->getVar('page_det_pemesanan') : 1;

        $data = [
            'title' => 'Laporan Detail Pemesanan',
            'tbl_det_pemesanan' => $this->DetailPemesananModel->paginate(6, 'tbl_det_pemesanan'),
            'pager' => $this->DetailPemesananModel->pager,
            'currentPage' => $currentPage
        ];

        return view('detailpemesanan/index', $data);
    }

    public function createDetPemesanan()
    {
        $data = [
            'title' => 'Form Tambah Detail Pemesanan',
            'validation' => \Config\Services::validation()
        ];

        return view('detailpemesanan/create', $data);
    }

    public function saveDetPemesanan()
    {
        $this->DetailPemesananModel->save([
            'id_pemesanan' => $this->request->getVar('id_pemesanan'),
            'id_atk'        => $this->request->getVar('id_atk'),
            'jumlah'        => $this->request->getVar('jumlah'),
            'harga'        => $this->request->getVar('harga')
        ]);

        session()->setFlashdata('pesan', 'Berhasil ditambahkan');

        return redirect()->to('/detailpemesanan');
    }

    public function editDetPemesanan($id_det_pemesanan)
    {
        $data = [
            'title' => 'Form Edit Detail Pemesanan',
            'validation' => \Config\Services::validation(),
            'tbl_det_pemesanan' => $this->DetailPemesananModel->getDetailPemesanan($id_det_pemesanan)
        ];

        return view('detailpemesanan/edit', $data);
    }

    public function updateDetPemesanan($id_det_pemesanan)
    {
        $this->DetailPemesananModel->save([
            'id_det_pemesanan'             => $id_det_pemesanan,
            'id_pemesanan' => $this->request->getVar('id_pemesanan'),
            'id_atk'        => $this->request->getVar('id_atk'),
            'jumlah'        => $this->request->getVar('jumlah'),
            'harga'        => $this->request->getVar('harga')
        ]);

        session()->setFlashdata('pesan', 'Berhasil diupdate');

        return redirect()->to('/detailpemesanan');
    }

    public function deleteDetPemesanan($id_det_pemesanan)
    {
        $this->DetailPemesananModel->delete($id_det_pemesanan);
        session()->setFlashdata('pesan', 'Berhasil dihapus');
        return redirect()->to('/detailpemesanan');
    }
}
