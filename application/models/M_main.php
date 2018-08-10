<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_main extends CI_Model{

    // login
    function proseslogin($email,$pass)
    {
        $this->db->where('email',$email);
        $this->db->where('password',$pass);
        return $this->db->get('users')->row();
    }

    // dashboard
    function grafik_news(){
        $query = $this->db->query("SELECT news.category_id,categories.category,COUNT(news.id) AS id
                                    FROM news 
                                    INNER JOIN categories ON categories.id = news.category_id
                                    Group By category_id");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    //akun
    function read_akun(){
        $sql = $this->db->query("SELECT * FROM users");
        return $sql;
    }

    function create_akun($data){
        $this->db->insert('users',$data);
    }

    function edit_akun($id){
		$this->db->where("id",$id);
		return $this->db->get('users');
    }
    
    function update_akun($id,$data){
		$this->db->where("id",$id);
		$this->db->update('users',$data);
    }
    
    function delete_akun($id){
		$this->db->where("id",$id);
		$query = $this->db->get('users');
        $row = $query->row();
        unlink("$row->picture");
		$this->db->delete('users', array('id' => $id));
    }

    //categories
    function create_categories(){
        $this->db->insert('categories',array("category"=>""));
        return $this->db->insert_id();
    }
    function read_categories(){
        $this->db->order_by("id","desc");
        $query=$this->db->get("categories");
        return $query->result_array();
    }
    function update_categories($id,$value,$modul){
        $this->db->where(array("id"=>$id));
        $this->db->update("categories",array($modul=>$value));
    }
    function delete_categories($id){
        $this->db->where("id",$id);
        $this->db->delete("categories");
    }

    //galleries
    function read_galleries(){
        $sql = $this->db->query("SELECT * FROM galleries");
        return $sql;
    }

    function create_galleries($data){
        $this->db->insert('galleries',$data);
    }

    function edit_galleries($id){
		$this->db->where("id",$id);
		return $this->db->get('galleries');
    }
    
    function update_galleries($id,$data){
		$this->db->where("id",$id);
		$this->db->update('galleries',$data);
    }
    
    function delete_galleries($id){
        $this->db->where("id",$id);
        $query = $this->db->get('galleries');
        $row = $query->row();
        unlink("$row->picture");
		$this->db->delete('galleries', array('id' => $id));
    }
    
    //karya
    function read_karya(){
        $sql = $this->db->query("SELECT karya.id,karya.title,karya.description,karya.picture,karya.team,categories.category
                                FROM karya
                                INNER JOIN categories ON categories.id = karya.category_id");
        return $sql;
    }

    function read_categories_karya(){
        $sql = $this->db->query("SELECT * FROM categories");
        return $sql;
    }

    function create_karya($data){
        $this->db->insert('karya',$data);
    }

    function edit_karya($id){
		$this->db->where("id",$id);
		return $this->db->get('karya');
    }
    
    function update_karya($id,$data){
		$this->db->where("id",$id);
		$this->db->update('karya',$data);
    }
    
    function delete_karya($id){
		$this->db->where("id",$id);
		$query = $this->db->get('karya');
        $row = $query->row();
        unlink("$row->picture");
		$this->db->delete('karya', array('id' => $id));
    }
    
    //media
    function read_media(){
        $sql = $this->db->query("SELECT * FROM media");
        return $sql;
    }

    function create_media($data){
        $this->db->insert('media',$data);
    }

    function edit_media($id){
		$this->db->where("id",$id);
		return $this->db->get('media');
    }
    
    function update_media($id,$data){
		$this->db->where("id",$id);
		$this->db->update('media',$data);
    }
    
    function delete_media($id){
		$this->db->where("id",$id);
		$query = $this->db->get('media');
        $row = $query->row();
        unlink("$row->picture");
		$this->db->delete('media', array('id' => $id));
    }
    
    //news
    function read_news(){
        $sql = $this->db->query("SELECT news.id,news.judul,news.description,news.picture,news.date,categories.category,users.nama
                                FROM news
                                INNER JOIN categories ON categories.id = news.category_id 
                                INNER JOIN users ON users.id = news.user_id");
        return $sql;
    }

    function read_categories_news(){
        $sql = $this->db->query("SELECT * FROM categories");
        return $sql;
    }

    function create_news($data){
        $this->db->insert('news',$data);
    }

    function edit_news($id){
		$this->db->where("id",$id);
		return $this->db->get('news');
    }
    
    function update_news($id,$data){
		$this->db->where("id",$id);
		$this->db->update('news',$data);
    }
    
    function delete_news($id){
		$this->db->where("id",$id);
		$query = $this->db->get('news');
        $row = $query->row();
        unlink("$row->picture");
		$this->db->delete('news', array('id' => $id));
	}
}
?>