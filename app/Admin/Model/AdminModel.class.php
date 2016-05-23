<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/20
 * Time: 21:33
 */

namespace Admin\Model;

use Think\Model;

class AdminModel extends  Model
{
    public function checkLogin()
    {
        if(!$_SESSION['admin'])
        {
            return false;//redirect(U('/Admin/Public/login'));
        }
        else
        {
            return true;
        }

    }

    public function checkPwd($user_name,$pwd)
    {
        if(empty($user_name) || empty($pwd))
        {
            return false;
        }
        if($user_name == 'admin' && $pwd == $pwd)
        {
            $_SESSION['admin'] = $user_name;
            return true;
        }
        else
        {
            return false;
        }
    }

}