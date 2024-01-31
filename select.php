<?php session_start(); 
include "connection.php";
// $sql = "SELECT * FROM users";
$sql = "SELECT id, fullname, photo, email FROM users";
$res = mysqli_query($conn, $sql); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
    <div class="users-box">
        <h1>All User</h1>
        <?php echo (isset($_SESSION['msg'])) ? "<p class='msg'>". $_SESSION['msg'] ."</p>" : ""; ?>
        <?php if($res): ?>
            <table border="1" cellpadding="6" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Photo</th>
                        <th>E-Mail</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; while($row = mysqli_fetch_assoc($res)): ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['fullname']; ?></td>
                        <td><img src="public/<?php echo $row['photo']; ?>" width="50" height="50"></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                            <a href="edit.php?uid=<?php echo $row['id']; ?>">Edit</a>
                            <a href="delete.php?uid=<?php echo $row['id']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php $i++; endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>User data not found!</p>
        <?php endif; ?>
    </div> 
<?php session_destroy(); ?>   
</body>
</html>