<?php require_once("C:/xampp/htdocs/hackathon2/conexao.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='css/bootstrap.css' rel="stylesheet" type="text/css" />

<title>Untitled Document</title>
</head>

<body>

  	<div class="page-header" >
  		<h1>EasyService<br/><small> Todos os serviços em um só lugar</small></h1>
	</div>   
    
    <ul class="nav nav-pills">
    
 		<li role="presentation" class="active"><a href="#">Home</a></li>
  		<li role="presentation"><a href="#">Serviços</a></li>
        <li role="presentation"><a href="#">Cadastre-se</a></li>
    
	</ul>
    
    
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <div align="center">
    
    
    	<table width="200">
        	<form action="login.php" method="post">
  			<tr>
    			<td>Email: </td>
    			<td><input type="text" name="email" id="email"/></td>
 			</tr>
  			<tr>
    			<td><br /></td>
    			<td><br /></td>
  			</tr>
  			<tr>
    			<td>Senha: </td>
    			<td><input type="password" name="senha" id="senha"/></td>
  			</tr>
            <tr>
    			<td><br /></td>
    			<td><br /></td>
  			</tr>
            <tr>
            	<td></td>
                <td align="right"><input type="submit" value="Entrar" /></td>
        	</form>
		</table>

    
    </div>
 
</body>
</html>
