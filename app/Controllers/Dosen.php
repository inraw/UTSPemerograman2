<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MDosen;
use CodeIgniter\HTTP\ResponseInterface;

class Dosen extends BaseController
{
    protected $dosen;
    
    public function __construct()
    {
        $this->dosen = new MDosen();
    }
    public function index()
    {
        $data = [
            'judul' => 'Dosen',
            'dosen' => $this->dosen->findAll()
        ];
        return view('dosen',$data);
    }
    public function tambah()
    {
        $data = [
            'judul' => 'Dosen',
            'dosen' => $this->dosen->findAll()
        ];
        return view('tambah_dosen',$data);

    }
    public function simpan() {
        $data = [
            'nama_dosen' => $this->request->getVar('nama_dosen'),
            'alamat_dosen' => $this->request->getVar('alamat_dosen'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'matkul_dosen' => $this->request->getVar('matkul_dosen')
        ];
        $this->dosen->insert($data);
        return $this->response->redirect(site_url('/dosen'));
    }
    public function edit($id = null) {
        $data['judul'] = '';
        $data['dosen'] = $this->dosen->where('id_dosen', $id)->first();
        return view('edit_dosen', $data);
    }
    public function simpanEdit($id) {
        $data = [
            'nama_dosen' => $this->request->getVar('nama_dosen'),
            'alamat_dosen' => $this->request->getVar('alamat_dosen'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'matkul_dosen' => $this->request->getVar('matkul_dosen')
        ];
        $this->dosen->update($id, $data);
        return $this->response->redirect(site_url('/dosen'));
    }
    public function hapus($id = null) {
        $this->dosen->where('id_dosen', $id)->delete($id);
        return $this->response->redirect(site_url('/dosen'));
    }
}
