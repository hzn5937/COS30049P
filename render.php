<?php
function render($result)
{
  if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) 
    {
      echo "
      <div class='responsive'>
        <div class='gallery'>
          <a href='" . $row['image_path'] . "'>
            <img src='" . $row['image_path'] . "' alt='" . $row['name'] . "' class='window' width='100' height='100''>
          </a>
          <div class='cashless'>
            <span>" . $row['price'] . "</span><img src='images/coin.png' alt='Your Coin' class='coin-image'>
            <a href='payment.php' class='button2'>Buy</a>
          </div>
        </div>
      </div>";

    }
  } else {
    echo "0 results";
  }
}
?>
