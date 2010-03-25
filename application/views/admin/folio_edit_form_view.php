<? include 'components/header.php';?>
<? include 'components/folio_header.php';?>
<h3>Edit Project</h3>
<form action="/admin/folio_edit_submit" method="POST">
<? foreach($project as $r){?>
	<input type="hidden" name="id" value="<?=$r->id?>"/>
	<p>
		<label for='project'>Project</label>
		<input type="text" name="project" value="<?=$r->project?>"/>
    </p>
    <p>
	    <label for='title'>Title</label>
    	<input type="text" name="title" value="<?=$r->title?>"/>
    </p>
    <p>
		<label for='description'>Description</label>
    	<textarea class="tinymce" name="description" cols="70" rows="25"><?=$r->description?></textarea>
   	</p>
    <p>
	    <img src="<?=$r->main_image?>"/>
    </p>
    <p>
	    <label for="priority">Priority</label>
		<input type="text" name="priority" value="<?=$r->priority?>"/>
    </p>
    <p>
	    <label for="billboard">Billboard</label>
    	<textarea class="tinymce" name="billboard" cols="70" rows="25"><?=$r->billboard?></textarea>
    </p>
    <p>
		<img src="<?=$r->billboard_thumb?>"/>
    </p>
    <input type="submit" name="submit" value="Submit"/>
<? }?>
</form>
<? include 'components/footer.php';?>