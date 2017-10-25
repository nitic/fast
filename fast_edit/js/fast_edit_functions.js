jQuery(document).ready(function() {

	jQuery('.login').click(function() {
 		jQuery('.login-box').slideToggle(500);
		return false;
	});

	jQuery('.edit').click(
      		function () {
			jQuery('.edit').css({'display':'none'});
			jQuery('.close-edit').css({'display':'inline'});
			jQuery('.editor').slideDown(500);
			jQuery.cookie('.editor', 'open');
     		}
    	);

	jQuery('.close-edit').click(
      		function () {
			jQuery('.edit').css({'display':'inline'});
			jQuery('.close-edit').css({'display':'none'});
			jQuery('.editor').slideUp(500);
			jQuery.cookie('.editor', 'null');
			return false;
      		}
    	);

   	var editor = jQuery.cookie('.editor');
    		if (editor == 'open') {
			jQuery('.edit').css({'display':'none'});
			jQuery('.close-edit').css({'display':'inline'});
			jQuery('.editor').slideDown(500);
    	};

});