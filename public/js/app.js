/**
 * check password in the front
 */
$( document ).ready(function() {
        
  $("#new_password").focus(function() {
      var current_password = $("#current_password").val();
      var token = $('meta[name="csrf-token"]').attr('content');
      $.ajax({
          url:"{{ route('checkPassword') }}",
          method: "POST",
          dataType: 'JSON',
          data: {
              "_method": 'POST',
              "_token": token,
              "current_password": current_password,
           },
        
          success: function(response){
          //   alert(response);
          
          var result = $.trim(response);
              if(result === "true"){
                
                  $("#pwdchk").html("<font color='green'>Current Password is correct</font>");
              }else{
                
                  $("#pwdchk").html("<font color='red'>Current Password is incorrect</font>");
                  
              }
          },
          error:function(){
              alert("Error");
          }
      });
     
   });    
   
   
/**
 * form validation settings page 
 * account form
 */
     
 var form = $("#account-form");
 form.validate({
    
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
   
    rules: {
        userName: {
            required: true,
            minlength: 3,


        },
        current_password: {
            required: true,
            minlength: 8,


        },
        new_password: {
            required: true,
            minlength: 8

        },

        confirm_password: {
            required: true,
            equalTo: "#new_password"
        },

        email: {
             required: true,
             email: true,
             disabled:true
         },

         firstname: {
             required: true,
             minlength: 2
            },
         lastname: {
             required: true,
             minlength: 2
            }
    }
});

  });   



  /**
   * datatables users initialize
   */
 
     /****************************************
      *       Basic Table                   *
      ****************************************/
     $('#users-table').DataTable();
 