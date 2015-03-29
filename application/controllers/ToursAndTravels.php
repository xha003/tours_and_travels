<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class ToursAndTravels extends CI_Controller {

		public function index()
		{
	    $this->load->helper('url');
	  	$this->load->view('tours_index');
		}

		public function trekking_with_us()
		{
			$this->load->helper('url');
			$this->load->view('trekking_with_us');
		}

		public function what_to_bring()
		{
			$this->load->helper('url');
			$this->load->view('what_to_bring');
		}

		public function contact()
		{
			$this->load->helper('url');
			$this->load->view('contact');
		}

		public function gallery()
		{
			$this->load->helper('url');
			$this->load->view('gallery');
		}

    public function other_services()
		{
			$this->load->helper('url');
			$this->load->view('other_services');
		}
	}
?>
