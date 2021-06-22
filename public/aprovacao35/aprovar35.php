

<?php include("../Template/header.php");?>
<?php include("../auth/validaQualidade.php");?>
<?php include("../../data/connection.php"); ?>

<br>
<br>
<br>

<body>
    
    <div style="margin-left: 100px; margin-right: 100px;">
        <h2>Planilhas de controle</h2>

        <br>
        
   
    
    <br>
    <form method="POST" id="form-pesquisa" action="">
	<div class="input-group mb-3">
	<div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Pesquisar planilhas de controle</span>
                </div>
				<input type="text" name="pesquisa" class="form-control" id="pesquisa" aria-label="Default" placeholder="Digite o número da etiqueta" aria-describedby="inputGroup-sizing-default">
	</div>
    </div>
		
    </form>
    <ul class="resultado">

	<?php include("aprovar35NoSearch.php") ?>

	</ul>
</body>
<script>
	$(function() {

		$("#pesquisa").keyup(function() {
			//Recuperar o valor do campo
			var pesquisa = $(this).val();

			//Verificar se há algo digitado
			if (pesquisa != '') {
				var dados = {
					palavra: pesquisa
				}

				$.post('aprovar35Searching.php', dados, function(retorna) {
					//Mostra dentro da ul os resultado obtidos 
					$(".resultado").html(retorna);
				});
			} else {
				$.post('aprovar35NoSearch.php', dados, function(retorna) {
					//Mostra dentro da ul os resultado obtidos 
					$(".resultado").html(retorna);
				});
			}
		});
	});
</script>