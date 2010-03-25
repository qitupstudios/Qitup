<?
class Folio_model extends Model {

	function getHomePage(){
		$query = $this->db->query('SELECT * FROM folio ORDER BY priority desc');
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
	}
	
	function getItemPage($theId){
		$query = $this->db->query('SELECT * FROM folio WHERE id='.$theId);
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
	}
}
?>