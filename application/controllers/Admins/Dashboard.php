<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {

        $data = array(
            'title' => 'Dashboard',
            'isi' => 'admin/dashboard'
        );

        $this->load->view('admin/layout', $data, FALSE);
        
    }

}

/* End of file Dashboard.php */

?>