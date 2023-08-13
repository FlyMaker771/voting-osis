<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DataSiswa extends BaseController
{
    public function kosong($slug)
    {
        $data = [
            'tittle' => 'Data Siswa',
            // 'siswa' => $this->SiswaModel->getDataSiswa($slug)
        ];

        // if (empty($data['komik'])) {
        //     # code...
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak Ditemukan' . $slug);
        // }
        return view('admin/add', $data);
    }
    public function index()
    {
        // $this->SiswaModel = new SiswaModel();
        $siswa = $this->SiswaModel->findAll();
        // dd($siswa);

        $data = [
            'tittle' => 'Data Siswa',
            'siswa' => $siswa
        ];
        return view('admin/index', $data);
    }
    public function add()
    {
        $data = [
            'tittle' => 'Add Data Siswa',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/add', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'nis' => 'required|is_unique[siswa.nis]',
            'nama' => 'required|is_unique[siswa.nama]',
            'tingkat' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ])) {
            # code...
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('/datasiswa/add')->withInput()->with('validation', $validation);
        }
        $this->SiswaModel->insert([
            'nis' => $this->request->getPost('nis'),
            'nama' => $this->request->getPost('nama'),
            'tingkat' => $this->request->getPost('tingkat'),
            'kelas' => $this->request->getPost('kelas'),
            'jurusan' => $this->request->getPost('jurusan'),
        ]);
        // dd($this->SiswaModel);

        // dd($this->request->getPost('nis'));


        return redirect()->to('/datasiswa');
    }
    public function edit()
    {
        $data = [
            'tittle' => 'Edit Data Siswa',
        ];

        return view('admin/edit', $data);
    }
    public function delete($nis)
    {
        $this->SiswaModel->delete($nis);
        return redirect()->to('/datasiswa');
    }
}
