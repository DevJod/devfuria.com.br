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
 
$paises = <<<xmlpaises
<?xml version="1.0" encoding="iso-8859-1"?>\n
<paises>\n
	<pais>\n
		<nome>Brasil</nome>\n
		<moeda>Real</moeda>\n
        <estado>\n
		    <sigla>SC</sigla>\n
		</estado>\n
	</pais>\n
	<pais>\n
		<nome>Inglaterra</nome>\n
		<moeda>Libra</moeda>\n
        <estado>\n
			<sigla>MA</sigla>\n
		</estado>\n
	</pais>\n
</paises>\n
xmlpaises;

foreach (new SimpleXMLIterator($paises) as $pais) {
	echo("Pa�s: ".$pais->nome . "<br/>");
	echo("Moeda: ".$pais->moeda . "<br/>");
	echo("Estado: ".$pais->estado->sigla. "<br/>");
}

?>