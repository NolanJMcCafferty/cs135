<h2>Hello cats!</h2>

<?php
  require_once 'login.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) {
    echo "** ERROR **";
    die($conn->connect_error);
  }else{
    echo "Connected";
  }
/* start unvailing a little by little to see how things work. . .
  $query = "DROP TABLE IF EXISTS cats";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);

  $query = "CREATE TABLE cats (
    id SMALLINT NOT NULL AUTO_INCREMENT,
    family VARCHAR(32) NOT NULL,
    name VARCHAR(32) NOT NULL,
    age TINYINT NOT NULL,
    PRIMARY KEY (id)
  )";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);
  $query = "INSERT INTO cats VALUES(NULL, 'Lion', 'Leo', 4)";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);

  $query = "INSERT INTO cats VALUES(NULL, 'Cougar', 'Growler', 2)";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);

  $query = "INSERT INTO cats VALUES(NULL, 'Cheetah', 'Charly', 3)";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);

  $query  = "SELECT * FROM cats";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);

  $rows = $result->num_rows;
  echo "<table><tr> <th>Id</th> <th>Family</th><th>Name</th><th>Age</th></tr>";
  for ($j = 0 ; $j < $rows ; ++$j) {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);

    echo "<tr>";
    for ($k = 0 ; $k < 4 ; ++$k) echo "<td>$row[$k]</td>";
    echo "</tr>";
  }
  echo "</table>";

  $query  = "UPDATE cats SET name='Charlie' WHERE name='Charly'";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);

  $query  = "DELETE FROM cats WHERE name='Growler'";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);

  $query = "DROP TABLE IF EXISTS owners";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);

  $query = "CREATE TABLE owners (
    catid INT NOT NULL,
    fname VARCHAR(20) NOT NULL,
    lname VARCHAR(20) NOT NULL
  )";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);

  $query = "INSERT INTO cats VALUES(NULL, 'Lynx', 'Stumpy', 5)";
  $result = $conn->query($query);
  //  echo "The insert ID was: " . $conn->insert_id;
  $insertID = $conn->insert_id;
  // insert_id is the ID generated by an insert or update query on a table
  // with a column having the AUTO_INCREMENT attribute.

  $query = "INSERT INTO owners VALUES($insertID, 'Ann', 'Smith')";
  $result = $conn->query($query);
  
  $query  = "SELECT * FROM cats";
  $result = $conn->query($query);
  $rows = $result->num_rows;
  echo "<br><table><tr> <th>Id</th> <th>Family</th><th>Name</th><th>Age</th></tr>";
  for ($j = 0 ; $j < $rows ; ++$j) {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);

    echo "<tr>";
    for ($k = 0 ; $k < 4 ; ++$k) echo "<td>$row[$k]</td>";
    echo "</tr>";
  }
  echo "</table>";


  $query  = "SELECT * FROM owners";
  $result = $conn->query($query);
  $rows = $result->num_rows;
  echo "<br><table><tr> <th>CatID</th> <th>FName</th><th>LName</th></tr>";
  for ($j = 0 ; $j < $rows ; ++$j) {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);

    echo "<tr>";
    for ($k = 0 ; $k < 3 ; ++$k) echo "<td>$row[$k]</td>";
    echo "</tr>";
  }
  echo "</table>";
*/
?>

