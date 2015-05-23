<?php
/**
 * Created by PhpStorm.
 * User: wouth_000
 * Date: 23/05/2015
 * Time: 16:15
 */
require_once '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('../views/');

$twig = new Twig_Environment($loader);

echo $twig->render('page.html', array('text' => 'Hello world!'));