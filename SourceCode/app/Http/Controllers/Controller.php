<?php

namespace App\Http\Controllers;

use stdClass;

abstract class Controller
{
    protected function basevariable(){
        $genders = new stdClass;
        $genders->gender = ["Laki-laki", "Perempuan"];
        $genders->alias = ["L", "P"];
        $basevariable["genders"] = $genders;

        return $basevariable;
    }
}
