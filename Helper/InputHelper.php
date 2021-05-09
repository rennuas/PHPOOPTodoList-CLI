<?php

namespace Helper {
    class InputHelper
    {

        static function input(string $info): string
        {
            echo "$info : ";
            $input = fgets(STDIN);
            return trim($input);
        }
    }
}
