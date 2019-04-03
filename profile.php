<?php
include('connection.php');
$lastname = filter_input(INPUT_POST, 'lastname');
$middlename= filter_input(INPUT_POST, 'middlename');
$firstname = filter_input(INPUT_POST, 'firstname');
$regno = filter_input(INPUT_POST, 'regno');
$course = filter_input(INPUT_POST, 'course');
$phoneno = filter_input(INPUT_POST, 'phoneno');
$academic_year = filter_input(INPUT_POST, 'academic_year');
$semester = filter_input(INPUT_POST, 'semester');
$plastname = filter_input(INPUT_POST, 'plastname');
$pmiddlename = filter_input(INPUT_POST, 'pmiddlename');
$pfirstname = filter_input(INPUT_POST, 'pfirstname');
$idno = filter_input(INPUT_POST, 'idno');
$address = filter_input(INPUT_POST, 'address');
$pphoneno = filter_input(INPUT_POST, 'pphoneno');

if (!empty($lastname)){
    if (!empty($middlename)){
        if (!empty($firstname)){
        if (!empty($regno)){
        if (!empty($course)){
        if (!empty($phoneno)){
        if (!empty($academic_year)){ 
            if (!empty($semester)){ 
        if (!empty($plastname)){
        if (!empty($pmiddlename)){
        if (!empty($pfirstname)){
        if (!empty($idno)){
            if (!empty($address)){
        if (!empty($pphoneno))
        {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "online";
        //create connection
        
     
     if (mysqli_connect_error()){
         die('Connect Error ('.mysqli_connect_errno.')'.mysqli_connect_error());

     }  
     else{
         $sql = "INSERT INTO profile(lastname, middlename, firstname, regno, course,phoneno, academic_year, semester, plastname,pmiddlename,pfirstname,idno,address,pphoneno)
         values ('$lastname','$middlename','$firstname', '$regno','$course','$phoneno', '$academic_year', '$semester','$plastname','$pmiddlename','$pfirstname','$idno','$address','$pphoneno')";
         if ($conn->query($sql)){
            echo "<br/><br/><span> YOUR RECORD HAS BEEN SUBMITTED SUCCESSFULLY...!!</span>";
         }
         else{
             echo "Error: ".$sql ."<br>". $conn->error;
         }
         
         $conn->close();
     }
    


}
else{
    echo "lastname should not be empty";
    die();

}
}else{
    echo "middlename should not be empty";
    die();
}}else{
    echo"firstname should not be empty";
    die();
}
}else{
    echo"regno should not be empty";
    die();}
}else{
        echo"course should not be empty";
        die();}

}else{
            echo"phoneno should not be empty";
            die();}
        }
        else
        {
            echo"academic_year should not be empty";
            die();
        }

  }
        else
        {
            echo"semester should not be empty";
            die();
        }
 


     } else{
            echo"plastname should not be empty";
            die();
        }

     } else{
            echo"pmiddlename should not be empty";
            die();
        }

    }else{
            echo"pfirstname should not be empty";
            die();  
        }

     } else{
            echo"idno should not be empty";
            die();
        }
    }else{
                echo"address should not be empty";
                die();    
        
     } 
}else{
    echo"pphoneno should not be empty";
    die();                                         
}

?>