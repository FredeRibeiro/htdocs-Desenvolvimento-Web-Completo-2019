<?php
$acao = 'recuperar';
require 'tarefa_controller.php';
?>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>App Lista Tarefas</title>

	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<script>
		function editar(id) {
			//criar um form de edição
			let form = document.createElement('form');

			form.action = '#';
			form.method = 'post';

			//criar um input para entrada do texto
			let inputTarefa = document.createElement('input');
			inputTarefa.type = 'text';
			inputTarefa.name = 'tarefa';
			inputTarefa.className = 'from_control';

			//criar um button para o envio do form
			let button = document.createElement('button');
			button.type = 'submit';
			button.clasName = 'btn btn-info';
			button.innerHTML = 'Atualizar';

			//incluir InputTarefa no Form
			form.appendChild(inputTarefa);

			//incluir button no Form
			form.appendChild(button);

			//Selcionar a DIV tarefa
			$tarefa = document.getElementById('tarefa_' + id);

			//Limpar o Texto da Tarefa para inclusão do Form
			tarefa.innerHTML = '';
		}
	</script>
</head>

<body>
	<nav class="navbar navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
				App Lista Tarefas
			</a>
		</div>
	</nav>

	<div class="container app">
		<div class="row">
			<div class="col-sm-3 menu">
				<ul class="list-group">
					<li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
					<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
					<li class="list-group-item active"><a href="#">Todas tarefas</a></li>
				</ul>
			</div>

			<div class="col-sm-9">
				<div class="container pagina">
					<div class="row">
						<div class="col">
							<h4>Todas tarefas</h4>
							<hr />

							<?php foreach ($tarefas as $index => $tarefa) { ?>
								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9" id="tarefa_<?= $tarefa->id ?>">
										<?= $tarefa->tarefa ?> (<?= $tarefa->status ?>)
									</div>
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger"></i>
										<i class="fas fa-edit fa-lg text-info" onclick="editar(<?= $tarefa->id ?>)"></i>
										<i class="fas fa-check-square fa-lg text-success"></i>
									</div>
								</div>
							<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>