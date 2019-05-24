$(document).ready(function(){

  var mobfilter = /^\d{10}$/;

  var emailfilter = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        // if (!mobfilter.test(mobile))

        $('#btnLogin').click(function(event) {

          event.preventDefault();

          
            // var reg_nm2 = document.getElementById('reg_nm').value();
            var login_email = $('#login_email').val();
            var login_pass = $('#login_pass').val();

            if (login_email=='') 
            {
              alert("Please enter email");
            }
            else if (login_pass=='') 
            {
              alert("Please enter Password");
            }
            else
            {
              $.ajax({
                type: 'POST',
                url: 'login.php',
                data: ({ login_email: login_email, login_pass: login_pass }),
                success: function(response) {

                   alert(response);

                  if(response == "1" || response == 1)
                  {
                  	//alert(response);
                    alert("Login Successfull");
                        // $('#reg_nm').val("");
                       window.location.href="../admin-dashboard/index.php";
                      }
                      else if(response == "2" || response == 2)
                      {

                        alert("Email ID not exist");
                      }
                      else
                      {
                      	
                        alert("Invalid Password");
                      }
                    }

                  });
            }
            
          });


      });