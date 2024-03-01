<?php
    include "connection.php";

    if(isset($_POST['submit']))
    {
        $email = $_POST['email_id'];
        $password = md5($_POST['pass_word']);

        $sql = "SELECT email_id FROM srs WHERE email_id = '$email'"; 
        $qr = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($qr) > 0)
        {
            echo '<script> alert("Email already exists.")</script>';
        }else{
            $qry = "INSERT INTO srs (email_id,pass_word) VALUES ('$email','$password')";

            if(mysqli_query($conn,$qry))
            {
                echo '<script> alert("Registered Successfully.")</script>';
            }
        }
    }
?>

<script>
    if(window.history.replaceState)
    {
        window.history.replaceState(null,null,window.location.href);
    }
</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" align="center">

    <div class="mb-3">
        <input type="email" name="email_id" placeholder="Email ID" required>
    </div>
    
    <div class="mb-3">
        <input type="password" name="pass_word" placeholder="Password" required>
    </div>

    <input type="submit" name="submit" class="btn btn-success" value="submit" required>
    
    <a href="Table.php">
    <input type="button" class="btn btn-success" value="Table">
    </a>

    <a href="login.php">
    <input type="button" class="btn btn-secondary" value="Login">
    </a>

</form>