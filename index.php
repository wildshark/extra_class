<?php
include('connection.php');
include("global.php");
$conn = connection($db);
session_start();

if(!isset($_REQUEST['submit'])){
    if(!isset($_REQUEST['page'])){
        require("home.php");
    }else{  
        
        $q = hex2bin($_REQUEST['token']);
        $q = json_decode($q,TRUE);

        switch($_REQUEST['page']){

            case"dashboard";

                $sql="SELECT
                user_material.grade_id,
                user_material.user_id,
                user_material.purchase_clock,
                user_material.alocated,
                DATE_ADD(DATE(purchase_clock),INTERVAL 30 DAY) AS end_clock,
                user_material.status_id
                FROM user_material WHERE `user_id`=?
                ORDER BY user_material.grade_id DESC";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s",$q['user_id']);
    
                $stmt->execute();
            
                $result = $stmt->get_result();
                if($result->num_rows == 0){
                    require("payment.php");
                }else{
                    $r = $result->fetch_assoc();
                    if($r['end_clock'] > date("Y-m-d")){
                        require("dashboard.php");
                    }else{
                        $id = $r['grade_id'];
                        $sql = "UPDATE `user_material` SET `status_id` = 2 WHERE `grade_id` = '$id'";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        require("payment.php");
                    }
                }
            break;

            case"k1";
                require('lesson/k1.php');
            break;

            case"k2";
                require('lesson/k2.php');
            break;

            case"c1";
                require('lesson/c1.php');
            break;

            case"c2";
                require('lesson/c2.php');
            break;

            case"c3";
                require('lesson/c3.php');
            break;

            case"c4";
                require('lesson/c4.php');
            break;

            case"c5";
                require('lesson/c5.php');
            break;

            case"c6";
                require('lesson/c6.php');
            break;

            default;    
                require("404.php");

        }

    }
}else{
    switch($_REQUEST['submit']){
       
        case"sign-in";

            $sql ="SELECT * FROM `user_account` where `username`=? AND `password`=? LIMIT 0,1";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss",$_REQUEST['username'],$_REQUEST['password']);

            $stmt->execute();
        
            $result = $stmt->get_result();
            if($result->num_rows == 0){
                require("signin.php");
            } else{
                $r = $result->fetch_assoc();
                $_SESSION['user_id'] = $r['user_id'];
                $_SESSION['name'] = $r['fname']." ".$r['lname']; 
                $url['token'] = bin2hex(json_encode($r));
                header("location: ?page=dashboard&".http_build_query($url));
            }
        break;

        case"sign-up";
            $_REQUEST['time'] = time();
            $sql ="INSERT INTO `elearn4kid`.`user_account`(`sys_clock`,`fname`, `lname`, `username`, `password`, `mobile`, `email`) VALUES (?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssssss",$_REQUEST['time'],$_REQUEST['fname'],$_REQUEST['lname'],$_REQUEST['username'],$_REQUEST['password'],$_REQUEST['mobile'],$_REQUEST['email']);

            if(false ==$stmt->execute()){

            }else{
                $_REQUEST['uuser_id'] =$conn->insert_id;
                $_SESSION['user_id'] = $conn->insert_id;
                $_SESSION['name'] = $_REQUEST['fname']." ".$_REQUEST['lname']; 
                $url['token'] = bin2hex(json_encode($_REQUEST));
                header("location: ?page=dashboard&".http_build_query($url));
            }
        
        break;
    }

}

?>