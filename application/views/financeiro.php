<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>


<div class="container">
	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-heading">BALANÇO FINANCEIRO</div>
			   <div class="panel-body">
				<form method="post" action="controller/cadastroV.php" >
				
		<div class="form-group">
		<label for="marca ">MARCA </label>  
		<input id="marca" type="text" size="70" maxlength="60"  name="marca" class="form-control"  />
		</div>
		<div class="form-group">	
	    <label for="modeloV ">MODELO VEICULO </label>  
		<input id="modeloV" type="text" size="20" maxlength="30"  name="modeloV"class="form-control"  />	
		</div>
		<div class="form-group">	
	    <label for="ano ">ANO</label>  
		<input id="ano" type="number" size="10" maxlength="10"  name="ano" class="form-control"  />	
		</div>
		<div class="form-group">	
	    <label for="placa ">PLACA </label>  
		<input id="placa" type="text" size="8" maxlength="8" name="placa" class="form-control"  />	
		</div>
		<div class="form-group">	
	    <label for="modeloEq ">MODELO RASTREADOR </label>  
		<input id="modeloEq" type="text"size="8" maxlength="8"  name="modeloEq" class="form-control" /> 
		
		<div class="form-group">	
	    <label for="serialEq ">SERIAL EQUIPAMENTO </label>  
		<input id="serialEq" type="text" size="11" maxlength="11" name="serialEq" class="form-control" />	
		</div>
		
		<div class="form-group">	
	    <label for="chip ">CHIP</label>  
		<input id="chip" type="text" size="20" maxlength="20"  name="chip" class="form-control" />	
		</div>
		
		<div class="form-group">	
	    <label for="valor ">VALOR </label>  
		<input id="valor" type="number" size="5" maxlength="5"  name="valor" class="form-control" />	
		
   </div>
				
				<div class="form-group">	
				<input name="controller/cadastroV.php" type="submit"  class="btn btn-primary" id="controller/cadastroV.php" value="Concluir  Cadastro!" />
 				<input type="reset"  class="btn btn-defaut" id="limpar" value="Limpar Campos preenchidos!" />
				</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('template/menudown.php'); ?>
<?php include('template/footer.php'); ?>
