<html>
    <body>

        <?php

        /* Try to connect*/
        $link1 = mysqli_connect('localhost', 'root', '', 'blogusers');
                                
        // Check 
        if($link1 === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            else{
                echo "Database Connection Successful";
            }
        $blogText = $_POST["text"];
        $blogContent = $_POST["content"];
        $mysqlDate = date ('Y/m/d');
        $mysqlTime = date ('H:i:s');

        echo $mysqlDate;

        $insertData = "INSERT INTO blogposts (Date, Time, Title, Body) VALUES ('$mysqlDate', '$mysqlTime', '$blogText', '$blogContent')";

        if ($link1->query($insertData) === TRUE) {
            echo "New record added to DB!";
            header("Location: viewBlog.php");
        } else {
            echo "Error: " . $insertData . "<br>" . $link1->error;
        }


    ?>
    </body>
</html>