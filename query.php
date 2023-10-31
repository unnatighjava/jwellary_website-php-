<?php
            $name = $_POST['name'];
            $contact = $_POST['contact'];
            $email = $_POST['email'];
            $query = $_POST['query'];
             
            //Database connection 
            $conn=new mysqli('localhost','root','','unnati');
            if($conn->connect_error)
            {
                die('connection failed :'.$conn->connect_error);
            }else{
                $stmt=$conn->prepare("insert into query(name,contact,email,query) value(?,?,?,?)");
                $stmt->bind_param("siss",$name,$contact,$email,$query);
                $stmt->execute();
                echo "Query is submitted successfully..."
                $stnmt->close();
                $conn->close();
            }
            ?>
