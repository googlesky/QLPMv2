<!--
<?php
            //Bắt đầu load dữ liệu theo từng phòng
                if (isset($_GET['pid']) && filter_var($_GET['pid'], FILTER_VALIDATE_INT, array('min_range' => 1))) {
                    //Nếu có $_GET['pid'] và đúng dữ liệu, lấy biến pid;
                    $pid = $_GET['pid'];
                } else {
                    //Nếu không, $messages
                    $messages = "
                    <div class='alert alert-warning' style='margin-top: 10px;'>
                        <h2 class='text-center'>Vui lòng chọn Phòng</h2>
                    </div>
                    ";
                }
            ?>

            <?php
                if (!empty($messages)) {
                    echo $messages;
                }
?>

-->
<div class='alert alert-warning' style='margin-top: 10px;'>
    <h2 class='text-center'>Vui lòng chọn Phòng</h2>
</div>