<?php
/**
*
* recaptcha [Português]
*
* @package language
* @version 1.0.3
* @Traduzido por: http://phpbbportugal.com - segundo as normas do Acordo Ortográfico
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* 
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'				=> 'pt',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Para usar o reCaptcha tem que criar uma conta em <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'O código inserido não é o correto.',

	'RECAPTCHA_PUBLIC'				=> 'Chave pública reCaptcha',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'A sua Chave pública reCaptcha. Obtenha uma em <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Chave privada reCaptcha',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'A sua chave privada reCaptcha. Obtenha uma em <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'No sentido de evitar registos automáticos, é necessário que entre ambas as palavras indicadas no campo de texto abaixo.',
));

?>