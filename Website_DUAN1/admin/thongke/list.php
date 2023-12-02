<div class="list_tk">
    <div class="list_title_tk">
        <h3>THỐNG KÊ DOANH THU TRONG: <span id="text-date"></span>
            <p>
                <select class="select-date">
                    <option value="7ngay">7 ngày qua</option>
                    <option value="28ngay">28 ngày qua</option>
                    <option value="90ngay">90 ngày qua</option>
                    <option value="365ngay">365 ngày qua</option>
                </select>
            </p>
        </h3>
    </div>
    <br>
    <br>
    <div id="myfirstchart" style="height: 250px; width: 100%;"></div>
    <script>
      $(document).ready(function(){
        thongke();
        var char = new Morris.Area({
            element: 'myfirstchart',
            xkey: 'date',

            ykeys: ['order', 'sales', 'quantity'],

            labels: ['Đơn hàng', 'Danh thu', 'Số lượng bán']
        });

        $('.select-date').change(function(){
            var thoigian = $(this).val();
            if(thoigian == '7ngay'){
                var text = '7 ngày qua';
            }else if(thoigian == '28ngay'){
                var text = '28 ngày qua';
            }else if(thoigian == '90ngay'){
                var text = '90 ngày qua';
            }else{
                var text = '365 ngày qua';
            }
            $.ajax({
                url: '../model/thongke.php',
                method: 'POST',
                dataType: 'json',
                data: {thoigian:thoigian},

                success: function(data){
                    char.setData(data);
                    $('#text-date').text(text);
                }
            });
        })

        function thongke(){
            var text = '365 ngày qua';
            $.ajax({
                url: '../model/thongke.php',
                method: 'POST',
                dataType: 'json',

                success: function(data){
                    char.setData(data);
                    $('#text-date').text(text);
                }
            });
        }
      });
    </script>
</div>
<br>
<br>
<br>
<div class="top3_sp">
    <div class="list_title_tk">
        <h3>THỐNG KÊ SẢN PHẨM BÁN CHẠY</h3>
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
                    foreach($top3_sp as $thongke){
                    extract($thongke);
                    echo "['$name', $soluong],";
                    }
                ?>
                ]);

                // Set Options
                const options = {
                title:'TOP 3 SẢN PHẨM BÁN CHẠY',
                is3D:true
                };

                // Draw
                const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);

            }
        </script>
    </div>
</div>