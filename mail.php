<?php
ini_set('display_errors', true);

    if (isset($_POST) && !empty($_POST)) {
        // foreach ($_POST as $key => $value) {
        //     echo $key." >> ".$value."<br>";
        // }
        // die();
        require ('/var/www/html/cs2/aecc/ext/PHPMailer-master/PHPMailerAutoload.php');
        
        $mail = new PHPMailer;
        $mail->isSMTP();                                    // Set mailer to use SMTP
    
        // $mail->SMTPDebug = 2;                               // Enable verbose debug output
        // $mail->Debugoutput = 'html';
    
        $mail->Host         = 'smtp.gmail.com';                      // Specify main and backup SMTP servers
        $mail->SMTPAuth     = true;                               // Enable SMTP authentication
        $mail->Username     = 'aecc.uprb@upr.edu';                 // SMTP username
        $mail->Password     = getenv('SMTP_PASSWORD');                         // SMTP password
        $mail->SMTPSecure   = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port         = 587;                                    // TCP port to connect to
        $mail->SMTPDebug = 2;

        $mail->setFrom($_POST['email'], $_POST['name']);
        $mail->addAddress('aecc.uprb@upr.edu', 'AECC ACM Chapter');
        $mail->addCC($_POST['email'], $_POST['name']);
        $mail->addReplyTo('taiana.avila@upr.edu', 'Taiana Avila');
    
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        $mail->isHTML(true); 
        
        $mail->Subject = $_POST['subject'];
        $mail->Body    = $_POST['message'];
        // $mail->AltBody = '';
    
        // $mail->AddStringAttachment();
    
        if( !$mail->send() ) {
            //NO SE ENVIÓ
            echo "MESSAGE NOT SENT";
            die();    
        }
        header("Location: MessageSuccessfully.html");
    } else {
        echo "POST ERROR";
    }
?>