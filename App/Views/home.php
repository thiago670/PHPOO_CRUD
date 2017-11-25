	<?php 
		$this->tituloPagina="Home";
		include('layout/topo.php'); 
	?>

	<h2>Essa é a página principal</h2>
	<p>Lista de Compras</p>
	<ul>
		<?php foreach ($this->compras as $key => $value): ?>
			<li><?php echo $value['titulo'].' - '.$value['desc'].'.'?></li>
		<?php endforeach ?>
	</ul>

	<?php include('layout/rodape.php'); ?>
