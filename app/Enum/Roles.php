<?php

namespace App\Enum;

class Roles
{
    const ADMIN = 'admin';
    const USER = 'user';

    const ROLE_IDS = [
        self::ADMIN => 1,
        self::USER => 2
    ];
}