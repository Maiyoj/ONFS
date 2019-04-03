<?php
include ('conn.php');
$hostelname = filter_input(INPUT_POST, 'hostelname');
$location = filter_input(INPUT_POST, 'location');
$noofrooms = filter_input(INPUT_POST, 'noofrooms');
$sizeofrooms = filter_input(INPUT_POST, 'sizeofrooms');
$sourceoffuel = filter_input(INPUT_POST, 'sourceoffuel');
$sourceofwater = filter_input(INPUT_POST, 'sourceofwater');
$housetype = filter_input(INPUT_POST, 'housetype');
$lastname = filter_input(INPUT_POST, 'lastname');
$middlename = filter_input(INPUT_POST, 'middlename');
$firstname = filter_input(INPUT_POST, 'firstname');
$idno = filter_input(INPUT_POST, 'idno');
$phoneno = filter_input(INPUT_POST, 'phoneno');

if (!empty($hostelname)){
    if (!empty($location)){
        if (!empty($noofrooms)){
        if (!empty($sizeofrooms)){
        if (!empty($sourceoffuel)){
        if (!empty($sourceofwater)){
            if (!empty($housetype)){
        if (!empty($lastname)){
        if (!empty($middlename)){
        if (!empty($firstname)){
        if (!empty($idno)){
  
        if (!empty($phoneno))
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
         $sql = "INSERT INTO resident(hostelname, location, noofrooms, sizeofrooms, sourceoffuel,sourceofwater, housetype,lastname,middlename,firstname,idno,phoneno)
         values ('$hostelname','$location','$noofrooms', '$sizeofrooms','$sourceoffuel','$sourceofwater','$housetype','$lastname','$middlename','$firstname','$idno','$phoneno')";
         if ($conn->query($sql)){
             echo "YOUR RECORD HAS BEEN SUBMITTED SUCCESSFULLY...!!";
         }
         else{
             echo "Error: ".$sql ."<br>". $conn->error;
         }
         
         $conn->close();
     }
    


}
else{
    echo "hostelname should not be empty";
    die();

};
}else{
    echo "location should not be empty";
    die();
};}else{
    echo"noofrooms shoud not be empty";
    die();
};
}else{
    echo"sizeofrooms shoud not be empty";
    die();}
}else{
        echo"sourceoffuel shoud not be empty";
        die();}

}else{
            echo"sourceofwater shoud not be empty";
            die();
        }

    } else{
        echo"housetype shoud not be empty";
        die();}

     } else{
            echo"lastname shoud not be empty";
            die();
        }

     } else{
            echo"middlename shoud not be empty";
            die();
        }

    }else{
            echo"firstname shoud not be empty";
            die();  
        }

     } else{
            echo"idno shoud not be empty";
            die();
        
     } 
}else{
    echo"phoneno shoud not be empty<br/>";
    die();                                         
}

?>