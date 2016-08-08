<?php

class AdminController extends Controller {
    
    function Login()
    {
        $id= $_POST['admin_id'];
        $pw=$_POST['admin_password']; 
        
        $user = $this->model("Admin");
        $result_se_AClass= $user->Check($id,$pw);
        
      if(count($result_se_AClass) ==1 )
      {
         $_SESSION['admin_id']= $id;
         header("Location:Main");
         
      }
      else 
      {
         $this->view("Admin/Login");
      }
        $this->view("Admin/Login");
        
    }
        
    function Main()
    {
        //$this->defense();// 檢查是否合法登入
        // $id =$_SESSION['admin_id'];
        
        // $user = $this->model("Admin");
        // $user->GetTeacher($id);
        
        $this->view("Admin/Main",$user);
    }
    
    //顯示資料
    function Modify()
    {
        // $this->defense();// 檢查是否合法登入
        // $user = $this->model("Admin");
        // $r=$user->Admin_se();
        $this->view("Admin/Modify",$r);
      
    }
    
    //修改資料新增
    function ModifyUp()
    {
        $id=$_SESSION["admin_id"];
        $admin_name = $_POST["admin_name"];
        $admin_jobtitle = $_POST["admin_jobtitle"];
        $admin_educational = $_POST["admin_educational"];
        $admin_office = $_POST["admin_office"];
        $admin_tel = $_POST["admin_tel"];
        $admin_email = $_POST["admin_email"];
        $admin_specialty = $_POST["admin_specialty"];
        $officetime = $_POST["officetime"];
        
        $user = $this->model("Admin");
        $user->Admin_up($id, $admin_name,$admin_jobtitle,$admin_educational,$admin_office, $admin_tel,$admin_email,$admin_specialty, $officetime);
        $this->Main();
    
    }
//活動資訊_active---------------------------------------------------- 

    //活動資訊資料顯示
    function ActiveAdd()
    {
        // $this->defense();// 檢查是否合法登入
        $user = $this->model("Active");
        $result_se_Active= $user->Active_se();
        $this->view("Admin/ActiveAdd", $result_se_Active);
    }
    
    //活動資訊新增
    function ActiveIn()
    {
        
        //$class=$_POST["addclass"];
        //$this-> defense();
        $user = $this->model("AClass");
        $user->AClass_in($class);
        $this->ClassAdd();
    }
    
    function ActiveModify()
    {
        //$this-> defense();
        $this->view("Admin/ClassModify");
    }
    
    //活動資訊修改
    function ActiveUp()
    {
        $chalass=$_POST["chalass"];
        $number=$_POST["number"];
        $user = $this->model("AClass");
        $user->AClass_up($chalass,$number);
        $this->ClassAdd();
    }
    
    //活動資訊刪除
    function ActiveDe()
    {
       $class_id=$_GET['class_id'];
       $user = $this->model("AClass");
       $user->AClass_de($class_id);
       $this->ClassAdd();
    }
    
    
//員工資料----------------------------------------------
    
    //新增員工資料
    function EmployeeAdd()
    {
        // $this->defense();// 檢查是否合法登入
        // $em_id= $_POST['em_id'] ;
        // $em_name=$_POST['em_name'];
       
        // if( $em_name!=null &&  $em_id!=null)
        // {
        //   $user = $this->model("Student");
        //   $user->Studnet_in($em_id,$em_name);
          
        // }
         $this->view("Admin/EmployeeAdd");
    }
    //查詢員工基本資料
    function EmployeeCheck()
    {
        // $this->defense();// 檢查是否合法登入
         $user = $this->model("Employee");
        $result_se= $user->Employee_se();
        $this->view("Admin/EmployeeCheck",$result_se);
    }
    //刪除員工基本資料
    function EmployeeDe()
    {
         $em_id=$_GET['em_id'];
         $user = $this->model("Employee");
         $user ->Employee_de($em_id);
         $this->EmployeeCheck();
    }
    
    
    
//ClassInfor-------------------------------------------    
    
    //顯示課程選單
    function ClassInforAdd()
    {
        // $this->defense();// 檢查是否合法登入
        // $user = $this->model("ClassInfo");
        // $result_se_class_name= $user->ClassName();
        $this->view("Admin/ClassInforAdd");
        
    }
    //新增員工資料
    function Add()
    {
        // // $class=$_POST["addclass"];
        // //$this-> defense();
        //  $em_id = $_POST['em_id'];
        //  $number =$_POST ['number'];
        // $user = $this->model("ClassInfo");
        //$user->AddStudent($number,$em_id);
        // $this->ClassInforAdd();
    }
    
