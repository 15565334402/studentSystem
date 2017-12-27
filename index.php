<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>学生信息浏览</title>
</head>
<style>
    .form{width: 700px;margin: 100px auto;border: 1px solid #ccc;border-radius: 5px;}
    .head{height: 40px;line-height: 40px;padding-left: 10px;border-bottom: 1px solid #ccc;background-color: #ccc;}
    table-head{padding-right:17px;background-color:#999;color:#000;}
    .table-body{width:100%; height:300px;overflow-y:scroll;text-align: center;}
    .table-head table,.table-body table{width:100%;}
    .table-body table tr:nth-child(2n+1){background-color:#f2f2f2;}
    a{margin-left: 15px;}
</style>
<body>
<?php
   include ("menu.php");
?>
<script>
    function doDel(id) {
        if(confirm("确认删除吗？")){
            window.location="action.php?action=del&id="+id;
        }
    }
</script>
<div class="form">
    <div class="head">学生信息显示</div>
    <div class="table-head">
        <table>
            <colgroup>
                <col style="width: 80px;" />
                <col />
            </colgroup>
            <thead>
            <tr>
                <th width="100px">序号</th>
                <th width="100px">姓名</th>
                <th width="100px">性别</th>
                <th width="100px">年龄</th>
                <th width="100px">班级</th>
                <th width="183px">操作</th>
            </tr>
            </thead>
        </table>
    </div>
    <div class="table-body">
        <table>
            <colgroup><col style="width: 80px;" /><col /></colgroup>
            <tbody>
                  <?php
                  include ("connectDatabase.php");
                  $sql_select = "select * from stu";
                  foreach ($conn->query($sql_select)as$row){
                      echo '<tr>';
                      echo "<td width=\"100px\">{$row['id']}</td>";
                      echo "<td width=\"100px\">{$row['name']}</td>";
                      echo "<td width=\"100px\">{$row['sex']}</td>";
                      echo "<td width=\"100px\">{$row['age']}</td>";
                      echo "<td width=\"100px\">{$row['class']}</td>";
                      echo "<td width=\"183px\">
                            <a href='edit.php?id={$row['id']}'>编辑</a>
                            <a href='javascript:void(0)' onclick='doDel({$row['id']})'>删除</a></td>";
                      echo '</tr>';
                  }
                  ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>