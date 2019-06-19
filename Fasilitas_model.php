<?php 

/**
 * 
 */
class Fasilitas_model extends CI_Model
{
	
	public function getAllFasilitas()
	{

        $fasilitas = $this->db->get('tb_fasilitas')->result_array();

        return $fasilitas;
	}


	public function tambahDataFasilitas()
    {
        $data = [

            "tipe_rumah" => $this->input->post('tipe_rumah', true),
            "fasilitas" => $this->input->post('fasilitas', true),

        ];

        $this->db->insert('tb_fasilitas', $data);
    }

 	public function hapusDataFasilitas($id)
    {
        // $this->db->where('id',$id);

        $this->db->delete('tb_fasilitas', ['id_fas' => $id]);
    }

        public function getFasilitasId($id)
    {
        $this->db->select('*');
        $this->db->from('tb_fasilitas');
        $this->db->where('id_fas', $id);
        $fasilitas = $this->db->get()->row_array();
        return $fasilitas;
    }

    public function ubahDataFasilitas()
    {
         $data = [

            "tipe_rumah" => $this->input->post('tipe_rumah', true),
            "fasilitas" => $this->input->post('fasilitas', true),

        ];

        $this->db->where('id_fas', $this->input->post('id_fas'));
        $this->db->update('tb_fasilitas', $data);
    }




}

?>