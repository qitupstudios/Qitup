<? include 'components/header.php';?>
<? if(isset($success)):?>
	<? if($success == 'yes'):?>
    	<h3>Your Blog Post was Posted Successfully</h3>
    <? else:?>
    	<h3>Sorry, there was an error with your entry. Please try again.</h3>
    <? endif;?>
<? endif;?>
<h2>Add a blog</h2>
<!--
<?=form_open('admin/blogAdd')?>
	<p><label for="title">Title</label><input type="text" name="title" value=""/></p>
    <p><label for="author">Author</label><input type="text" name="author" value=""/></p>
    <p><label for="blog_post">Post</label><textarea name="blog_post"></textarea></p>
    <p><?=form_submit('submit','Submit Post')?></p>
<?=form_close();?>
-->
<? include 'components/footer.php';?>