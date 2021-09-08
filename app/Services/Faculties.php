<?php

namespace App\Services;

use App\Faculty;

class Pais
{
    public function get()
    {
        $faculties = Pais::get();
        $facultiesArray[''] = 'Selecciona una facultad';
        foreach ($faculties as $faculty) {
            $facultiesArray[$faculty->id] = $faculty->name;
        }
        return $facultiesArray;
    }
}