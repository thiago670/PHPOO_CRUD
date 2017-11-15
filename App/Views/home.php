<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
</head>
<body>
	<h2>Essa é a página principal</h2>
	    <p>Lista de Compras</p>
	    <ul>
		    <?php 
			    foreach ($this->compras as $key => $value):  
			    	echo '<li>'.$value["titulo"].' - '.$value["desc"].'</li>';
			    endforeach 
		    ?>
		</ul>
</body>
</html>