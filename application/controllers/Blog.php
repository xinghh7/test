<?php
class Blog extends CI_Controller {

	private $title = "Sun's blog";
	private $sayhi = "欢迎来到我的博客，希望你每天都能沐浴阳光！o(∩_∩)o ";

    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
        $this->load->helper('url_helper');
    }

    public function index()
	{
	    $data['title'] = $this->title;
	    $data['sayhi'] = $this->sayhi;
	    $data['curIndex'] = "1";

	    $this->load->view('templates/blog/header', $data);
	    $this->load->view('blog/index', $data);
	    $this->load->view('templates/blog/footer');
	}

    public function words()
	{
	    $data['title'] = $this->title;
	    $data['sayhi'] = $this->sayhi;
	    $data['curIndex'] = "6";

	    $data['all_words'] = $this->blog_model->get_words();
	    // var_dump($data['all_words']);

	    $this->load->view('templates/blog/header', $data);
	    $this->load->view('blog/words', $data);
	    $this->load->view('templates/blog/footer');
	}

    public function setWords()
	{		
		$word = strval($this->input->post('word'));
		$contact = strval($this->input->post('contact'));
		// var_dump(empty($word));exit;
		if( $word == "" || $contact == "" ) {
	        $json_arr = array(
	    		'code' => 1, 
	    		'msg' => '请填写完再按提交哦~',
	    		'data' => ''
	    	);
		} else {
			$data = array(
		        'word' => $word,
		        'contact' => $contact
		    );

	        $this->blog_model->set_words($data);

	        $json_arr = array(
	    		'code' => 0, 
	    		'msg' => '提交成功！',
	    		'data' => array(
	    			'url' => 'https://www.baidu.com/'
	    			)
	    	);
		}

	    return $this->output->set_content_type('application/json')->set_output(json_encode($json_arr));
	}
}

?>
