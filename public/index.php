<?php

declare(strict_types=1);

header('Content-type:application/json');

require __DIR__ . '/../vendor/autoload.php';

use app\models\Product;
use app\models\User;

$user = new User;
echo $user->all();

$product = new Product;
echo $product->all();

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
