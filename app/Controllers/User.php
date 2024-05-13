<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MUser;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    protected $user;
    
    public function __construct()
    {
        $this->user = new MUser();
    }
    public function index()
    {
        $data = [
            'judul' => 'User',
            'user' => $this->user->findAll()
        ];
        return view('user',$data);
    }
    public function tambah()
    {
        $data = [
            'judul' => 'User',
            'user' => $this->user->findAll()
        ];
        return view('tambah_user',$data);

    }
    public function simpan() {
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password')
        ];
        $this->user->insert($data);
        return $this->response->redirect(site_url('/user'));
    }
    public function edit($id = null) {
        $data['judul'] = '';
        $data['user'] = $this->user->where('id_user', $id)->first();
        return view('edit_user', $data);
    }
    public function simpanEdit($id) {
        $id = $this->request->getVar('id_user');
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password')
        ];
        $this->user->update($id, $data);
        return $this->response->redirect(site_url('/user'));
    }
    public function hapus($id = null) {
        $this->user->where('id_user', $id)->delete($id);
        return $this->response->redirect(site_url('/user'));
    }
}
