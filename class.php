<?php

// $object1            = new User; 
// $object1->name      = "Alice";
// $object2            = clone $object1;
// $object2->name      = "Amy";

// echo "object 1 name is " . $object1->name . "<br>";
// echo "object 2 name is " . $object2->name . "<br>";

// $object1->get_name();

// class User {
//     public $name, $password;

//     function get_name() {
//         echo "my name is " . $this->name;
//     }

// }

// echo "<hr> __construct";

// class User 
// {
//     function __construct ($param1, $param2)
//     {
//         //fpopo
//         public $username = "Guest";
//     }
// }

// class User
// {
//     function __distruct()
//     {
//         //distruct code 
//     }
// }

// class User{}

// $object1            = new User; 
// $object1->name      = "Alice";

// echo $object1->name;

// Translate::lookup();

// class Translate
// {
//     const ENGLISH = 0;
//     const SPANISH = 1; 
//     const FRENCH = 2; 
//     const GERMAN = 3; 

//     static function lookup() 
//     {
//         echo self::GERMAN;
//     }
// }

// class Exapmle 
// {
//     var $name = "Michael";
//     public $age = 26; 
//     protected $usercount;

//     private function admin ()
//     {
//         //admin code is here
//     }
// }

// User::pwd_string();

// class User
// {
//     static function pwd_string()
//     {
//         echo "Пожалуйста введите свой пароль";
//     }
// }

// $object = new Subscriber;
// $object->name = "Saveliy";
// $object->password = "Rabota1988";
// $object->phone = "9601201611";
// $object->email = "gizzsaw@gmail.com";
// $object->display();

// class User
// {
//     public $name, $password;
//     function save_user()
//     {
//         echo "save_user code is here";
//     }
// }

// class Subscriber extends User
// {
//     public $phone, $mail;

//     function display() 
//     {
//         echo "Name:  " . $this->name         . "<br>";
//         echo "Pass:  " . $this->password     . "<br>";
//         echo "Phone: " . $this->phone        . "<br>";
//         echo "Email: " . $this->email        . "<br>";
//     }
// }


echo "parent <br>";


$objectSon = new Son;
$objectSon->test();
$objectSon->test2();

class Dad
{
    function test()
    {
        echo "[Class Dad] I am your father <br>";
    }
}

class Son extends Dad 
{
    function test()
    {
        echo "[Class Son] я Люк <br>";
    }
    function test2()
    {
        parent::test(); //родительский
        self::test();   //свой
    }
}

echo "Тигры <br>";

$object_tiger = new Tiger();
echo "Tigers have a ... <br>";
echo "Fur: " . $object_tiger->fur . "<br>";
echo "Stripes: " . $object_tiger->stripes . "<br>";

class Wildcat 
{
    public $fur;

    function __construct()
    {
        $this->fur = "TRUE";
    }
}

class Tiger extends Wildcat
{
    public $stripes;

    function __construct()
    {
        parent::__construct();
        $this->stripes = "TRUE";
    }
}


class Final_user
{
    final function copyright()
    {
        echo "Этот класс был создан Смитом";
    }
}

$final_obj = new Final_user;
$final_obj->copyright();

echo strrev(">rh<");

echo ucfirst(strtolower(strrev("Babenkov")));
echo strrev(">rb<");
echo ucfirst(strtolower(strrev("Tsyplakov")));
echo strrev(">rb<");
echo ucfirst(strtolower(strrev("Kononov")));
?>