<?php
	
	//Variaveis de POST (atributo name do form)
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone =$_POST['telefone'];
	$mensagem = $_POST['mensagem'];
	
	//REMETENTE QUEM MANDA
 	$email_remetente = $email; 	 
	 
	//Configurações do email, ajustar conforme necessidade
	
	$email_destinatario = "luiz_silva98@hotmail.com"; // qualquer email pode receber os dados
	$email_assunto = "Contato do Site LAMTEC";
	
	 
	//Monta o Corpo da Mensagem
	
	$email_conteudo = "Nome: $nome \n"; 
	$email_conteudo .= "Email: $email \n"; 
	$email_conteudo .= "Telefone: $telefone \n";
	$email_conteudo .=  "Mensagem: $mensagem \n";
 	 
	//Seta os Headers (parâmetros de configuração do envio de email)
	
	$email_headers = implode ( "\n",array ( "De: $email_remetente", "Destinarario: $email_destinatario", "Assunto: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: //3","Content-Type: text/html; charset=UTF-8" ) );
	 
	//Enviando o email
	
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
		echo "Formulário enviado com sucesso";
				
	}else{
		echo "Falha no envio do formulário";		
	}
?>