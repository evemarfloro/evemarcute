<!DOCTYPE html>
<html>
<head>
    <title>Input Name and Last Name</title>
    <!-- Add the Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link your custom styles.css file -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <h2 class="mb-4">Create new user</h2>
                    <form class="form-group" action="adduser.php" method="post">
                    <div class="form-group">
                            <input type="hidden" name= "id"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="firstNameInput">First Name</label>
                            <input type="text" class="form-control" name="fname" placeholder="Enter your first name">
                        </div>
                        <div class="form-group">
                            <label for="middleNameInput">Middle Name</label>
                            <input type="text" class="form-control" name="mname" placeholder="Enter your middle name">
                        </div>
                        <div class="form-group">
                            <label for="lastNameInpu">Last Name</label>
                            <input type="text" class="form-control" name="lname" placeholder="Enter your last name">
                        </div>
                        <div class="form-group">
                            <label for="Username">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter password">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
