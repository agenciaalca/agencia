<?php
$msg = "";
if (isset($_POST['submit']) && $_POST['submit'] == 'ENVIAR') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $formcontent = "FORMULÁRIO DE CONTATO\n"
            . "\nDe: " . $nome
            . "\nEmail: " . $email
            . "\nTelefone: " . $telefone
            . "\nAssunto: " . $assunto
            . "\nMensagem: " . $mensagem;

    $recipient = "cristiane@agenciaalca.com";
    $subject = "Formulário de Contato - Agência Alca";
    $mailheader = "De: " . $email . "\r\n";

    $msg = "";

    if (mail($recipient, $subject, $formcontent, $mailheader)) {
        $msg = '<div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Mensagem enviada com sucesso!</strong> 
            </div>';
    } else {
        $msg = '<div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Erro ao enviar a mensagem, tente novamente mais tarde! </strong> 
            </div>';
    }
}
?>

