<!DOCTYPE html>
<html>

<head>
    <title>Review Posted</title>
</head>

<body>
    <center>
        <?php

        // servername => 127.0.0.1
        // username => laoziml_monica
        // password => *88Zamzamfridolin0683168429
        // database name => laoziml_booking
        $conn = mysqli_connect("localhost", "laoziml_monica", "*88Zamzamfridolin0683168429", "laoziml_booking");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $name = $_REQUEST['name'];
        $review = $_REQUEST['review'];
        

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO reviewpost VALUES ('$name', '$review')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3> Your Review received successfully

</h3>";

            echo nl2br("\n$name\n");
            echo nl2br("\n$review\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
<center><a href="Contact-Us.php">Back</a> | <a href="Contact-Us.php">View Reviews</a></center>
</html>
