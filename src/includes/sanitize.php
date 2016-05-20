<?php

/**
* sanitizes strings
*
* Accepts a single int and returns a sanitized string
*
* @param $string a value that needs to be escaped
* @return string cleaned
*/
function escape($string) {
	return htmlentities($string, ENT_QUOTES, 'UTF-8');
}

?>