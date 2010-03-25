<? 
//MAIN HEADER
include 'components/header.php';
?>
<a href="/blog">All Blogs -></a>
<br /><br />
<? foreach($blog as $r){?>
		<p><strong>Author: </strong><?=$r->author?></p>
        <br />
        <p><strong>Title: </strong><?=$r->title?></p>
        <br />
        <p><strong>Body: </strong><?=$r->body?></p>
        <br />
        <p><strong>Modified: </strong><?=$r->modified?></p>
<? }?>
<? 
//MAIN FOOTER
include 'components/footer.php';
?>