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
    // Ĭ��ִ�еķ���
    protected function _init()
    {
        //����̨�ĵ�¼���
        $admin_model = new AdminModel();
        $admin_model->checkLogin();

    }

    public function index()
    {

    }
}