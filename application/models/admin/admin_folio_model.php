<?
class Admin_folio_model extends Model {

	function insertNewProject($theData){
		$config['upload_path'] = realpath(APPPATH . '../images/folio/main');
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000';
		
		$error = array();
		//FIRST IMAGE UPLOAD
		$this->load->library('upload', $config);
		$data = array();
		if ( (! $this->upload->do_upload('main_img'))){
			$error = $this->upload->display_errors();
		}else{
			$data = array('upload_data' => $this->upload->data());		
			$main_img = mysql_real_escape_string('/images/folio/main/'.$data['upload_data']['file_name']);
		}
		//SECOND IMAGE UPLOAD
		$config2['upload_path'] = realpath(APPPATH . '../images/folio/billboard');
		$config2['allowed_types'] = 'gif|jpg|png';
		$config2['max_size']	= '2000';
		$this->upload->initialize($config2);
		if ( (! $this->upload->do_upload('billboard_img'))){
			$error = array('error' => $this->upload->display_errors());
			print_r($error);$error = $this->upload->display_errors();
		}else{
			$data = array('upload_data' => $this->upload->data());		
			$billboard_img = mysql_real_escape_string('/images/folio/billboard/'.$data['upload_data']['file_name']);
		}
		
		$query = $this->db->query('INSERT into folio( project, title, description, main_image, priority, billboard, billboard_thumb) Values("'.$theData['project'].'", "'.$theData['title'].'", "'.$theData['description'].'" ,"'.$main_img.'", "'.$theData['priority'].'", "'.$theData['billboard'].'" ,"'.$billboard_img.'")');
		if($query){
			$theData['success'] = 'yes';
			return $theData;
		}else{
			$theData['success'] = 'no';
			return $theData;
		}
	}
	
	function getProjects(){
		$query = $this->db->query('SELECT * FROM folio ORDER BY modified desc');	
		foreach($query->result() as $row){
				$data[] = $row;
		}
		return $data;
	}
	
	function getProjectItem($id){
		$query = $this->db->query('SELECT * FROM folio WHERE id='.$id);	
		foreach($query->result() as $row){
				$data[] = $row;
		}
		return $data;
	}
	
	function updateProject($data){
		$query = $this->db->query("UPDATE folio SET project='".$data['project']."' , title='".$data['title']."', description='".$data['description']."', priority='".$data['priority']."', billboard='".$data['billboard']."' WHERE id='".$data['id']."'");
		if($query){
			$theData['success'] = 'yes';
			return $theData;
		}else{
			$theData['success'] = 'no';
			return $theData;
		}
	}
}
?>