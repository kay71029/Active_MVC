<?php

    session_start();
    require_once 'PDO.php';

class Employee extends Database
{
     
    //顯示 Employee 資料
    function Employee_se()
    {
        $sql_se_Employee_str ="SELECT * FROM `employee`  ORDER BY `em_id` DESC";
        $result_se_Employee_str= $this-> getconn() ->prepare($sql_se_Employee_str);
        $result_se_Employee_str->execute();
        $result_se=$result_se_Employee_str->fetchAll(); 
        
        return  $result_se;
    }
    
    //新增Employee資料
     function Employee_in($user_id,$user_name)
    {
        
        $str_sql_insert_Employee = "INSERT INTO `Employee`( `user_id` ,  `user_name` )  
                             VALUES('$user_id', '$user_name')"; 
        $result_sql_insert_Employee = $this-> getconn() ->prepare($str_sql_insert_Employee);
        $result_sql_insert_Employee->execute();
        $result_se_Employee= $result_sql_insert_Employee->fetchAll(); 
        
        
    }
    
    //刪除Employee資料
     function Employee_de($em_id) 
    {
       
        $sql_de_Employee_str ="DELETE FROM `Employee` WHERE `em_id`='$em_id';";
        $result_de_Employee_str= $this->getconn()->prepare($sql_de_Employee_str);
        $result_de_Employee_str->execute();
        $result_se=$result_de_Employee_str->fetchAll(); 
       
    }
    
    //顯示 Employee 個人資料
    function Employee_person($id)
    {
        $sql_se_Employee_se_str = "SELECT * FROM `Employee` WHERE `user_id`= ? ";
        $result_se_Employee_str= $this-> getconn() ->prepare( $sql_se_Employee_se_str);
        $result_se_Employee_str ->bindParam(1, $id, PDO::PARAM_STR);
        $result_se_Employee_str ->execute();
        $result_se = $result_se_Employee_str->fetchAll();
        return  $result_se;
    }
    
    //更新 Employee 個人資料
    function Employee_personUp($fpwd,$femail,$ftel,$id)
    {
        $sql_up_Employee_str = "UPDATE `Employee` SET `user_password`= ? ,
                                    `user_email`= ? ,`user_tel`= ?
                               WHERE `user_id` =  ? " ;
        $result_up_Employee_str = $this-> getconn() ->prepare($sql_up_Employee_str);
        $result_up_Employee_str->bindParam(1, $fpwd, PDO::PARAM_STR);
        $result_up_Employee_str->bindParam(2, $femail, PDO::PARAM_STR);
        $result_up_Employee_str->bindParam(3, $ftel, PDO::PARAM_INT);
        $result_up_Employee_str->bindParam(4, $id, PDO::PARAM_STR);
        $result_up_Employee_str->execute();
        $result_se = $result_up_Employee_str->fetchAll();

    }
    
    //檢查資料
    function Check($id,$pw)
    {
        $sql_se_Employee_str= "SELECT * FROM `Employee` where `user_id` = ? and `user_password` = ? ";
        $result_se_Employee_str = $this-> getconn() ->prepare($sql_se_Employee_str);
        $result_se_Employee_str->bindParam(1, $id, PDO::PARAM_STR);
        $result_se_Employee_str->bindParam(2, $pw, PDO::PARAM_STR);
        $result_se_Employee_str ->execute();
        $result_se = $result_se_Employee_str->fetchAll();
        return $result_se;  
    }
}

?>