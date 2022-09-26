<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hotels_model extends CI_Model 
{
    public function __construct(){
        $this->load->database();
    }
  

    public function create_hotel(){
        
        $config = array(
            'upload_path' => "../img/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "768",
            'max_width' => "1024"
            );
            $this->load->library('upload', $config);


        $hotel_name = $this->input->post('hotel_name');
        $hotel_img = $this->input->post('hotel_img');
        $hotel_desc = $this->input->post('hotel_desc');
        $hotel_location = $this->input->post('hotel_location');
        $slug = url_title($this->input->post('hotel_name'));

        $data = array('upload_data' => $this->upload->data());
        $image_name=($data['upload_data']['file_name']);
        $resume=base_url('../img/').$image_name;

        $data = array(
            'hotel_name' =>  $hotel_name ,
            'slug' =>  $slug ,
            'hotel_image' =>  $hotel_img ,
            'hotel_desc' =>  $hotel_desc ,
            'hotel_location' =>  $hotel_location 
        );

        return $this->db->insert('hotels' , $data);
    }

    public function hotel_reviews(){

        $reviews = $this->input->post('reviews');
        $user_name = $this->input->post('user_name');
        $user_email = $this->input->post('user_email');
        $user_phone = $this->input->post('user_phone');
        $post_id = $this->input->post('post_id');

        $data = array(
            'reviews' =>  $reviews ,
            'user_name' =>  $user_name ,
            'user_email' =>  $user_email ,
            'user_phone' =>  $user_phone ,
            'post_id' =>  $post_id 
        );

        return $this->db->insert('reviews' , $data);
    }



    public function get_hotels($slug = 'False'){
        
        $query = $this->db->get_where('hotels', array('slug' => $slug));
        return $query->row_array();
    }

    public function get_comments(){
        
            

        return $query = $this->db->select('*')
        ->from('reviews')
        // ->where('post_id' , '2')
        ->get()
        ->result();
    }





}

