<?php

include_once './src/config/Request.php';
include_once './src/config/Router.php';
// require 'vendor/autoload.php';

// use Dotenv\Dotenv;

// $dotenv = new DotEnv(__DIR__);
// $dotenv->load();

$router = new Router(new Request);


$router->get('/status', function ($request) {
  return ($request->getBody()) ?
    json_encode($request->getBody()) :
    <<<HTML
      <h1>Hello world</h1>
    HTML;
});

$router->post('/data', function ($request) {
  // var_dump($request->getBody());
  // echo $query = "INSERT INTO employee SET ";
  // echo getenv('DB_HOST');

  return json_encode($request->getBody());
});
