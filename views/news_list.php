<?php
include_once('./views/header.php');
?>
<div class="layui-body">
  <!-- 内容主体区域 -->
  <div style="padding: 15px;">
      <table class="layui-table" id="newList">
        <colgroup>
          <col width="60">
          <col>
          <col width="200">
          <col width="200">
        </colgroup>
        <thead>
          <tr>
            <th text-align="center">序号</th>
            <th>新闻标题</th>
            <th>发布时间</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
          <?php
            for($i=0;$i<count($result);$i++){
              echo '<tr><td>'.($i+1).'</td>
                      <td>'.$result[$i]['title'].'</td>
                      <td>'.$result[$i]['addtime'].'</td>
                      <td>
                      <div class="layui-table-cell laytable-cell-1-9" >
                        <a class="layui-btn layui-btn-primary layui-btn-xs" href="news.php?action=detail&id='.$result[$i]['id'].'" lay-event="detail">查看</a>
                        <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
                        <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del" data-id="'.$result[$i]['id'].'">删除</a>
                      </div>
                      </td>
                    </tr>';
            }
          ?>
        </tbody>
      </table>
  </div>
</div>
<script>
$(function(){
  $('#newList').on('click',function(e){
    if($(e.target).attr('lay-event')==='del'){
      layer.confirm('真的要删除吗', function(index){
        $.post('/news.php?action=del&id='+$(e.target).attr('data-id'),function(data){
          layer.close(index);
          if(data.success && data.errCode===0){
            layer.msg('删除成功',{time:1000},function(){
              window.location.href = 'news.php';
            });
          }
        },'json');
      });
    }
  });
});
</script>
<?php
include_once('./views/footer.php');
?>
