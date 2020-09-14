<!DOCTYPE html>
<html>
<title>Cozy Mystery Survey Form</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://birchtreedev.com/supportfiles/btd-style.css">
<link rel="stylesheet" href="sf-style.css">
<body>

<!----------------------------------------------------------->
<!-- This section is for the header                        -->
<?php readfile("https://birchtreedev.com/includes/btd-nav.php"); ?>
<!----------------------------------------------------------->

<dev class="btd-content btd-padding" style="max-width:1564px">
<!-- Page content -->
<main id="main">


<h1 class="btd-padding-24 btd-center" id="title">Cozy Mystery Survey Form</h1>
<p id="description" class="btd-center">Get a free cozy mystery book list! </p>

<form id="survey-form">
    <br><div class="form-group">
        <label id="name-label" for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
    </div>

    <br><div class="form-group">
        <label id="email-label" for="name">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
    </div>

    <br><div class="form-group">
        <label id="number-label" for="number">Age (18 and over)</label>
        <input type="number" name="age" id="number" min="18" max="99" class="form-control" placeholder="Age" required>
    </div>

    <br><div class="form-group">
        <p>Gender</p>
        <select id="dropdown" name="gender" class="form-control" required>
            <option disabled selected value>Select Gender</option>
            <option value="female">Female</option>
            <option value="male">Male</option>
        </select>
    </div>

    <br><div class="form-group">
        <p>Do you have a hobby?</p>
        <label>
            <input name="hobby" value="yes" type="radio" class="input-radio" checked> Yes
        </label>
        <br><label>
            <input name="hobby" value="no" type="radio" class="input-radio"> No
        </label>
    </div>

    <br><div class="form-group">
        <p>Favorite type of Cozy Mystery? (check all that apply) </p>
        <label>
            <input name="prefer" value="baking" type="checkbox" class="input-checkbox"> Baking Cozy
        </label>
        <br><label>
            <input name="prefer" value="romance" type="checkbox" class="input-checkbox"> Romance Cozy
        </label>
        <br><label>
            <input name="prefer" value="comedy" type="checkbox" class="input-checkbox"> Comedy Cozy
        </label>
        <br><label>
        <input name="prefer" value="culinary" type="checkbox" class="input-checkbox"> Culinary Cozy
        </label>
        <br><label>
        <input name="prefer" value="exoticlocation" type="checkbox" class="input-checkbox"> Exotic Location Cozy
        </label>
        <br><label>
        <input name="prefer" value="Pet" type="checkbox" class="input-checkbox"> Pet Cozy
        </label>
        <br><label>
        <input name="prefer" value="teashop" type="checkbox" class="input-checkbox"> Tea Shop Cozy
        </label>
        <br><label>
        <input name="prefer" value="classic" type="checkbox" class="input-checkbox"> Classic Cozy
        </label>
        <br><label>
        <input name="prefer" value="british" type="checkbox" class="input-checkbox"> British Cozy
        </label>
        <br><label>
        <input name="prefer" value="hobby" type="checkbox" class="input-checkbox"> Hobby Cozy
        </label>
        <br><label>
        <input name="prefer" value="paranormal" type="checkbox" class="input-checkbox"> Paranormal Cozy
        </label>
        <br><label>
        <input name="prefer" value="scifi" type="checkbox" class="input-checkbox"> Sci-Fi Cozy
        </label>
    </div>

    <br><div class="form-group">
        <p>What was the last cozy mystery you read?</p>
        <textarea id="comments" class="input-textarea" name="comment" placeholder="Did you like/dislike the book? Why?"></textarea>
    </div>

    <br><div class="form-group">
        <button type="submit" id="submit" class="submit-button">Get Your Free List</button>
    </div>
</form>





</main>
<!-- End page content -->
</dev>


<!-- Footer -->
<!----------------------------------------------------------->
<!-- This section is for the footer                        -->
<?php readfile("https://birchtreedev.com/includes/btd-footer.php"); ?>
<!----------------------------------------------------------->


</body>
</html>
