<?php

namespace Core\Helpers;

class OutputHelper
{
    public static function printInfo(array $info)
    {
        ob_start();
        foreach ($info as $key => $val) {
            echo $key . ' is able to:' . PHP_EOL;
            foreach ($val as $item) {
                echo str_repeat(" ", 4) . '- ' . $item . PHP_EOL;
            }
        }
        ob_end_flush();
    }
}