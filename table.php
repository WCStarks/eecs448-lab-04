<?php

function displayTopRow()
{
  echo "<table>";
  echo "<tr> <td> </td>";
  for ($i = 1; $i <= 100; $i++)
  {
    echo "<td> " . $i . "</td>";
  }
  echo " </tr>";
}

function displayRow($row)
{
  echo "<tr> <td>" . $row . "</td>";
  for ($i = 1; $i <= 100; $i++)
  {
    echo "<td>" . $row * $i . " </td>";
  }
  echo "</tr>";
}

function fillTable()
{
  for ($i = 1; $i <= 100; $i++)
  {
    displayRow($i);
  }
}

displayTopRow();
fillTable();
echo "</table>";
?>
