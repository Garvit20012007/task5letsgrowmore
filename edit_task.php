<?php 
    include('../includes/connection.php');
    if(isset($_POST['edit_task'])){
        $query = "update tasks set uid = $_POST[id],start_date = '$_POST[start_date]',end_date = '$_POST[end_date]' where tid = $_GET[id]";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
            echo "<script type='text/javascript'>
            alert('Task Updated Successfully...');
            window.location.href = 'admin_dashboard.php';
            </script>
            ";
        }
        else{
            echo "<script type='text/javascript'>
            alert('Error...Plz try again.');
            window.location.href = 'admin_dashboard.php';
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
    <title>TaskSync.|Edit Result</title>
    <!-- jQuery file -->
    <script src="../includes/jquery-3.7.1.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="txt/css" src="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap//js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" type="text/css" href="edit_task.css">
    <link rel="shortcut icon" href="../img/ghost-smile-fill.svg">
</head>
<body>
    <!-- Header Code Starts -->
    <div class="row" id="header">
        <div class="col-md-12">
            <h3><i class="fa fa-solid fa-list" style="padding-right: 15px;"></i>TaskSync. - Student Management System</h3>
        </div>
    </div>
    <div class="col-md-4 m-auto" style="color:aliceblue"> <br>
        <h3 style="color:aliceblue">Edit the Result</h3><br>
        <?php 
            $query = "select * from tasks where tid = $_GET[id]";
            $query_run = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($query_run)){
                ?>
            <form action="" method="post">
                <div class="form-group">
                    <label>Select Student:</label>
                    <select class="form-control" name="id" required>
                        <option>-Select-</option>
                        <?php 
                            $query1 = "select uid,name from users";
                            $query_run1 = mysqli_query($connection,$query1);
                            if(mysqli_num_rows($query_run1)){
                                while($row1 = mysqli_fetch_assoc($query_run1)){
                                    ?><option value="<?php echo $row1['uid']; ?>"><?php echo $row1['name']; ?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <textarea name="description" class="form-control" cols="50" rows="3" placeholder="Mention the Result"><?php echo $row['description']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Session Start date:</label>
                    <input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Session End date:</label>
                    <input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date']; ?>" required>
                </div>
                <input type="submit" class="btn btn-warning" name="edit_task" value="Update">
            </form>
            <?php
            }
        ?>
    </div>
</body>
</html>