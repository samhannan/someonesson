$(document).ready(function() {
	
	// Homepage banner
	$("#slides").slidesjs({
		height:420,
		play: {
			auto:true,
			interval:5000
		},
		
		callback: {
			loaded: function(){
			  $('.slidesjs-pagination, .slidesjs-navigation').hide(0); 
			},
			complete: function(number) {
				$("#banner-nav .btn").removeClass('active');
				$("#banner-nav .btn[data-item="+(number-1)+"]").addClass('active');
			},
		}
	});
	
	// Homepage banner custom navigation
	$("#banner-nav .btn").click(function(e){
		e.preventDefault();
		$("#banner-nav .btn").removeClass('active');
		$('a[data-slidesjs-item="' + $(this).attr("data-item") + '"]').trigger('click');
		$(this).addClass('active');
	});
	
});