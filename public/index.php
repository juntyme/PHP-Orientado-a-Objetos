<?php

declare(strict_types=1);

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.uft-8', 'portuguese');

header('Content-type:application/json');

require __DIR__ . '/../vendor/autoload.php';

class User
{
    public static string $name;

    public static function userInfo()
    {
        return 'Teste método estático' . self::$name;
    }
}
User::$name = 'Jonas Ferreira';
// echo User::userInfo();

$className = 'User';
echo $className::userInfo();


// class User
// {
//     public function __construct(public string $name, public int $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function getUserInfo()
//     {
//         return $this->name . ' ' . $this->age;
//     }
// }

// class User2 extends User
// {
//     public function __construct(string $name, int $age)
//     {
//         parent::__construct($name, $age);
//     }
// }

// $user = new User2('Jonas Ferreira', 30);
// echo $user->getUserInfo();

// use app\classes\User;
// $user = new User;
// echo $user->info();

// use app\classes\Person;
// $person = new Person('Jonas', 'suporte@yesflex.com.br');
// echo $person->info();

// use app\models\Product;
// use app\models\User;
// $user = new User;
// echo $user->all();
// $product = new Product;
// echo $product->all();

// use app\classes\Abajur;
// use app\classes\book;
// $book = new book;
// $book->name = 'Meu Livro';
// $book->description = 'Cupidatat nulla tempor tempor esse anim dolor aute id sit laboris.';
// $book->pages = 300;
// $book->author = 'Consequat adipisicing exercitation';
// echo json_encode($book);
// $abajur = new Abajur;
// $abajur->name = 'Abajur';
// $abajur->description = 'Laborum est tempor non ex ut ut ea.';
// $abajur->isOn = true;
// echo json_encode($abajur->execute());


// use app\classes\Crud;
// use app\classes\Login;
// try {
//     $login = new Login;
//     echo $login->auth(new Crud);
// } catch (TypeError $te) {
//     var_dump($te->getMessage());
// }


// use app\classes\Crud;
// $crud = new Crud;
// $crud->delete()->read();

// use app\classes\Teste;
// $teste = new Teste;
// echo $teste->andar();

// Carregar todas as functions
// echo helper();

// require __DIR__ . '/../app/classes/Login.php';
// $login = new Login;
// $login->email = 'suporte@yesflex.com.br';
// $login->password = '123456';
// echo $login->auth();

// Criar um Objeto com array
// $user = ['name' => 'Jonas', 'email' => 'suporte@yesflex.com.br'];
// $userObj = (object)$user;
// var_dump($userObj);

// $stdClass = new stdClass;
// $stdClass->name = 'Jonas';
// $stdClass->email = 'suporte@yesflex.com.br';
// var_dump($stdClass);
