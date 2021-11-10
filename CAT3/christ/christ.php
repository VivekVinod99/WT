<?php

    //Implement PHP with MYSQLI databases in your domain.
    
    $host ='localhost';
    $user ='root';
    $pass ='';
    $db='christ';

    echo "<center><h1>Christ Student Information</h1><br><br>";
    $conn=new mysqli($host,$user,$pass,$db);

    if($conn->connect_error){
        die($conn->connect_error);
    }

    //1. Creating an SQL Table

    $sql="CREATE TABLE stuinfo(
            stu-id INT(7) NOT NULL ,
            stu-name varchar(30) NOT NULL,
            age int(10) NOT NULL,
            gender varchar(10) NOT NULL,
            course varchar(10) NOT NULL,
            address varchar(50) NOT NULL,
            PRIMARY KEY (`stu-id`)
        )";

    echo "<center><b>Checking for whether table exists or if it doesn't, create it: </b>";
    if($conn->query($sql)==TRUE)
    {
        echo "Table created.<br><br>";
    }
    else
    {
        echo "Table already exists.<br><br>";
    }

    //2. Inserting rows into the table

    echo "<h3>Inserting into table...</h3><br><br>";

    $insert="INSERT INTO `stuinfo` VALUES(2047128, 'Vivek', 22, 'Male', 'MCS', 'Trinity Circle, M.G Road'), 
                                         (2047101, 'Abhay', 21, 'Male', 'MCS', 'Yelahanka'),
                                         (2047240, 'Nithin Paul', 22, 'Male', 'MCA', 'Koramangala'),
                                         (2047140, 'Paridhi', 22, 'Female', 'MCS', 'Behind College'),
                                         (2047220, 'Hello World', 23, 'Male', 'MCA', 'Christ Hostel')";

    if($conn->query($insert)==TRUE){
        echo "The record has been inserted.<br><br>";
    }
    else{
        echo "The record was not inserted.<br><br>".mysqli_error($conn)."<br><br>";
    }

    $names = array();

    //3. Selecting rows into array

    $result = $conn->query("SELECT stu-id,stu-name, age, gender, course, address FROM stuinfo ORDER BY stu-id");    

    echo "<h3>Printing table values...</h3><br><br>";

    echo "students by id:<br><br>";

    //6. Printing the table

    while($row = $result->fetch_assoc()) {
        array_unshift($names,$row);
    }

    foreach($names as $name)
    {
        echo $name['stu-id'].'. '.$name['stu-name'].' - '.$name['age']." = ".$name['gender']."<br><br>";
    }

    $result->free();

    //4. Updating certain tuples

    echo "<h3>Updating table values...</h3><br><br>";

    

    echo "There are ".$rows." rows in the .<br><br>";


    //5. Deleting rows based on condition

    e$conn)."<br><br>";
    }

    $result = $conn->query("SELECT * FROM christ");
    $rows = $result->num_rows;

    echo "There are ".$rows." rows in the chessgames table.<br><br>";

    $conn->close();

?>