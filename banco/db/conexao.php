<?php

namespace banco\db;

class Conexao {
	private static $instance;

	public static function getConn() {
		if(!isset(self::$instance)):
			self::$instance = new \PDO('mysql:host=localhost;dbname=extensao;charset=utf8','root','');
		endif;
		return self::$instance;
	}
}