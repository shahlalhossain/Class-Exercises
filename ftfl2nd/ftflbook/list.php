<?php

$link = mysqli_connect("localhost", "root", "lict@2", "ftfl2nd");

$query = "SELECT * FROM ftflbook";

$result = mysqli_query($link, $query);

?>


<html>
<head>
    <title></title>
</head>

<body style="text-align: center;">

<ul>
    <li><a href="create.php">Create New Record</a> </li>
    <li><a href="list.php">View All Participant</a> </li>
    <li><a href="search.php">Search By ID</a> </li>
</ul>


<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Date of Birth</td>
        <td>Gender</td>
        <td>Hobby</td>
        <td>Favorite Food</td>
        <td>Comments</td>
        <td>Photo</td>
        <td>Created</td>
        <td>Modified</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['first_name']?></td>
            <td><?php echo $row['last_name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['password']?></td>
            <td><?php echo $row['dob']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['hobby']?></td>
            <td><?php echo $row['favorite_food']?></td>
            <td><?php echo $row['comments']?></td>
            <td><?php echo $row['photo']?></td>
            <td><?php echo $row['created']?></td>
            <td><?php echo $row['modified']?></td>

            <td>
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
                <a href="view.php?id=<?php echo $row['id']?>">View</a>
            </td>
        </tr>
    <?php
    }
    ?>

</table>

</body>
</html>
