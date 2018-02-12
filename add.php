<?php
include_once('./views/header.php');
if(isset($_GET['action']) && $_GET['action']==='add'){
  if(isset($_POST['title']) && isset($_POST['detail'])){
    $title = $_POST['title'];
    $detail = $_POST['detail'];
    include_once('./db/conn.php');
    $result = $conn->query("INSERT INTO news (user,title,details,addtime) VALUES ('admin','$title','$detail',now())");
    echo $result;
    return false;
  }else{
    Header("Location: add.php");
  }
}
?>
<div class="layui-body">
  <!-- 内容主体区域 -->
  <div style="padding: 15px;">
  <form class="layui-form" action="add.php?action=add" method="POST">
  <div class="layui-form-item">
    <label class="layui-form-label">新闻标题</label>
    <div class="layui-input-block">
      <input name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input" type="text">
    </div>
  </div>
  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">新闻内容</label>
    <div class="layui-input-block">
      <div id="editor" name="detail">
      </div>
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</form>
</div>
</div>
<script src="../public/js/wangEditor.min.js"></script>
<script>
    var E = window.wangEditor
    var editor = new E('#editor');
    editor.create();
    console.log('1111');
</script>
<?php
include_once('./views/footer.php');
?>