<html>
<head>
<title> Calculo de Excedentes - Email Marketing </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">		
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta charset="utf-8" />
</head>
<body>

<div class="page-header alert alert-success smtplw-header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-1 text-center smtplw-banner">
						<i class="fa fa-calculator fa-5x"></i>
					</div>
					<div class="col-xs-4">
						<h3> Cálculo de Excedentes </h3>
						<p class="lead">Planos Email Marketing</p>
					</div>
				</div>
			</div>
		</div>
<div class="container">

 <div class="dropdown">
 
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Email Marketing 2500
  <span class="caret"></span></button><br><br>
  <ul class="dropdown-menu">
    <li><a name="mkt10" href="mkt10.php">Email Marketing 10 (antigo Email Marketing I)</a> </li>
    <li><a name="mkt25" href="mkt25.php">Email Marketing 25 (antigo Email Marketing II) </a></li>
    <li><a name="mkt15" href="mkt15.php">Email Marketing 15  </a></li>
    <li><a name="mkt30" href="mkt30.php">Email Marketing 30 </a></li>
    <li><a name="mkt50" href="mkt50.php">Email Marketing 50  </a></li>
    <li><a name="mkt100" href="mkt100.php">Email Marketing 100  </a></li>
    <li><a name="mkt250" href="mkt250.php">Email Marketing 250 </a></li>
    <li><a name="mkt500" href="mkt500.php">Email Marketing 500  </a></li>
    <li><a name="mkt1000" href="mkt1000.php"> Email Marketing 1000  </a></li>
    <li><a name="mkt2500" href="mkt2500.php">Email Marketing 2500 </a></li>
    <li><a name="mkt5000" href="mkt5000.php">Email Marketing 5000 </a></li>
    <li><a name="mkt8000" href="mkt8000.php">Email Marketing 8000 </a></li>
  </ul></div> 
    <div class="form1">
   <form  class"form-signin" action="" method="post" >
   Digite o número de Envios Excedentes :  <input class="input-medium" name="num1" type="text"><br>
  
     <br>
       <input class="btn btn-info" type="submit" name="operacao" value="Calcular">

   </form> 

   <?php

   $a = $_POST['num1'];
   $op = $_POST['operacao'];
   $c =  $a * 0.0021;
   echo  "O valor da fatura de excedentes é: R$ ";
   echo number_format($c , 2);

?>
<br><br>
  <div class="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Custo por envio do Plano: </strong> R$: 0,0014 <p></p> <strong>Custo por envio do Excedente: </strong>R$: 0,0021
</div>

</div> 



</div>
</body>



</html>


