$(document).ready(function(){

      jQuery.validator.addMethod("alpha", function(value, element) { 
            return this.optional(element) || /^[a-zA-Z ]*$/.test(value)
        
      },"Alphabets and space like ram rajput only");
  
    $("#contactUs").validate({//("^[a-zA-Z]+$")
      
      rules:{
        customer_name:{
          required: true,
          alpha:true,
          minlength:5
        },
        customer_mobile:{
          required: true,
          number:true,
         
            minlength:10,
            maxlength:10
        },
       customer_email:{
          required:true,
          email:true
        },
       
        customer_feedback:{
          required:true,
          minlength:10
        },


      },
      messages:{
        customer_name:{
          required:"Name is required.... Please fill it",
          minlength:"Please Enter five characters minimum"

        },
        
        customer_mobile:{
          required:"Please Enter your Mobile number",
          number:"Enter only numbers 0123456789",
          minlength:" Enter minimum 10 numbers digit",
          maxlength:"Enter maximum only 10 numbers digit"
        },
        customer_email:{
          required:" Email field is required..  "
        },

        

        customer_feedback:{
          required:"Please check it this field."
        },
        

      }
    });

   
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
      });
      
      // $("#register").click(function(event) {
        
      //   //event.preventDefault();
      //    var form = $( "#contactUs" );
      //    if(form.valid()){
          
      //     var form_data = $('#contactUs').serialize();
      //     $.ajax({ 
      //         url:'action.php',
      //         method: 'post',
      //         data: form_data + '&action=contactUs'
      //     }).done(function(result){
      //       $('.alert').show();
      //       $('#result').html(result);      
      //     })

      //   }else{
      //     $('.alert').show();
      //    $('#result').html("form not validate please validate first");
      //   }

      // });

});