$(document).ready(function(){

	$("#bt-enviar").click(function() {
        var msg_ini = "<p class='c-vermelho b b-vermelho p-3'>";
        var msg_ale = "<p class='c-verde b b-verde p-3'>";
        var msg_info = "<p class='c-roxo b b-roxo p-3'>";
        var msg_end = "</p>";
        var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);
        if ($("#txtNome").val() == "") {
            $("#ng-message").html(msg_ini+"O campo <b>nome</b> não foi preenchido, preencha o campo e tente novamente."+msg_end).fadeIn(300).delay(7000).fadeOut(500);
            $("#txtNome").focus();
        } else
        if (!er.test($("#txtEmail").val())) {
            $("#ng-message").html(msg_ini+"Seu <b>e-mail</b> não foi preenchido. Por favor, tente novamente."+msg_end).fadeIn(300).delay(7000).fadeOut(500);
            $("#txtEmail").focus();
        }else
        if ($("#txtMensagem").val() == "") {
            $("#ng-message").html(msg_ini+"Sua <b>mensagem</b> não foi informada. Por favor, tente novamente."+msg_end).fadeIn(300).delay(7000).fadeOut(500);
            $("#txtMensagem").focus();
        }
        else {
            $("#ng-message").html(msg_info+"Estamos enviando sua mensagem. <i><b>Aguarde um instante</b></i>..."+msg_end).fadeIn(300).delay(7000).fadeOut(500);            
            $.post("email.php", {
                nome: $("#txtNome").val(),
                email: $("#txtEmail").val(),
                mensagem: $("#txtMensagem").val()
            }, function(data) {
                $("#ng-message").html(data).fadeIn(300);
                $("input, textarea").val("");
            }, 'html');
        }
    });
    
    
});