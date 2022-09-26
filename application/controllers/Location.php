<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {


	public function mumbai()
	{
        $data['title'] = 'Mumbai';
        $data['hotels'] = $this->location_model->mumbai_hotel();

        $this->load->view('templates/header');
        $this->load->view('locations/mumbai' , $data);
        $this->load->view('templates/footer');
    }

	public function delhi()
	{
        $data['title'] = 'Delhi';
        $data['hotels'] = $this->location_model->delhi_hotel();
        $this->load->view('templates/header');
        $this->load->view('locations/delhi', $data);
        $this->load->view('templates/footer');
    }

	public function pune()
	{
        $data['title'] = 'Pune';
        $data['hotels'] = $this->location_model->pune_hotel();
        $this->load->view('templates/header');
        $this->load->view('locations/pune', $data);
        $this->load->view('templates/footer');
    }

	public function bangalore()
	{
        $data['title'] = 'Bangalore';
        $data['hotels'] = $this->location_model->bangalore_hotel();
        $this->load->view('templates/header');
        $this->load->view('locations/bangalore', $data);
        $this->load->view('templates/footer');
    }

	public function hyderabad()
	{
        $data['title'] = 'Hyderbad';
        $data['hotels'] = $this->location_model->hyderabad_hotel();
        $this->load->view('templates/header');
        $this->load->view('locations/hyderabad', $data);
        $this->load->view('templates/footer');
    }

	public function manali()
	{
        $data['title'] = 'Manali';
        $data['hotels'] = $this->location_model->manali_hotel();
        $this->load->view('templates/header');
        $this->load->view('locations/manali' , $data);
        $this->load->view('templates/footer');
    }

	public function goa()
	{
        $data['title'] = 'Goa';
        $data['hotels'] = $this->location_model->goa_hotel();
        $this->load->view('templates/header');
        $this->load->view('locations/goa' , $data);
        $this->load->view('templates/footer');
    }


    public function view($slug = NULL , $post_id = NULL ){
        $data['title'] = 'hello world';
        $data['hotel'] = $this->hotels_model->get_hotels($slug);
       
        $data['reviews'] = $this->hotels_model->get_comments();

        $this->load->view('templates/header');
        $this->load->view('locations/view' , $data);
        $this->load->view('templates/footer');
     }

    // public function viewreview($slug = NULL){
       
    //     $data['reviews'] = $this->hotels_model->hotel_reviews();

    //     $this->load->view('templates/header');
    //     $this->load->view('locations/view' , $data);
    //     $this->load->view('templates/footer');
    //  }

 




}