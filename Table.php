<?php
    include "connection.php";
?>

<table width="30px" border="1px" align="center" cellpadding="30x" cellspacing="1px">
    <thead>
        <tr>
            <th>SL NO</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php

            $sql = "SELECT * FROM srs";
            $result = mysqli_query($conn,$sql);

            while($row = mysqli_fetch_assoc($result))
            {
        ?>

        <tr>
            <td><?= $row['sl_no']; ?></td>
            <td><?= $row['email_id']; ?></td>
            <td><?= $row['pass_word']; ?></td>
            <td>
                <a href="update.php?srs=<?= $row['sl_no']; ?>">
                    <button>UPDATE</button>
                </a>
                <a href="delete.php?srs=<?= $row['sl_no']; ?>">
                    <button>DELETE</button>
                </a>
            </td>
        </tr>

        <?php
            }
        ?>

    </tbody>
</table>

