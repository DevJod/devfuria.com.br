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
 
$usuario = $senha = $db = 'teste';

try {
	
	if (!($conn = @mysql_connect('localhost', $usuario, $senha)))
		throw new Exception('connect');
		
	if (!@mysql_select_db($db, $conn))
		throw new Exception('select_db');
		
	$sql = "SELECT codigo, nome FROM cidades ORDER BY nome";
	if (!$result = mysql_query($sql))
		throw new Exception('query');
		
	if (!$num_rows = @mysql_num_rows($result))
		throw new Exception('num_rows');

	if ($num_rows) {
		if (!($val = @mysql_fetch_object($result)))
			throw new Exception('fetch_object');
		
		//sucesso!
		var_dump($val);	
	}

} catch (Exception $e) {
	echo sprintf('Exce��o=<b>%s</b>; Errno=<b>%d</b>; Error=<b>%s</b>', $e->getMessage(), mysql_errno(), mysql_error());
}
?>
