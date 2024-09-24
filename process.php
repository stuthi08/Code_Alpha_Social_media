<?php
require_once 'functions.php';
require_once 'sendmail.php';
if(isset($_GET['sign-up'])){
   $response= validateSignupForm($_POST);
   if(($response['status'])){
     
         if(createUser($_POST)){
            $k=emailCheck($_POST['email']);
            $_SESSION['userdata']=$k['user'];
            $otp=rand(1000,99999);
            $_SESSION['otp']=$otp;
            sendotp($_POST['email'],$otp);
            $_SESSION['Auth']=true;
            header("location:../../../");
         }
          
          else{
            echo "<script>alert('Something is wrong')</script>";
          }}
    else{
       $_SESSION['error']=$response;
       $_SESSION['formdata']=$_POST;
       header("location:../../../?sign-up");
       }}
   
   elseif(isset($_GET['verify'])){
      $response= validateVerify($_POST);
      if($response['status']==true){
         verified($_SESSION['userdata']['email']);
         $_SESSION['userdata']=emailCheck($_SESSION['userdata']['email'])['user'];
         $_SESSION['Auth']=true;
         header("location:../../../");
      }
      else{ 
         echo '<script>alert("Not verified");</script>';
      $_SESSION['error']=$response;
      $_SESSION['formdata']=$_POST;
       header("location:../../../?verify");

      }

   }
   elseif(isset($_GET['forgotverify'])){
      $response= validateVerify($_POST);
      if($response['status']==true){
        
      }
      else{ 
         echo '<script><alert>not verified</alert></script>';
      $_SESSION['error']=$response;
      $_SESSION['formdata']=$_POST;
       header("location:../../../?forgotpss");

      }
   }
   elseif(isset($_GET['profview'])){
      header("location:../../../?home");

   }
   elseif(isset($_GET['login'])){
      $response= validateloginForm($_POST);
      if($response['status']==true){
         $_SESSION['Auth']=true;
         $_SESSION['userdata']=$response['user'];
         header("location:../../../");
         $email=$_SESSION['userdata']['email'];
         $otp=rand(1000,99999);
         $_SESSION['otp']=$otp;
         sendotp($email,$otp);
      }
      else{
      $_SESSION['error']=$response;
      $_SESSION['formdata']=$_POST;
      header("location:../../../?login");
      }

   }
   elseif(isset($_GET['frsendotp'])){
      $response= validatesendotp($_POST);
      if($response['status']==true){
         header("location:../../../?forgotpss");
         $_SESSION['email']=$_POST['email'];
         $otp=rand(1000,9999);
         $_SESSION['otp']=$otp;
         sendotp($_SESSION['email'],$otp);
         echo '<script>alert("otp sent");</script>';
         header("location:../../../?frcheckotp");
      }
      else{
      $_SESSION['error']=$response;
      $_SESSION['formdata']=$_POST;
      header("location:../../../?forgotpss");
      }
   }
   elseif(isset($_GET['resend'])){
      $email=$_SESSION['userdata']['email'];
         $otp=rand(1000,99999);
         $_SESSION['otp']=$otp;
         sendotp($email,$otp);
         header("location:../../../?verify");
         echo '<script>alert("otp sent");</script>';
   }
   elseif(isset($_GET['frcheckotp'])){
      $response= checkotp($_POST);
      if($response['status']==true){
         header("location:../../../?frresetpss");
      }
      else{ 
      $_SESSION['error']=$response;
      $_SESSION['formdata']=$_POST;
       header("location:../../../?frcheckotp");

      }

   }elseif(isset($_GET['edit'])){
     
     unset($_SESSION['Auth']);
      header("location:../../../?profview");
   }
   elseif(isset($_GET['pp'])){
      unset($_SESSION['Auth']);
      header("location:../../../?profview");
   }
   elseif(isset($_GET['frresetpss'])){
      $response= verifyresetpss($_POST);
      if($response['status']==true){
         changePass($_POST['new_password']);
         echo '<script>alert("password changed successfully");</script>';
         

         header("location:../../../?login");
      }
      else{ 
      $_SESSION['error']=$response;
      $_SESSION['formdata']=$_POST;
       header("location:../../../?frresetpss");

      }

   }

?>