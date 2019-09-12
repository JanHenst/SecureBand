<?php
if($_SERVER['REQUEST_METHOD'] == "GET"){
  if(!empty($_GET['q'])){
    $q = intval($_GET['q']);

    $con = mysqli_connect('localhost','u50678p47929_jan','janjan2002','u50678p47929_myband');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT * FROM agenda WHERE dag = '$q'";
    $result = mysqli_query($con,$sql);

    echo "<div class='resultBox'>
    <table>
    <tr>
    <th>Day</th>
    <th>Time</th>
    <th>Info</th>
    </tr>
    </div>";
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['tijd'] . "</td>";
        echo "<td>" . $row['info'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    exit;
  }
}
?>

<form>
<select class="selectDay" name="users" onchange="showUser(this.value)">
  <option value="">Select a day:</option>
  <option value="1">Monday</option>
  <option value="2">Tuesday</option>
  <option value="3">Wednesday</option>
  <option value="4">Thursday</option>
  <option value="5">Friday</option>
  <option value="6">Saturday</option>
  <option value="7">Sunday</option>
  </select>
</form>
<br>
<div id="resultAgenda"><b>Date info will be shown here</b></div>

<script src="js/agendaFunction.js"></script>
