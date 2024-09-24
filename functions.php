<?php
require_once 'config.php';
$db=mysqli_connect(DB_host,DB_user,DB_pass,DB_name) or die('not connecting');
function show_page($page,$data=""){
    include("assets/pages/$page.php");   
}
//function for showing error

function showError($field){
    if(isset($_SESSION['error'])){ 
        $error=$_SESSION['error'];
        if($error['field']==$field
        ){
            ?>
            <div class="alert alert-danger my" role="alert">
                            <?=$error['msg']?>
                       </div>
                        <?php 
        }
    }
    else{

    }
}
//function foe retrieving pass
function getpass($email){
    global $db;
    $query="SELECT password FROM users WHERE email='$email' ";
    $run=mysqli_query($db,$query);
    $data['user']=mysqli_fetch_assoc($run)??array();
    return $data['user']['password'];


   }
function verified($email) {
    global $db;
    $query = "UPDATE users SET acc_status = '1' WHERE email='$email';";
    $run = mysqli_query($db, $query);
}

//function for show previous form data
function showPrev($field){
    if(isset($_SESSION['formdata'])){
        $formdata=$_SESSION['formdata'];
        return $formdata[$field];

    }
}
function validateSignupForm($form_data){
    $response=array();
    $response['status']=true;
    $k=userCheck($form_data['userID']);
    if((!($form_data['confirmPassword'])) or ($form_data['confirmPassword']!=$form_data['password'])){
        $response['msg']="password does'nt match";
        $response['status']=false;
        $response['field']='confirmPassword';
    }
    
    
        
    if(emailCheck($form_data['email'])['status']){
        $response['msg']="email already registered";
        $response['status']=false;
        $response['field']='email';
    }
    if($k['status']){  
        $response['msg']="set another id ,it is already taken";
        $response['status']=false;
        $response['field']='userID';
    }
    if(!($form_data['password'])) {
        $response['msg'] = "Whoa, hold up! Password required, buddy!";
        $response['status'] = false;
        $response['field'] = 'password';
    } else {
        $password = $form_data['password'];
    
        // Validate password complexity
        $password_pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
    
        if (!preg_match($password_pattern, $password)) {
            $response['msg'] = "Oops! Your password needs to hit the gym. Make sure it has at least 8 characters, one uppercase, one lowercase, one number, and one special character. No shortcuts!";
            $response['status'] = false;
            $response['field'] = 'password';
        } else {
            $response['msg'] = "Boom! Password is solid like a rock!";
            $response['status'] = true;
        }
    }
    
    if(!($form_data['gender'])){
        $response['msg']="he/she";
        $response['status']=false;
        $response['field']='gender';
    }
    
    
    if(!($form_data['email'])){
        $response['msg']="email required dude";
       $response['status']=false;
        $response['field']='email';
    }
    if(!($form_data['username'])){
        $response['msg']="Username required dude";
        $response['status']=false;
        $response['field']='username';
    }
    
    if(!($form_data['userID'])){
        $response['msg']="Userid important dude";
        $response['status']=false;
        $response['field']='userID';
    }
    return $response;
}
//for checking email
function emailCheck($email){
    global $db;
    $query="SELECT * FROM users WHERE email='$email' ";
    $run=mysqli_query($db,$query);
    $data['user']=mysqli_fetch_assoc($run)??array();
    if(count($data['user'])>0){
        $data['status']=true;
    }
    else{
        $data['status']=false;
    }
    return $data;

}
function getUser($user){
    global $db;
    $query="SELECT * FROM users WHERE user_id='$user' ";
    $run=mysqli_query($db,$query);
    return mysqli_fetch_assoc($run);
}
function userCheck($user){
    global $db;
    $query="SELECT *FROM users WHERE user_id='$user' ";
    $run=mysqli_query($db,$query);
    $data['user']=mysqli_fetch_assoc($run)??array();
    if(count($data['user'])>0){
        $data['status']=true;
    }
    else{
        $data['status']=false;
    }
    return $data;


}
function creat_prof(){
    
}
function validateProfileForm($form_data) {
    $response = array();
    $response['status'] = true;  // Initially set status to true
    
    // Check if username is provided
    if (empty($form_data['username'])) {
        $response['msg'] = "Whoa, hold up! Username/Handle is required!";
        $response['status'] = false;
        $response['field'] = 'username';
    }

    // Check if email is valid and unique
    if (empty($form_data['email'])) {
        $response['msg'] = "We need your email to keep in touch!";
        $response['status'] = false;
        $response['field'] = 'email';
    }  elseif (!emailCheck($form_data['email'])['status']) {
        $response['msg'] = "This email is not registered. ";
        $response['status'] = false;
        $response['field'] = 'email';

    }

    // Check if the user ID is unique
    if (!empty($form_data['userID'])) {
        $k = userCheck($form_data['userID']);
        if ($k['user']['email']!=$form_data['email']) {
            $response['msg'] = "userid and email does'nt match.";
            $response['status'] = false;
            $response['field'] = 'userID';
        }
    }

    

    
    // Personal Information Validation (Full Name, Location, Date of Birth)
    if (empty($form_data['fullName'])) {
        $response['msg'] = "Full Name is required. We need to know who you are!";
        $response['status'] = false;
        $response['field'] = 'fullName';
    }
    
    if (empty($form_data['location'])) {
        $response['msg'] = "Location can't be empty. Where in the world are you?";
        $response['status'] = false;
        $response['field'] = 'location';
    }

    if (empty($form_data['dob'])) {
        $response['msg'] = "Date of Birth is required. Let us know when you celebrate!";
        $response['status'] = false;
        $response['field'] = 'dob';
    }

    // Contact Information (Phone Number)
    if (!empty($form_data['phoneNumber'])) {
        if (!preg_match("/^[0-9]{10}$/", $form_data['phoneNumber'])) {
            $response['msg'] = "Please enter a valid phone number. Numbers only!";
            $response['status'] = false;
            $response['field'] = 'phoneNumber';
        }
    }

    // Profile Theme
    if (empty($form_data['themeColor'])) {
        $response['msg'] = "Don't forget to pick a theme color!";
        $response['status'] = false;
        $response['field'] = 'themeColor';
    }

    // Interests/Tags
    if (empty($form_data['interests'])) {
        $response['msg'] = "You forgot to add your interests. Let people know what you're into!";
        $response['status'] = false;
        $response['field'] = 'interests';
    }

    // Notifications Settings
    if (empty($form_data['notificationSettings'])) {
        $response['msg'] = "Please select your notification preferences!";
        $response['status'] = false;
        $response['field'] = 'notificationSettings';
    }

    // Privacy Settings
    if (empty($form_data['privacySettings'])) {
        $response['msg'] = "Please choose your privacy setting.";
        $response['status'] = false;
        $response['field'] = 'privacySettings';
    }

    return $response;
}


