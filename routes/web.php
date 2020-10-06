<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

Route::get('/albums', function () {

    $client = new Client([
        'base_uri' => 'https://jsonplaceholder.typicode.com/',
        'timeout'  => 2.0,
    ]);

    $response = $client->request('GET','/albums');
    $posts = json_decode($response->getBody()->getContents());

    return $posts;
});

Route::get('/posts', function () {

    $client = new Client([
        'base_uri' => 'https://jsonplaceholder.typicode.com/',
        'timeout'  => 2.0,
    ]);

    $response = $client->request('GET','/posts');
    $posts = json_decode($response->getBody()->getContents());

    return $posts;
});

Route::get('/todos', function () {

    $client = new Client([
        'base_uri' => 'https://jsonplaceholder.typicode.com/',
        'timeout'  => 2.0,
    ]);

    $response = $client->request('GET','/todos');
    $posts = json_decode($response->getBody()->getContents());

    return $posts;
});

Route::get('/users', function () {

    $client = new Client([
        'base_uri' => 'https://jsonplaceholder.typicode.com/',
        'timeout'  => 2.0,
    ]);

    $response = $client->request('GET','/users');
    $posts = json_decode($response->getBody()->getContents());

    return $posts;
});

Route::get('/photos', function () {

    $client = new Client([
        'base_uri' => 'https://jsonplaceholder.typicode.com/',
        'timeout'  => 2.0,
    ]);

    $response = $client->request('GET','/photos');
    $posts = json_decode($response->getBody()->getContents());

    return $posts;
});
