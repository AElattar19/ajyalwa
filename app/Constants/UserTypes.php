<?php

namespace App\Constants;

final class UserTypes
{
    const ADMIN = 1;
    const USER = 2;

    public static function getList()
    {
        return [
            UserTypes::ADMIN => trans("admin"),
            UserTypes::USER => trans("user"),

        ];
    }

    public static function getOne($index = '')
    {
        $list = self::getList();
        $list_one = '';
        if ($index) {
            $list_one = $list[$index];
        }
        return $list_one;
    }


}
