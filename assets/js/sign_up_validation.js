 $(document).ready(function(){

      jQuery.validator.addMethod("alpha", function(value, element) { 
            return this.optional(element) || /^[a-zA-Z ]*$/.test(value)
        
      },"Alphabets and space like ram rajput only");
  
    $("#signUp").validate({//("^[a-zA-Z]+$")
      
      rules:{
        username:{
          required: true,
          alpha:true,
          minlength:5
        },
        mobile_number:{
          required: true,
          number:true,
         
            minlength:10,
            maxlength:10
        },
        email:{
          required:true,
          email:true
        },
        password:{
          required:true,
          minlength:8,
          maxlength:20
        },
        confirm_password:{
          required:true,
          equalTo:"#password"
        },
        check1:{
          required:true,
        }, 


      },
      messages:{
        username:{
          required:"Name is required.... Please fill it",
          minlength:"Please Enter five characters minimum"

        },
        
        mobile_number:{
          required:"Please Enter your Mobile number",
          number:"Enter only numbers 0123456789",
          minlength:" Enter minimum 10 numbers digit",
          maxlength:"Enter maximum only 10 numbers digit"
        },
        email:{
          required:" Email field is required..  "
        },

        confirm_password:{
          equalTo:" Password do not match",
          required:"Confirm Password is required"
        },

        check1:{
          required:"Please check it this field."
        },
        

      }
    });

   
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
      });
      


})