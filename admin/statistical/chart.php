<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['name_category', 'number_category'],
          <?php
          foreach($data_chartProduct as $value){
                echo "['". $value['name_category'] . "' , " . $value['number_category'] . "],";
          }
          ?>
          
        ]);

        var options = {
          title: 'Biểu đồ Sản phẩm',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 100%; height: 600px;"></div>
  </body>
</html>