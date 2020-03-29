<?php
class Iesire{
	private $a="";
public function __construct($a)
	{$this->a=$a;

	}
	public function logout()
	{
		session_start();
		session_destroy();
	}
}