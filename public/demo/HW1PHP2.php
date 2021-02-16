<?php

class Product {
    public $id;
    public $title;
    public $desc;
    public int $price;


    public function displayProduct() {
        echo "<h3>" . $this->id . "</h3>",
             "<h1>" . $this->title . "</h1>",
             "<p>" . $this->desc . "</p>",
             "<h1>" . $this->price . "</h1>"        
        ;
    }

    public function __construct($id, $title, $desc, $price) {
        $this->id = $id;
        $this->title = $title;
        $this->desc = $desc;
        $this->price = $price;
    }

    
}

$product1 = new Product (1, 'Socks', 'Warm and long', 100);
$product1->displayProduct();


class discountProduct extends Product {
    
    public $discount;

    public function __construct($id, $title, $desc, $price, $discount) {
        $this->id = $id;
        $this->title = $title;
        $this->desc = $desc;
        $this->price = $price - ($price * $discount / 100);
    }

}

$product2 = new discountProduct (2, 'Socks', 'Small and cold', 100, 20);
$product2->displayProduct();

//5. Дан код:
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo(); //1
$a2->foo(); //2
$a1->foo(); //3
$a2->foo(); //4

// $x статичная и объявлена в классе, при каждом вызове функции она инкрементируется в самом классе А и записывается новое значение

class AA {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends AA {
}
$a1 = new AA();
$b1 = new B();
$a1->foo(); //1
$b1->foo(); //1
$a1->foo(); //2
$b1->foo(); //2

// у каждого класса будет своя статическая переменная $x и будет инкрементироваться соответственно для каждого класса

