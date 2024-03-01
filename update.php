<?php
    include "connection.php";

    $sl_no = $_GET['srs'];

    $sql = "SELECT * FROM srs WHERE sl_no='$sl_no'";

    $qr = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($qr);
?>

<?php
    if(isset($_POST['submit']))
    {
        $email = $_POST['email_id'];
        $password = md5($_POST['pass_word']);

        $qry = "UPDATE srs SET email_id='$email',pass_word='$password' WHERE sl_no='$sl_no'";

        if(mysqli_query($conn,$qry))
        {
            header("location:crud2.php");
        }
    }
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<script>
  if(window.history.replaceState)
  {
    window.history.replaceState(null,null,window.location.href);
  }
</script>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" align="center">

    <div class="mb-3">
        <input type="hidden" name="sl_no">

        <label for="">Email</label>
        <input type="email" name="email_id" value="<?= $row['email_id']; ?>" required>
    </div>
    
    <div class="mb-3">
        <label for="">Password</label>
        <input type="password" name="pass_word" value="<?= $row['pass_word']; ?>" required>
    </div>

    <input type="submit" name="submit" class="btn btn-success" value="submit" required>
</form>