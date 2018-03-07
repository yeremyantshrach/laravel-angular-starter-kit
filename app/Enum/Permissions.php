<?php

namespace App\Enum;


class Permissions
{
    const CREATE_PAGES = 'create-pages';
    const EDIT_PAGES = 'edit-pages';
    const DELETE_PAGES = 'delete-pages';

    const PERMISSION_IDS = [
        self::CREATE_PAGES => 1,
        self::EDIT_PAGES => 2,
        self::DELETE_PAGES => 3,
    ];
}