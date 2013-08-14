<!--

http://br2.php.net/manual/pt_BR/function.strstr.php




-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $nome       = $_POST["nome"];
        $email      = $_POST["email"];
        $assunto    = $_POST["assunto"];        
        $desejo     = $_POST["desejo"];
        $mensagem   = $_POST["mensagem"];
        $erro       = 0;        
 
 
 if (($nome=="")and($email=="")and($assunto=="")and($mensagem=="")==FALSE)
 {echo "ATENÇÃO, Todos os campos do formulário devem ser preenchidos.<br>"; $erro=1;}
 
        
 if(empty($nome) OR strstr ($nome,' ')==FALSE)
 {echo "Favor digitar seu nome corretamente.<br>"; $erro=1;}
 
 if (empty ($email) and strstr ($email,'@') or strstr ($email,'.')==FALSE)
 { echo " Favor digitar o email corretamente.<br>"; $erro=1;}        
        
  if (empty($assunto) OR strstr ($assunto,' ')==FALSE)
 {echo "Favor digite o assusnto.<br>"; $erro=1;}       
  
  if (empty($mensagem) OR strstr ($mensagem,' ')==FALSE)
 {echo "Favor digite sua mensagem.<br> Obrigado.<br>"; $erro=1;}   
        
        
        
        
        
        
if ($erro==0)
{echo "Todos os dados foram enviados corretamente."."<br><br>";
        
        print "Nome: ".$_POST["nome"]."<br>";
        print "Email: ".$_POST["email"]."<br>";
        print "Desejo: ".$_POST["desejo"]."<br>";
        print "Assunto:  ".$_POST["assunto"]."<br>";
        print "Mensagem: ".$_POST["mensagem"]."<br>";
        
}
        ?>
     <br>   
     <br>
     <br>
     
     <a href="contato.php"> VOLTAR </a>
         
    </body>
</html>
