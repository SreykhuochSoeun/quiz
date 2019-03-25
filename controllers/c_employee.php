
<?php
$data = array();
Flexible_function($data);

function Flexible_function(&$data){
    $function = 'register';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        $function = $action;
    }
    
    $function($data);
}


function login(&$data) {
    $data['page'] = 'login';
}

function loginValidation(&$data) {
    userValidation();
}
function add(&$data){
    $data['page'] = 'employee/add';

}

function view(&$data){
$data['employee_data'] = m_get_data();
$data['page'] = 'employee/view';
}

function edit(&$data) {
    $data['employee_data'] = m_employee_detail();
    $data['page'] = 'employee/edit';
}

function update(&$data){
    $data['employee_data'] = m_update_employee($_POST);
        $id=$_GET['id'];
        if($data){
            $action = 'view';
        }else{
        $action='edit&id=id';
        }
        header("Location:index.php?action=$action");

}

function delete(&$data){
$data_delete = m_delete_employee();
if ($data_delete){
    $action = "view";
}else{
    
}

}
function get_form_data(&$data){
   $add_data= m_add_employee($_POST);
    if($add_data){
        $action ='view';
    }else{
        $action='add';
    }
    header("Location:index.php?action=$action");
   
}

function register(&$data) {
    $data['register']=myregister();
    if($data['register']){
    header("Location:index.php");
    }
    $data['page'] = 'register';
}
       
function registerForm(){
    $data=myregister();
    if($data){
        header('location:index.php?action=view');
    }else{

        header('location:index.php?action=register');

    }
}


