<?php

class Pet {

	public $name;

	public function __construct($name) {
		$this->name = $name;
	}

	public function speak() {
		return 'Ничего';
	}

}

class Dog extends Pet {

	public function speak() {
		return 'Гав! Гав!';
	}

	public function plays() {
		return 'Произносит что-нибудь';
	}

}

class Cat extends Pet {

	public function speak() {
		return 'Мяу! Мяу!';
	}

	public function plays() {
		return 'Ловит мышь!';
	}

}

?>