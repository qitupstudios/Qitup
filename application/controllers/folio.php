<?
class Folio extends Controller{
	
	function index(){
		$data['projects'] = $this->folio_model->getHomePage();
		$this->load->view('folio_view',$data);
	}
	
	function item(){
		$project_id = $this->uri->segment(3, 0);
		$data['project'] = $this->folio_model->getItemPage($project_id);	
		$this->load->view('folio_item_view',$data);
	}
	
}