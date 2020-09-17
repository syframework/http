<?php
namespace Sy;

class Http {

	/**
	 * Return the GET parameter named $param
	 * If the parameter is not set, return the default value
	 *
	 * @param string $param GET parameter name
	 * @param mixed $default The default value
	 * @return mixed
	 */
	public static function get($param, $default = null) {
		return isset($_GET[$param]) ? $_GET[$param] : $default;
	}

	/**
	 * Return the POST parameter named $param
	 * If the parameter is not set, return the default value
	 *
	 * @param string $param POST parameter name
	 * @param mixed $default The default value
	 * @return mixed
	 */
	public static function post($param, $default = null) {
		return isset($_POST[$param]) ? $_POST[$param] : $default;
	}

	/**
	 * Return the COOKIE parameter named $param
	 * If the parameter is not set, return the default value
	 *
	 * @param string $param COOKIE parameter name
	 * @param mixed $default The default value
	 * @return mixed
	 */
	public static function cookie($param, $default = null) {
		return isset($_COOKIE[$param]) ? $_COOKIE[$param] : $default;
	}

	/**
	 * Return the REQUEST parameter named $param
	 * If the parameter is not set, return the default value
	 *
	 * @param string $param REQUEST parameter name
	 * @param mixed $default The default value
	 * @return mixed
	 */
	public static function request($param, $default = null) {
		return isset($_REQUEST[$param]) ? $_REQUEST[$param] : $default;
	}

	/**
	 * Return the SESSION parameter named $param
	 * If the parameter is not set, return the default value
	 *
	 * @param string $param SESSION parameter name
	 * @param mixed $default The default value
	 * @return mixed
	 */
	public static function session($param, $default = null) {
		return isset($_SESSION[$param]) ? $_SESSION[$param] : $default;
	}

	/**
	 * Redirect to location
	 *
	 * @param string $location
	 * @param int $code
	 */
	public static function redirect($location, $code = 302) {
		header('location:' . $location, true, $code);
		exit;
	}

}