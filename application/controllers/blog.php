<?
class Blog extends Controller{

	function index(){
		$data['blogs'] = $this->blog_model->getInitBlogs();
		$this->load->view('blog_view',$data);
	}
	
	function item(){
		$blog_id = $this->uri->segment(3, 0);
		$data['blog'] = $this->blog_model->getItemPage($blog_id);	
		$this->load->view('blog_item_view',$data);
	}
	
}