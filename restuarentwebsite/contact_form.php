<?php

$connection=mysqli_connect('localhost','root','','contact_db');

if(isset($_POST['send'])){
       $name=$_POST['name'];
       $email=$_POST['email'];
       $phone=$_POST['phone'];
       $address=$_POST['address'];
       $fooditem=$_POST['fooditem'];
       $order=$_POST['order'];
       $arrive=$_POST['arrive'];
    

       $request = "insert into contact_form(	name	email	phone	adress	orders	arrival	
) values('$name','$email','$phone',
       '$address','$fooditem','$order',' $arrive')";


       mysqli_query($connection, $request);



}

?>