<div class="row2">
  <div class="row2 font_title">
    <h1>BIỂU ĐỒ</h1>
  </div>
  <div class="row2 form_content ">
    <div id="myChart" style="width:100%; width:800px; height:500px; align-items: center">
    </div>

    <script>
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        // Set Data
        const data = google.visualization.arrayToDataTable([
          ['Danh muc', 'Số lượng'],
          <?php 
            foreach($dsthongke as $thongke){
              extract($thongke);
              echo "['$name', $soluong],";
            }
          ?>
        ]);

        // Set Options
        const options = {
          title:'BIỂU ĐỒ SỐ LƯỢNG SẢN PHẨM TRONG DANH MỤC',
          is3D:true
        };

        // Draw
        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);

      }
    </script>
    <a href="index.php?act=thongke"><button type="button" class="btn btn-outlinedark" style="margin: 10px 20px;">Quay lại</button></a>
  </div>
</div>