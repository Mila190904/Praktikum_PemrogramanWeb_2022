<?php
class Mahasiswa extends CI_Controller{
    // Membuat method index
    public function index(){
        // Akses model mahasiswa
        $this->load->model('mahasiswa_model');
        $mahasiswa = $this->mahasiswa_model->getAll();
        $data['mahasiswa'] = $mahasiswa;
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');


        // $this->load->model('mahasiswa_model', 'mhs1');

        // // Membuat object model 1 dan nilainya
        // $this->mhs1->id=01;
        // $this->mhs1->nama='Mila Lestari';
        // $this->mhs1->nim='0110121217';
        // $this->mhs1->gender='P';
        // $this->mhs1->ipk=3.93;

        // $this->load->model('mahasiswa_model', 'mhs2');

        // // Membuat object model 1 dan nilainya
        // $this->mhs2->id=02;
        // $this->mhs2->nama='Naufan Raid Azka';
        // $this->mhs2->nim='0110121218';
        // $this->mhs2->gender='L';
        // $this->mhs2->ipk=3.55;

        // // Siapkan object yang kita buat tadi ke dalam array
        // $list_mhs =[$this->mhs1, $this->mhs2];

        // // Siapkan data untuk dikirim ke dalam view
        // // Data yang di ambil dari object array yang disimpan
        // $data['list_mhs'] = $list_mhs;

        //Render data dan kirim data ke dalam view 
        // $this->load->view('layouts/header');
        // $this->load->view('mahasiswa/index', $data);
        // $this->load->view('layouts/footer');
    }

    public function detail($id){
        // Akses model mahasiswa
        $this->load->model('mahasiswa_model');
        $siswa = $this->mahasiswa_model->getById($id);
        $data['siswa'] = $siswa;
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('layouts/footer');
    }

    // Method dosen
    public function dosen(){
        // Akses model dosen
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAll();
        $data['dosen'] = $dosen;
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/dosen', $data);
        $this->load->view('layouts/footer');


        // $this->load->model('dosen_model', 'dosen1');
        // $this->dosen1->nidn='0123';
        // $this->dosen1->pendidikan='S2';

        // $this->load->model('dosen_model', 'dosen2');
        // $this->dosen2->nidn='0124';
        // $this->dosen2->pendidikan='S1';

        // $this->load->model('dosen_model', 'dosen3');
        // $this->dosen3->nidn='0125';
        // $this->dosen3->pendidikan='S2';

        // $list_dosen =[$this->dosen1, $this->dosen2, $this->dosen3];
        // $data['list_dosen'] = $list_dosen;
        // $this->load->view('layouts/header');
        // $this->load->view('mahasiswa/dosen', $data);
        // $this->load->view('layouts/footer');
    }

    public function detail_dosen($id){
        // Akses model dosen
        $this->load->model('dosen_model');
        $dos = $this->dosen_model->getById($id);
        $data['dos'] = $dos;
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/detail_dosen', $data);
        $this->load->view('layouts/footer');
    }

    // Method mata kuliah
    public function matakuliah(){
        // Akses model matakuliah
        $this->load->model('matakuliah_model');
        $matakuliah = $this->matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/matakuliah', $data);
        $this->load->view('layouts/footer');


        // $this->load->model('matakuliah_model', 'matkul1');
        // $this->matkul1->nama='Basis Data';
        // $this->matkul1->sks='4';
        // $this->matkul1->kode='011BD';

        // $this->load->model('matakuliah_model', 'matkul2');
        // $this->matkul2->nama='UI/UX';
        // $this->matkul2->sks='4';
        // $this->matkul2->kode='011IX';

        // $this->load->model('matakuliah_model', 'matkul3');
        // $this->matkul3->nama='Statistika';
        // $this->matkul3->sks='2';
        // $this->matkul3->kode='011ST';

        // $list_matakuliah =[$this->matkul1, $this->matkul2, $this->matkul3];
        // $data['list_matakuliah'] = $list_matakuliah;
        // $this->load->view('layouts/header');
        // $this->load->view('mahasiswa/matakuliah', $data);
        // $this->load->view('layouts/footer');
    }
}
?>