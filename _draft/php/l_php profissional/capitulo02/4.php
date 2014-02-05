<?php
/**
 * C�digo-fonte do livro "PHP Profissional"
 * Autores: Alexandre Altair de Melo <alexandre@phpsc.com.br>
 *          Mauricio G. F. Nascimento <mauricio@prophp.com.br>
 *
 * http://www.novatec.com.br/livros/phppro
 * ISBN: 978-85-7522-141-9
 * Editora Novatec, 2008 - todos os direitos reservados
 *
 * LICEN�A: Este arquivo-fonte est� sujeito a Atribui��o 2.5 Brasil, da licen�a Creative Commons, 
 * que encontra-se dispon�vel no seguinte endere�o URI: http://creativecommons.org/licenses/by/2.5/br/
 * Se voc� n�o recebeu uma c�pia desta licen�a, e n�o conseguiu obt�-la pela internet, por favor, 
 * envie uma notifica��o aos seus autores para que eles possam envi�-la para voc� imediatamente.
 *
 *
 * Source-code of "PHP Profissional" book
 * Authors: Alexandre Altair de Melo <alexandre@phpsc.com.br>
 *          Mauricio G. F. Nascimento <mauricio@prophp.com.br>
 *
 * http://www.novatec.com.br/livros/phppro
 * ISBN: 978-85-7522-141-9
 * Editora Novatec, 2008 - all rights reserved
 *
 * LICENSE: This source file is subject to Attibution version 2.5 Brazil of the Creative Commons 
 * license that is available through the following URI:  http://creativecommons.org/licenses/by/2.5/br/
 * If you did not receive a copy of this license and are unable to obtain it through the web, please 
 * send a note to the authors so they can mail you a copy immediately.
 *
 */
 
session_start();
?>

<html>
<head>
	<title>Exerc�cio 2.4</title>
</head>
<body>

<h3>An�lise do Tri�ngulo</h3>

<?php
$url = $_SERVER['PHP_SELF'];
$lados = array(1=>'A', 2=>'B', 3=>'C');

if (!isset($_POST['passo'])) {
	$_SESSION = array();
	$j = 0;
}
else {
	$j = count($_SESSION['lados_lidos']) + 1;
	$nome = 'campo_lado_' . $lados[$j];
	$_SESSION['lados_lidos'][$j] = $_POST[$nome];
}

//imprimir os lados do tri�ngulo j� informados pelo usu�rio
for($i=1; $i<=$j; $i++) {
	printf('Lado %s: %d<br>', $lados[$i], $_SESSION['lados_lidos'][$i]);
}

if ($j < 3) {
	
	$passo = $j+1;
	$proximo_lado = $lados[$passo];
	$campo_lado = 'campo_lado_'.$proximo_lado;
	
	echo "
	<form method=\"post\" action=\"$url\">
		Lado $proximo_lado: <input type=\"text\" name=\"$campo_lado\" />&nbsp;
		<input type=\"hidden\" name=\"passo\" value=\"$passo\" />
		<input type=\"submit\" name=\"btn_submit\" value=\"Enviar\" />
	</form>";
}
else {
	echo '<h3>resultado</h3>';
	if (triangulo_valido()) {
		printf('Este tri�ngulo � %s', analise_triangulo());
	}
	else {
		printf('Este tri�ngulo n�o � v�lido!');
	}
}

echo "<br /><br /><a href=\"$url\">reiniciar c�lculo</a>";

function triangulo_valido() {
	
	$lados = array_values($_SESSION['lados_lidos']);
	
	//os lados s�o num�ricos?
	foreach($lados as $lado) {
		if (!is_numeric($lado))
			return false;
	}
	
	sort($lados);
	
	//o maior lado deve ser menor que a soma dos 2 menores
	if ($lados[0] + $lados[1] <= $lados[2])
		return false;
		
	return true;
}

function analise_triangulo() {
  
  $lados = array_values($_SESSION['lados_lidos']);
  
  //equil�tero?
  if ($lados[0] == $lados[1] && $lados[0] == $lados[2])
    return 'equil�tero';
    
  if ($lados[0] == $lados[1] || $lados[0] == $lados[2] || $lados[1] == $lados[2])
    return 'is�sceles';
    
  return 'escaleno';
}
?>

</body>
</html>
