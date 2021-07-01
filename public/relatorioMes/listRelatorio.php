<?php include("../Template/header.php") ?>
<?php include("../../data/connection.php") ?>

<br>
<br>


<body>

	<div style="margin-left: 100px; margin-right: 100px;">

	<div class="card text-center">
			<div class="card-header">

			</div>
			<div class="card-body">
				<h5 class="card-title">OBSERVAÇÃO!</h5>
				<p class="card-text"></p>
				Para criar um relatório, selecione o botão "Gere um relatório", e em seguida selecione-o na tabela.<br> <br>

			</div>
			<div class="card-footer text-muted">

			</div>
		</div>
		<br>

		<h2>Acessar relatórios mensais</h2>

		<br>

		<div class="buttons">
			<a href="../relatorioMes/createRelatorio.php" class="btn btn-primary">Gere um relatório mensal</a>
		</div>

		<br>
		<form method="POST" id="form-pesquisa" action="">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-default">Pesquisar relatórios</span>
				</div>
				<input type="text" name="pesquisa" class="form-control" id="pesquisa" aria-label="Default" placeholder="Digite o ano ou o número do mês" aria-describedby="inputGroup-sizing-default">
			</div>
	</div>

	</form>
	<ul class="resultado">

		<?php include("listRelatorioNoSearch.php") ?>

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

				$.post('listRelatorioSearching.php', dados, function(retorna) {
					//Mostra dentro da ul os resultado obtidos 
					$(".resultado").html(retorna);
				});
			} else {
				$.post('listRelatorioNoSearch.php', dados, function(retorna) {
					//Mostra dentro da ul os resultado obtidos 
					$(".resultado").html(retorna);
				});
			}
		});
	});
</script>