
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
    <link rel="stylesheet" type="text/css" href="admin_dashboard.css">
    <link rel="shortcut icon" href="../img/ghost-smile-fill.svg">
</head>
<body>
    <!-- Header code starts here -->
    <div class="row" id="header">
        <div class="col-md-12">
            <div class="col-md-4">
                <h3>TaskSync. - Student Management System</h3>
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
                        <a href="user_dashboard.php" type="button" id="logout_link">Dashboard</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="create_task.php" type="button" class="link" id="create_task">Create Result</a>
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
            <h4>Instructions for Staff <br> <br>
                1. You can add result from here <br>
                2. Maintain the decorum <br>
            </h4>
        </div>
    </div>
</body>
</html>