$(document).ready(function(){

  var mobfilter = /^\d{10}$/;

  var emailfilter = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        // if (!mobfilter.test(mobile))

        $('#btnRegister').click(function(event) {
          // alert("no function");

          event.preventDefault();

          var f_name = $('#f_name').val();
            // var reg_nm2 = document.getElementById('reg_nm').value();
            var l_name = $('#l_name').val();           
            var reg_email = $('#reg_email').val();
            var reg_ph = $('#reg_ph').val();
            var reg_pass = $('#reg_pass').val();
            var cnf = $('#cnf').val();
            var comm = $('#comm').val();
            if (f_name=='') 
            {
              alert("Please enter first name");
            }
            else if (l_name=='') 
            {
              alert("Please enter last name");
            }
            else if (reg_email=='') 
            {
              alert("Please enter email");
            }
            else if (reg_ph=='') 
            {
              alert("Please enter phone number");
            }

            else if (reg_pass=='') 
            {
              alert("Please enter Password");
            }

            else if(cnf=='')
            {
              alert("please enter confirm password");
            }

            else if (reg_pass != cnf){
              alert("Passwords do not match!");
            }

            else if(!emailfilter.test(reg_email))
            {
              alert("Invalid Email");
            }
            else if(!mobfilter.test(reg_ph))
            {
              alert("Invalid phone number");
            }
            else
            {
              $.ajax({
                type: 'POST',
                url: 'registration2.php',
                data: ({ f_name: f_name, l_name: l_name, reg_email: reg_email, reg_ph:reg_ph, reg_pass: reg_pass,comm:comm }),
                

                success: function(response) {

                 alert(response);

                 if(response == "1" || response == 1)
                 {
                  alert("Data Inserted Successfully");
                        // $('#reg_nm').val("");
                        window.location="admin-dashboard/index.php";
                      }
                      else if(response == "3" || response == 3)
                      {
                        alert("Email ID already exists");
                      }
                      else
                      {
                        alert("Data Not Inserted");
                      }
                    }

                  });
            }
            
          });


      });