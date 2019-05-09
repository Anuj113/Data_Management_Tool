<?php
$search_value=$_POST["search"];
$con=new mysqli("localhost","root","","testdb");
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from persons where phone like '%$search_value%'";

        $res=$con->query($sql);

        while($row=$res->fetch_assoc()){
            echo 'First_name:  '.$row["first_name"];


            }       

        }
?>
