<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuratKeluar;
use App\Models\Instansi;


class SuratKeluarController extends BaseController
{
    public function index()
    {
        $suratKeluarModel = new SuratKeluar();
        $suratkeluar = $suratKeluarModel->findAll();
        $instansiModel = new Instansi();
        $instansi = $instansiModel->findAll();

        $data = [
            'title' => 'Surat Keluar',
            'suratkeluar' => $suratkeluar,
            'instansi' => $instansi
        ];

        return view('templates/header', $data)
            . view('suratkeluar/list', $data)
            . view('templates/footer');
    }

    public function create()
    {
        $suratKeluarModel = new SuratKeluar();
        $suratkeluar = $suratKeluarModel->findAll();
        $instansiModel = new Instansi();
        $instansi = $instansiModel->findAll();

        $data = [
            'title' => 'Create Surat Keluar',
            'suratkeluar' => $suratkeluar,
            'instansi' => $instansi
        ];

        return view('templates/header', $data)
            . view('suratkeluar/create', $data)
            . view('templates/footer');
    }

    public function store()
    {
        $koneksi = mysqli_connect("localhost", "root", "", "teoweblanjut");
        if (!$this->validate([
            'no_surat' => 'required',
            'id_instansi' => 'required',
            'isi_surat' => 'required',
        ])) {
            return redirect()->to('/create');
        }
        $suratKeluarModel = new SuratKeluar();
        $data = [
            'no_surat' => $this->request->getPost('no_surat'),
            'id_instansi' => $this->request->getPost('id_instansi'),
            'isi_surat' => $this->request->getPost('isi_surat'),
        ];

        $suratKeluarModel->save($data);
        return redirect()->to('/suratkeluar');
    }

    public function delete($id_surat_keluar)
    {
        $suratKeluarModel = new SuratKeluar();
        $suratKeluarModel->delete($id_surat_keluar);

        return redirect()->to('/suratkeluar');
    }

    public function edit($id_surat_keluar)
    {
        $suratKeluarModel = new SuratKeluar();
        $suratkeluar = $suratKeluarModel->find($id_surat_keluar);
        //$instansiId = $suratMasukModel->find($id_instansi);
        $data = [
            'title' => 'Edit Surat Keluar'
        ];

        return view('templates/header', $data)
            . view('suratkeluar/edit', $suratkeluar)
            . view('templates/footer');
    }

    public function update($id_surat_keluar)
    {
        if (!$this->validate([
            'no_surat' => 'required',
            'isi_surat' => 'required',
            'id_instansi' => 'required',
        ])) {
            return redirect()->to('/suratkeluar');
        }
        $suratKeluarModel = new SuratKeluar();
        $data = [
            'no_surat' => $this->request->getVar('no_surat'),
            'isi_surat' => $this->request->getVar('isi_surat'),
            'id_instansi' => $this->request->getVar('id_instansi'),
        ];

        $suratKeluarModel->update($id_surat_keluar, $data);
        return redirect()->to('/suratkeluar');
        }
    }