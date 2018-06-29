<div class="container">
	<div class="row">
	<?php if(isset($msg) && !empty($msg)): ?> 
	<div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $msg;?>
	</div>
	<?php endif; ?>
		<div class="panel panel-primary">
			<div class="panel-heading">CADASTRO DE CLIENTES</div>
			   <div class="panel-body">
			   <form  action="/SGF/Cadastro/clientes" method="POST">
					<div class="form-group">
							<label for="nome ">NOME </label>  
							<input id="nome" type="text" size="70" maxlength="60" name="nome" class="form-control"/>
						</div>
						<div class="form-group">	
							<label for="cpf ">CPF/CNPJ </label>  
							<input id="cpf" type="text" size="20" maxlength="30"  name="cpf" class="form-control" />	
						</div>
						<div class="form-group">	
							<label for="vencimento ">VENCIMENTO</label>  
							<input id="vencimento" type="date" size="10" maxlength="10" name="vencimento" class="form-control" />	
						</div>
						<div class="form-group">	
							<label for="email ">E-MAIL </label>  
							<input id="email" type="email" size="70" maxlength="60" name="email" class="form-control" />	
						</div>
						<div class="form-group">	
							<label for="ddd ">DDD </label>  
							<input id="ddd" type="text"size="3" maxlength="3" name="ddd" class="form-control" />	
						<div class="form-group">	
							<label for="telefone ">TELEFONE </label>  
							<input id="telefone" type="text" size="11" maxlength="11" name="telefone" class="form-control" />	
						</div>
						<div class="form-group">	
							<label for="rua ">RUA </label>  
							<input id="rua" type="text" size="70" maxlength="70" name="rua" class="form-control" />	
						</div>
						<div class="form-group">	
							<label for="cep ">CEP </label>  
							<input id="cep" type="text" size="9" maxlength="9" name="cep" class="form-control" />	
						</div>
						<div class="form-group">	
							<label for="bairro ">BAIRRO </label>  
							<input id="bairro" type="text" size="30" maxlength="30" name="bairro" class="form-control" />	
						</div>
						<div class="form-group">	
							<label for="cidade ">CIDADE </label>  
							<input id="cidade" type="text" size="20" maxlength="20" name="cidade" class="form-control" />	
						</div>
						<div class="form-group">	
							<label for="estado ">ESTADO </label>  
							<input id="estado" type="text" size="30" maxlength="2" name="estado" class="form-control" />	
						</div>
						
						<div class="form-group">	
						<button type="submit"  class="btn btn-primary">Concluir  Cadastro!</button>
						<input type="reset"  class="btn btn-defaut" id="limpar" value="Limpar Campos preenchidos!" />
				</form>
			</div>
		</div>
	</div>
</div>

