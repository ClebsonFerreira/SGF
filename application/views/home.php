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
								<th class="text-center">Vencimento</th>
								<th class="text-center">Veiculo</th>
								<th class="text-center">Ações</th>
							</tr>
							<?php foreach ($ListaUsuario as $key => $linha):?>
								<tr class="text-center">
									<td><?php echo $linha->nome; ?></td>
									<td><?php echo $linha->vencimento; ?></td>
									<td>
										<?php if (!empty($placa[$key])):?>
											
											<?php foreach ($placa[$key] as $key2=>$veiculos):?>
												<?php if($veiculos->id_cliente == $linha->id):?>
													<?php echo $placas = $key2==0 ? $veiculos->placa : ', '.$veiculos->placa; ?>
												<?php endif; ?>
											<?php endforeach; ?>
										<?php else: ?>
											<p>Nenhum veiculo informado</p>
										<?php endif; ?>
									</td>
									<td>
										<a href="<?php echo base_url();?>Cliente/pesquisarID/<?php echo $linha->id; ?>" class="btn btn-primary" title="Visualizar"><span class="glyphicon glyphicon-eye-open"></span> </a> &nbsp;&nbsp;
										<a href="<?php echo base_url();?>Cliente/vincularCarros/<?php echo $linha->id; ?>" class="btn btn-primary" title="Adicionar Veiculos"><span class="glyphicon glyphicon-plus"> </span></a>
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
					<form class="form-inline" action="/SGF/Home/pesquisar" method="POST">
						<div class="form-group">
							<input type="text" id="placa" name="pesquisa_veiculos" class="form-control" placeholder="Pesquisar por Placa"  autocomplete="off" maxlength="7">
						</div>
						<button type="submit" class="btn btn-default" name="pesquisa_veiculo" value="1"><span class="glyphicon glyphicon-search"></span>  Pesquisar</button>
						<button type="submit" class="btn btn-default" name="listarTodos_veiculo" value="2"><span class="glyphicon glyphicon-list"></span>  Listar Todos</button>
						<button type="submit" class="btn btn-default" name="Limpar_veiculo" value="3"><span class="glyphicon glyphicon-check"></span>  Limpar </button>
					</form>
				</div>
			</div>
			<?php if(isset($ListaVeiculos) && !empty($ListaVeiculos)): ?> 
				<div class="panel panel-default">
					<div class="panel-heading">Lista de Veículos Cadastrado</div>
					<div class="panel-body">
						<table class="table table-hover">
							<tr >

								<!-- <th class="text-center">Modelo</th> -->
								<th class="text-center">Placa</th>
								<th class="text-center">Modelo Equipamento</th>
								<th class="text-center">Chip operadora</th>
								<th class="text-center">Valor contrato</th>
								<th class="text-center">Cliente veículo</th>
								<th class="text-center">Ações</th>
								
							</tr>
							<?php foreach ($ListaVeiculos as $linha):?>
								<tr class="text-center">

									<!-- <td><?php echo $linha->modeloV; ?></td> -->
									<td><?php echo $linha->placa; ?></td>
									<td><?php echo $linha->modeloEq; ?></td>
									<td><?php echo $linha->chip; ?></td>
									<td><?php echo $linha->valor; ?></td>
									<td><?php echo $linha->nome; ;?></td>

									<td>
										<a href="<?php echo base_url();?>Veiculos/pesquisarID/<?php echo $linha->id; ?>" class="btn btn-primary" title="Visualizar"><span class="glyphicon glyphicon-eye-open"></span> </a> &nbsp;&nbsp;
										<!-- <a href="<?php echo base_url();?>" class="btn btn-primary" title="Editar"><span class="glyphicon glyphicon-pencil"> </span></a> -->
									</td>
								</tr>
							<?php endforeach; ?>
						</table>
					</div>
				</div>
			<?php endif; ?>
			
		</form>
	</div>
</div>






