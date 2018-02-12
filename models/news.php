<?php
include_once('conn.php');
class News extends Conn{
  public function __construct($_dbhost="localhost",$_dbuser="root",$_dbpass=""){
    parent::__construct($_dbhost,$_dbuser,$_dbpass);
    parent::selectDB('studay');
    parent::setChart();
  }
  //获取所有新闻列表
  public function getNewsList(){
    return parent::querySelect('SELECT id,user,title,details,addtime FROM news ORDER BY addtime desc');
  }
  //获取单条新闻
  public function getItemNew($id){
    return parent::querySelect('SELECT id,user,title,details,addtime FROM news WHERE id='.$id);
  }
  //添加新闻
  public function insetNews($title,$detail){
    return parent::insertDate("INSERT INTO news (user,title,details,addtime) VALUES ('admin','$title','$detail',now())");
  }
  //删除单个新闻
  public function delNew($id){
    return parent::insertDate("DELETE FROM news WHERE id=".$id);
  }
}

?>