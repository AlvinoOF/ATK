<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;
use Myth\Auth\Entities\User;

class Admin extends BaseController
{

	protected $db, $builder;

	public function __construct()
	{
		$this->db      = \Config\Database::connect();
		$this->builder = $this->db->table('users');

		$this->userModel = new UserModel();
	}

	public function index()
	{
		$data['title'] = 'User List';
		// $users = new \Myth\Auth\Models\UserModel();
		// $data['users'] = $users->findAll();

		$this->builder->select('users.id as userid, username, email, name, role');
		$this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
		$this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
		$query = $this->builder->get();

		$data['users'] = $query->getResult();
		return view('admin/index', $data);
	}

	public function detail($id = 0)
	{
		$data['title'] = 'User Detail';
		// $users = new \Myth\Auth\Models\UserModel();
		// $data['users'] = $users->findAll();

		$this->builder->select('users.id as userid, username, email, fullname, user_image, name');
		$this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
		$this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
		$this->builder->where('users.id', $id);
		$query = $this->builder->get();

		$data['user'] = $query->getRow();

		if (empty($data['user'])) {
			return redirect()->to('/admin');
		}

		return view('admin/detail', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Form Tambah User',
			'validation' => \Config\Services::validation()
		];

		$db      = \Config\Database::connect();
		$builder = $db->table('auth_groups');

		$builder->select('id, name');
		$query = $builder->get();

		$data['auth_groups'] = $query->getResultArray();
		return view('admin/create', $data);
	}

	public function edit()
	{
		$data = [
			'title' => 'Form Update Profile'
		];

		return view('admin/edit', $data);
	}

	public function delete($id)
	{
		$this->userModel->delete($id);
		session()->setFlashdata('pesan', 'Berhasil dihapus');
		return redirect()->to('/admin');
	}

	public function save()
	{
		$slug = url_title($this->request->getVar('username'), '-', true);
		$data = array(
			'email' => $this->request->getVar('email'),
			'username'  => $this->request->getVar('username'),
			'password'  => $this->request->getVar('password'),
			'name'  => $this->request->getVar('name'),
			'role'  => $this->request->getVar('role'),
			'active' => 1,
			'slug' => $slug
		);

		$dt = new User($data);
		$this->userModel->withGroup('admin')->save($dt);

		return redirect()->to('/admin');
	}

	public function update($id)
	{
		$slug = url_title($this->request->getVar('username'), '-', true);
		$this->userModel->save([
			'id'       => $id,
			'email'    => $this->request->getVar('email'),
			'username'  => $this->request->getVar('username'),
			'password'  => $this->request->getVar('password'),
			'slug'     => $slug
		]);

		return redirect()->to('/admin');
	}
}
