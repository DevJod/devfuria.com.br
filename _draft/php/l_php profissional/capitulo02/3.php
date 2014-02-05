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
?> 
<html>
<head>
	<title>Exerc�cio 2.3</title>
</head>
<body>

<h3>Informe um n�mero (m�ximo 10)</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	N�mero: <input type="text" name="txt_numero" />&nbsp;
	<input type="submit" name="btn_submit" value="Enviar" />
</form>

<?php
//verifica se recebeu algum dado do formul�rio
if (count($_POST)) {
	
	//campo � num�rico e menor ou igual a 10?
	if (is_numeric($_POST['txt_numero']) && $_POST['txt_numero'] <= 10) {
		
		for ($i=0; $i<=$_POST['txt_numero']; $i++) {
			$par_impar = $i%2 ? '�mpar' : 'par';
			printf('%d: %s<br />', $i, $par_impar);
		}
	}
	else {
		printf('Informe um n�mero v�lido!');
	}
}
?>

</body>
</html>
