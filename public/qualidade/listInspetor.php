

<?php include("../Template/header.php") ?>
<?php include("../auth/validaQualidade.php") ?>
<?php include("../../data/connection.php") ?>

<br>
<br>
<br>

<body>
    
    <div style="margin-left: 100px; margin-right: 100px;">
        <h2>Inspetores</h2>

        <br>
        
    <div class="buttons">
                <a href="../qualidade/createInspetor.php" class="btn btn-primary">Cadastre um inspetor</a>
        </div>
    
    <br>
    <form method="POST" id="form-pesquisa" action="">
	<div class="input-group mb-3">
	<div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Pesquisar Inspetores</span>
                </div>
				<input type="text" name="pesquisa" class="form-control" id="pesquisa" aria-label="Default" placeholder="Digite nome do inspetor" aria-describedby="inputGroup-sizing-default">
	</div>
    </div>
		
    </form>
    <ul class="resultado">

	<?php include("listInspetorNoSearch.php") ?>

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

				$.post('listInspetorSearching.php', dados, function(retorna) {
					//Mostra dentro da ul os resultado obtidos 
					$(".resultado").html(retorna);
				});
			} else {
				$.post('listInspetorNoSearch.php', dados, function(retorna) {
					//Mostra dentro da ul os resultado obtidos 
					$(".resultado").html(retorna);
				});
			}
		});
	});
</script>