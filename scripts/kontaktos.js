//$.validator.setDefaults({
//	submitHandler: function() { alert("submitted!"); }
//});

$().ready(function() {
	// validate the contact form when it is submitted
	$("#kontakt").validate();
        
        if ($('#confirm-msg').hasClass('sent'))
            {
                $.scrollTo('#confirm-msg');
            }
});



