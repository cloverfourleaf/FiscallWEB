<?php
$nomeFuncionario  = $_POST['nomeFuncionario'];
$rgFuncionario  = $_POST['rgFuncionario'];
$emailFuncionario  = $_POST['emailFuncionario'];
$cpfFuncionario  = $_POST['cpfFuncionario'];
$loginFuncionario  = $_POST['loginFuncionario'];
$senhaFuncionario  = $_POST['senhaFuncionario'];
$confirmaSenha  = $_POST['confirmaSenha'];
$cnhFuncionario = $_POST['cnhFuncionario'];
$codNivelUsuario = $_POST['codNivelUsuario'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

$qrcode='qr_img.php?';
$qrcode.='d=$codUsuario&';
$qrcode.='e=H&';
$qrcode.='s=7&';
$qrcode.='t=P';

// Compo E-mail
  $arquivo = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:Verdane;
  font-size:12px;
  color: #666666;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  </style>
    <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
            <tr>
              <td>
  <tr>
                 <td width='500'>Nome:$nome</td>
                </tr>
                <tr>
                  <td width='320'>E-mail:<b>$emailFuncionario</b></td>
     </tr>
      <tr>
                  <td width='320'>Login:<b>$loginFuncionario</b></td>
                </tr>
     <tr>
     
     <img src='$qrcode'>
                  <td width='320'>Sua senha:<b>$senhaFuncionario</b></td>
                </tr>
                <tr>
                  <td width='320'>Olá,$nomeFuncionario seja bem-vindo ao sistema fiscall, acima você tem alguns de seus dados para acesso do sistema. <p>ASS, Equipe Fiscall </p> </td>
                </tr>
            </td>
          </tr>  
          <tr>
            <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
          </tr>
        </table>
    </html>
  ";

  //enviar
   
  // emails para quem será enviado o formulário
  $emailenviar = "vitor.leonyt@gmail.com";
  $destino = $emailenviar;
  $assunto = "Acesso ao sistema FisCall";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> Os dados serão enviados para o e-mail fornecido no cadastro";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
?>