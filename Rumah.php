<?php 

/**
 * 
 */
class Rumah extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Rumah_model');
		$this->load->library('form_validation');
        is_logged_in();
	}


	public function index()
	{
		$data['title'] = 'Daftar Rumah';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['rumah'] = $this->Rumah_model->getAllRumah();

		    
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('nama_file', 'nama_file', 'required');
        $this->form_validation->set_rules('tipe_rumah', 'tipe_rumah', 'required');
        $this->form_validation->set_rules('luas_tanah', 'luas_tanah', 'required');
         $this->form_validation->set_rules('luas_bangunan', 'luas_bangunan', 'required');
        $this->form_validation->set_rules('lantai', 'lantai', 'required');
        $this->form_validation->set_rules('listrik', 'listrik', 'required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('pengembang', 'pengembang', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('rumah/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Rumah_model->tambahDataRumah();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('rumah');
        }


	}


   	public function hapus($id)
    {
        $this->Rumah_model->hapusDataRumah($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('rumah');
    }

    public function ubah($id = 0)
    {

    	$data['title'] = 'Daftar Rumah';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['rumah'] = $this->Rumah_model->getRumahId($id);

		    
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('nama_file', 'nama_file', 'required');
        $this->form_validation->set_rules('tipe_rumah', 'tipe_rumah', 'required');
        $this->form_validation->set_rules('luas_tanah', 'luas_tanah', 'required');
         $this->form_validation->set_rules('luas_bangunan', 'luas_bangunan', 'required');
        $this->form_validation->set_rules('lantai', 'lantai', 'required');
        $this->form_validation->set_rules('listrik', 'listrik', 'required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('pengembang', 'pengembang', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('rumah/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Rumah_model->ubahDataRumah();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('rumah');
        }

    }

}

?>