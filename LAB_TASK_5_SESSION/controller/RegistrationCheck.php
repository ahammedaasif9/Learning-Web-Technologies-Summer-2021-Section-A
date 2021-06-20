<?php
session_start();

if(isset($_POST['Submit']))
{
   $name= $_POST['name'];
   $username= $_POST['username'];
   $password= $_POST['Password'];
   $email= $_POST['email'];
   $cpassword= $_POST['CPassword'];
   if($name !='' && $username!='')
   {
     $user=['username'=>$username,'Password' =>$password,'name'=>$name,'cpassword'=>$cpassword,'email'=>$email];
     $_SESSION['user']=$user;
     header('location:login.php');
   }
   else
   {
   	echo "null submission";
   }
}

else
{
	echo " Invalid request";
}

?>