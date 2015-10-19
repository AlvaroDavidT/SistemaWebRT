<?php

require 'vendor/autoload.php';

$deployer = new \Tmd\AutoGitPull\Deployer(array(
    'deployUser' => 'ubuntu',
    'directory' => '/opt/lamp/htdocs/',
    'logDirectory' => __DIR__ . '/log/',
    'notifyEmails' => array(
        'davidanalisis@hotmail.es'
   )
));

$deployer->postDeployCallback = function () {
    echo 'Yay!';
};

$deployer->deploy();
