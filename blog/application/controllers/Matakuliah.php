<?php
class Matakuliah extends CI_Controller{
    // Membuat method index
    public function index(){
        // Akses model matakuliah
        $this->load->model('matakuliah_model');
        $matakuliah = $this->matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;

        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
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

    public function detail($id){
        $this->load->model('matakuliah_model');
        $matakuliah = $this->matakuliah_model->getById($id);
        $data['matakuliah'] = $matakuliah;
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/detail', $data);
        $this->load->view('layouts/footer');
    }

    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/form');
        $this->load->view('layouts/footer');
    }

    public function save(){
        $this->load->model('matakuliah_model', 'matakuliah'); // 1
        $_nama = $this->input->post('nama');
        $_sks = $this->input->post('sks');
        $_kode = $this->input->post('kode');

        $data_matakuliah['nama'] = $_nama; // 2
        $data_matakuliah['sks'] = $_sks;
        $data_matakuliah['kode'] = $_kode;

        if((!empty($_idedit))){
            $data_matakuliah['id'] = $_idedit;
            $this->matakuliah->update($data_matakuliah);
        }else{

            $this->matakuliah->simpan($data_matakuliah);
        }
        redirect('matakuliah','refresh');
    }

    public function edit($id){
        $this->load->model('matakuliah_model','matakuliah');
        $obj_matakuliah = $this->matakuliah->getById($id);
        $data['obj_matakuliah'] = $obj_matakuliah;
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function delete($id){
        $this->load->model('matakuliah_model','matakuliah');
        $data_matakuliah['id'] = $id;
        $this->matakuliah->delete($data_matakuliah);
        redirect('matakuliah','refresh');
    }
    
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('/login');
        }
    }
}
?>