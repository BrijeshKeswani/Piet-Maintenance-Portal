<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORM</title>
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="css/form.css">
</head>

<body>
  <div class='signup-container'>
    <div class='left-container'>
      <h1>
        <!-- <i class='fas fa-paw'></i> -->
        PIET MAINTENANCE PORTAL
      </h1>
      <!-- <div class='puppy'>
            <img src='images/A_black_image.jpg.webp'>
          </div> -->
    </div>
    <div class='right-container'>
      <header>
        <h1>Post the Problem Here </h1>
        <div class='set'>
          <?php
          $conn = mysqli_connect("localhost", "root", "", "services") or die("connection failed");
          $sql = "Select * from form";
          ?>
          <div class='pets-name'>
            <label for='pets-name'>Name</label>
            <input id='pets-name' placeholder="Enter your name" type='text'>
          </div>
          <div class='pets-photo'>
            <button id='pets-upload'>
              <i class='fas fa-camera-retro'></i>
            </button>
            <file for='pets-upload'>Upload a photo</file>
          </div>
        </div>

        <div class='set'>
          <div class='pets-gender'>
            <label for='pet-gender-female'>Problem in</label>
            <div class='radio-container'>
              <input checked='' id='pet-gender-female' name='pet-gender' type='radio' value='female'>
              <label for='pet-gender-female'>Appliance</label>
              <input id='pet-gender-male' name='pet-gender' type='radio' value='male'>
              <label for='pet-gender-male'>Furniture</label>
            </div>
          </div>
          <div class='pets-spayed-neutered'>
            <label for='pet-spayed'>Major or Minor</label>
            <div class='radio-container'>
              <input checked='' id='pet-spayed' name='spayed-neutered' type='radio' value='spayed'>
              <label for='pet-spayed'>Major</label>
              <input id='pet-neutered' name='spayed-neutered' type='radio' value='neutered'>
              <label for='pet-neutered'>Minor</label>
            </div>
          </div>
        </div>

        <div class='set'>
          <div class='pets-breed'>
            <label for='pets-breed'>Description of problem</label>
            <input id='pets-breed' placeholder="Problem" type='textArea'>
          </div>
          <!-- <div class='pets-birthday'>
                <label for='pets-birthday'>Major/Minor</label>
                <input id='pets-birthday' placeholder='Major/Minor Problem' type='text'>
              </div> -->
        </div>

        <div class='pets-weight'>
          <label for='pet-weight-0-25'>Department/Block</label>
          <div class='radio-container'>
            <input checked='' id='pet-weight-0-25' name='pet-weight' type='radio' value='0-25'>
            <label for='pet-weight-0-25'>A-Block</label>
            <input id='pet-weight-25-50' name='pet-weight' type='radio' value='25-50'>
            <label for='pet-weight-25-50'>B-Block</label>
            <input id='pet-weight-50-100' name='pet-weight' type='radio' value='50-100'>
            <label for='pet-weight-50-100'>C-Block</label>
          </div>
        </div>
        <div class='pets-weight'>
          <label for='pet-weight-0-25'>Room</label>
          <div class='radio-container'>
            <input checked='' id='pet-weight-0-25' name='pet-weight' type='radio' value='0-25'>
            <label for='pet-weight-0-25'>AS-06</label>
            <input id='pet-weight-25-50' name='pet-weight' type='radio' value='25-50'>
            <label for='pet-weight-25-50'>CT-10</label>
            <input id='pet-weight-50-100' name='pet-weight' type='radio' value='50-100'>
            <label for='pet-weight-50-100'>AF-09</label>
            <input id='pet-weight-100-plus' name='pet-weight' type='radio' value='100+'>
            <label for='pet-weight-100-plus'>CS-03</label>
          </div>
        </div>
      </header>
      <footer>
        <div class='set'>
          <button id='back'><a href="index.php" style="text-decoration: none;">Back</a></button>
          <button id='next'><a href="index.php" style="text-decoration: none; color:black ;">Submit</a></button>
        </div>
      </footer>
    </div>
  </div>
</body>

</html>