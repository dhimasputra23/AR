<?php


/**
 * 
 */
class Fasilitas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Fasilitas_model');
		$this->load->library('form_validation');
        is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Daftar Fasilitas';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['fasilitas'] = $this->Fasilitas_model->getAllFasilitas();

		    
		$this->form_validation->set_rules('tipe_rumah', 'tipe_rumah', 'required');
        $this->form_validation->set_rules('fasilitas', 'fasilitas', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('fasilitas/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Fasilitas_model->tambahDataFasilitas();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('fasilitas');
        }


	}


	public function hapus($id)
    {
        $this->Fasilitas_model->hapusDataFasilitas($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('fasilitas');
    }

    public function ubah($id = 0)
    {

    	$data['title'] = 'Daftar Fasilitas';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['fasilitas'] = $this->Fasilitas_model->getFasilitasId($id);

		    
		$this->form_validation->set_rules('tipe_rumah', 'tipe_rumah', 'required');
        $this->form_validation->set_rules('fasilitas', 'fasilitas', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('fasilitas/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Fasilitas_model->ubahDataFasilitas();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('fasilitas');
        }

    }

}

?>