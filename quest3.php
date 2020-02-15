<form action="#" method="post">
	Digite seu nome: <input type="text" name="nome"><br>
	Digite seu sexo: <input type="text" name="sexo"><br>
	Digite seu idade: <input type="text" name="idade"><br>
	<input type="submit" value="enviar"></input>
</form>

<?php
	if(isset($_POST['nome']) && isset($_POST['sexo']) && isset($_POST['idade'])){
        $nome = $_POST['nome'];
		$sexo = $_POST['sexo'];
		$idade = $_POST['idade'];

		if(strcasecmp($sexo,"F")==0 && $idade<18){
			echo($nome."<br> Acesso Proibido. <br>");
		}
		else{
			echo($nome." <br> Acesso Permitido.  <br>");
		}
     }
?>