<?php
/**
 * Created by PhpStorm.
 * Author: 吴天赐
 * Email: 356671808@qq.com
 * Copy: 2017/12/3 良元视觉设计工作室
 * Date: 2017/12/3
 * Time: 21:14
 */

/*
 * 抽象类
 * 抽象类只能被继承
 * 里面只要出现一个抽象方法就必须是抽象类
 * 抽象类不能实现多继承，只支持单继承
 *
 * */

//抽象类
abstract class Computer{
    //抽象方法
    abstract public function _run();

    public function _show(){
        return "20";
    }
}

class NoteComputer extends Computer{
    public function _run(){
        return "10";
    }
}

$note = new NoteComputer();
echo $note->_run();
echo $note->_show();