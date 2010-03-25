<? 
//MAIN HEADER
include 'components/header.php';
//MAIN BODY CONTENT
?>
<div id="blog_container">
    
    <div id="main_blog_area">
    <h1>Blog</h1>
    <? foreach ($blogs as $r) :?>
    	<div class="hp_blog_date">
            <p class='month'><?=date('M',strtotime($r->modified))?></p>
            <p class='date'><?=date('d',strtotime($r->modified))?></p>
        </div>
        <div class="hp_blog">
            <h3><a href="/blog/item/<?=$r->id?>"><?=$r->title?></a></h3>

            <p><?=$r->body?></p>
        </div>
        <div class="clear"></div>
		<hr />
    <? endforeach?>
    </div>
    <div id='blog_sidebar'>
    <h3>Archive</h3>
    <ul>
        <li><strong>2010</strong></li>
        <li><a href="#">Jan(4)</a></li>
        <li><a href="#">Feb(2)</a></li>
        <li><a href="#">Mar(5)</a></li>
        <li><a href="#">Apr(7)</a></li>
    </ul>
    </div>
    <div class="clear"></div>
</div>

<? 
//MAIN FOOTER
include 'components/footer.php';
?>