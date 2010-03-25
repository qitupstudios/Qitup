<? 
//MAIN HEADER
include 'components/header.php';
?>
<a href='/folio'>Back to Folio</a>
<? foreach($project as $r){?>
		<p><strong>Project: </strong><?=$r->project?></p>
        <br />
        <p><strong>Title: </strong><?=$r->title?></p>
        <br />
        <p><strong>Description: </strong><?=$r->description?></p>
        <br />
        <p><strong>Main Image: </strong><img src="<?=$r->main_image?>"/></p>
<? }?>

<? ?>
<? 
//MAIN FOOTER
include 'components/footer.php';
?>