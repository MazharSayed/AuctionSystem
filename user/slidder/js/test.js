function validateForm() {
    jQuery.validator.addMethod(
        "password_check", 
        function() {
            var p1 = $("#pw1").val();
            var p2 = $("#pw2").val();
            if ( p1 == p2 ){
                return true;
            } else {
                return false;
            }
        }, 
        "Passwords do not match."
        );
 
    //check the form
    $("#register_form").validate({
        rules: {
            username: "required",
            pw1: "required",
            pw2: "password_check"
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
}// JavaScript Document