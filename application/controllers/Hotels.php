<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotels extends CI_Controller {


	public function createhotel()
	{

        $this->form_validation->set_rules('hotel_name' , 'Hotel Name' , 'required');
        $this->form_validation->set_rules('hotel_desc' , 'Hotel Description' , 'required');
        $this->form_validation->set_rules('hotel_location' , 'Hotel Location' , 'required');


        if ($this->form_validation->run() == false){

            $this->load->view('templates/header');
            $this->load->view('addhotels/createhotel');
            $this->load->view('templates/footer');
        }

        else{
            $this->hotels_model->create_hotel();
        }
	}

	public function createcomment()
	{

        $this->form_validation->set_rules('reviews' , 'Reviews' , 'required');
        $this->form_validation->set_rules('user_name' , 'User Name' , 'required');
        $this->form_validation->set_rules('user_email' , 'User Description' , 'required');


        if ($this->form_validation->run() == false){

            $this->load->view('templates/header');
            $this->load->view('locations/view');
            $this->load->view('templates/footer');
        }

        else{
            $this->hotels_model->hotel_reviews();
        }
	}


}
