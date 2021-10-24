<?php

include_once './config/Request.php';
include_once './config/Router.php';
$router = new Router(new Request);

$router->get('/', function () {
  return <<<HTML
  <h1>Hello world</h1>
HTML;
});


$router->get('/status', function ($request) {
  var_dump('hee');
  return ($request->getBody()) ?
    json_encode($request->getBody()) :
    <<<HTML
      <h1>Hello world</h1>
    HTML;
});

$router->post('/data', function ($request) {

  return json_encode($request->getBody());
});
