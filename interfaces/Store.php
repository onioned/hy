<?php
/**
 * User: chy
 * Date: 2018/4/21
 * Time: 9:53
 * Explain: 接口类：定义必须实现的方法
 */

namespace Stores;


interface Store
{
    //public $stroe_parm;  不能定义变量属性

    /**
     * Retrieve an item from the cache by key.
     *
     * @param  string|array  $key
     * @return mixed
     */
    public function get($key); //没有方法体的

    /**
     * Retrieve an item from the cache by key.
     *
     * @param  string|array  $key
     * @return mixed
     */
    public function set($key,$value); //没有方法体的

}