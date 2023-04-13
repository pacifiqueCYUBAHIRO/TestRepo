<?php
if(isset($_POST['submit'])){
        
        // Include the database connection file
        $conn=mysqli_connect("localhost","root","","learning");
        
        // Get the form data
        $title = $_POST['title'];
        $content = $_POST['content'];

        $query = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
        if(mysqli_query($conn, $query)){
            echo "Content inserted successful.";
        }else{
            echo "Error: " . mysqli_error($conn);
        }
        
        // Close the database connection
        mysqli_close($conn);
    }
        ?>