function createUser($fd){
    global $db;
    $userid = mysqli_real_escape_string($db, $fd['userID']);
    $username = mysqli_real_escape_string($db, $fd['username']);
    $email = mysqli_real_escape_string($db, $fd['email']);
    $gender = mysqli_real_escape_string($db, $fd['gender']); // Escape string to be safe
    $password = mysqli_real_escape_string($db, $fd['password']);
    $query = "INSERT INTO users(user_id, username, email, gender, password,acc_status) ";
    $query .= "VALUES ('$userid', '$username', '$email', '$gender', '$password','2')";
    $run = mysqli_query($db, $query);
    return $run;
}
//function to validate login form
function validateloginForm($fdata) {
    $response = array();
    $response['status'] = true; 
    $k=emailCheck($fdata['email_uid']);
    $l=userCheck($fdata['email_uid']);
    if (!passwordCheck($fdata)) {
        $response['status'] = false;
        $response['field'] = 'password';
        $response['msg'] = 'Password and email/user ID do not match.';
        
    }
    if ($k['status'] && $l['status']) {
        $response['status'] = false;
        $response['field'] = 'email_uid';
        $response['msg'] = 'No such user registered.';
       
    }
    else{
        if ($k['status']){
            $response['user']=$k['user'];
        }
        elseif ($l['status']){
            $response['user']=$l['user'];
        }
    }
    if (empty($fdata['password'])) {
        $response['status'] = false;
        $response['field'] = 'password';
        $response['msg'] = 'Please enter a password.';
        
    }
    if (empty($fdata['email_uid'])) {
        $response['status'] = false;
        $response['field'] = 'email_uid';
        $response['msg'] = 'Please enter a valid email or user ID.';
       
    }
   
    
    return $response;
}

