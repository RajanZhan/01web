<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/20
 * Time: 21:40
 */

namespace Rajan;
use Think\Controller;
class CommonController extends  Controller
{
    public function _initialize()
    {
        // 判断 是否存在 _init() 方法
        if(method_exists($this,'_init'))
        {
            $this->_init();
            //echo 'common init func';
        }
    }
}