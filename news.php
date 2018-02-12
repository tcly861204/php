<?php
include_once('./models/news.php');
$news = new News();
if(isset($_GET['action'])){
  switch($_GET['action']){
    case 'detail':
      $row = $news->getItemNew($_GET['id']);
      include_once('./views/news_show.php');
      break;
    case 'add':
      //添加
      if(isset($_GET['send'])){
        $title = $_POST['title'];
        $detail = $_POST['detail'];
        $row = $news->insetNews($title,$detail);
        if($row){
          echo json_encode(array('success'=>true,'errCode'=>0));
        }else{
          echo json_encode(array('success'=>false,'errCode'=>1,'msg'=>'添加失败'));
        }
        return false;
      }
      include_once('./views/news_add.php');
      break;
    case 'del':
      if(isset($_GET['id'])){
        $id = $_GET['id'];
        $row = $news->delNew($id);
        if($row){
          echo json_encode(array('success'=>true,'errCode'=>0));
        }else{
          echo json_encode(array('success'=>false,'errCode'=>1,'msg'=>'删除失败'));
        }
      }
  }
}else{
  $result = $news->getNewsList();
  include_once('./views/news_list.php');
}
?>