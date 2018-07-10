<div class="container">
	<div class="row">
		<?php if(isset($msg) && !empty($msg)): ?> 
			<div class="alert alert-warning alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?php echo $msg;?>
			</div>
		<?php endif; ?>
		<br><br>
		<div class="panel panel-primary">
			<div class="panel-heading">PAINEL GERENCIAL</div>
			<div class="panel-body">
				
				
				<div class="row">
					<div class="container">
						<fieldset>
							<legend>Dados do cliente</legend>
							<p><strong>Nome:</strong> <?php echo $Usuario[0]->nome; ?></p>
							<p><strong>Cpf/cnpj:</strong> <?php echo $Usuario[0]->cpf; ?></p>
							<p><strong>Data vencimento:</strong> <?php echo $Usuario[0]->vencimento; ?></p>
						</fieldset>
					</div>
				</div>	
				<br><br>
				<div class="row">
					<div class="container">
						<form  action="/SGF/Cliente/vincularCarrosSelecionados" method="POST">
							<input type="hidden" name="idCliente" value="<?php echo $Usuario[0]->id; ?>">
							<div class="col-md-6">
								<fieldset>
									<legend>Veiculos cadastrados</legend>
									<?php if (!empty($lista_veiculos_cadastrados)):?>
										<table class="table table-hover">
											<tr >
												<th class="text-center">#</th>
												<th class="text-center">Marca</th>
												<th class="text-center">Modelo</th>
												<th class="text-center">Placa</th>

											</tr>
											<?php foreach ($lista_veiculos_cadastrados as  $veiculo):?>
												<tr class="text-center">
													<td>
														<div class="checkbox">
															<label>
																<input type="checkbox" checked  disabled value="<?php echo $veiculo->id; ?>" name="idCar[]">
															</label>
														</div>
													</td>
													<td><?php echo $veiculo->marca; ?></td>
													<td><?php echo $veiculo->modeloV; ?></td>
													<td><?php echo $veiculo->placa; ?></td>
												</tr>
											<?php endforeach; ?>
										</table>
									<?php else: ?>
										<div class="alert alert-info" role="alert">Não existe Veiculo cadastrado para este perfil</div>
									<?php endif; ?>
								</fieldset>
							</div>
							<div class="col-md-6">
								<fieldset>
									<legend>Veiculos não cadastrado</legend>
									<?php if (!empty($lista_veiculos)):?>
										<table class="table table-hover">
											<tr >
												<th class="text-center">#</th>
												<th class="text-center">Marca</th>
												<th class="text-center">Modelo</th>
												<th class="text-center">Placa</th>

											</tr>
											<?php foreach ($lista_veiculos as  $veiculo):?>
												<tr class="text-center">
													<td>
														<div class="checkbox">
															<label>
																<input type="checkbox"  value="<?php echo $veiculo->id; ?>" name="idCar[]">
															</label>
														</div>
													</td>
													<td><?php echo $veiculo->marca; ?></td>
													<td><?php echo $veiculo->modeloV; ?></td>
													<td><?php echo $veiculo->placa; ?></td>
												</tr>
											<?php endforeach; ?>
										</table>
									<?php else: ?>
										<div class="alert alert-info" role="alert">Não existe</div>
									<?php endif; ?>
								</fieldset>
							</div>
							<br>
							<div class="col-md-12">

								<div class="form-group pull-right">	
									<button type="submit"  class="btn btn-primary">Concluir  Cadastro!</button>
									<input type="reset"  class="btn btn-defaut" id="limpar" value="Limpar Campos preenchidos!" />
								</div>	
							</div>
						</form>
					</div>
				</div>

				
			</div>
		</div>
	</div>
</div>

