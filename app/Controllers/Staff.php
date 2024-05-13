<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MStaff;
use CodeIgniter\HTTP\ResponseInterface;

class Staff extends BaseController
{
    protected $staff;
    
    public function __construct()
    {
        $this->staff = new MStaff();
    }
    public function index()
    {
        $data = [
            'judul' => 'Staff',
            'staff' => $this->staff->findAll()
        ];
        return view('staff',$data);
    }
    public function tambah()
    {
        $data = [
            'judul' => 'Staff',
            'staff' => $this->staff->findAll()
        ];
        return view('tambah_staff',$data);

    }
    public function simpan() {
        $data = [
            'nama_staff' => $this->request->getVar('nama_staff'),
            'alamat_staff' => $this->request->getVar('alamat_staff'),
            'status_staff' => $this->request->getVar('status_staff'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir')
        ];
        $this->staff->insert($data);
        return $this->response->redirect(site_url('/staff'));
    }
    public function edit($id = null) {
        $data['judul'] = '';
        $data['staff'] = $this->staff->where('id_staff', $id)->first();
        return view('edit_staff', $data);
    }
    public function simpanEdit($id) {
        $data = [
            'nama_staff' => $this->request->getVar('nama_staff'),
            'alamat_staff' => $this->request->getVar('alamat_staff'),
            'status_staff' => $this->request->getVar('status_staff'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir')
        ];
        $this->staff->update($id, $data);
        return $this->response->redirect(site_url('/staff'));
    }

    public function hapus($id = null) {
        $this->staff->where('id_staff', $id)->delete($id);
        return $this->response->redirect(site_url('/staff'));
    }
}
