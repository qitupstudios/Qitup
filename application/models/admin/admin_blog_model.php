<?
class Admin_blog_model extends Model {

	function insertNewBlog($theData){
		$query = $this->db->query('INSERT into blog (title, author, body) Values("'.$theData['title'].'", "'.$theData['author'].'", "'.$theData['post'].'")');
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