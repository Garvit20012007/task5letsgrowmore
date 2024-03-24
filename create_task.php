<?php
    include('../includes/connection.php');
    if(isset($_POST['create_task'])){
        $query = "insert into tasks values(null,$_POST[id],'$_POST[description]','$_POST[start_date]','$_POST[end_date]','Not Started')";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
            echo "<script type='text/javascript'>
            alert('Task Created Successfully...');
            window.location.href = 'admin_dashboard.php';
            </script>
            ";
        }
        else{
            echo "<script type='text/javascript'>
            alert('Error...Plz try again -_-');
            window.location.href = 'admin_dashboard.php';
            </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>TaskSync.|Staff Dashboard</title>
    <!-- jQuery file -->
    <script src="../includes/jquery-3.7.1.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="txt/css" src="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap//js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" type="text/css" href="create_task.css">
    <link rel="shortcut icon" href="../img/ghost-smile-fill.svg">
</head>
<body>
    <!-- Header code starts here -->
    <div class="row" id="header">
        <div class="col-md-12">
            <div class="col-md-4">
                <h3>TaskSync. - Staff Management System</h3>
            </div>
            <div class="col-md-6">
                <b>Email: </b> staff@gmail.com
                <span><b>Name: </b>Staff User</span>
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
                        <a href="#" type="button" class="link" id="create_task">Create Result</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="manage_task.php" type="button" class="link" id="manage_task">Manage Result</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../index.php" type="button" id="logout_link">LogOut</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-10" id="right-sidebar">
            <a href="#" style="text-decoration: none;">
                <h4>Create a New Result
                </h4>
            </a>
            <div class="new-row">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Select Student:</label>
                            <select class="form-control" name="id">
                                <option>-Select-</option>
                                <?php 
                                    include('../includes/connection.php');
                                    $query = "select uid,name from users";
                                    $query_run = mysqli_query($connection,$query);
                                    if(mysqli_num_rows($query_run)){
                                        while($row = mysqli_fetch_assoc($query_run)){
                                            ?><option value="<?php echo $row['uid']; ?>"><?php echo $row['name']; ?></option>
                                            <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <textarea name="description" class="form-control" cols="50" rows="3" placeholder="Mention the result"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Session Start date:</label>
                            <input type="date" class="form-control" name="start_date">
                        </div>
                        <div class="form-group">
                            <label>Session End date:</label>
                            <input type="date" class="form-control" name="end_date">
                        </div>
                        <input type="submit" class="btn btn-warning" name="create_task" value="Create">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>