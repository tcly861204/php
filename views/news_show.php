<?php
include_once('./views/header.php');
?>
<div class="layui-body">
  <!-- 内容主体区域 -->
  <div style="padding: 15px;">
    <h1><?php echo $row[0]['title'];?></h1>
    <div class="content">
      <?php echo $row[0]['details'];?>
    </div>
  </div>
</div>
<script>
</script>
<?php
include_once('./views/footer.php');
?>