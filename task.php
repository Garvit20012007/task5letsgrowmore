<?php
    session_start();
    include('includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskSync.|Update Task</title>
    <!-- jQuery file -->
    <script src="includes/jquey-3.7.1.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="txt/css" src="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" type="text/css" href="task.css">
    <link rel="shortcut icon" href="./img/ghost-smile-fill.svg">
</head>
<body>
     <!-- Header code starts here -->
     <div class="row" id="header">
        <div class="col-md-12">
            <div class="col-md-4">
                <h3>TaskSync. - Student Management System</h3>
            </div>
            <div class="col-md-6">
                <b>Email: </b> Test@gmail.com
                <span><b>Name: </b>Test User</span>
            </div>
        </div>
    </div>
    <!-- Header code ends here -->
    <div class="row">
        <div class="col-md-2" id="left_sidebar">
            <table class="table">
                <tr>
                    <td>
                        <a href="user_dashboard.php" type="button" id="logout_link">Dashboard</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="./click here/clickhere.html" type="button" id="normal_btn">Click Here</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="task.php" type="button" class="link">Your Result</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../index.php" type="button" id="logout_link">LogOut</a>
                    </td>
                </tr>
            </table>
        </div>
    <center><h3 class="task_h">Your Tasks</h3></center><br>
    <table class="table_task" style="background-color:aliceblue;width:75vw;">
        <tr>
            <th>S.No.</th>
            <th>Task ID</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php 
            $query = "select * from tasks where uid = $_SESSION[uid]";
            $sno = 1;
            $query_run = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($query_run)){
                ?>
                <tr>
                    <td><?php echo $sno; ?></td>
                    <td><?php echo $row['tid']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['start_date']; ?></td>
                    <td><?php echo $row['end_date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><a style="text-decoration: none;color:aqua" href="update_status.php?id=<?php echo $row['tid']; ?>">Update</a></td>
                </tr>
                <?php
                $sno = $sno + 1 ;
            }
        ?>
    </table>
</body>
</html>