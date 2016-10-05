jQuery(document).ready(function(){

	// Mobile Menu
	jQuery('.mobile-navigation').click(function(){
		jQuery('.main-navigation').toggleClass('mobile-show-menu');
	});

	// HOMEPAGE
	if(jQuery('[data-toggle="tooltip"]').length ) {
		jQuery(function () {
		  jQuery('[data-toggle="tooltip"]').tooltip();
		});
	}

	// USER Messages
	jQuery('#modalMessageBtn').click(function(){
		jQuery("#modal").modal('show')
			.find('#modalContent')
			.load(jQuery(this).attr('href'));
		return false;
	});

});