<?php
require __DIR__ . '/../vendor/autoload.php';
require 'container.php';

var_dump($container->get('binarynode'));
var_dump($container->get('binarytree'));
