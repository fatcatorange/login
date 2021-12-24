<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        $server_name = 'localhost';
        $username = 'root';
        $password = '';
        $db_name = 'test';
        $name = '';
  // mysqli 的四個參數分別為：伺服器名稱、帳號、密碼、資料庫名稱
        $conn = new mysqli($server_name, $username, $password, $db_name);

        if (!empty($conn->connect_error)) {
          die('資料庫連線錯誤:' . $conn->connect_error);    // die()：終止程序
        }
  
        
if (empty($_GET['name']) || empty($_GET['number'])){
      echo '資料有缺，請再次填寫<br>';
      exit();   // 終止程序
  };


  
      $name = $_GET['name'];
  
      $number = $_GET['number'];
      
      echo "姓名:";
      echo $name;
      echo "<br>";
      echo '座號';
      echo $number;
      echo '<br>';
      //10'); DELETE FROM student WHERE `姓名` < 10000; #
  $sql = "INSERT INTO student(姓名,座號) VALUES('$name','$number') ";
  if ($conn->multi_query($sql) === TRUE) {
    echo "成功註冊!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
