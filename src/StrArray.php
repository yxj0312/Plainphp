<?php


namespace Plainphp;


class StrArray
{
    public function test()
    {
        $str = 'abbcccddddeef';
        $arr = str_split($str);
        print_r($arr);
        $res = array_count_values($arr);

        print_r($res);
//        var_dump($res);die;
    }
}

$h1 = new StrArray();

$h1->test();