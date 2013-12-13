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
 
require_once('CalculadoraII.class.php');

$calc = new CalculadoraII();

printf('1 + 1 = %s<br>', $calc->somar(1, 1));
printf('10 - 3 = %s<br>', $calc->subtrair(10, 3));
printf('50 * 20.3 = %s<br>', $calc->multiplicar(50, 20.3));
printf('armazenando resultado...<br>');
$calc->armazenar();
printf('-9 / 0.45 = %s<br>', $calc->dividir(-9, 0.45));
printf('mem�ria = %s<br>', $calc->recuperar());
printf('20 * (3 + 4) = %s<br>', $calc->multiplicar(20, $calc->somar(3, 4)));
printf('armazenando resultado...<br>');
$calc->armazenar();
printf('mem�ria = %s<br>', $calc->recuperar());
printf('<br><br>');
?>
