<?php
/**
 * Created by PhpStorm.
 * User: mickey
 * Date: 2018/7/9
 * Time: 13:59
 */

namespace core\Common;


class ArrayHelper
{
    /**
     * $array = [['test' => 'xxx'], ['test' => 'bbb']]
     * multisort($array, 'test')
     * @param array $array
     * @param $sortKey
     * @param int $sort
     * @return array|bool
     */
    public static function multisort(array $array, $sortKey, $sort=SORT_ASC)
    {
        $tempArray = [];
        foreach($array as $value){
            if(is_array($value)){
                $tempArray[] = $value[$sortKey];
            }
        }
        if(empty($tempArray)){
            return false;
        }

        array_multisort($tempArray, $sort, $array);
        return $array;
    }
}