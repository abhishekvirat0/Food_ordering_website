<?php

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

   $f_name = $_POST['f_name'];
   $l_name=$_POST['l_name'];
   $reg_ph = $_POST['reg_ph'];
   $reg_email = $_POST['reg_email'];
   $reg_pass = $_POST['reg_pass'];
   //$hashed_password = $_POST['reg_pass'];  //ecrryption of password
   $comm =$_POST['comm'];



   //Escape all $_post variable to protect against sql injection
   //$f_name = $mysqli->escape_string($_POST['f_name']);
   // $reg_pass = $mysqli->escape_string(password_hash($_POST['reg_pass'],PASSWORD_BCRYPT));
   // $hash = $mysqli->escape_string(md5(rand(0,1000)));

   $result = mysqli_query($conn, "SELECT * FROM user_dtls WHERE e_mail='$reg_email'");

   if (mysqli_num_rows($result) > 0)
   {
      echo "3";
   }
   else
   {
      $stat = 1;
      $sql = "INSERT INTO user_dtls (f_name, l_name, phone, e_mail, pass, comment, stat) VALUES ('$f_name', '$l_name', '$reg_ph', '$reg_email', '$reg_pass', '$comm', '$stat')";

      if (mysqli_query($conn, $sql)) 
      {
         echo "1";
         // echo "New record created successfully";
      } else {
      // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      echo "0";
   }
} 

}
?>