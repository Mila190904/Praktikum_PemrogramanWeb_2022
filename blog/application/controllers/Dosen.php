<?php
class Dosen extends CI_Controller{
    // Membuat method index
    public function index(){
    // Akses model dosen 
    $this->load->model('dosen_model');
    $dosen = $this->dosen_model->getAll();
    $data['dosen'] = $dosen;

    $this->load->view('layouts/header');
    $this->load->view('dosen/index', $data);
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

    public function detail($id){
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getById($id);
        $data['dosen'] = $dosen;
        $this->load->view('layouts/header');
        $this->load->view('dosen/detail', $data);
        $this->load->view('layouts/footer');
    }

    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('dosen/form');
        $this->load->view('layouts/footer');
    }

    public function save(){
        $this->load->model('dosen_model', 'dosen'); // 1
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_nidn = $this->input->post('nidn');
        $_pendidikan = $this->input->post('pendidikan');

        $data_dosen['nama'] = $_nama; // 2
        $data_dosen['gender'] = $_gender;
        $data_dosen['tmp_lahir'] = $_tmp_lahir;
        $data_dosen['tgl_lahir'] = $_tgl_lahir;
        $data_dosen['nidn'] = $_nidn;
        $data_dosen['pendidikan'] = $_pendidikan;

        if((!empty($_idedit))){
            $data_dosen['id'] = $_idedit;
            $this->dosen->update($data_dosen);
        }else{
            //  data baru
            $this->dosen->simpan($data_dosen);
        }
        redirect('dosen','refresh');
    }

    public function edit($id){
        $this->load->model('dosen_model','dosen');
        $obj_dosen = $this->dosen->getById($id);
        $data['obj_dosen'] = $obj_dosen;
        $this->load->view('layouts/header');
        $this->load->view('dosen/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function delete($id){
        $this->load->model('dosen_model','dosen');
        $data_dosen['id'] = $id;
        $this->dosen->delete($data_dosen);
        redirect('dosen','refresh');
    }

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect('/login');
        }
    }
    public function upload(){
        $_iddosen=$this->input->post("iddosen");
        $this->load->model('dosen_model','dosen');
        $dosen = $this->dosen->getById($_iddosen);
        $data['dosen'] = $dosen;

        $config['upload_path'] = './uploads/photos';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 2894;
        $config['max_widht'] = 2894;
        $config['max_height'] = 2894;
        $config['file_name'] = $dosen->id;

        // Menginisialisasi file upload (memeriksa)
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            $data['error'] = 'data sukses';
            $data['upload_data'] = $this->upload->data();
        }
        // Kirim dan render ke detail
        $this->load->view('layouts/header');
        $this->load->view('dosen/detail', $data);
        $this->load->view('layouts/footer');
    }
}
?>