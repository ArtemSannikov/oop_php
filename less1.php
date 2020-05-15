<?php

# Создаем класс Dog (группирует переменные и функции в одну логическую единицу)

// Переменные в классе называются: Свойства

	// Специальная переменная $this предоставляет экземпляр класса

// Функции в классе называются: Методы

class Dog {

	// public - общедоступный, т.е доступ к объектам и методам можно получить отовсюду
	// protected - защищенный, объекты и методы могут быть доступны только методам, принадлежащим тому же дереву классов, что и вызываемой метод или объект
	// private - закрытый, методы и объекты могут быть доступны только классу к которому принадлежат
	public $name;

	public function __construct($name) {
		// Оператор -> указывает на то, что мы ссылаемся на что-то , что принадлежит классу
		$this->name = $name;
	}

	public function speak() {
		return 'Гав! Гав!';
	}
}

// Создаём объект на основе класса Dog
	// Объект - экземпляр в памяти, созданный на основе класса
$dog_name = new Dog('Гаврюша');

echo 'Собаку зовут: '.$dog_name->name.'<br>';
echo 'Собака говорит: '.$dog_name->speak().'<br>';

?>