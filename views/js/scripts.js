// Inicia o jQuery
$(function(){
 
	// Cria uma variável que vamos utilizar para verificar se o
	// formulário está sendo enviado
	var enviando_formulario = false;
	
	// Captura o evento de submit do formulário
	$('.form_clientes').submit(function(){
		
		// O objeto do formulário
		var obj = this;
		
		// O objeto jQuery do formulário
		var form = $(obj);
		
		// O botão de submit
		var submit_btn = $('.form_clientes :submit');
		
		// O valor do botão de submit
		var submit_btn_text = submit_btn.val();
 
		// Dados do formulário
		var dados = new FormData(obj);
		
		// Retorna o botão de submit ao seu estado natural
		
		// Não envia o formulário se já tiver algum envio
		if ( ! enviando_formulario  ) {		
		
			// Envia os dados com Ajax
			$.ajax({
				// Antes do envio
				beforeSend: function() {
					// Configura a variável enviando
					enviando_formulario = true;
					
					// Adiciona o atributo desabilitado no botão
					submit_btn.attr('disabled', true);
					
					// Modifica o texto do botão
					submit_btn.val('Enviando...');
					
					// Remove o erro (se existir)
					$('.error').remove();
				}, 
				
				// Captura a URL de envio do form
				url: form.attr('action'),
				
				// Captura o método de envio do form
				type: form.attr('method'),
				
				// Os dados do form
				data: dados,
				
				// Não processa os dados
				processData: false,
				
				// Não faz cache
				cache: false,
				
				// Não checa o tipo de conteúdo
				contentType: false,
				
				// Se enviado com sucesso
				success: function( data ) {	
					$("#name").val('');
					$("#email").val('');
					$("#site").val('');
					$("#inquiry").val('');
					submit_btn.attr('disabled', false);
				}
			});
		}
		
		// Anula o envio convencional
		return false;
		
	});
});
