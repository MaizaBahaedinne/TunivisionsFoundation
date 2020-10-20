<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model {

        function newsListing()
            {
                 $this->db->select('*');
                $this->db->from('tbl_news as BaseTbl');

                $this->db->order_by('BaseTbl.createdDtm', 'DESC');
                $query = $this->db->get();

                $result = $query->result();
                return $result;
            }



}

?>
