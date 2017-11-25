	<?php $this->tituloPagina="Lista de Compras"; ?>
	<?php $this->layout('layout.topo'); ?>

	<h2>Lista de Compras</h2>
	<a href="/compras/adicionar">Criar</a>
	<p>Lista de Compras</p>
	<ul>
		<?php foreach ($this->compras as $key => $value): ?>
			<li>
				<?php echo $value['titulo'].' - '.$value['desc'].'.'?>
				<a href="/compras/detalhe/<?php echo $value['id'] ?>"><button>Detalhe</button></a>
			</li>
		<?php endforeach ?>
	</ul>

	<?php $this->layout('layout.rodape'); 


