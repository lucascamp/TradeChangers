    $(document).ready(function() {
      function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      }

      function validateNome(nome) {
        return nome.indexOf(' ') !== -1;
      }
	  
	  function formatarNome(nome) {
		return nome.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
	  }
	  
	  function formatarEmail(email) {
		return email.toLowerCase();
	  }
	  
	  function enviarMensagemRuim(mensagem){
		  $('#success' + id).html("<div class='alert alert-danger'>");
          $('#success' + id + ' > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
          .append("</button>");
          $('#success' + id + ' > .alert-danger').append($("<strong>").text(mensagem));
          $('#success' + id + ' > .alert-danger').append('</div>');
          $('#contactForm').trigger("reset");
	  }

      $(".submit").click(function(e) {

        id = this.id;
        nome = formatarNome($('#nome' + id).val().trim());
        email = formatarEmail($('#email' + id).val().trim());

        var count_name = nome.length;

        if (!validateEmail(email)) {
          enviarMensagemRuim("E-mail Inválido, favor verificar.");
        } else if (!validateNome(nome)) {
          enviarMensagemRuim("Por favor insira seu nome completo.");
        } else {

          if (count_name > 0) {
            $.ajax({
              dataType: 'json',
              type: 'POST',
              url: 'form/saveForm',
              data: {
                nome_completo: nome,
                email: email,
                produto: 'Newsletter'
              },
              success: function(data) {
                if (data.type == 1) {
                  $('#success' + id).html("<div class='alert alert-success'>");
                  $('#success' + id + ' > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                  .append("</button>");
                  $('#success' + id + ' > .alert-success')
                  .append("<strong>Materiais enviado em seu e-mail com sucesso! </strong>");
                  $('#success' + id + ' > .alert-success')
                  .append('</div>');
                  $('#contactForm').trigger("reset");
                } else {
					enviarMensagemRuim('Erro! Tente novamente mais tarde!');
                }
              },
              error: function(jqXHR, exception) {
				  enviarMensagemRuim('Este email já foi utilizado, cheque sua caixa de entrada.');
              }
            });
          } else {
			  enviarMensagemRuim("Por favor insira seu nome completo.");
          }
        }

      });

    });