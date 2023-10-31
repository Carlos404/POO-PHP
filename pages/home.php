<?php

require_once('./Class/Loader.class.php');

$load = new Loader();

$load->classLoader('header');

$load->pageLoader();

$load->classLoader('footer');
