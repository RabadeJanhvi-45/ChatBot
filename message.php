<?php
// connecting to database
$conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

// getting user message through ajax
$number =  $_POST['text'];

//checking user query to database query
$query = "INSERT INTO chatbot(phone) VALUES ('$number')";


// if user query matched to database query we'll show the reply otherwise it go to else statement
// if(mysqli_num_rows($run_query) > 0){
//     //fetching replay from the database according to the user query
//     $fetch_data = mysqli_fetch_assoc($run_query);
//     //storing replay to a varible which we'll send to ajax
//     //$replay = $fetch_data['replies'];
//     //echo $replay;
//     echo "Saved";
// }else{
//     echo "Sorry can't be able to understand you!";
// }


            $query_run = mysqli_query($conn, $query);

            if ($query_run) {
                //echo "Saved";
                $_SESSION['success']="User Profile Added";
        //         echo '<script>alert("User Profile Added");
        // </script>';
        //         header('Location:contact1.php');
            } else {
                //echo"Error";
                // $_SESSION['success']="User Profile Not Added";
                echo '<script>alert("not added");
        // </script>';
        //         header('Location:contact1.php');
            }
        
?>