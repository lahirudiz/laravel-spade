<?php

namespace App\Models;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => '1',
                'title' => 'CEO',
                'salary' => '$85000',
            ],
            [
                'id' => '2',
                'title' => 'Project Manager',
                'salary' => '$65000',
            ],
            [
                'id' => '3',
                'title' => 'Acountant',
                'salary' => '$40000',
            ],
        ];
    }
}
