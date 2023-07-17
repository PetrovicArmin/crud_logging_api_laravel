<?php

namespace App\Models;

enum UserType: string {
    case GUEST = 'VIEWER';
    case ADMIN = 'ADMIN';

    public static function randomName(): string
    {
        $arr = array_column(self::cases(), 'name');

        return $arr[array_rand($arr)];
    }

    public static function names(): array {
        return array_column(self::cases(), 'name');
    }
}