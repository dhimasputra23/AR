<?php 

/**
 * 
 */
class Rumah_model extends CI_Model
{
	
	public function getAllRumah()
	{

        $rumah = $this->db->get('tb_rumah')->result_array();

        return $rumah;
	}

public function upload()
{
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['remove_space'] = TRUE;
    
        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }else{
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
}


    public function tambahDataRumah($upload)
    {
        $data = [
            "deskripsi" => $this->input->post('deskripsi', true),
            "nama_file" => $upload['file']['file_name'],
            "tipe_rumah" => $this->input->post('tipe_rumah', true),
            "luas_tanah" => $this->input->post('luas_tanah', true),
            "luas_bangunan" => $this->input->post('luas_bangunan', true),
            "lantai" => $this->input->post('lantai', true),
            "listrik" => $this->input->post('listrik', true),
            "tahun" => $this->input->post('tahun', true),
            "harga" => $this->input->post('harga', true),
            "pengembang" => $this->input->post('pengembang', true),
        ];

        $this->db->insert('tb_rumah', $data);
    }


     public function hapusDataRumah($id)
    {
        // $this->db->where('id',$id);

        $this->db->delete('tb_rumah', ['id' => $id]);
    }

        public function getRumahId($id)
    {
        $this->db->select('*');
        $this->db->from('tb_rumah');
        $this->db->where('id', $id);
        $rumah = $this->db->get()->row_array();
        return $rumah;
    }


    public function ubahDataRumah()
    {
         $data = [
            "deskripsi" => $this->input->post('deskripsi', true),
            "nama_file" => $this->input->post('nama_file', true),
            "tipe_rumah" => $this->input->post('tipe_rumah', true),
            "luas_tanah" => $this->input->post('luas_tanah', true),
            "luas_bangunan" => $this->input->post('luas_bangunan', true),
            "lantai" => $this->input->post('lantai', true),
            "listrik" => $this->input->post('listrik', true),
            "tahun" => $this->input->post('tahun', true),
            "harga" => $this->input->post('harga', true),
            "pengembang" => $this->input->post('pengembang', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_rumah', $data);
    }
}

?>