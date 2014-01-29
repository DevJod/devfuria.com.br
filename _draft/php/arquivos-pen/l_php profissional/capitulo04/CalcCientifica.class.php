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

//Extens�o da classe CalculadoraII, permite exibi��o do resultado em diversas bases num�ricas

class CalcCientifica extends CalculadoraII {

	const BINARIO     = 2,
	      DECIMAL     = 10,
				HEXADECIMAL = 16;
	
	private $base;
	
	public function __construct() {
		parent::__construct();
		$this->setBase(self::DECIMAL);
	}
	
	public function setBase($base) {
		static $bases_validas = array(self::BINARIO, self::DECIMAL, self::HEXADECIMAL);
		
		if (!in_array($base, $bases_validas))
			throw new Exception('Base '.$base.' n�o � v�lida');
			
		$this->base = $base;
		return true;
	}

	public function getBase() {
		
		switch($this->base) {
			case self::BINARIO:
				$base =  'bin';
				break;
			case self::DECIMAL:
				$base = 'dec';
				break;
			case self::HEXADECIMAL:
				$base = 'hex';
				break;
		}
		
		return $base;
	}

	//overloading do m�todo
	protected function getResultado() {
		$resultado = parent::getResultado();
		return $this->converter_base($resultado);
	}
	
	public function recuperar() {
		$resultado = parent::recuperar();
		return $this->converter_base($resultado);
	}
	
	private function converter_base($num) {
		return base_convert($num, self::DECIMAL, $this->base);
	}
}
?>
