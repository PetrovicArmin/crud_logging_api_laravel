<?php

namespace App\Models;

enum ProductType: string {
    case SPORTS = 'SPORTS';
    case SCIENCE = 'SCIENCE';
    case MUSIC = 'MUSIC';
    case MOVIES = 'MOVIES';
    case ENTERTAINMENT = 'ENTERTAINMENT';
    case OTHER = 'OTHER';

    public static function randomName(): string
    {
        $arr = array_column(self::cases(), 'name');

        return $arr[array_rand($arr)];
    }

    public static function names(): array {
        return array_column(self::cases(), 'name');
    }
}