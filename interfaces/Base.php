<?php
/**
 * User: chy
 * Date: 2018/4/21
 * Time: 9:57
 * Explain:
 */

namespace Stores;


class Base
{
    public function __construct()
    {
        $this->b1();
        $this->b2();
    }

    public function b1(){
        echo '这是父类b1<br>';
    }

    public function b2(){
        echo '这是父类b2<br>';
    }
}