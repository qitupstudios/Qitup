<?
class Admin extends Controller{
	
	function index(){
		$this->load->view('admin/home_view');
	}
	
	function blog(){
		$this->load->view('admin/blog_home_view');
	}
	
	function blogAdd(){
		$data['title']= $this->input->post('title');
		$data['author'] = $this->input->post('author');
		$data['post'] = $this->input->post('blog_post');
		$theData = $this->admin_blog_model->insertNewBlog($data);
		$data['success'] = $theData['success'];
		$this->load->view('admin/blog_home_view',$data);
	}
	
	function folio(){
		$this->load->view('admin/folio_home_view');	
	}

	function folio_add(){
		$this->load->view('admin/folio_add_view');
	}
	
	function folio_edit(){
		$data['projects'] = $this->admin_folio_model->getProjects();
		$this->load->view('admin/folio_edit_view',$data);
	}
	
	function folioEdit(){
		$project_id = $this->uri->segment(3, 0);
		$theData['project'] = $this->admin_folio_model->getProjectItem($project_id);
		$this->load->view('admin/folio_edit_form_view',$theData);	
	}
	
	function folio_edit_submit(){
		if($this->input->post('submit')){
			$data['project']= mysql_real_escape_string($this->input->post('project'));
			$data['title']= mysql_real_escape_string($this->input->post('title'));
			$data['description']= mysql_real_escape_string($this->input->post('description'));
			$data['priority']= mysql_real_escape_string($this->input->post('priority'));
			$data['billboard']= mysql_real_escape_string($this->input->post('billboard'));
			$data['id'] = $this->input->post('id');
			$theData = $this->admin_folio_model->updateProject($data);
			$data['success'] = $theData['success'];
			$this->load->view('admin/folio_edit_view',$data);
		}else{
			echo 'error';	
		}
	}
	
	function folioAdd(){
		if($this->input->post('Submit')){
			$data['project']= mysql_real_escape_string($this->input->post('project'));
			$data['title']= mysql_real_escape_string($this->input->post('title'));
			$data['description']= mysql_real_escape_string($this->input->post('description'));
			$data['priority']= mysql_real_escape_string($this->input->post('priority'));
			$data['billboard']= mysql_real_escape_string($this->input->post('billboard'));
			$theData = $this->admin_folio_model->insertNewProject($data);
			$data['success'] = $theData['success'];
			$this->load->view('admin/folio_add_view',$data);
		}
	}
	
	function folio_add_media(){
		$this->load->view('admin/folio_add_media_view');
	}
	
}