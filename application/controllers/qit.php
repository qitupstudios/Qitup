<?
class Qit extends Controller {
	
	function index(){
		$data['blogs'] = $this->blog_model->getHomeBlogs();
		$this->load->view('home_view',$data);
	}
	
}
?>