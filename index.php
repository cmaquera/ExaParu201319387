<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application | Examen Parcial</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
	<!--<link rel="stylesheet" href="style.css" />-->
</head>
<body>
	<div class="header text-center">
		<div>
			<h1>Examen Parcial de Soluciones Moviles y Cloud</h1>
		</div>
		<img style="width: 100%;" src="../images/header.png" >
	</div>
	<div class="content">
	    <div class="container">
	    	<div class="row">  	                      
                              
                <table class="table">
                	<thead>
                		<tr>
                			<td></td>
                			<td><b>Servicios</b></td>
                			<td><b>Descripción</b></td>
                		</tr>
                	</thead>
                	<tbody>
					  <?php
					  $servername = "us-cdbr-iron-east-03.cleardb.net";
					  $username = "b74ba3320e82ec";
					  $password = "2d194843";
					  $dbname = "ad_bb6ddb2f34daf52";
					 
					  // Create connection
					  $conn = new mysqli($servername, $username, $password, $dbname);
					  // Check connection
					  if ($conn->connect_error) {
					      die("Connection failed: " . $conn->connect_error);
					  }
					  $sql = "SELECT * from servicios";
					  $result = $conn->query($sql);
					  if ($result->num_rows > 0) {
					      // output data of each row
					      while($row = $result->fetch_assoc()) {?>
					      <tr>
					      <td><img src="<?php echo $row['imagen_servicio']?>" style="width: 30px;"><img></td>
					      <td><?php echo $row['nombre_servicio']?></td>
					      <td><?php echo $row['descripcion_servicio']?></td>      
					      </tr>
					     <?php }
					  } else {
					      echo "0 results";
					  }
					  $conn->close();
					 ?>
					</tbody>
				</table> 
    		</div>
        </div>
	</div>
	<br>
	<div class="footer text-center"><img style="width: 100%;" src="../images/footer.png" ></div>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
