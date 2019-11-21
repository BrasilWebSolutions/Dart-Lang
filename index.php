<?php

require_once("vendor/autoload.php");

use \Flutter\Page;

$app = new Slim\Slim();

$app->config('debug', true);

$app->get("/", function(){
    $page = new Page();
    $page->setTpl("index");
});

$app->get("/blog", function(){
    $page = new Page();
    $page->setTpl("blog");
});

$app->get("/contact", function(){
    $page = new Page();
    $page->setTpl("contact");
});

$app->get("/services", function(){
    $page = new Page();
    $page->setTpl("services");
});

$app->get("/about", function(){
    $page = new Page();
    $page->setTpl("about");
});


$app->run();


