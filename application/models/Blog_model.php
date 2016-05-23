<?php
class Blog_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

	public function set_words($data)
	{
	    return $this->db->insert('words', $data);
	}

    public function get_words($word = FALSE)
	{
	    if ($word === FALSE)
	    {
	        $query = $this->db->get('words');
	        return $query->result_array();
	    }

	    $query = $this->db->get_where('words', array('word' => $word));
	    return $query->row_array();
	}
}

?>