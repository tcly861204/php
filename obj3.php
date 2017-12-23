<?php
/**
 * Created by PhpStorm.
 * Author: 吴天赐
 * Email: 356671808@qq.com
 * Copy: 2017/12/3 良元视觉设计工作室
 * Date: 2017/12/3
 * Time: 20:44
 */

/*
class Computer{
    public $_name = "联想";
    public function _run(){
        return $this->_name."在运行";
    }
}

class noteComputer extends Computer{
    public $_name = "dell";
    public function _run(){
        return $this->_name;
    }
}


$noteC = new noteComputer();
echo $noteC->_run();*/

/*
class Computer{
    protected $_name = "联想";
    protected function run(){
       return $this->_name;
    }
}

class NoteComputer extends Computer{
    public function run(){
        echo parent::run();
        return $this->_name;
    }
}

$noteC = new NoteComputer();
echo $noteC->run();

*/

/*
 * final 在class关键字前面表示类不能继承
 *
 * final 在方法前面不能重写此方法
 *
 * */
/*class Computer{

    final public function run(){
        return 10;
    }

}

class NoteComputer extends Computer{
    public function run(){

    }
}*/




