<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body style="text-align: center; width: 100%; height: 100%;">
<form action="add.php" method="POST" enctype="multipart/form-data">
    <label>First Name</label>
    <input type="text" name="first_name" />
    <br>
    <label>Last Name</label>
    <input type="text" name="last_name" />
    <br>
    <label>User Email: </label>
    <input type="text" name="email" />
    <br>
    <label>Password: </label>
    <input type="password" name="password" />
    <br>
    <label>Date of Birth: </label>
    <select name="year">
        <option selected>Year</option>
        <option value="1980">1980</option>
        <option value="1981">1981</option>
        <option value="1982">1982</option>
        <option value="1983">1983</option>
        <option value="1984">1984</option>
        <option value="1985">1985</option>
        <option value="1986">1986</option>
        <option value="1987">1987</option>
        <option value="1988">1988</option>
        <option value="1989">1989</option>
        <option value="1990">1990</option>
        <option value="1991">1991</option>
        <option value="1992">1992</option>
        <option value="1993">1993</option>
        <option value="1994">1994</option>
        <option value="1995">1995</option>
        <option value="1996">1996</option>
        <option value="1997">1997</option>
        <option value="1998">1998</option>
        <option value="1999">1999</option>
        <option value="2000">1990</option>
    </select>
    <select name="month">
        <option selected>Month</option>
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select>
    <select name="day">
        <option selected>Day</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
    </select>
    <br>
    <label>Gender: </label>
    <input type="radio" name="gender" value="Male" />Male
    <input type="radio" name="gender" value="Female" />Female
    <br>

    <label>Hobby :</label>
    <input type="checkbox" name="hobby" value="Gardening">Gardening<br>
    <input type="checkbox" name="hobby" value="Reading">Reading<br>
    <input type="checkbox" name="hobby" value="Dancing">Dancing<br>
    <input type="checkbox" name="hobby" value="Singing">Singing<br>
    <input type="checkbox" name="hobby" value="Travelling">Travelling<br>
    <input type="checkbox" name="hobby" value="Drawing">Drawing<br>
    <input type="checkbox" name="hobby" value="Game & Sports">Game & Sports
    <br>


    <label>Favorite Foods: </label>
    <select name="favorite_food" multiple>
        <option value="Nanna Biriani">Nanna Biriani</option>
        <option value="Vuna Khichuri">Vuna Khichuri</option>
        <option value="Kacci Biriani">Kacci Biriani</option>
        <option value="Grilled Chicken">Grilled Chicken</option>
        <option value="Spicy Vegetable">Spicy Vegetable</option>
        <option value="Fried Rice">Fried Rice</option>
        <option value="Chicken Soup">Chicken Soup</option>
        <option value="Mutton Curry">Mutton Curry</option>
    </select>
    <br>

    <label>Comments: </label>
    <textarea name="comments" cols="20" rows="5"></textarea>
    <br>


    <label>Upload Your Photo :</label>
    <input type="file" name="photo">
    <br>


    <button type="submit">Submit</button>
</form>
</body>
</html>