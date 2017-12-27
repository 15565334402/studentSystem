<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>学生管理系统</title>
</head>
<style>
    *{margin: 0 ;padding:0;}
    form{margin: 200px auto;width: 450px;height: 250px;border: 1px solid #ccc;border-radius: 3px;}
    .head{height: 40px;line-height: 40px;padding-left: 10px;border-bottom: 1px solid #ccc;background-color: #ccc;}
    .form{margin: 10px;}
    .form div{margin:10px 103px;width: 224px;}
    input{height: 22px;outline: none;border: 1px solid #ccc;border-radius: 3px;}
    input[type=submit]{float: right;margin-left: 15px;padding: 5px;height: 30px;}
    p{text-align: center;float: right;margin-left: 40px;}
    input[type=radio]{vertical-align:middle;}
</style>
<body>
<?php include ("menu.php");?>
<form action="action.php?action=add" method="post">
    <div class="head">增加学生信息</div>
    <div class="form">
        <div>
            <label>姓名：</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>年龄：</label>
            <input type="text" name="age">
        </div>
        <div>
            <label>班级：</label>
            <input type="text" name="class">
        </div>
        <div>
            <label>性别：</label>
            <p><input type="radio" name="sex"value="男">男</p>
            <p><input type="radio" name="sex"value="女">女</p>
        </div>
        <div>
            <label><a href="index.php">返回</a></label>
            <input type="submit"value="添加" name="add">
            <input type="submit" value="重置" name="reset">
        </div>
    </div>
</form>
</body>
</html>