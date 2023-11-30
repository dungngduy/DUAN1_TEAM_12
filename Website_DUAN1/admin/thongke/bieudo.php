<div class="row2">
  <div class="row2 font_title">
    <h1>BIỂU ĐỒ</h1>
  </div>
  <div class="row2 form_content ">
    <div id="myChart" style="width:100%; width:800px; height:500px; align-items: center">
    </div>

    <script>
      new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'myfirstchart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
          { year: '2008', value: 20 },
          { year: '2009', value: 10 },
          { year: '2010', value: 5 },
          { year: '2011', value: 5 },
          { year: '2012', value: 20 }
        ],
        // The name of the data record attribute that contains x-values.
        xkey: 'year',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Value']
      });
    </script>
    <a href="index.php?act=thongke"><button type="button" class="btn btn-outlinedark" style="margin: 10px 20px;">Quay lại</button></a>
  </div>
</div>