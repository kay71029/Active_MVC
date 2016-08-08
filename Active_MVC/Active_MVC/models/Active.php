<?php

    session_start();
    require_once 'PDO.php';

class Active extends Database
{
    //顯示Active_se 資料
    function Active_se()
    {
        $sql_se_Active_se_str ="SELECT `ac_id`, `ac_name`, `ac_ details`, `ac_startdate`, 
        `ac_enddate`, `ac_limit_number`, `ac_ bring_with`, `ac_number` FROM `active` ";
        $result_se_Active_se_str =  $this-> getconn() -> prepare( $sql_se_Active_se_str);
        $result_se_Active_se_str -> execute();
        $result_se_Active_se = $result_se_Active_se_str -> fetchAll();
        return $result_se_Active_se;
    }
    
    //新增Active_se資料
     function Active_in($Active_se)
    {
        $sql_in_Active_se_str = "INSERT INTO `Active_se`(`Active_se_id`)  
                            VALUES ('$Active_se');";
        $result_in_Active_se_str = $this-> getconn() -> prepare( $sql_in_Active_se_str);
        $result_in_Active_se_str -> execute();
        $result_in_AActive_se = $result_in_Active_se_str -> fetchAll();
         return $result_se_AActive_se;
        
    }
    
    //修改Active_se資料
    function Active_up($chalass,$number)
    {
        $sql_up_Active_se_str = "UPDATE `Active_se` SET `Active_se_id`='$chalass' 
                            WHERE `number`='$number'";
        $result_up_Active_se_str = $this-> getconn() -> prepare($sql_up_Active_se_str);                    
        $result_up_Active_se_str -> execute(); 
        $result_up_AActive_se = $result_up_Active_se_str -> fetchAll(); 
    }
    
    
    //刪除Active_se資料
    function Active_de($Active_se_id)
    {
        $sql_de_Active_se_str = "DELETE FROM `Active_se` WHERE `Active_se_id`='$Active_se_id'";
        $result_de_Active_se_str = $this-> getconn() -> prepare($sql_de_Active_se_str);
        $result_de_Active_se_str -> execute();
        $result_de_AActive_se = $result_de_Active_se_str -> fetch(); 
    }
    
    


    

}

?>