<?php 
	session_start();
	include ("conecta.php");

	if((!isset ($_SESSION['emailLogin']) == true) and (!isset ($_SESSION['senhaLogin']) == true))
	{
		unset($_SESSION['emailLogin']);
		unset($_SESSION['senhaLogin']);
		header('location:tela_login.php');
	}
	
	$emailLogin = $_SESSION['emailLogin'];

	$_SESSION['valor_total'] += $_GET['valor'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sumé</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Formulário de especificações</title>

	<!-- CSS Links -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/1140.css">
</head>
	<body class="general-sume-intro">
	<div class="container-full" id="white-menu">
		<header>
			<div class="row nav-top">
				<div class="container12">
					<div class="row">
						<div class="column3" id="logo-menu">
							<img src="http://sume.esy.es/images/logo-sume-3x.png" id="logo-menu-img" alt="Sumé"/>	
						</div>
						<div class="column9">	
							<div class="menu-buttom" id="menu">
								Menu
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>	
	<div class="menu-area" id="green-menu">
		<div class="container-full">
			<header>
				<div class="row nav-top" id="nav-top-green">
					<div class="container12">
						<div class="row">
							<div class="column3" id="logo-menu">
								<img src="http://sume.esy.es/images/logo-sume-white-3x.png" id="logo-menu-img" alt="Sumé"/>	
							</div>
							<div class="column9">	
								<div class="menu-buttom" id="menu-white">
									Fechar
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>
		<div class="container12">
			<div class="row line-menu">
				<div class="colum1">
					<div class="ico-ensinamentos"></div>
				</div>	
				<div class="column10">
					<a href="http://sume.esy.es/dashboard.php" class="text-menu">
						<h4 class="h500" id="acessar-margin">Ensinamentos</h4>
					</a>
				</div>
			</div>
		</div>
		<div class="container12">
			<div class="row line-menuC">
				<div class="colum1">
					<div class="ico-akatus"></div>
				</div>	
				<div class="column10">
					<a href="http://sume.esy.es/akatus.php" class="text-menu">
						<h4 class="h500" id="akatu-margin">Akatus</h4>
					</a>
				</div>
			</div>
		</div>	
		<div class="full-line-separator"></div>
		<div class="container12">
			<div class="row">
				<div class="colum1">
					<div class="ico-sair"></div>
				</div>	
				<div class="column10">
					<a href="http://sume.esy.es/logout.php" class="text-menu">
						<h4 class="h500" id="sair-margin">Sair</h4>
					</a>
				</div>
			</div>
		</div>		
	</div>				
		<div class="container-full progress-bar hide" id="progress">
			<div class="container12">
				<div class="row">
					<div class="column12 green-progress1 w0" id="percentage"></div>					
				</div>
			</div>
		</div>
	    <div class="tab-content container12">
	        <div id="full-tab" class="tab active">
	          <div id="box-form">
					<form name="formftrg" action="validacao_filtragem.php" method="post">
						<div class="tab" id="TabConhecer">		
				          	<div class="row margin-20">
								<h3>Sumé, o Deus do conhecimento, deseja te conhecer!</h3>
							</div>						
							<div class="row margin-10">
								<h4 id="h4-500">São apenas 4 perguntas</h4>
							</div>
							<div class="row margin-275">
								<div class="column12">
									<div class="buttom-with-text">	
										<a class="step-buttom" href="#" id="go-to-TabNome" onClick="showTabNome()">
											Preencher Perfil
										</a>
									</div>
								</div>	
							</div>
						</div>
						<div id="TabNome" class="tab">	
						<div class="row margin-20">					
							<h3>Como você se <br/>chama?</h3>
						</div>
							<div class="row margin-30">   
	                            <input name="nome" type="text" id="nome" placeholder="Insira nome ou apelido" maxlength="255" required="required"/>
	                            <div class="row step_nav" id="nav-line">
									<div class="back-buttom circle-buttom">
										<a class="step-buttom" href="#" id="back-to-TabConhecer" onClick="showTabConhecer()">
											<img src="http://sume.esy.es/images/progress-back-icon.svg" alt="back-buttom" id="circle-buttom-align"/>
										</a>
									</div>
									<div class="next-buttom circle-buttom">
										<a class="step-buttom" href="#" id="go-to-TabResidencia" onClick="showTabResidencia()">
											<img src="http://sume.esy.es/images/progress-next-icon.svg" alt="next-buttom" id="circle-buttom-align"/>	
										</a>
									</div>
								</div> 
							</div>		
						</div>		
						<div id="TabResidencia" class="tab">	
						<div class="row margin-20"> 				
							<h3>Como é a sua residência?</h3>
						</div>
							<div class="row margin-30">
								<h5>Tipo</h5>	
								<div class="row margin-10"></div>
								<select name="tipores">
								    <option class="dropstyle" value="Casa">Casa</option>
	                                <option class="dropstyle" value="Apartamento">Apartamento</option>
								</select>							
								<div class="row margin-20"></div>
								<h5>Espaço disponível</h5>
								<div class="row margin-10"></div>
								<select name="espaco">
								    <option class="dropstyle" value="Pouco">Pouco</option> 
	                                <option class="dropstyle" value="Moderado">Moderado</option>
	                                <option class="dropstyle" value="Muito">Muito</option>
								</select>
								<div class="row step_nav" id="nav-line">
									<div class="back-buttom circle-buttom">
										<a class="step-buttom" href="#" id="back-to-TabNome" onClick="showTabNome()">
											<img src="http://sume.esy.es/images/progress-back-icon.svg" alt="back-buttom" id="circle-buttom-align"/>
										</a>
									</div>
									<div class="next-buttom circle-buttom">
										<a class="step-buttom" href="#" id="go-to-TabFloresta" onClick="showTabFloresta()">
											<img src="http://sume.esy.es/images/progress-next-icon.svg" alt="next-buttom" id="circle-buttom-align"/>	
										</a> 
									</div>
								</div>
							</div>
						</div>
						<div id="TabFloresta" class="tab">	
						<div class="row margin-20">						
							<h3>Onde você irá espalhar o verde?</h3>
						</div>      
							<div class="row margin-15">   
	                            <h5>CEP:</h5>
								<div class="row margin-10"></div>
	                            <input name="cep" type="text" id="cep" size="10" maxlength="9" onblur="pesquisacep(this.value);" onKeyPress="MascaraCep(formftrg.cep);" novalidate />	                            
								<div class="row margin-20"></div>
	                            <h5>Cidade:</h5>
								<div class="row margin-10"></div>
	                            <input name="cidade" type="text" id="cidade" size="40" />     
								<div class="row margin-20"></div>
	                            <h5>Estado:</h5>
								<div class="row margin-10"></div>
	                            <input name="uf" type="text" id="uf" size="2" /></label>      
								<div class="row step_nav" id="nav-line">
									<div class="back-buttom circle-buttom">
										<a class="step-buttom" href="#" id="back-to-TabResidencia" onClick="showTabResidencia()">
											<img src="http://sume.esy.es/images/progress-back-icon.svg" alt="back-buttom" id="circle-buttom-align"/>
										</a>
									</div>
									<div class="next-buttom circle-buttom">
										<a class="step-buttom" href="#" id="go-to-TabNascimento" onClick="showTabNascimento()">
											<img src="http://sume.esy.es/images/progress-next-icon.svg" alt="next-buttom" id="circle-buttom-align"/>	
										</a>
									</div>
								</div> 
							</div>		
						</div>	
						<div id="TabNascimento" class="tab">
							<div class="row margin-20S">		 						
								<h3>Qual é a sua data<br/> de nascimento?</h3>
							</div>							
							<div class="row margin-20">
								<input name="nascimento" maxlength="10" id="nascimento" type="text" required="" onKeyPress="MascaraData(formftrg.nascimento);"/><br/>
								<div class="row step_nav" id="nav-line">
									<div class="back-buttom circle-buttom">
										<a class="step-buttom" href="#" id="back-to-TabFloresta" onClick="backTabFloresta()">
											<img src="http://sume.esy.es/images/progress-back-icon.svg" alt="back-buttom" id="circle-buttom-align"/>
										</a>	
									</div>		
									<div class="next-buttom circle-buttom">	
												<input type="image" name="finalizar" id="finalizarCadastro" value="submit" src="http://sume.esy.es/images/progress-next-icon.svg" alt="back-buttom" class="circle-buttom-align" /> 
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
	        </div> 
   		</div>
	</div>
	</body>

	<!-- Scripts embedados JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>	
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

	<!-- Esconder e mostrar tabs -->
	<script language="javascript" type="text/javascript">
	var k = $("#TabAlimenticio"); /* setar variavel */
		$(document).ready(function hide(){
			$("#TabNome").hide();
            $("#TabNascimento").hide();
            $("#TabResidencia").hide();
            $("#TabFloresta").hide();
        });	


			$("#go-to-TabNome").click(function showTabNome(){	
				$("body").removeClass( "general-sume-intro" ).addClass( "general-flower-credenciamento" );
				$("#progress").removeClass( "hide" ).addClass( "show" );
				$("#percentage").removeClass( "w0" ).addClass( "w1" );
				$("#TabConhecer").hide();
		        $("#TabNome").show(); 
		    });

		    $("#back-to-TabConhecer").click(function showTabConhecer(){		
		        $("body").removeClass( "general-flower-credenciamento" ).addClass( "general-sume-intro" );
				$("#percentage").removeClass( "w1" ).addClass( "w0" );
				$("#progress").removeClass( "show" ).addClass( "hide" );
		        $("#TabNome").hide();  	 
				$("#TabConhecer").show();
		    });	
		    $("#go-to-TabResidencia").click(function showTabResidencia(){	
		        d = document.formftrg;
			
				if(d.nome.value == ""){
					d.nome.focus();
					return false;
				}
				else{
					$("#percentage").removeClass( "w1" ).addClass( "w2" );
			    	$("#TabNome").hide();
		       		$("#TabResidencia").show();
		    	}
			});


		    $("#back-to-TabNome").click(function showTabNome(){
				$("#percentage").removeClass( "w2" ).addClass( "w1" );
				$("#TabResidencia").hide();	
		        $("#TabNome").show();  	 
		    });
		    $("#go-to-TabFloresta").click(function showTabFloresta(){	
					$("#percentage").removeClass( "w2" ).addClass( "w3" );		    	      
			        $("#TabResidencia").hide();
			        $("#TabFloresta").show();  
		    });

			$("#back-to-TabResidencia").click(function backTabResidencia(){	
				$("#percentage").removeClass( "w3" ).addClass( "w2" );	
		        $("#TabFloresta").hide();	        
		        $("#TabResidencia").show();  
		    });
		    $("#go-to-TabNascimento").click(function showTabNascimento(){		        
		        d = document.formftrg;
			
				if(d.cep.value == ""){
					d.cep.focus();
					return false;
				}	
				else{  
					$("#percentage").removeClass( "w3" ).addClass( "w4" );
					$("#TabFloresta").hide();
			        $("#TabNascimento").show(); 
		        } 
		    });

		    $("#back-to-TabFloresta").click(function backTabFloresta(){	
				$("#percentage").removeClass( "w4" ).addClass( "w3" );	        
		        $("#TabNascimento").hide();
		        $("#TabFloresta").show();  
		    });
	</script>

	<script type="text/javascript">
		function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
		}
		
		function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    } 	
	function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
	</script>
	<script type="text/javascript">

	var select = document.getElementById('dropList');
		select.onchange = function () {
    	select.className = this.options[this.selectedIndex].className;
	}

	</script>
	<script type="text/javascript">
		function MascaraData(nascimento){
	        if(mascaraInteiro(nascimento)==false){
	                event.returnValue = false;
	        }       
	        return formataCampo(nascimento, '00/00/0000', event);
		}

		function MascaraCep(cep){
                if(mascaraInteiro(cep)==false){
                event.returnValue = false;
        }       
        return formataCampo(cep, '00000-000', event);
		}

		//valida numero inteiro com mascara
		function mascaraInteiro(){
		        if (event.keyCode < 48 || event.keyCode > 57){
		                event.returnValue = false;
		                return false;
		        }
		        return true;
		}
		//formata de forma generica os campos
		function formataCampo(campo, Mascara, evento) { 
		        var boleanoMascara; 

		        var Digitato = evento.keyCode;
		        exp = /\-|\.|\/|\(|\)| /g
		        campoSoNumeros = campo.value.toString().replace( exp, "" ); 

		        var posicaoCampo = 0;    
		        var NovoValorCampo="";
		        var TamanhoMascara = campoSoNumeros.length;; 

		        if (Digitato != 8) { // backspace 
		                for(i=0; i<= TamanhoMascara; i++) { 
		                        boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
		                                                                || (Mascara.charAt(i) == "/")) 
		                        boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(") 
		                                                                || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " ")) 
		                        if (boleanoMascara) { 
		                                NovoValorCampo += Mascara.charAt(i); 
		                                  TamanhoMascara++;
		                        }else { 
		                                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo); 
		                                posicaoCampo++; 
		                          }              
		                  }      
		                campo.value = NovoValorCampo;
		                  return true; 
		        }else { 
		                return true; 
		        }
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
		  $('#showPassword').on('click', function(){
		    
		    var passwordField = $('#senha');
		    var passwordFieldType = passwordField.attr('type');
		    if(passwordFieldType == 'password')
		    {
				$("#showPassword").removeClass("lessReveal").addClass("moreReveal");
		        passwordField.attr('type', 'text');
		        $(this).val('Hide');
		    } else {
				$("#showPassword").removeClass("moreReveal").addClass("lessReveal");
		        passwordField.attr('type', 'password');
		        $(this).val('Show');
		    }
		  });
		});

		$("#green-menu").hide();

		$('#menu').on('click', function(){
			$("#green-menu").show();
			$("#white-menu").hide();
			$("#nav-line").hide();

		});
		$('#menu-white').on('click', function(){
			$("#white-menu").show();
			$("#green-menu").hide();
			$("#nav-line").show();
		});
		$('#sair-margin').on('click', function(){
			myWindow.close();   // Closes the new window
		});
	</script>
</html>