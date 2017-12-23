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

/*
$_sql = "UPDATE cms_admin SET usename='tcly861204' WHERE id=2;";
$_sql.= "UPDATE cms_flower SET us_touser='tcly861204' WHERE us_id =1";

//执行多条sql
$result = $_conn->multi_query($_sql);
echo $_conn->affected_rows;
*/




/*
$_sql = "SELECT * FROM cms_admin;";
$_sql .= "SELECT * FROM cms_flower;";
$_sql .= "SELECT * FROM cms_friend";

if($_conn->multi_query($_sql)){
    $_result = $_conn->store_result();
    print_r($_result->fetch_array());
    echo "<br/>";

    //指针下一条sql
    $_conn->next_result();
    $_result = $_conn->store_result();
    if(!$_result){
        echo "第二条sql数据有误";
        exit();
    }
    print_r($_result->fetch_array());

    //指针下一条sql
    $_conn->next_result();
    $_result = $_conn->store_result();
    if(!$_result){
        echo "第三条sql数据有误";
        exit();
    }
    print_r($_result->fetch_array());


}else{
    echo "第一条数据有误";
    exit();
}

*/



//事务
//设置关闭自动提交
$_conn->autocommit(false);

$_sql = '';
$_sql .= "UPDATE cms_flower SET us_flower=us_flower+30 WHERE us_id =1;";
$_sql .= "UPDATE cms_flower SET us_flower=us_flower-30 WHERE us_id =2";

if($_conn->multi_query($_sql)){
    //第一条语句是否成功
    $_success = $_conn->affected_rows==1 ? true : false;
    //指针下移一条，第一句是否成功
    $_conn->next_result();
    $_success2 = $_conn->affected_rows==1 ? true : false;
    if($_success && $_success2){
        $_conn->commit();
        echo "提交成功";
    }else{
        $_conn->rollback();
        echo "操作失败";
    }
}else{
    echo "第一条sql语句有误";
}
$_conn->autocommit(true);








//断开数据库
$_conn->close();
?>