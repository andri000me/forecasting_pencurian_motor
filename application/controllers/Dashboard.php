<?php
class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data = array(
            'title' => "Dashboard Admin"
        );
        //$data['log'] = $this->db->get('user', array('username' => $this->session->userdata('username')))->result();
        $this->template->load('template', 'backend/v_dashboard', $data);
    }
}
