<? 
//MAIN HEADER
include 'components/header.php';
//MAIN BODY CONTENT
$project_array = array();
$title_array = array();
$description_array = array();
$main_image_array = array();
$billboard_array = array();
$billboard_thumb_array = array();

foreach ($projects as $r){
	$project_array[] = $r->project;
	$title_array[] = $r->title;
	$description_array[] = $r->description;
	$main_image_array[] = $r->main_image;
	$billboard_array[] = $r->billboard;
	$billboard_thumb_array[] = $r->billboard_thumb;
	
}?>
<div id="folio_slider">
	<div id="folio_main_content">
    	<div id='folio_slider_container'>
        	<div id="folio_slider_wrapper">
			<? foreach($project_array as $k=>$v){?>
                <div class="folio_slider_item">
                    <div class="folio_slider_img">
                        <img src="<?=$main_image_array[$k]?>" alt="<?=$title_array[$k]?>"/>
                    </div>
                    <div class="folio_slider_description">
                    <h3> <?=$title_array[$k]?></h3>
                    <br />
                     <?=$billboard_array[$k]?>
                    </div>
                </div>
            <? }?>
            </div>
        </div>
    </div>
    <div id="folio_slider_controls"> 
    	<div id="folio_back"><img src="/images/folio/folio_slider/folio_back.png" alt="BACK"/></div>
    	<div id="folio_control_container">
        	<div id="folio_control_wrapper" data-count='0'>
		    	<? foreach($billboard_thumb_array as $k=>$v){?>
    		    	<div class="folio_slider_button">
	                        <div class="folio_overlay"><a href="#" data-count="<?=$k?>" style='display:block;width:100%;height:100%'></a></div>
	        		    	<img src="<?=$v?>"  width="145" height="95"/>
                        
            		</div>
       			<? }?>
            </div>
        </div>
        <div id='folio_next'><img src="/images/folio/folio_slider/folio_next.png" alt="NEXT"/></div>
    </div>
</div>
<a href="#"><img src="/images/folio/folio_cta.jpg"/></a>
<script>
	$(document).ready(function(){
		(function(){
			var theTravel = 900;
			
			$('.folio_slider_button a').click(function(){
				var theCount = parseInt($(this).attr('data-count'));
				$('#folio_slider_wrapper').stop().animate({'opacity':0},400,function(){
					$(this).animate({'marginLeft':-theCount*theTravel+'px'},1,function(){
						$(this).animate({'opacity':1},400);
					});	
				})

				$('.folio_overlay').removeClass('selected');
				$(this).parent().addClass('selected');
				return false;
			});
		})()						   
	
	});
</script>
<? 
//MAIN FOOTER
include 'components/footer.php';
?>