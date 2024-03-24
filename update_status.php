<?php 
    include('./includes/connection.php');
    if(isset($_POST['update'])){
        $query = "update tasks set status = '$_POST[status]' where tid = $_GET[id]";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
            echo "<script type='text/javascript'>
            alert('Status Updated Successfully...');
            window.location.href = 'user_dashboard.php';
            </script>
            ";
        }
        else{
            echo "<script type='text/javascript'>
            alert('Error...Plz try again.');
            window.location.href = 'user_dashboard.php';
            </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskSync.|Update Result</title>
    <!-- jQuery file -->
    <script src="includes/jquery-3.7.1.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="txt/css" src="/bootstrap/css/bootstrap.min.css">
    <script src="/bootstrap//js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" type="text/css" href="update_status.css">
    <link rel="shortcut icon" href="/img/ghost-smile-fill.svg">
</head>
<body>
    <!-- Header Code Starts -->
    <div class="row" id="header">
        <div class="col-md-12">
            <h3><i class="fa fa-solid fa-list" style="padding-right: 15px;"></i>TaskSync. - Student Management System</h3>
        </div>
    </div>
    <div class="col-md-4 m-auto" style="color:aliceblue"> <br>
        <h3 class="new_h3" style="color:aliceblue">Update the Result</h3><br>
        <?php 
            $query = "select * from tasks where tid = $_GET[id]";
            $query_run = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($query_run)){
                ?>
            <form action="" method="post">
                <div class="form-group">
                    <select name="status" class="new_form-control">
                        <option>-Select-</option>
                        <option>Seen</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-warning" name="update" value="Update">
            </form>
            <?php
            }
        ?>
    </div>
</body>
</html>