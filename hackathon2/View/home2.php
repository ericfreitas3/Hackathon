<?php

require_once("C:/xampp/htdocs/hackathon2/cabecalho.php");
require_once($var."/hackathon2/Banco/ServicoBanco.php");
require_once($var."/hackathon2/Banco/UsuarioBanco.php");
require_once($var."/hackathon2/Model/Servico.php");

$id =  buscaId($conexao, $_SESSION['email']);
$servicos = listaServicos($conexao,$id);//var_dump($servicos); 
$servicosUsuario = listaServicosDeUsuario($conexao,$id);//var_dump($servicosUsuario);die();
?>

<body>
<div class="page-header" >
  		<h1>EasyService<br/><small> Todos os serviços em um só lugar</small></h1>
	</div>   
    
    <ul class="nav nav-pills">
    
 		<li role="presentation" class="active"><a href="#">Home</a></li>
  		<li role="presentation"><a href="#">Serviços</a></li>
        <li role="presentation"><a href="/hackathon2/index.php">Sair</a></li>
    
	</ul>
    
    
    <br />
    <br />
    
    
    <div class="row" align="right">
  <div class="col-lg-6">
    <div class="input-group">
      <form action="#" method="post">
      <table class="table">
          
          
            <tr>
              <td>
              <?php foreach ($servicosUsuario as $servico):   ?>
                <input type="checkbox" name="usado" value="true" disabled readonly checked><?= $servico->getNome()?>
              <?php endforeach ?>
              </td>
            </tr>
            <tr>
              <td>
                <br/>
              </td>
            <td>
                <br/>
              </td>
            </tr>
            <tr>
              <td>
              <?php foreach ($servicos as $servico): ?>
                <input type="checkbox" name="usado" value="true"  ><?php if(isset($servico)) echo $servico->getNome(); ?>
              <?php endforeach ?>
              </td>
            </tr>
      
            <tr>
              <td><input class="btn-primary" type="submit" value="Cadastrar" /></td>
              <td></td>
            </tr>

        </table>        
    </form>
    </div>
  </div>
 </div>
</body>
</html>
