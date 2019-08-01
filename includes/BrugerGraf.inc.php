<script>
google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Navn', 'SkoStr'],

    <?php

    require 'dbConn.php';

    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

 if($resultCheck > 0)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        echo "['".$row['Navn']."', '".$row['SkoStr']."'],";
      }
    }

    ?>

  ]);
  var options = {
    chart: {
      title: 'Oversigt over skostørrelse',
      subtitle: 'Hvorfor vil du vide det ?',
    }
  };
  var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

  chart.draw(data, google.charts.Bar.convertOptions(options));
}
</script>