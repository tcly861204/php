<?php
//创建电脑类
class Computer {
    //构造方法 实例化对象时就运行了
    //常用于初始化对象
    public function __construct(){
        echo "构造方法";
    }

    //用于垃圾回收
    public function __destruct()
    {
        echo "析构方法";
    }

    //成员属性
    public $_name = "apple";
    public $_age = "25";

    //成员方法
    public function run(){
      return 10;
    }


}

//实例化对象
$cp = new Computer();

// var_dump($cp);
//$cp->_name = "联想";
//echo $cp->_name;
//echo $cp->run();




?>