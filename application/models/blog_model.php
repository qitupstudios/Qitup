<?
class Blog_model extends Model {
	
	function getInitBlogs(){
		$query = $this->db->query('SELECT * FROM blog ORDER BY modified desc LIMIT 5');
		
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
					$data[] = $row;
			}
			return $data;
		}
	}
	
	function getHomeBlogs(){
		$query = $this->db->query('SELECT * FROM blog ORDER BY modified desc LIMIT 3');
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
	}
	
	function getItemPage($theId){
		$query = $this->db->query('SELECT * FROM blog WHERE id='.$theId);
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
	}
}
?>