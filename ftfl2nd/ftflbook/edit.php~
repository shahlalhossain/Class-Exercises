<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost", "root", "lict@2", "ftfl2nd");

$query = "SELECT * FROM ftflbook WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

?>



<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body style="text-align: center; width: 100%; height: 100%;">

<form action="update.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>First Name</label>
    <input type="text" name="first_name" value="<?php echo $row['first_name'];?>" />
    <br>

    <label>Last Name</label>
    <input type="text" name="last_name" value="<?php echo $row['last_name'];?>" />
    <br>

    <label>User Email: </label>
    <input type="email" name="email" value="<?php echo $row['email'];?>" />
    <br>

    <?php

    $date = explode('-', $row['dob']);
    list($year, $month, $day) = $date;

    ?>

    <label>Date of Birth: </label>
    <select name="year">

        <option <?php if ($year == "1980") echo 'selected'; ?> value="1980">1980</option>
        <option <?php if ($year == "1981") echo 'selected'; ?> value="1981">1981</option>
        <option <?php if ($year == "1982") echo 'selected'; ?> value="1982">1982</option>
        <option <?php if ($year == "1983") echo 'selected'; ?> value="1983">1983</option>
        <option <?php if ($year == "1984") echo 'selected'; ?> value="1984">1984</option>
        <option <?php if ($year == "1985") echo 'selected'; ?> value="1985">1985</option>
        <option <?php if ($year == "1986") echo 'selected'; ?> value="1986">1986</option>
        <option <?php if ($year == "1987") echo 'selected'; ?> value="1987">1987</option>
        <option <?php if ($year == "1988") echo 'selected'; ?> value="1988">1988</option>
        <option <?php if ($year == "1989") echo 'selected'; ?> value="1989">1989</option>
        <option <?php if ($year == "1990") echo 'selected'; ?> value="1990">1990</option>
        <option <?php if ($year == "1991") echo 'selected'; ?> value="1991">1991</option>
        <option <?php if ($year == "1992") echo 'selected'; ?> value="1992">1992</option>
        <option <?php if ($year == "1993") echo 'selected'; ?> value="1993">1993</option>
        <option <?php if ($year == "1994") echo 'selected'; ?> value="1994">1994</option>
        <option <?php if ($year == "1995") echo 'selected'; ?> value="1995">1995</option>
        <option <?php if ($year == "1996") echo 'selected'; ?> value="1996">1996</option>
        <option <?php if ($year == "1997") echo 'selected'; ?> value="1997">1997</option>
        <option <?php if ($year == "1998") echo 'selected'; ?> value="1998">1998</option>
        <option <?php if ($year == "1999") echo 'selected'; ?> value="1999">1999</option>
        <option <?php if ($year == "2000") echo 'selected'; ?> value="2000">2000</option>

    </select>

    <select name="month">

        <option <?php if ($month == "01") echo 'selected'; ?> value="01">January</option>
        <option <?php if ($month == "02") echo 'selected'; ?> value="02">February</option>
        <option <?php if ($month == "03") echo 'selected'; ?> value="03">March</option>
        <option <?php if ($month == "04") echo 'selected'; ?> value="04">April</option>
        <option <?php if ($month == "05") echo 'selected'; ?> value="05">May</option>
        <option <?php if ($month == "06") echo 'selected'; ?> value="06">June</option>
        <option <?php if ($month == "07") echo 'selected'; ?> value="07">July</option>
        <option <?php if ($month == "08") echo 'selected'; ?> value="08">August</option>
        <option <?php if ($month == "09") echo 'selected'; ?> value="09">September</option>
        <option <?php if ($month == "10") echo 'selected'; ?> value="10">October</option>
        <option <?php if ($month == "11") echo 'selected'; ?> value="11">November</option>
        <option <?php if ($month == "12") echo 'selected'; ?> value="12">December</option>

    </select>

    <select name="day">

        <option <?php if ($day == "1") echo 'selected'; ?> value="1">1</option>
        <option <?php if ($day == "2") echo 'selected'; ?> value="2">2</option>
        <option <?php if ($day == "3") echo 'selected'; ?> value="3">3</option>
        <option <?php if ($day == "4") echo 'selected'; ?> value="4">4</option>
        <option <?php if ($day == "5") echo 'selected'; ?> value="5">5</option>
        <option <?php if ($day == "6") echo 'selected'; ?> value="6">6</option>
        <option <?php if ($day == "7") echo 'selected'; ?> value="7">7</option>
        <option <?php if ($day == "8") echo 'selected'; ?> value="8">8</option>
        <option <?php if ($day == "9") echo 'selected'; ?> value="9">9</option>
        <option <?php if ($day == "10") echo 'selected'; ?> value="10">10</option>
        <option <?php if ($day == "11") echo 'selected'; ?> value="11">11</option>
        <option <?php if ($day == "12") echo 'selected'; ?> value="12">12</option>
        <option <?php if ($day == "13") echo 'selected'; ?> value="13">13</option>
        <option <?php if ($day == "14") echo 'selected'; ?> value="14">14</option>
        <option <?php if ($day == "15") echo 'selected'; ?> value="15">15</option>
        <option <?php if ($day == "16") echo 'selected'; ?> value="16">16</option>
        <option <?php if ($day == "17") echo 'selected'; ?> value="17">17</option>
        <option <?php if ($day == "18") echo 'selected'; ?> value="18">18</option>
        <option <?php if ($day == "19") echo 'selected'; ?> value="19">19</option>
        <option <?php if ($day == "20") echo 'selected'; ?> value="20">20</option>
        <option <?php if ($day == "21") echo 'selected'; ?> value="21">21</option>
        <option <?php if ($day == "22") echo 'selected'; ?> value="22">22</option>
        <option <?php if ($day == "23") echo 'selected'; ?> value="23">23</option>
        <option <?php if ($day == "24") echo 'selected'; ?> value="24">24</option>
        <option <?php if ($day == "25") echo 'selected'; ?> value="25">25</option>
        <option <?php if ($day == "26") echo 'selected'; ?> value="26">26</option>
        <option <?php if ($day == "27") echo 'selected'; ?> value="27">27</option>
        <option <?php if ($day == "28") echo 'selected'; ?> value="28">28</option>
        <option <?php if ($day == "29") echo 'selected'; ?> value="29">29</option>
        <option <?php if ($day == "30") echo 'selected'; ?> value="30">30</option>
        <option <?php if ($day == "31") echo 'selected'; ?> value="31">31</option>

    </select>
    <br>



    <label>Password: </label>
    <input type="password" name="password" value="<?php echo $row['password'];?>" />
    <br>

    <label>Gender: </label>
    <input type="radio" name="gender" <?php if ($row['gender'] == "Male") echo 'checked'; ?> value="Male" />Male
    <input type="radio" name="gender" <?php if ($row['gender'] == "Female") echo 'checked'; ?> value="Female" />Female

    <br>

    <label>Comments: </label>
    <textarea name="comments" cols="20" rows="5"><?php echo $row['comments'];?></textarea>
    <br>

    <button type="submit">Update</button>
</form>
</body>
</html>

