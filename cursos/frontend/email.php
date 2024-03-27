<?php
if (getenv('REQUEST_METHOD') == 'POST') {
        
    /*---- dados para envio de email --*/
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: Contato site curso Frontend <contato@cesimarxavier.com.br>' . "\r\n";
    /* ---- dados para envio de email -- 
    luciano@construfitengenharia.com.br
    erikson@construfitengenharia.com.br
    */
    
    $nome       = isset($_POST['nome']) ? $_POST['nome'] : false;
    $email      = isset($_POST['email']) ? $_POST['email'] : false;
    $mensagem   = isset($_POST['mensagem']) ? $_POST['mensagem'] : false;
/*
    if(!$nome || !$email || !$celular || !$mensagem){
        exit('<p class="c-verde b b-verde p-3">Operação realizada com sucesso.</p>');
    }
    */
    
    $message = "<p>-------------------------------------------</p>";
    $message .= "<table style='text-align:left;width:500px;'>";
    $message .= "<tr><th style='border:1px solid #AAA;padding:5px;'>Nome</th><td style='border:1px solid #AAA;padding:5px;color: #555;'>$nome</td></tr>";
    $message .= "<tr><th style='border:1px solid #AAA;padding:5px;'>E-mail</th><td style='border:1px solid #AAA;padding:5px;color: #555 !important;'>$email</td></tr>";
    $message .= "<tr><th style='border:1px solid #a257bb;padding:5px;' colspan='2'>Mensagem</th></tr>";
    $message .= "<tr><td style='border:1px dashed #a257bb;padding:15px;color: #a257bb' colspan='2'>$mensagem</td></tr>";
    $message .= "</table>";
    $message .= "<br>";
    $message .= '<br /><small>Mensagem gerada em: '.date('d/m/Y H:i:s').'</small>';
    
    
    if(@mail("cesimar.xavier@escolar.ifrn.edu.br", "Contato site Curso Frontend", $message, $headers)){
        @mail($email, "Confirmação de mensagem", $message, $headers);
        exit('<p class="c-verde b b-verde p-3">Sua mensagem foi enviada com sucesso. Aguarde nosso contato.</p>');
    }else{
        exit('<p class="c-vermelho b b-vermelho p-3">Ops! Não foi possível enviar sua mensagem. Verifique os dados digitados e tente novamente.</p>');
    }
    
    
}else{
    exit('Ops! Parece que alguem aqui esta tentando trapacear. Essa requisicao eh invalida.');
}
