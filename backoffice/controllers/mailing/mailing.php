<?php
    require 'PHPMailer\src\PHPMailer.php';
    require 'PHPMailer\src\Exception.php';
    require 'PHPMailer\src\SMTP.php';
    require 'vendor\autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;



if(isset($_POST["replymail"])){
    
    $mail = new PHPMailer(TRUE);

    try {
       
       $mail->setFrom('your email address', 'dbp Photostudio');
       $mail->addAddress($_POST["receiver_email"], $_POST["receiver_name"]);
       $mail->Subject = $_POST['sender_subject'];
       $mail->Body = $_POST['msg'];
         
       /* Tells PHPMailer to use SMTP. */
       $mail->isSMTP();
       
       /* SMTP server address. */
       $mail->Host = 'smtp.gmail.com';

       /* Use SMTP authentication. */
       $mail->SMTPAuth = TRUE;
       
       /* Set the encryption system. */
       $mail->SMTPSecure = 'tls';
       
       /* SMTP authentication username. */
       $mail->Username = 'your email address';
       
       /* SMTP authentication password. */
       $mail->Password = 'your mail passwor';
       
       /* Set the SMTP port. */
       $mail->Port = 587;
          
       /* Finally send the mail. */
     if($mail->send()){
      header("Location:../../../core_module_users/enquiries.php?mail='Email successfully sent'");
     }else{
      header("Location:../../../core_module_users/enquiries.php?mail='Email not sent'");
     }
    }
    catch (Exception $e)
    {
       header("Location:../../../core_module_users/enquiries.php?mail=". $e->errorMessage());
      
    }
    catch (\Exception $e)
    {
       header("Location:../../../core_module_users/enquiries.php?mail=" . $e->errorMessage());
    }
  }
?>
