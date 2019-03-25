<?php

    function m_get_data(){
        $query = "select * from employee";
        include 'connection.php';
        $result = mysqli_query($connection,$query);
        $rows = [];
        if($result && mysqli_num_rows($result)>0){
            while ($get_result_to_array = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $rows[]=$get_result_to_array;
            }
        }
        return $rows;
        // var_dump($rows);
    }
    function m_delete_employee(){
        include_once "connection.php";
        $query = ("DELETE FROM employee WHERE id=".$_GET['id']);
            $result = mysqli_query($connection, $query);
            if($result){
                header('location:index.php');
            }else{
                echo "cannot delete";
            }

        }
    function detail_employee(){
        include_once "connection.php";
       $id=$_GET['id'];
       $query=$_GET['id'];
       $query = "SELECT * FROM employee WHERE id='$id'";
       $result=mysqli_query($connection,$query);
        return $result;



        }

        function m_add_employee($data){
            include_once "connection.php";

                $name=$_POST['studentname'];
                $lastname=$_POST['lastname'];
                $age=$_POST['age'];
                $salary=$_POST['salary'];

                $query= "INSERT INTO employee(firstname,lastname,age,salary) 
                VALUES('$name','$lastname','$age','$salary')";
                $result=mysqli_query($connection,$query);
                return $result;
    }


    function m_employee_detail(){
        include 'connection.php';
        $id=$_GET['id'];
        $query ="SELECT * FROM employee WHERE id='$id'";
        $result=mysqli_query($connection,$query);

        return $result;
    }
           
     function m_update_employee($data){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $position=$_POST['title'];
        $age=$_POST['age'];
        $yearofservice =$_POST['yearofservice'];
        $salary=$_POST['salary'];
        $perks=$_POST['perks'];
        $email=$_POST['email'];
        $department=$_POST['departmentid'];

        $query="UPDATE employee SET firtname='$firstname',lastname='$lastname',title='$position'
        ,age='$age',yearofservice='$yearofservice',salary='$salary',perks='$perks',
        email='$email',departmentid='$department'";

     }
     function userValidation(){
      
        include "connection.php";
        
        if(isset($_POST['but_submit'])){
        
            $uname = mysqli_real_escape_string($connection,$_POST['txt_uname']);
            $password = mysqli_real_escape_string($connection,$_POST['txt_pwd']);
        
            if ($uname != "" && $password != ""){
                $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
                $result = mysqli_query($connection,$sql_query);
                $row = mysqli_fetch_array($result);
        
                $count = $row['cntUser'];
        
                if($count > 0){
                    $_SESSION['uname'] = $uname;
                    header('Location: index.php?action=view');
                }else{
                    header('Location: index.php?action=login');
                }
        
         }
        }
        
    }
    function myregister(){
        include "connection.php";
        if(isset($_POST['btn-register'])){
            $firstname=$_POST['username'];
           $lastname=$_POST['name'];
          
            $password=$_POST['password'];
        
            $query= "INSERT INTO user(username,name,password) 
                VALUES('$lastname','$firstname',md5('$password'))";

            $result=mysqli_query($connection,$query);
         
            return $result;

        }
}