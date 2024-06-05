<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST">  

        <h3>Username</h3>
        <input type="text" name="username" value="<?php echo set_value('username') ?>" size="50" />
        <?php echo form_error('username','<p style="color:red">','</p>'); ?>

        <h3>Email Address</h3>
        <input type="text" name="email" value="<?php echo set_value('email') ?>" size="50" />
        <?php echo form_error('email','<p style="color:red">','</p>'); ?>

        <h3>Password</h3>
        <input type="text" name="password" value="<?php echo set_value('password') ?>" size="50" />
        <?php echo form_error('password','<p style="color:red">','</p>'); ?>

        <div>
            <input type="submit" value="Submit" />
        </div>

    </form>
</body>
</html>