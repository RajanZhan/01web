<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/20
 * Time: 21:34
 */

namespace Admin\Controller;
use Admin\Model\AdminModel;
use Rajan\CommonController;

class BaseController  extends CommonController
{
    // 默认执行的方法
    protected function _init()
    {
        //检测后台的登录情况
        $admin_model = new AdminModel();
        $admin_model->checkLogin();

    }

    public function index()
    {

    }
}