<?php 

require_once("router.php");

$router = new Router();

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
//$router->get('/fr/home', 'index.php');
$router->get('/', 'index.php');
$router->get('/home', 'index.php');
//$router->get('/home', 'index.html');
//$router->get('/', 'index.html');
///get('/', 'index.html');

$router->get('/blog', '/contents/blog.php');
$router->get('/blog/abstract', '/contents/article_abstract.php');
$router->get('/blog/post', '/contents/article_model.php');



$router->get('/about', '/contents/about.php');

$router->get('/testx', '/article_model.php');


// Dynamic GET. Example with 1 variable
// The $id will be available in user.php
//$router->get('/user/$id', 'user.php');

// Dynamic GET. Example with 2 variables
// The $name will be available in user.php
// The $last_name will be available in user.php
//$router->get('/user/$name/$last_name', 'user.php');

// Dynamic GET. Example with 2 variables with static
// In the URL -> http://localhost/product/shoes/color/blue
// The $type will be available in product.php
// The $color will be available in product.php
//$router->get('/product/$type/color/:color', 'product.php');

// Dynamic GET. Example with 1 variable and 1 query string
// In the URL -> http://localhost/item/car?price=10
// The $name will be available in items.php which is inside the views folder
//$router->get('/item/$name', 'views/items.php');


// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
$router->any('/404','views/404.html');
//$router->any('/404','views/404.php');
?>