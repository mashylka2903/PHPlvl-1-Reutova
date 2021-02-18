<?php

//создать класс

class Article { // с большой буквы,  далее camelcase
    public $id; // ---переменные --->> свойства объекта <<-- можно задавать дефолтные значения public $id=1;---можно задавать тип int например
    public $title; //публичные методы доступны для вызова из управляющего кода
    protected $content; //невозможно вызвать из кода могут быть вызваны наследником
    private $author; // невозможно вызвать из кода нельзя вызвать из наследника

    static $maxLife = 30; // ---статическое свойство уникально и одно на всех может меняться

    const TYPE_BLOG = 'blog'; //---константы не могут меняться без доллара
    const TYPE_NEWS = 'news';

    public static $types = [
        self::TYPE_BLOG, //--вызов констант происходит с self на примере массива
        self::TYPE_NEWS
    ];


    //-------------------------------------//


    final public function display () { // -- функции--->>методы объекта <<-- только у этого объекта  /// final запрещает переопределять в наследниках 
       // $this //-----содержит ссылку на вызывающий объект
        
        $this->displayTitle();
        $this->displayContent();
    }

    public function displayTitle () {
        echo "<h1>" . $this->title . "</h1>";
    }

    public function displayContent () {
    echo "<p>" . $this->content . "</p>";    
    }

    public static function getMaxLife (){ //----------статические методы ------ нет this --вместо него self 
        return self::$maxLife;
    }

    public static function addType(string $type) { // ----функция с константами
        self::$types[] = $type;
    }

    public function init($id, $title, $content, $author) { // --- функция для инициилизации переменных для всех экземпляров

        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    public function __construct($id, $title, $content, $author) { // --- функция конструктор

        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    

//создать экземпляр класса

$article1 = new Article();

//присвоить значения через -> //свойства пишутся без $$$$ !!!!

$article1->id = 1; 
$article1->title = 'title 1';
$article1->content = 'content 1';
$article1->author = 'author 1';
$article1->display();
$article1::$maxLife; //вызов с двойным двоеточием или Article::$maxLife;
Article::getMaxLife(); //вызов с двойным двоеточием или $article1::getMaxLife();


$article2 = new Article();
$article2->id = 2; 
$article2->title = 'title 2';
$article2->content = 'content 2';
$article2->author = 'author 2';
$article2->display();

$article3 = new Article(); //c функцией init
$article3->init(3, 'title 3', 'content 3', 'author 3');
$article3->display();

$article4 = new Article(4, 'title 4', 'content 4', 'author 4'); // c функцией конструктором создание
$article4->display();


$article2 = $article1; // ---копирование по ссылке и изменится и article 2 и article 1
$article2->id = 2;
$article2->author = 'Vasya';


$article2 = clone $article1; // ----клонирование и создастся новый объект

///---НАСЛЕДОВАНИЕ ---//// --------------------------------------------------------------------------------------/////


class News extends Article {

        public $date;   //---добавить свойство

        public function displayData() { //---добавить метод
            echo "<p>{$this->date}</p>"
        }

        public function __construct($id, $title, $content, $author) { // --- функция конструктор

            $this->id = $id;
            $this->title = $title;
            $this->content = $content;
            $this->author = $author;
            $this->date = $date;   ///--- так можно добавить дату к конструктору и потом дописать перпеменной в функцию
        }

        public function display (){ //// добавить к родительской функции, чтобы все не копировать
            parent::display();
            $this->displayData();
        }
    

}

$article11 = new Article(11, 'title 11', 'content 11', 'author 11'); // c функцией конструктором создание
$article11->display();

$article12 = new News (12, 'title 12', 'content 12', 'author 12'); // c функцией конструктором создание
$article12->display();
$article12->date('Y-m-d');


$article13 = new News (12, 'title 12', 'content 12', 'author 12', date('Y-m-d')); // c функцией конструктором и добавленными методами
$article12->display();


