<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

$app->group('/ri', function () use ($app) {
    $this->map(['GET'], '/Inscripcion', function(Request $request, Response $response){
        $Controller = new ControllerInscripcion();
        $response = $Controller->SelectAll();

        if ($response === false) {
            PrintJson::print(404);
        } else if (is_array($response)) {
            PrintJson::print($response[0], 'Inscription', 'data', $response[1]);
        } else {
            PrintJson::print($response);
        }
    });

    $this->map(['POST'], '/Inscripcion/Post', function(Request $request, Response $response){
        $Controller = new ControllerInscripcion();
        $response = $Controller->Insert($request);

        if ($response === false) {
            PrintJson::print(404);
        } else if (is_array($response)) {
            PrintJson::print($response[0], 'Create', 'data', $response[1]);
        } else {
            PrintJson::print($response);
        }
    });

    $this->map(['GET'], '/Cotizar', function(Request $request, Response $response){
        $Controller = new ControllerCotizar();
        $response = $Controller->SelectAll();

        if ($response === false) {
            PrintJson::print(404);
        } else if (is_array($response)) {
            PrintJson::print($response[0], 'Inscription', 'data', $response[1]);
        } else {
            PrintJson::print($response);
        }
    });

    $this->map(['POST'], '/Cotizar/Post', function(Request $request, Response $response){
        $Controller = new ControllerCotizar();
        $response = $Controller->Insert($request);

        if ($response === false) {
            PrintJson::print(404);
        } else if (is_array($response)) {
            PrintJson::print($response[0], 'Create', 'data', $response[1]);
        } else {
            PrintJson::print($response);
        }
    });

    $this->map(['GET'], '/Contact', function(Request $request, Response $response){
        $Controller = new ControllerContact();
        $response = $Controller->SelectAll();

        if ($response === false) {
            PrintJson::print(404);
        } else if (is_array($response)) {
            PrintJson::print($response[0], 'Inscription', 'data', $response[1]);
        } else {
            PrintJson::print($response);
        }
    });

    $this->map(['POST'], '/Contact/Post', function(Request $request, Response $response){
        $Controller = new ControllerContact();
        $response = $Controller->Insert($request);

        if ($response === false) {
            PrintJson::print(404);
        } else if (is_array($response)) {
            PrintJson::print($response[0], 'Create', 'data', $response[1]);
        } else {
            PrintJson::print($response);
        }
    });

    $this->map(['GET'], '/Certificar', function(Request $request, Response $response){
        $Controller = new ControllerCertificar();
        $response = $Controller->SelectAll();

        if ($response === false) {
            PrintJson::print(404);
        } else if (is_array($response)) {
            PrintJson::print($response[0], 'Inscription', 'data', $response[1]);
        } else {
            PrintJson::print($response);
        }
    });

    $this->map(['POST'], '/Certificar/Post', function(Request $request, Response $response){
        $Controller = new ControllerCertificar();
        $response = $Controller->Insert($request);

        if ($response === false) {
            PrintJson::print(404);
        } else if (is_array($response)) {
            PrintJson::print($response[0], 'Create', 'data', $response[1]);
        } else {
            PrintJson::print($response);
        }
    });

    $this->map(['GET'], '/Test', function(Request $request, Response $response){
        $rsp = array('greeting' => 'hello test');
        PrintJson::print(200, 'Hello', 'Test', $rsp);
    });

    $this->map(['GET'], '/enlaces', function(Request $request, Response $response){
        $Controller = new ControllerEnlaces();
        $response = $Controller->SelectAll();

        if ($response === false) {
            PrintJson::print(404);
        } else if (is_array($response)) {
            PrintJson::print($response[0], 'Inscription', 'data', $response[1]);
        } else {
            PrintJson::print($response);
        }
    });
});
