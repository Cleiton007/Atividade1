
		<form action="#" method="post">
			Digite um número: <input type="text" name="num1"><br>
			Digite um número: <input type="text" name="num2"><br>
			<input type="submit" value="enviar"></input>
		</form>
		<?php
			if(isset($_POST['num1']) && isset($_POST['num2'])){
        $numero1 = $_POST['num1'];
		$numero2 = $_POST['num2'];
        $result = ($numero1+$numero2);

		if($result>20){
			$result = $result+8;
			echo("Resultado: ".$result);
			
		}
		else{
			$result = $result-5;
			echo("Resultado: ".$result);
		}
     }
		?>
