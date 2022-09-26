<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class location_model extends CI_Model 
{
    public function __construct(){
        $this->load->database();
    }


    public function mumbai_hotel(){
        return $this->db->select('*')
            ->from('hotels')
            ->where('hotel_location' , 'mumbai')
            ->get()
            ->result();
    }
    

    public function delhi_hotel(){
        return $this->db->select('*')
        ->from('hotels')
        ->where('hotel_location' , 'delhi')
        ->get()
        ->result();
    }
    

    public function pune_hotel(){
        return $this->db->select('*')
        ->from('hotels')
        ->where('hotel_location' , 'pune')
        ->get()
        ->result();
    }
    

    public function bangalore_hotel(){
        return $this->db->select('*')
        ->from('hotels')
        ->where('hotel_location' , 'bangalore')
        ->get()
        ->result();
    }
    

    public function hyderabad_hotel(){
        return $this->db->select('*')
        ->from('hotels')
        ->where('hotel_location' , 'hyderabad')
        ->get()
        ->result();
    }
    

    public function manali_hotel(){
        return $this->db->select('*')
        ->from('hotels')
        ->where('hotel_location' , 'manali')
        ->get()
        ->result();
    }
    

    public function goa_hotel(){
        return $this->db->select('*')
        ->from('hotels')
        ->where('hotel_location' , 'goa')
        ->get()
        ->result();
    }
}