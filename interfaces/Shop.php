<?php
/**
 * User: chy
 * Date: 2018/4/21
 * Time: 9:55
 * Explain:
 */

namespace Stores;
require ('Base.php');   //原生php需要require，框架则自定加载进去  --！
require ('Store.php');

use Stores\Base as Basic;

class Shop extends Basic implements Store  //extends 继承base全部属性和方法，同时implements 拓展 stroe 的方法

{

    public $array = [];

    public function __construct()       //继承父类但不会自动初始化父类构造函数
    {
        parent::__construct();
    }

    /**
     * 必须实现接口store类的方法
     *
     *
     *
     */
    public function get($key){
        echo $this->array[$key];
    }

    /**
     * Retrieve an item from the cache by key.
     *
     * @param  string|array  $key
     * @return mixed
     */
    public function set($key,$value){
        $this->array[$key] = $value;
    }

    /**
     *
     *这是自己的方法
     *
     *
     */
    public function show(){
         echo '这是本类的方法';
    }

}

$_shop = new Shop();
$_shop->set('kid',123);
$_shop->get('kid');
$_shop->show();