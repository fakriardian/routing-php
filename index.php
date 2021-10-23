<?php

include_once 'Request.php';
include_once 'Router.php';
$router = new Router(new Request);

$router->get('/', function () {
    return <<<HTML
  <h1>Hello world</h1>
HTML;
});


$router->get('/profile', function ($request) {
    return <<<HTML
  <h1>Profile</h1>
HTML;
});

$router->post('/data', function ($request) {
    // var_dump($request->getBody());
    // echo $query = "INSERT INTO employee SET ";

    // var_dump($data);
    return json_encode($request->getBody());
});
