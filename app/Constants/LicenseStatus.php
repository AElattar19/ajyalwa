<?php

namespace App\Constants;

final class LicenseStatus
{
    const UNPAID = 1;
    const PENDING = 2;
    const PAID = 3;

    public static function getList()
    {
        return [

        	    UserTypes::UNPAID => "لم يتم الدفع",
        	    UserTypes::PENDING => "قيد الدراسة",
                UserTypes::PAID =>"تم الدفع",

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
