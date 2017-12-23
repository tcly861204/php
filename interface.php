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
 *
 * 接口
 * 1.接口不能被实例化
 * 2.接口是特殊抽象类
 * 3.接口是为了规范实现它的子类，以达到统一的目的
 *
 */

// 声明一个'iTemplate'接口
/*
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}


// 实现接口
class Template implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}

*/



/*
 * 多态
 *
 */

interface Computer{
    /**
     * @return mixed
     */
    public function version();
    public function work();
}

class noteComputer implements Computer{
    public function version(){
        echo "笔记本";
    }
    public function work(){
        echo "可以便携式运行win7";
    }
}


class DeskComputer implements computer{
    public function version(){
        echo "台式机";
    }
    public function work()
    {
        echo "台式机在工作";
        // TODO: Implement work() method.
    }
}

class Person{
    public function _run($type){
        echo "这个人";
        $type->version();
        $type->work();
    }
}


$note = new noteComputer();
$desk = new DeskComputer();


$person = new Person();

$person->_run($note);
$person->_run($desk);