function passwordCheck($fdata){
    global $db;
    $email_uid = mysqli_real_escape_string($db, $fdata['email_uid']);
    $password = mysqli_real_escape_string($db, $fdata['password']); 
    $query = "SELECT COUNT(*) AS row FROM USERS WHERE ( email = '$email_uid' AND password = '$password') OR (user_id= '$email_uid' AND password = '$password')";
    $run=mysqli_query($db,$query);
    $return_data=mysqli_fetch_assoc($run);
    return $return_data['row'];
}
function validateVerify($fdata){
    $response = array();
    $response['status'] = true;
    if($fdata['verifyCode']!= $_SESSION['otp']){
        $response['status'] = false;
        $response['field'] = 'verifyCode';
        $response['msg'] = 'code doesnt match';
    }
     if(empty($fdata['verifyCode'])) {
        $response['status'] = false;
        $response['field'] = 'verifyCode';
        $response['msg'] = 'Enter valid verification code';
    }
    return $response;
}
    function validatesendotp($fdata){
        $response = array();
        $response['status'] = true;
        $k=emailCheck($fdata['email']);
        if(!$k['status']){
            $response['status'] = false;
            $response['field'] = 'email';
            $response['msg'] = 'email is not registered';
        }
         if(empty($fdata['email'])) {
            $response['status'] = false;
            $response['field'] = 'email';
            $response['msg'] = 'please enter the email';
        }
        return $response;
    }
    function checkotp($fdata){
        $response = array();
        $response['status'] = true;
        if($fdata['verifyCode']!= $_SESSION['otp']){
            $response['status'] = false;
            $response['field'] = 'verifyCode';
            $response['msg'] = 'code doesnt match';
        }
         if(empty($fdata['verifyCode'])) {
            $response['status'] = false;
            $response['field'] = 'verifyCode';
            $response['msg'] = 'please enter verification code';
        }
        return $response;
    }
    function verifyresetpss($fdata){
        $response = array();
        $response['status'] = true;
        if($fdata['confirm_password']== getpass(($_SESSION['email']))){
            $response['status'] = false;
            $response['field'] = 'new_password';
            $response['msg'] = 'It is your previous password';
        }
        if(($fdata['confirm_password'])!=($fdata['new_password'])) {
            $response['status'] = false;
            $response['field'] = 'confirm_password';
            $response['msg'] = 'above password doesent match';
        }
        if(empty($fdata['confirm_password'])) {
            $response['status'] = false;
            $response['field'] = 'confirm_password';
            $response['msg'] = 'please enter new password';
        }
         if(empty($fdata['new_password'])) {
            $response['status'] = false;
            $response['field'] = 'new_password';
            $response['msg'] = 'please enter new password';
        }
        
        return $response;
    }
    function changePass($pass){
        global $db;
        $pass = mysqli_real_escape_string($db, $pass); // Make sure to escape the password
        $email = mysqli_real_escape_string($db, $_SESSION['email']); // Escape the email

        $query = "UPDATE users SET password = '$pass' WHERE email = '$email';";
        $run = mysqli_query($db, $query);
    }
   
?>