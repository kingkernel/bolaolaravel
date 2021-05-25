<?php

namespace App\Helpers;

class kingkernelFunctions {
    public static function hashPassword($password)
    {
        $start = base64_encode($password);
        $faseone = crypt($start, "123");
        return $faseone;
    }
}
