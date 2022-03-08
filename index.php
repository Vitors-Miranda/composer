<?php
    require_once __DIR__ . '/vendor/autoload.php';

    use SebastianBergmann\Timer\Timer;

    $timer = new Timer;

    $timer->start();
    for($i=0; $i < 10000; $i++){
        #code
    }

    $duracao = $timer->stop();
    echo $duracao->asSeconds();
