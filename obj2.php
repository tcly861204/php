<?php
/**
 * Created by PhpStorm.
 * Author: 吴天赐
 * Email: 356671808@qq.com
 * Copy: 2017/12/3 良元视觉设计工作室
 * Date: 2017/12/3
 * Time: 19:51
 */
/*
* public 公共的
* private 私有的
* protected 受保护的
*
*/
// class Computer{
//     private $_name = "联想";
//     private $_age = "18";
//     private $_sex = "box";
//     public function run(){
//         return $this->_sex." 在运动";
//     }
// }
////子类
// class Cpu extends Computer{
//
//}
//
//
//$computer1 = new Computer();
//echo $computer1->_name;
//echo $computer1->run();

//
//class Computer{
//    private $_name;
//    private $_model;
//    private $_cpu;
//    private $_keyboard;
//    private $_show;
//    private $_zb;
////
////    public function setName($_name){
////        $this->_name = $_name;
////    }
////
////    public function getName(){
////        return $this->_name;
////    }
//    //拦截器
//    public function __set($name, $value)
//    {
//        $this->$name = $value;
//    }
//    public function __get($name)
//    {
//        return $this->$name;
//    }
//
//}
//
//$cp = new Computer();
//$cp->_name="apple";
//echo $cp->_name;

//
//
//class Computer{
//    const NAME ="DELL";
//
//    public function run(){
//        return $this::NAME;
//    }
//}
////常量访问
//
//
//$cp = new Computer;
//echo $cp->run();
//
//class Computer{
//
//    //常量
//    public static $_NUM = 0;
//    //静态常量
//    public static $_name =10;
//    public static function add(){
//        self::$_NUM++;
//    }
//
//}
//
//
//Computer::add();
//
//
//echo Computer::$_NUM;



class Computer{

}
$cp = new Computer();
echo ($cp instanceof Computer);











?>