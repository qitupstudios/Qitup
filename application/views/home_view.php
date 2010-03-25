<? 
//MAIN HEADER
include 'components/header.php';
//MAIN BODY CONTENT
?>
<div id="hp_slider">
	<div id="hp_slider_wrapper">
    	<div class="hp_slider_item">
        	<img src="/images/sample/fp_slider.jpg" alt="test"/>
        </div>
        <div class="hp_slider_item">
        	<img src="/images/sample/fp_slider.jpg" alt="test"/>
        </div>
        <div class="hp_slider_item">
        	<img src="/images/sample/fp_slider.jpg" alt="test"/>
        </div>
        <div class="hp_slider_item">
        	<img src="/images/sample/fp_slider.jpg" alt="test"/>
        </div>
    </div>
    <div id="hp_slider_select_bar">
    	<div class="hp_selector selected" data-count='0'></div>
        <div class="hp_selector" data-count='1'></div>
        <div class="hp_selector" data-count='2'></div>
        <div class="hp_selector" data-count='3'></div>
    </div>
</div>
<div id="hp_pitch">
	<div id="hp_tagline">
    	<h2>Repaving the Roadmap for Interactive Marketing and Online Video Distribution</h2>
    </div>
    <div id="hp_description">
    	<div id="hp_desc_header"></div>
        <div id="hp_desc_body">
	    	<p>We approach every job with one simple but often overlooked goal; to deliver each product Quickly and with the utmost Quality. From Concept to Viral Marketing and Distribution, Q ITUP Studios handles all aspects of the campaign in-house.</p>
        </div>
        <div id="hp_desc_footer"></div>
    </div>
    <div class="clear"></div>
</div>
<div id="hp_social">
    <div id="hp_blog">
    	<? $theCounter = 0?>
        <? foreach ($blogs as $r) :?>
        <? $theCounter ++;?>
        	<div class="hp_blog_date">
            	<p class='month'><?=date('M',strtotime($r->modified))?></p>
                <p class='date'><?=date('d',strtotime($r->modified))?></p>
            </div>
            <div class="hp_blog">
                <h3><a href="/blog/item/<?=$r->id?>"><?=$r->title?></a></h3>
                <p><?=$r->body?></p>
            </div>
            <div class="clear"></div>
         <? if($theCounter != 3){?>
            <hr />
         <? }else{?>
         <br /><br />
         <? }?>
            
        <? endforeach?>
    </div>
    <div id="hp_twitter">
    	<div id="hp_twitter_body">
        	<h2>Tweet!</h2>
            <br />
            <div class="hp_tweet">
            	<p>We're going to start off the New Year on the right foot...</p>
            </div>
            <hr />
            <div class="hp_tweet">
            	<p>Happy Holidays from everyone here at Q ITUP Studios...</p>
            </div>
            <hr />
            <div class="hp_tweet">
            	<p>We're launching our beta site soon. Stay tuned for more details...</p>
            </div>
        </div>
        <div id="hp_twitter_footer">
        
        </div>
    </div>
    <div class="clear"></div>	
</div>
<?
//MAIN FOOTER
include 'components/footer.php';
?>