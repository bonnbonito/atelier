jQuery(document).ready(function($) {
	var container = $(".st-menu"),
		navIcon = $("#nav-icon1");		

	$("#nav-toggle").click(function(e){
		$("#nav-icon1").toggleClass('open');
		$("#page, .st-container, body").toggleClass('st-menu-open');
	});

	$(document).click(function(e) {
		if (navIcon.hasClass('open')) {
			if (!container.is(e.target) // if the target of the click isn't the container...
				&& !navIcon.is(e.target)
        && container.has(e.target).length === 0) // ... nor a descendant of the container
			{
				$("#page, .st-container, body").removeClass('st-menu-open');
				$("#nav-icon1").removeClass('open');
			}
		};		
	});		
});