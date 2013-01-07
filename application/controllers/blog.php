<?php
class Blog extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
 
    function index()
    {
        $this->load->model('Blogmodel');

        $a=10;

        $data['query'] = $this->Blogmodel->get_blog($a);

        //Load view blog
        $this->load->view('blog',$data);
    }
    function comment()
    {
    	echo 'Pham Khac Tuy';
    }
}
?>