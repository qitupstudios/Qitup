qui = {};
(function(q$,$){
	q$.slider = {
		//settings = {trigger:'.slider_item'};
		init : function(settings){
			q$.slider.theSettings = settings;
			q$.slider.evt_listeners();
		},
		evt_listeners : function(){
			$(q$.slider.theSettings.trigger).click(function(){
				q$.slider.trigger_clicked($(this));											
			});
		},
		trigger_clicked : function(elem){
			//alert(elem.attr('data-count') * q$.slider.theSettings.travel);
			var theTravel = elem.attr('data-count') * q$.slider.theSettings.travel;
			$(q$.slider.theSettings.trigger).removeClass('selected');
			elem.addClass('selected');
			$(q$.slider.theSettings.wrapper).stop().animate({'marginLeft':-theTravel+'px'},500);
		},
		theSettings : ''
	};
})(qui,jQuery)

$(document).ready(function(){
	var hp_slider_settings = {trigger:'.hp_selector',travel:'900',wrapper:'#hp_slider_wrapper'};
	qui.slider.init(hp_slider_settings);
	
	$('#folio_back').live('click',function(){
		if($('#folio_control_wrapper').attr('data-count') != 0){
			$('#folio_control_wrapper').animate({'marginLeft':'+=725px'});									   
			$('#folio_control_wrapper').attr('data-count',(parseInt($('#folio_control_wrapper').attr('data-count')-1)))
		}
	});
	
	$('.folio_overlay:first').addClass('selected');
	
	$('#folio_next').live('click',function(){
		var theCount = $('.folio_slider_button').length;
		var maxpage = Math.floor(theCount/5);
		var dataCount = parseInt($('#folio_control_wrapper').attr('data-count'));
		if(dataCount < maxpage){
			$('#folio_control_wrapper').animate({'marginLeft':'-=725px'});
			$('#folio_control_wrapper').attr('data-count',(parseInt($('#folio_control_wrapper').attr('data-count')+1)))
		}
	});
 });