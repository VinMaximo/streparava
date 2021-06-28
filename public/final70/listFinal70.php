

<?php include("../Template/header.php") ?>
<?php include("../../data/connection.php") ?>

<br>
<br>
<br>

<body>
    
    <div style="margin-left: 100px; margin-right: 100px;">
        <h2>Levantamentos de produção - G70</h2>

        <br>
        
    <div class="buttons">
                <a href="../final70/createFinal70.php" class="btn btn-primary">Cadastre um levantamento diário de produção</a>
        </div>
    
    <br>
    <form method="POST" id="form-pesquisa" action="">
	<div class="input-group mb-3">
	<div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Pesquisar por levantamento diário</span>
                </div>
				<input type="text" name="pesquisa" class="form-control" id="pesquisa" aria-label="Default" placeholder="Digite a data (Formato de pesquisa ''ano-mês-dia'' ou o número da etiqueta)" aria-describedby="inputGroup-sizing-default">
	</div>
    </div>
		
    </form>
    <ul class="resultado">

	<?php include("../final70/listFinal70NoSearch.php") ?>

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

				$.post('listFinal70Searching.php', dados, function(retorna) {
					//Mostra dentro da ul os resultado obtidos 
					$(".resultado").html(retorna);
				});
			} else {
				$.post('listFinal70NoSearch.php', dados, function(retorna) {
					//Mostra dentro da ul os resultado obtidos 
					$(".resultado").html(retorna);
				});
			}
		});
	});
</script>