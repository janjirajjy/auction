<?php 
session_start();
        if(isset($_POST['cus_email'])){
				//connection
                  include("condb.php");
				//รับค่า user & cus_password
                  $cus_email = $_POST['cus_email'];
                  $cus_password = $_POST['cus_password'];
				//query 
                  $sql="SELECT * FROM customer 
                  WHERE  cus_email='$cus_email' AND cus_password='$cus_password' 
                  ";

                  $result = mysqli_query($condb,$sql);

                  //print_r($result);
                  //exit;
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);
                      $_SESSION["cus_id"] = $row["cus_id"];
                      $_SESSION["cus_name"] = $row["cus_name"];
                      $_SESSION["cus_status"] = $row["cus_status"];
                      if($_SESSION["cus_status"]=='ONLINE'){

                        //echo 'member';
                        
                        Header("Location: member/");
                      }

                      if ($_SESSION["cus_status"]!='ONLINE'){   

                        echo "<script>";
                          echo "alert(\" ถูกระงับการใช้งาน\");"; 
                          echo "window.location = 'index.php'; ";
                        echo "</script>";

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: login.php"); //user & cus_password incorrect back to login again

        }
?>