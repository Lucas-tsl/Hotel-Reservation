<?php
    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'lthotelwebsite';

    $con = mysqli_connect($hname, $uname, $pass, $db);

    if(!$con){
        die("Cannot Connect to Database" .mysqli_connect_error());
    }

    function filtration($data){
        foreach($data as $key => $value){
            $data[$key] = trim($value); 
            $data[$key] = stripcslashes($value); 
            $data[$key] = htmlspecialchars($value); 
            $data[$key] = strip_tags($value);
        }
        return $data

    }

    function select ($sql, $values, $datatypes){
        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare($con, $sql))
        {
            mysqli_stmt_bind_prepare($stmt, $datatypes,...$values);
            if(mysqli_tmt_execute($stmt)){
                $res= mysqli_stmt_get_result($stmt);
                return $res;
                mysqli_stmt_close($stmt);
            }
            else{
                mysqli_stmt_close($stmt);
                die("Query cannot be executed - Select")
            }
          
        }
        else{
            die("Query cannot be prepared - Select")
        }
    }
?>