<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>IMC</title>
</head>

<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Peso: <input type="text" name="pso">
        Altura: <input type="text" name="alt">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pso = $_POST['pso'];
        $alt = $_POST['alt'];

        $calculoDoImc = $pso / ($alt * $alt);

        echo "
        	<table border=1>
        		<tr>
        			<td>IMC</td>
        		</tr>
        		
        		<tr>
        			<td>$calculoDoImc</td>
        		</tr>
        	</table>
        ";
    }
    ?>

</body>

</html>
