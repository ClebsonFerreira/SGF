<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">Clientes</div>
				<div class="panel-body">
					<form class="form-inline" action="/SGF/Home/pesquisar" method="POST">
						<div class="form-group">
							<input type="text" name="pesquisa_cliente" class="form-control" placeholder="Pesquisar por nome"  autocomplete="off">
						</div>
							<button type="submit" class="btn btn-default" name="pesquisa" value="1"><span class="glyphicon glyphicon-search"></span>  Pesquisar</button>
							<button type="submit" class="btn btn-default" name="listarTodos" value="2"><span class="glyphicon glyphicon-list"></span>  Listar Todos</button>
							<button type="submit" class="btn btn-default" name="Limpar" value="3"><span class="glyphicon glyphicon-check"></span>  Limpar </button>
					</form>
				</div>
			</div>
			<?php if(isset($ListaUsuario) && !empty($ListaUsuario)): ?> 
				<div class="panel panel-default">
					<div class="panel-heading">Lista de Clientes Cadastrados</div>
					<div class="panel-body">
						<table class="table table-hover">
							<tr >
								<th class="text-center">Nome</th>
								<th class="text-center">Email</th>
								<th class="text-center">Telefone</th>
								<th class="text-center">Ações</th>
							</tr>
							<?php foreach ($ListaUsuario as $linha):?>
							<tr class="text-center">
								<td><?php echo $linha->nome; ?></td>
								<td><?php echo $linha->email; ?></td>
								<td><?php echo $linha->telefone; ?></td>
								<td>
									<a href="<?php echo base_url();?>Cliente/pesquisarID/<?php echo $linha->id; ?>" class="btn btn-primary" title="Visualizar"><span class="glyphicon glyphicon-eye-open"></span> </a> &nbsp;&nbsp;
									<!-- <a href="<?php echo base_url();?>" class="btn btn-primary" title="Editar"><span class="glyphicon glyphicon-pencil"> </span></a> -->
								</td>
							</tr>
							<?php endforeach; ?>
						</table>
					</div>
				</div>
            <?php endif; ?>
			
		</div>
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">Veiculos</div>
				<div class="panel-body">
					<form class="form-inline"  method="GET">
						<div class="form-group">
							<input type="text" name="pesquisa_veiculo" class="form-control" placeholder="Pesquisar por placa ">
						</div>
						<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>  Pesquisar</button>
				
				</form>
						<form class="form-inline" action="listar/listar_veiculo.php" method="GET">
						<div class="form-group">
					
							</div>
						<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-list"></span>  Listar Todos</button>
						
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

						 