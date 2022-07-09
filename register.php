<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="asset/style.css">
</head>
<body>
<div class="header">
    <h2>Register</h2>
</div>

<form method="post" action="" enctype="multipart/form-data">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
        <label>Date Of Birth</label>
        <input type="date" name="date_of_birth">

    </div>

    <div class="input-group">
        <label>Phone</label>
        <input type="number" name="phone">

    </div>

    <div class="input-group">
        <label>Gender</label>
        <select name="gender" id="gender" style="width:200px;">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

    </div>

    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <label>Image</label>
        <input type="file" name="image">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
</form>
</body>
</html>