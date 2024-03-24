<?php 
    include('../includes/connection.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>TaskSync.|Admin Dashboard</title>
    <!-- jQuery file -->
    <script src="../includes/jquery-3.7.1.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="txt/css" src="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap//js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" type="text/css" href="manage_task.css">
    <link rel="shortcut icon" href="../img/ghost-smile-fill.svg">
</head>
<body>
    <!-- Header code starts here -->
    <div class="row" id="header">
        <div class="col-md-12">
            <div class="col-md-4">
                <h3>TaskSync. - Task Management System</h3>
            </div>
            <div class="col-md-6">
                <b>Email: </b> admin@gmail.com
                <span><b>Name: </b>Admin User</span>
            </div>
        </div>
    </div>
    <!-- Header code ends here -->
    <div class="row">
        <div class="col-md-2" id="left_sidebar">
            <table class="table">
                <tr>
                    <td>
                        <a href="admin_dashboard.php" type="button" id="logout_link">Dashboard</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#" type="button" class="link" id="create_task">Create Task</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="manage_task.php" type="button" class="link" id="manage_task">Manage Task</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../index.php" type="button" id="logout_link">LogOut</a>
                    </td>
                </tr>
            </table>
        </div>
        <center><h3 id="assigned">All assigned tasks.</h3></center><br>
        <table class="manage_task_table">
            <tr>
                <th>Task ID</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php 
                $query = "select *  from tasks";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <tr>
                        <td><?php echo $row['tid']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['start_date']; ?></td>
                        <td><?php echo $row['end_date']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><a style="text-decoration: none;color:aqua" href="edit_task.php?id=<?php echo $row['tid']; ?>">Edit</a> | <a style="text-decoration: none;color:aqua" href="delete_task.php?id=<?php echo $row['tid']; ?>">Delete</a></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </div>
</body>
</html>