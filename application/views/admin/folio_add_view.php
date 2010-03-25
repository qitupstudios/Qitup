<? include 'components/header.php';?>
<? include 'components/folio_header.php';?>
<? if(isset($success)){?>
	<h3>Add Project : SUCCESS</h3>
	<p>Your Project was added successfully</p>
<? }else{?>
<h3>Add a Project</h3>
<?= form_open_multipart('/admin/folioAdd')?>
<!--<form name="add_project" action='/admin/folioAdd' method="POST">-->
	<p><label for="project">Project Name</label><input type="text" name="project" value=""/></p>
    <p><label for="title">Title</label><input type="text" name="title" value=""/></p>
    <p><label for="description">Description</label><textarea class="tinymce" name="description"></textarea></p>
    <p><label for="main_img">Main Image</label><input type='file' name="main_img"/></p>
    <p><label for="priority">Priority</label><input type="text" name="priority"/></p>
    <p><label for="billboard">Billboard HTML</label><textarea class="tinymce" name="billboard"></textarea></p>
    <p><label for="billboard_img">Billboard Thumbnail</label><input type="file" name="billboard_img" /></p>
    <p><?=form_submit('Submit','Submit Post')?></p>
</form>
<? }?>
<? include 'components/footer.php';?>