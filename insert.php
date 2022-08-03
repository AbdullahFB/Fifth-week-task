<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "control1");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        $value =  $_REQUEST['click'];
      
        $sql = "INSERT INTO cr1  VALUES ('$value')";
        

        if(mysqli_query($conn, $sql)){
            echo "<h3>Done!!!."
                . " Go to your data base to update the value</h3>";
 
            echo nl2br("\n$value");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>