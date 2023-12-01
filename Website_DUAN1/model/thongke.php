<?php
    use Carbon\Carbon;
    use Carbon\CarbonInterval;
    include "../carbon/autoload.php";
    include "../model/offset.php";
    if(isset($_POST['thoigian'])){
        $time = $_POST['thoigian'];
    }else{
        $time = '';
        $created = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->toDateString();
    }

    if($time == '7ngay'){
        $created = Carbon::now('Asia/Ho_Chi_Minh')->subDays(7)->toDateString();
    }else if($time == '28ngay'){
        $created = Carbon::now('Asia/Ho_Chi_Minh')->subDays(28)->toDateString();
    }else if($time == '90ngay'){
        $created = Carbon::now('Asia/Ho_Chi_Minh')->subDays(90)->toDateString();
    }else if($time == '365ngay'){
        $created = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->toDateString();
    }

    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
    $sql = "SELECT * FROM thong_ke WHERE ngaydat BETWEEN '$created' AND '$now' ORDER BY ngaydat ASC";
    $sql_query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($sql_query)){
        $char_data[] = array(
            'date' => $row['ngaydat'],
            'order' => $row['donhang'],
            'sales' => $row['doanhthu'],
            'quantity' => $row['soluongban']
        );
    }
    echo $data = json_encode($char_data);
?>