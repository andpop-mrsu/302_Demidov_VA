<?php

function runTest()
{
    $truncater = new Truncater();
    echo $truncater->truncate('Длинный текст', ['length' => 5 ]) . PHP_EOL;
    echo $truncater->truncate('') . PHP_EOL;
    echo $truncater->truncate('Демидов Владимир Александрович') . PHP_EOL;
    echo $truncater->truncate('Демидов Владимир Александрович', ['length' => 10]) . PHP_EOL;
    echo $truncater->truncate('Демидов Владимир Александрович', ['length' => 50]) . PHP_EOL;
    echo $truncater->truncate('Демидов Владимир Александрович', ['length' => -10]) . PHP_EOL;
    echo $truncater->truncate('Демидов Владимир Александрович', ['length' => 10, 'separator' => '*']) . PHP_EOL;
    echo $truncater->truncate('Демидов Владимир Александрович', ['separator' => '*']) . PHP_EOL;
}
