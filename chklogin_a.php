<?php 
session_start();
        if(isset($_POST['user_username'])){
				//connection
                  include("condb.php");
				//รับค่า user & user_password
                  $user_username = $_POST['user_username'];
                  $user_password = $_POST['user_password'];
				//query 
                  $sql="SELECT * FROM user 
                  WHERE  user_username='$user_username' AND user_password='$user_password' 
                  ";

                  $result = mysqli_query($condb,$sql);

                  //print_r($result);
                  //exit;
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);
                      $_SESSION["user_id"] = $row["user_id"];
                      $_SESSION["user_name"] = $row["user_name"];
                      $_SESSION["user_level"] = $row["user_level"];
                      if($_SESSION["user_level"]=='A'){

                        //echo 'member';
                        
                        Header("Location: admin/");
                      }

                      if ($_SESSION["user_level"]!='A'){   

                        echo "<script>";
                          echo "alert(\" ไม่มีสิทธิเข้าใช้งานระบบ\");"; 
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


             Header("Location: login_admin.php"); //user & user_password incorrect back to login again

        }
?>