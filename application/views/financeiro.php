<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading">Clientes Cadastrados</div>
				<div class="panel-body">
					<h1><?php echo count($Clientes);?></h1>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading">Veiculos Cadastrados</div>
				<div class="panel-body">
					<h1><?php echo count($Veiculos);?></h1>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading">Valor Total dos contratos</div>
				<div class="panel-body">
					<h1><?php echo 'R$' . number_format($totalPagamento, 2, ',', '.');   ?></h1>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Lista de Cliente</div>
				<div class="panel-body">
					<form action="/SGF/Financeiro/pesquisar" method="POST">
						<div class="row">
							<div class="container">
								<div class="col-md-8">
									<div class="form-group">
										<input type="text" name="pesquisa_cliente" class="form-control" placeholder="Pesquisar por nome"  autocomplete="off">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<button type="submit" class="btn btn-default" name="pesquisa" value="1"><span class="glyphicon glyphicon-search"></span>  Pesquisar</button>
										<button type="submit" class="btn btn-default" name="listarTodos" value="2"><span class="glyphicon glyphicon-list"></span>  Listar Todos</button>
									</div>
								</div>
							</div>
						</div>

					</form>
				
					<table class="table table-hover">
						<tr >
							<th class="text-center">Nome</th>
							<th class="text-center">Vencimento</th>
							<th class="text-center">Valor Contrato</th>
							<th class="text-center">Status Pagamento</th>
						</tr>
						<?php foreach ($Clientes as $key => $linha):?>
							<tr class="text-center">
								<td><?php echo $linha->nome; ?></td>
								<td><?php echo $linha->vencimento; ?></td>
								<td>
									<?php if (!empty($valor_total[$key][0]->valor)):?>
										<?php echo 'R$' . number_format($valor_total[$key][0]->valor, 2, ',', '.');   ?> 
									<?php else: ?>
										<?php echo 'R$' . number_format(0, 2, ',', '.');   ?> 
									<?php endif; ?>

								</td>
								<td>
									<select class="form-control" disabled>
										<option  <?php echo ($linha->status == 'T')?'selected':''?> >Sim</option>
										<option <?php echo ($linha->status == 'F')?'selected':''?>>Não</option>
									</select>
								</td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>