<div class="container">
	<div class="row">
		<?php if(isset($msg) && !empty($msg)): ?> 
			<div class="alert alert-warning alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?php echo $msg;?>
			</div>
		<?php endif; ?>
		<div class="panel panel-primary">
			<div class="panel-heading">CADASTRO DE VEÍCULOS
			</div>
			<div class="panel-body">
				<form action="/SGF/Cadastro/veiculos" method="POST">

					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="marca ">MARCA </label>  
								<input id="marca" type="text" size="70" maxlength="60"  name="marca" class="form-control"/>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="marca ">MODELO VEICULO </label>  
								<input id="modeloV" type="text" size="20" maxlength="30"  name="modeloV" class="form-control"/>
							</div>
						</div>
						<div class="col-md-3">
							<label for="ano ">ANO</label>  
							<input id="ano" type="number" size="10" maxlength="10"  name="ano" class="form-control"  />	
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="placa ">PLACA </label>  
								<input id="placa" type="text" size="8" maxlength="8" name="placa" class="form-control"  />	
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="modeloEq ">MODELO RASTREADOR </label>  
								<input id="modeloEq" type="text" size="8" maxlength="8"  name="modeloEq" class="form-control" /> 
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="serialEq ">SERIAL EQUIPAMENTO </label>  
								<input id="serialEq" type="text" size="11" maxlength="11" name="serialEq" class="form-control" />	
							</div>
						</div>
						<div class="col-md-3">
							<label for="chip ">CHIP</label>  
							<input id="chip" type="text" size="20" maxlength="20"  name="chip" class="form-control" />	
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="valor ">VALOR </label>  
								<input id="valor" type="number" size="5" maxlength="5"  name="valor" class="form-control" />		
							</div>
						</div>
					</div>
					<br><br>
					<div class="form-group pull-right">	
						<button type="submit"  class="btn btn-primary">Concluir  Cadastro!</button>
						<input type="reset"  class="btn btn-defaut" id="limpar" value="Limpar Campos preenchidos!" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
