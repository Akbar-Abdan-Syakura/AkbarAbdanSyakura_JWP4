<?php
class Tindakan_model extends CI_Model{

    public $table = "tabel_tindakan";

    public function __construct(){
        parent::__construct();
    }

    public function getData(){
            return $this->db->get($this->table)->result_array();
        }
    
        public function insert($data){
            //akan digenerate DML insert into oleh ci
            return $this->db->insert($this->table,$data);
        }
        public function delete($id){
            $this->db->where('no_registrasi',$id);
            $this->db->delete($this->table);
        }

        public function update($id,$data){
            //ci akan men-generate statement where 
            $this->db->where('no_registrasi',$id);
            //ci mengupdate sesuai where diatas
            return $this->db->update($this->table,$data);
        }

        public function find_by_id($id){
            return $this->db->get_where($this->table,['no_registrasi' => $id])->row_array();
        }
}