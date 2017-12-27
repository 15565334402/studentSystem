<?php
include ("connectDatabase.php");
if($conn){
    switch ($_GET['action']){
        case 'add':
            $name = $_POST['name'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $class = $_POST['class'];
            $sql = "INSERT INTO stu(name,age,sex,class)VALUES ('$name','$age','$sex','$class')";
            $res = mysqli_query($conn,$sql);
            if($res>0){
                echo "<script>alert('添加成功！')</script>";
            }else{
                echo "<script>alert('添加失败！')</script>";
            }
            header("Location:index.php");
            break;
        case 'edit':
            $id = $_POST['id'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $class = $_POST['class'];
            $sql = "UPDATE stu SET name='$name',age='$age',sex='$sex',class='$class'WHERE id='$id'";
            $res = mysqli_query($conn,$sql);
            if($res>0){
                echo "<script>alert('修改成功！')</script>";
            }else{
                echo "<script>alert('修改失败！')</script>";
            }
           header("Location:index.php");
            break;
        case 'del':
            $id = $_GET['id'];
            $sql = "delete from stu WHERE id='$id'";
            $res = mysqli_query($conn,$sql);
            if($res>0){
                echo "<script>alert('删除成功！')</script>";
            }else{
                echo "<script>alert('删除失败！')</script>";
            }
            header("Location:index.php");
            break;

    }
}