    function ManageEmployee()
    {
        // $this->defense();// 檢查是否合法登入
        
        // $user = $this->model("ClassInfo");
        // $result_se_class_name= $user->ClassName();
        $this->view("Admin/ManageEmployee");
    }
    
    function CheckManage()
    {
        // $this->defense();// 檢查是否合法登入
        
        // $user = $this->model("ClassInfo");
        // $result_se_class_name= $user->ClassName();
        $this->view("Admin/CheckManage");
    }
    
    
    //  ClassInforCheckAJ()
    // {
    //     // $class_name=$_GET['class_name'];
    //     // // echo $class_name;
    //     // $user = $this->model("ClassInfo");
    //     // $result_se_class_name= $user->AJAX($class_name);
    //     $this->view("Admin/ajax",$result_se_class_name);
         
    // }
    
    
    //刪除課程員工資料
    function DeStudent()
    {
        $em_id=$_GET['em_id'];
        $user = $this->model("ClassInfo");
        $user->AClass_de($em_id);
        $this->ClassInforCheck();
    }
    
//Questiondata-------------------------------------------     
    function QuestionAdd()
    {
        // $this->defense();// 檢查是否合法登入
        // $question=$_POST["question"];
        // $Ans_A =$_POST["Ans_A"];
        // $Ans_B=$_POST["Ans_B"];
        // $Ans_C=$_POST["Ans_C"];
        // $Ans_D=$_POST["Ans_D"];
        // $Ans=$_POST["Ans"];
        // $question_ok=$_POST["question_ok"];
        
        // if(isset($question_ok))
        // {
        //     $user = $this->model("Question");
        //     $user->Question_in($question,$Ans_A,$Ans_B,$Ans_C,$Ans_D,$Ans); 
        
        // }
            $this->view("Admin/QuestionAdd");
    }
    
    function QuestionCheck()
    {
        // $this->defense();// 檢查是否合法登入
        // $user = $this->model("Question");
        // $result_se= $user->Question_se();
        $this->view("Admin/QuestionCheck");
    }
    
    function QuestionDE()
    {
        $q_id=$_GET['q_id'];
        $user = $this->model("Question");
        $result_se= $user->Question_de($q_id);
        $this->QuestionCheck();
    }
    
    function QuestionModify()
    {
        $qu_id = $_GET["chqu_id"];
       // echo $_GET["chqu_id"];
        $user = $this->model("Question");
        $result_se= $user->Question_mo($qu_id);
        $this->view("Admin/QuestionModify",$result_se);
    }
    
    //課程修改
    function QuestionUp()
    {
        $question = $_POST["question"];
        $Ans_A = $_POST["Ans_A"];
        $Ans_B = $_POST["Ans_B"];
        $Ans_C = $_POST["Ans_C"];
        $Ans_D = $_POST["Ans_D"];
        $Ans = $_POST["Ans"];
        $chqu_id = $_POST["chqu_id"];
        
        
        $user = $this->model("Question");
        $user->Question_up($chqu_id,$question,$Ans_A,$Ans_B,$Ans_C,$Ans_D,$Ans);
        $this->QuestionCheck();
    }
    
    
//Recode----------------------------------------------------    
    
    //選單選擇
    function ScoreCheck()
    {
        $this->defense();// 檢查是否合法登入
        $user = $this->model("ClassInfo");
        $result_se_class_name= $user->ClassName();
        $this->view("Admin/ScoreCheck",$result_se_class_name);
    }
    
    //
    function ScoreCheckAJ()
    {
        $class_name=$_GET['class_name'];
        // echo $class_name;
        $user = $this->model("Recode");
        $result_se_class_name= $user->AJAX($class_name);
        $this->view("Admin/ajax2",$result_se_class_name);
         
    }
     
//Logout----------------------------------------------------
    function Logout()
    {
        session_destroy();
        header("Location:../Home/index");
        
    }
    
    
    function defense()
    {
        
        if(!isset ($_SESSION['admin_id']))
        {
          header("Location:../Home/index");
          
        }
    }

}

?>
