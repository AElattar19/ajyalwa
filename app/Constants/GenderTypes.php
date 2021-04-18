<?php


namespace App\Constants;


final class GenderTypes
{
    const MALE = 1;
    const FEMALE = 2;

    public static function getList()
    {
        return [
            GenderTypes::MALE => "ذكر",
            GenderTypes::FEMALE => "انثى",
        ];
    }

    public static function getOne($key)
    {

        if (!array_key_exists($key, self::getList())) {
            return "";
        }
        return self::getList()[$key];
    }

}
