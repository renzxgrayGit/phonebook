<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {

	function index()
	{
		$this->load->model("Contact");
		$data['contacts'] = $this->Contact->get_contacts();
		$this->load->view('index', $data);
	}

	function new()
	{
		$this->load->view('create');
	}

	function create()
	{
		$this->load->library('form_validation');

		// Set validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('contact_number', 'Contact Number', 'trim|required');
	
		if ($this->form_validation->run() === FALSE) 
		{
			// Validation failed, reload the create form with validation errors
			$this->load->view('create');
		} 
		else 
		{
			// Validation succeeded, proceed with creating the contact
			$this->load->model('Contact');
			date_default_timezone_set('Asia/Manila');

			$data = array(
				'name' => $this->input->post('name'),
				'contact_number' => $this->input->post('contact_number'),
				'action' => ' ',
				'created_at' => date('Y-m-d h:i:a'),
				'updated_at' => date('Y-m-d h:i:a') );

			$this->Contact->create_contact($data);
			redirect('contacts');
		}

 	}

	function show($id)
	{
		$this->load->model('Contact');
		$data['contacts'] = $this->Contact->get_contact_by_id($id);
		$this->load->view('view_contact', $data);
	}

	function edit($id)
	{
		$this->load->model('Contact');
		$data['contact'] = $this->Contact->get_contact_by_id($id);
		$this->load->view('edit_contact', $data);
	}

	function update($id)
	{
		$this->load->library('form_validation');

		// Set validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('contact_number', 'Contact Number', 'trim|required');

		if ($this->form_validation->run() == FALSE) 
		{
			// Validation failed, reload the edit form with validation errors
			$this->load->model('Contact');
			$data['contact'] = $this->Contact->get_contact_by_id($id);
			$this->load->view('edit_contact', $data);
		} 
		else 
		{
			// Validation succeeded, proceed with updating the contact
			$this->load->model('Contact');
			date_default_timezone_set('Asia/Manila');

			$data = array(
				'name' => $this->input->post('name'),
				'contact_number' => $this->input->post('contact_number'),
				'updated_at' => date('Y-m-d h:i:a'));

			$this->Contact->update_contact($id, $data);
			redirect('contacts');
		}
	}

	function delete($id)
	{
		$this->load->model('Contact');
		$this->Contact->delete_contact($id);
		redirect('contacts');
	}
}
