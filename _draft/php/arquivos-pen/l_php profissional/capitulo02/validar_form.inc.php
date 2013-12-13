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
 
define('IDADE_MIN', 0);
define('IDADE_MAX', 120);

function validar_form($dados) {
  global $selecao_sexo;
	
	static $campos_validos = array('txt_nome', 'txt_idade', 'sel_sexo');
	
  foreach($campos_validos as $campo) {
		if (isset($dados[$campo]))
			$dados[$campo] = trim($dados[$campo]);
	}
  
  if (!strlen($dados['txt_nome']))
    $msg = 'O nome precisa ser fornecido';
    
  else if (!strlen($dados['txt_idade']))
    $msg = 'A idade precisa ser fornecida';
    
  else if (!is_numeric($dados['txt_idade']))
    $msg = 'A idade precisa ser num�rica';
  
  else if ($dados['txt_idade'] < IDADE_MIN || $dados['txt_idade'] > IDADE_MAX)
    $msg = 'A idade fornecida est� fora da faixa de aceita��o [min='.IDADE_MIN.'; max='.IDADE_MAX.']';
    
  else if (isset($dados['sel_sexo']) && !in_array($dados['sel_sexo'], array_keys($selecao_sexo)))
    $msg = 'O sexo precisa ser selecionado';
		
  else
    $msg = 'O formul�rio foi validado';
		
	return $msg;
}
?>
