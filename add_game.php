<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group 02">
    <meta name="description" content="Assignment 01 - Static Website">
    <title>Add Game Page</title>
    <link rel="icon" href="./images/weblogo.png">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/addgame.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
        include "components/header.inc"; 
    ?>
    
    <h2>Add Game</h2>
    <?php 
      if(isset($success_message)) { 
        echo "<p>$success_message</p>"; 
      } 
    ?>

    <form action="api/update_game.php" method="POST">
      <div class="input-box">
        <label for="gameId">Game ID:</label>
        <input type="text" id="gameId" name="gameId">
      </div>
      <div class="input-box">
        <label for="gameName">Game Name:</label>
        <input type="text" id="gameName" name="gameName">
      </div>
      <div class="input-box">
        <label for="gamePrice">Price:</label>
        <input type="text" id="gamePrice" name="gamePrice">
      </div>
      <label for="category">Category:</label>
      <select id="category" name="category">
          <option value="">Select Category</option>
          <option value="Adventure">Adventure</option>
          <option value="Indie">Indie</option>
          <option value="Action">Action</option>
          <option value="Casual">Casual</option>
          <option value="Strategy">Strategy</option>
          <option value="RPG">RPG</option>
          <option value="Simulation">Simulation</option>
      </select>

      <label for="publisher">Publisher:</label>
      <select id="publisher" name="publisher">
          <option value="">Select Publisher</option>
          <option value="Unknown Worlds Entertainment">Unknown Worlds Entertainment</option>
          <option value="Quantic Dream">Quantic Dream</option>
          <option value="Red Barrels">Red Barrels</option>
          <option value="Valve">Valve</option>
          <option value="Bethesda Softworks">Bethesda Softworks</option>
          <option value="Ubisoft">Ubisoft</option>
          <option value="Larian Studios">Larian Studios</option>
          <option value="Hello Games">Hello Games</option>
          <option value="Newnight">Newnight</option>
          <option value="Zeekerss">Zeekerss</option>
          <option value="Team Cherry">Team Cherry</option>
          <option value="CAPCOM Co., Ltd.">CAPCOM Co., Ltd.</option>
          <option value="Warner Bros. Games">Warner Bros. Games</option>
          <option value="Pocketpair">Pocketpair</option>
          <option value="Electronic Arts">Electronic Arts</option>
          <option value="Behaviour Interactive Inc.">Behaviour Interactive Inc.</option>
          <option value="Edmund McMillen">Edmund McMillen</option>
      </select>
      <div class="input-box">
        <label for="gameImage">Image URL:</label>
        <input type="text" id="gameImage" name="gameImage">
      </div>
      <div class="input-box">
        <label for="gameDescription">Description:</label>
        <textarea id="gameDescription" name="gameDescription" rows="4"></textarea>
      </div>
      <input type="submit" value="Submit">
    </form>

    <?php
            include "components/footer.inc";
            include "php/button_switch.php";
    ?>

</body>
</html>