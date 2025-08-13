<?php
require '../admin/inc/config/class/config.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$res = [];

if(isset($_POST['btntype']) && !empty($_POST['btntype'])  ){
    $submitbtn=filter($_POST['btntype']);
}
if(isset($submitbtn) && strcmp($submitbtn , "otp_generate") == 0 ){
    
    if (isset($_POST['uname']) && !empty($_POST['uname'])){
        $uname=filter($_POST['uname']);
    
        $user_query="SELECT * FROM `tbl_users` WHERE `email`='$uname'";
    
        if($result= runFatch($user_query)){
            $user= $result[0];
        }
        else{
            $res['msg'] = 'Incorrect Email';
            $res['status'] = 101;
        }
        
    }
    else{
        $res['msg'] = 'User Name is required';
        $res['status'] = 101;
    }
    
    
    
    
    if (!$res) {    
        if($user){

            // sending mail 

            $otp = rand(100000, 999999);
            

            require '../vendor/autoload.php';

            $mail = new PHPMailer(true);

            
                //Server settings
                // $mail->SMTPDebug = 2;                                       // Enable verbose debug output
                $mail->isSMTP();                                            // Set mailer to use SMTP
                $mail->Host       = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'prakashsingh.pbh@gmail.com';     // SMTP username
                $mail->Password   = 'ukruuatvmgnzsdac';                     // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption, PHPMailer::ENCRYPTION_SMTPS also accepted
                $mail->Port       = 587;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom('prakashsingh.pbh@gmail.com', 'G N Singh Academy');
                $mail->addAddress($user['email'], $user['name']);           // Add a recipient
                $mail->addReplyTo('prakashsingh.pbh@gmail.com', 'Reply');

                // Content
                $mail->isHTML(true);                                        // Set email format to HTML
                $mail->Subject = 'OTP To Reset Password';
                $mail->Body    = 'OTP too Reset Your Password with G N Singh Academy is  <b>'.$otp.'</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                if($mail->send()){

                    $sql_set_otp="UPDATE `tbl_users` SET `otp`='$otp' WHERE `id`=".$user['id'];
                    runUpdate($sql_set_otp);

                    $res['status'] = 99;
                    $res['msg'] = 'OTP Generated and Sent to Registered Mail ID';
                }
           
        }
    }
    
}



else if(isset($submitbtn) && strcmp($submitbtn , 'varify_otp') == 0  ){
// else{

    if (isset($_POST['uname']) && !empty($_POST['uname'])){
        $uname=filter($_POST['uname']);
    
        $user_query="SELECT * FROM `tbl_users` WHERE `email`='$uname'";
    
        if($result= runFatch($user_query)){
            $user= $result[0];
        }
        else{
            $res['msg'] = 'Incorrect Email';
            $res['status'] = 101;
        }  
    
    }
    else{
        $res['msg'] = 'User Name is required';
        $res['status'] = 101;
    }

    if (isset($_POST['otp']) && !empty($_POST['otp'])){
        $otp=filter($_POST['otp']);
        if($otp!= $user['otp']){
            $res['msg'] = 'Incorrect OTP Provided, Try again';
            $res['status'] = 101; 
        }
        
    }
    else{
        $res['msg'] = 'OTP is Required';
        $res['status'] = 101;
    }

    if (isset($_POST['password']) && !empty($_POST['password'])){
        $password=filter($_POST['password']);

        $hash=md5($password);
           
    }
    else{
        $res['msg'] = 'Password is Required';
        $res['status'] = 101;
    }

    if(!$res){

        $sql_set_password="UPDATE `tbl_users` SET `password`='$hash' WHERE `id`=".$user['id'];
        if(runUpdate($sql_set_password)){
            $res['msg'] = 'Password updated successfully';
            $res['status'] = 100; 
        }
        else{
            $res['msg'] = 'Something went wrong, Try again later';
            $res['status'] = 101; 
        }

    }

    

}






echo json_encode($res);
