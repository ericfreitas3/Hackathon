<?php 

require_once("C:/xampp/htdocs/hackathon2/cabecalho.php");
require_once($var."/hackathon2/Banco/ServicoBanco.php");
require_once($var."/hackathon2/Banco/UsuarioBanco.php");
require_once($var."/hackathon2/Model/Servico.php");
//require_once("../Model/UsuarioServico.php"); ?>    
    <h1>Bem vindo!</h1>
<?php
mostraAlerta("success");
$id =  buscaId($conexao, $_SESSION['email']);
$servicos = listaServicos($conexao,$id);
$servicosUsuario = listaServicosDeUsuario($conexao,$id);//var_dump($servicosUsuario);die();
?>
<h1>Serviços:</h1>

	
    <form action="#" method="post">
    	<table class="table">
        	
        	<tr>
        	<?php foreach ($servicosUsuario as $servico): 	?>
			    <td><input type="checkbox" name="usado" value="true" checked><?= $servico->getNome()?></td>
			</tr>
			<?php endforeach ?>

			<tr>
        	<?php foreach ($servicos as $servico): 	?>
			    <td><input type="checkbox" name="usado" value="true" checked><?= $servico->getNome()?></td>
			</tr>
			<?php endforeach ?>

            <tr>
            	<td><input class="btn-primary" type="submit" value="Cadastrar" /></td>
            </tr>

        </table>        
    </form>

<?php require_once($var."/hackathon2/rodape.php"); ?>