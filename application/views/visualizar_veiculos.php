<div class="container">
	<div class="row">
        <div class="panel panel-primary">
		    <div class="panel-heading">Dados do Veículo</div>
			<div class="panel-body">
                <p><strong>Marca:</strong> <?php echo $veiculo[0]->marca; ?> </p> 
                <p><strong>Modelo Veiculo:</strong> <?php echo $veiculo[0]->modeloV; ?>  </p>  
                <p><strong>Ano fabricação:</strong> <?php echo $veiculo[0]->ano; ?> </p>
                <p><strong>Placa:</strong> <?php echo $veiculo[0]->placa; ?> </p>
                <p><strong>Modelo Rastreador:</strong> <?php echo $veiculo[0]->modeloEq; ?> </p>
                <p><strong>Serial Rastreador:</strong> <?php echo $veiculo[0]->serialEq; ?> </p>
                <p><strong>Chip de dados:</strong> <?php echo $veiculo[0]->chip; ?> </p>
                <p><strong>Valor Mensalidade:</strong> <?php echo $veiculo[0]->valor; ?> </p>
                <p><strong>Cliente Veiculo:</strong> <?php echo $veiculo[0]->nome; ?> </p>
                <p><strong>Soma Valores:</strong> <?php echo $veiculo[0]->soma_valores; ?> </p>    
            </div>
        </div>
    </div>
</div>