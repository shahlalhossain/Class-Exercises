<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost", "root", "479874", "students");

$query = "SELECT * FROM users WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);
?>



<table border="1" width="70%">
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Contact</td>
        <td>Action</td>
    </tr>
<?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['first_name']?></td>
            <td><?php echo $row['last_name']?></td>
            <td><?php echo $row['phone']?></td>

            <td> <a href="#">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></a></td>
        </tr>

    <?php
    }
    ?>

</table>

<a href="list.php">Goto Home</a>


