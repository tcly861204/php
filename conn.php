<?php
//连接数据库
@$_conn = new mysqli("localhost","root","");
if(mysqli_connect_errno()){
    echo "数据库连接出错：".mysqli_connect_error();
    exit();
}

//连接表
$_conn->select_db("dbcms");
if($_conn->errno){
    echo "数据库操作错误".$_conn->error;
}

$_conn->set_charset("utf8");


//创建sql语句
$_sql = "SELECT * FROM cms_message";
$_result = $_conn->query($_sql);
//获取第一条数据，再运行指针下移一条

//$row = $_result->fetch_row();  //索引数组
//$row = $_result->fetch_array();  //关联+索引数组
//$row = $_result->fetch_all();  //获取所有数据
//$row = $_result->fetch_assoc();  //获取关联数组
/*
$row = $_result->fetch_object();  //使用对象获取
print_r($row->us_content);
*/

//循环取值
//while(!!$row = $_result->fetch_array()){
//    echo $row[2];
//}

/*
//查看单条字段，指针下移一条
$row = $_result->fetch_field();
//查看多条字段
$row = $_result->fetch_fields();

print_r($row);

*/


//查询到了多少行
echo $_result->num_rows;
//查询到多少列字段
echo $_result->field_count;




/*
//移动数据指针指定打印的开始位置
$_result->data_seek(2);
$row = $_result->fetch_row();
echo $row[0];
*/


/*
//移动字段指针
$_result->field_seek(3);
$row = $_result->fetch_field();
echo $row->name;
*/


//新增，修改，删除影响的行数
echo $_conn->affected_rows;














//释放结果集
$_result->free();





//断开数据库
$_conn->close();
?>