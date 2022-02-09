<form class="d-flex" id="mynavbar" method="POST">
    <input class="form-control me-2" type="text" placeholder="Login" name="login" required>
    <button class="btn btn-primary" type="submit" name="send">Enviar</button>
</form>

<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



include 'conexao.php';
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    $query = "SELECT * FROM usuario WHERE login='$login'";
    $result = mysqli_query($conexao, $query);
    if ($result) {
        $chave = sha1(uniqid(mt_rand(), true));
        $linha = mysqli_fetch_array($result);
        $email = $linha['email'];

        $conf = mysqli_query($conexao, "INSERT INTO recuperacao VALUES ('$email', '$chave')");


        if ($conf) {
            $link = "http://example.net/recuperar.php?utilizador=$email&confirmacao=$chave";
            
            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
                //Server settings
                $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = '0000487378@senaimgaluno.com.br';                 // SMTP username
                $mail->Password = '12345678';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
                $mail->CharSet = 'UTF-8';
                
                //Recipients
                $mail->setFrom($linha['email']);
                $mail->addAddress('0000487378@senaimgaluno.com.br', 'Enzo Girardi');     // Add a recipient
                
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Link para redefinição de senha';
            $mail->Body    = "<b>Olá $login! <br>Segue o link para redefinir a sua senha: <a href='http://localhost/agrosistema/alt_senha-usu.php?email=$linha[email]&confirmacao=$chave'>Clique aqui</a> </b>";
            $mail->AltBody = "Olá $login! \n Segue o link para redefinir a sua senha: http://localhost/agrosistema/alt_senha-usu.php?email=$linha[email]&confirmacao=$chave";
            
            $mail->send();
            echo 'Link de redefinição enviado com sucesso! Favor verificar o e-mail cadastrado.';
        } catch (Exception $e) {
            echo 'Erro ao contatar!';
            echo 'Erro: ' . $mail->ErrorInfo;
        }
    }
    } else {
        echo "<script>alert('O usuário não existe!')</script>";
    }
}

?>