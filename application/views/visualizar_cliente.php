 <?php $valorTotal = 0; ?>
 <div class="container">
     <div class="row">
        <div class="panel panel-primary">
          <div class="panel-heading">Dados do cliente</div>
          <div class="panel-body">
            <p><strong>Nome:</strong> <?php echo $Usuario[0]->nome; ?> </p> 
            <p><strong>Cpf:</strong> <?php echo $Usuario[0]->cpf; ?>  </p>  
            <p><strong>Vencimento:</strong> <?php echo $Usuario[0]->vencimento; ?> </p>
            <p><strong>Email:</strong> <?php echo $Usuario[0]->email; ?> </p>
            <p><strong>ddd:</strong> <?php echo $Usuario[0]->ddd; ?> </p>
            <p><strong>Telefone:</strong> <?php echo $Usuario[0]->telefone; ?> </p>
            <p><strong>Rua:</strong> <?php echo $Usuario[0]->rua; ?> </p>
            <p><strong>Cep:</strong> <?php echo $Usuario[0]->cep; ?> </p>
            <p><strong>Bairro:</strong> <?php echo $Usuario[0]->bairro; ?> </p>
            <p><strong>Cidade:</strong> <?php echo $Usuario[0]->cidade; ?> </p>
            <p><strong>Estado:</strong> <?php echo $Usuario[0]->estado; ?> </p>
            <p><strong>Veiculos:</strong>

                <?php foreach ($Veiculos as $carro):?>
                    <?php echo $carro->placa.' , ';  $valorTotal = $valorTotal + $carro->valor; ?>
                <?php endforeach; ?> 
            </p>
            <p><strong>Valor Total do contrato:</strong>  <?php echo 'R$' . number_format($valorTotal, 2, ',', '.');   ?> </p>

        </div>
    </div>
</div>
</div>