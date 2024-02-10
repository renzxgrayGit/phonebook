<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Model 
{

    function index()
    {
        $this->load->model('Contact');
    }

    function create_contact($data)
    {
        $sql = "INSERT INTO contacts (name, contact_number, action, created_at, updated_at) VALUES (?, ?, ?, ?, ?)";
        $data = array(
                $data['name'],
                $data['contact_number'],
                $data['action'],
                $data['created_at'],
                $data['updated_at'] );

        return $this->db->query($sql, $data);
    }

    function get_contacts()
    {
        $sql = "SELECT * FROM contacts";
        return $this->db->query($sql)->result_array();
    }
	
    function get_contact_by_id($id)
    {
        $sql = "SELECT * FROM contacts WHERE id = ?";
        return $this->db->query($sql, $id)->row_array();
    }

    function update_contact($id, $data)
    {
        $sql = "UPDATE contacts SET name = ?, contact_number = ? WHERE id = ?";
        return $this->db->query($sql, array($data['name'], $data['contact_number'], $id));
    }

    function delete_contact($id)
    {
        $sql = "DELETE FROM contacts WHERE id = ?";
        return $this->db->query($sql, array($id));
    }
}
