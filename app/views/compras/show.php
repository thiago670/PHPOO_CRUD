	<?php $this->tituloPagina="Lista de Detalhes"; ?>
	<?php $this->layout('layout.topo'); ?>

	<h2>Lista de Detalhes</h2>
	<h3>Título: <?php echo $this->compras->titulo; ?></h3>
	<h3>Descrição: <?php echo $this->compras->desc; ?></h3>


	<?php $this->layout('layout.rodape'); 
