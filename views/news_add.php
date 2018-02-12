<?php
include_once('./views/header.php');
?>
<div class="layui-body">
  <!-- 内容主体区域 -->
  <div style="padding: 15px;">
  <form class="layui-form">
    <div class="layui-form-item">
      <label class="layui-form-label">新闻标题</label>
      <div class="layui-input-block">
        <input name="title" id="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input" type="text">
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
        <button class="layui-btn" id="submit" lay-submit="">立即提交</button>
        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
      </div>
    </div>
  </form>
  </div>
</div>
<script src="../public/js/wangEditor.min.js"></script>
<script>
  $(function(){
    var E = window.wangEditor
    var editor = new E('#editor');
    editor.create();
    $('#submit').on('click',function(e){
      e.preventDefault();
      $.post('/news.php?action=add&send',{
        title:$('#title').val(),
        detail:editor.txt.html()
      },function(data){
        if(data.success && data.errCode===0){
          layer.msg('添加成功',{time:1000},function(){
            window.location.href = 'news.php';
          });
        }
      },'json');
    });
  });
</script>
<?php
include_once('./views/footer.php');
?>