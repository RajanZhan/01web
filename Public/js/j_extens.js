
 /*
 * ========================================================================
 * Copyright(c) 01��ϰ��,, All Rights Reserved.
 * ========================================================================
 *  
 * ����ǰ���ļ��Ĺ��ܡ�
 *  
 *  
 * ���ߣ�Сռ(rajan)  ʱ�䣺2016/5/20
 * �ļ�����j_extens
 * �汾��V1.0.0
 * ����:rajan.zhan@foxmail.com
 * �޸��ߣ�           ʱ�䣺               
 * �޸�˵����
 * ========================================================================
*/



 // Ϊjquery ������� ��������
 $.fn.one_fn = function () {
     console.log($(this).html());
 }
 // Ϊjquery ������� �������
 $.fn.extend({
     du_fn1: function () {
         console.log($(this).attr('class'));
     },
     du_fn2: function () {
         console.log($(this).attr('id'));
     },
 })

 // Ϊjquery ������Ӿ�̬����
 $.extend({
     static: function () {
         //console.log($(this).attr('id'));
     }
 })
