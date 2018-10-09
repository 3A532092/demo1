<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/8
 * Time: 下午 09:29
 */
 require '../vendor/autoload.php';

 
 use \Demo\helloworld as World;
 use Demo\hello\lara;
 use Demo\hello;
 
 $world = new World();
 $lara= new Lara();
 $vincent= new hello\someone('Vincent');
 
 // 以下Someone類別的使用可以不用use Demo\Hello; 
 $mary= new \Demo\hello\someone('Mary');
 $john= new Demo\hello\someone('John');

 