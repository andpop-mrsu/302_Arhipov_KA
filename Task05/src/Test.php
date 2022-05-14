<?php

namespace KArhipov\Task05;

function runTest()
{
    $truncater = new Truncater();
    echo $truncater->truncate('Длинный текст', ['length' => 5 ]) . PHP_EOL;
    echo $truncater->truncate('') . PHP_EOL;
    echo $truncater->truncate('Архипов Константин Александрович') . PHP_EOL;
    echo $truncater->truncate('Архипов Константин Александрович', ['length' => 10]) . PHP_EOL;
    echo $truncater->truncate('Архипов Константин Александрович', ['length' => 50]) . PHP_EOL;
    echo $truncater->truncate('Архипов Константин Александрович', ['length' => -10]) . PHP_EOL;
    echo $truncater->truncate('Архипов Константин Александрович', ['length' => 10, 'separator' => '*']) . PHP_EOL;
    echo $truncater->truncate('Архипов Константин Александрович', ['separator' => '*']) . PHP_EOL;
}
