<?php

namespace FC\FCEcho;

class FCEcho
{
    public static function show()
    {
        $args = func_get_args();
        echo implode('', $args) . "\n";
    }
}

