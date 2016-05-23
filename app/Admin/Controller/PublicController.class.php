<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/20
 * Time: 21:52
 */

namespace Admin\Controller;

use Admin\Model\AdminModel;
use Rajan\CommonController;

class PublicController extends CommonController
{

    public  function _init()
    {
        $admin_model = new AdminModel();
        if($admin_model->checkLogin())
        {
            redirect(u('/Admin/Index/index'));
        }
    }


    public function login()
    {
        $admin_model = new AdminModel();
        $data = I('post.');
        if(!empty($data))
        {
            if(!$admin_model->checkPwd($data['username'],$data['userpass']))
            {
                redirect(U('/Admin/Public/login'));
            }
            else
            {
                redirect(U('/Admin/Index/index'));
            }
            //var_dump($data);
            return;
        }

        $this->display();
    }

    public function checkPwd()
    {

    }

    //通用验证码
    public function verify()
    {
        $Verify = new \Think\Verify();
        $Verify->codeSet = '0123456789';
        $Verify->length = 4;
        $Verify->imageH = 0;
        $Verify->entry();
    }
}
