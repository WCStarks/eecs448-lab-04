<html>
  <head>
    <title>Web Store</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <?php
      echo "Welcome " . $_POST['user'] . "! <br>";
      echo "Your password: " . $_POST['pass'] . "<br><br>";
      $runningTotal = 0;
    ?>
    <table>
      <tr>
        <th> </th> <th> Quantity </th> <th> Cost per Item </th> <th> Subtotal </th>
      </tr>
      <tr>
        <th> Item 1 </th>
        <td> <?php echo $_POST['item1']; ?> </td>
        <td> $9.99 </td>
        <td> <?php echo "$" . 9.99 * $_POST['item1'];
              $runningTotal += 9.99 * $_POST['item1']; ?> </td>
      </tr>
      <tr>
        <th> Item 2 </th>
        <td> <?php echo $_POST['item2']; ?> </td>
        <td> $14.99 </td>
        <td> <?php echo "$" . 14.99 * $_POST['item2'];
              $runningTotal += 14.99 * $_POST['item2'];?> </td>
      </tr>
      <tr>
        <th> Item 3 </th>
        <td> <?php echo $_POST['item3'] ?> </td>
        <td> $3.99 </td>
        <td> <?php echo "$" . 3.99 * $_POST['item3'];
              $runningTotal += 3.99 * $_POST['item3'];?> </td>
      </tr>
      <tr>
        <th> Shipping </th>
        <td colspan="2"> <?php echo $_POST['shipping']; ?> </td>
        <td>
          <?php
            $shipping = $_POST['shipping'];
            $shipCost = 0.00;
            if ($shipping == "7 day") {
              $shipCost = 0.00;
            }
            else if ($shipping == "Over Night") {
              $shipCost = 50.00;
            }
            else if ($shipping == "3 Day") {
              $shipCost = 5.00;
            }
            echo "$" . $shipCost . ".00";
            $runningTotal += $shipCost;
          ?>
      </tr>
      <tr>
        <th colspan="3"> Total Cost </th>
        <th> <?php echo "$" . $runningTotal; ?>
    </table>
  </body>
</html>
