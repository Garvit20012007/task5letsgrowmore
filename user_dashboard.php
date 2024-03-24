<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>TaskSync.|Student Dashboard</title>
    <!-- jQuery file -->
    <script src="includes/jquey-3.7.1.js"></script>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="txt/css" src="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" type="text/css" href="user_dashboard.css">
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
                <b>Email: </b> <?php echo $_SESSION['email']; ?>
                <span><b>Name: </b><?php echo $_SESSION['name']; ?></span>
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
                        <a href="logout.php" type="button" id="logout_link">LogOut</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-10" id="rigth-sidebar">
            <h4>Instructions for TaskSync. <br> <br>
                1. TaskSyc. - Student Management System <br>
                2. You can check your result here <br>
            </h4>
        </div>
    </div>
</body>
</html>