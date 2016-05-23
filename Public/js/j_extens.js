
 /*
 * ========================================================================
 * Copyright(c) 01研习社,, All Rights Reserved.
 * ========================================================================
 *  
 * 【当前类文件的功能】
 *  
 *  
 * 作者：小占(rajan)  时间：2016/5/20
 * 文件名：j_extens
 * 版本：V1.0.0
 * 邮箱:rajan.zhan@foxmail.com
 * 修改者：           时间：               
 * 修改说明：
 * ========================================================================
*/



 // 为jquery 对象添加 单个方法
 $.fn.one_fn = function () {
     console.log($(this).html());
 }
 // 为jquery 对象添加 多个方法
 $.fn.extend({
     du_fn1: function () {
         console.log($(this).attr('class'));
     },
     du_fn2: function () {
         console.log($(this).attr('id'));
     },
 })

 // 为jquery 对象添加静态方法
 $.extend({
     static: function () {
         //console.log($(this).attr('id'));
     }
 })
