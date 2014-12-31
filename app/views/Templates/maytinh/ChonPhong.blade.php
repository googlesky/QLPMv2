<!-- php is here -->



<?php

            if (isset($_GET['pid']) && filter_var($_GET['pid'], FILTER_VALIDATE_INT, array('min_range' => 1))) {
                $pid = $_GET['pid'];
            } else {
                $pid = NULL;
            }
            $rChonPhong = DB::table('phong')->get();
            foreach ($rChonPhong as $arr) {
                echo "
                    <div class='col-md-2 space'>
                        <a href='may.php?pid=" . $arr->MA_PHONG . "' class='btn btn-primary size word_wrap'";
                if ($arr->MA_PHONG == $pid) {
                    echo " disabled";
                }
                echo ">" . $arr->TEN_PHONG . " [Số máy]: " . $arr->SLUONG_MAY . "</a>
                    </div>
                ";
            }

?>



<!-- php is here -->

<!-- <div class="col-md-2 space">
  <a href='' class="btn btn-primary size word_wrap" disabled>Phòng 1</a>
</div>

<div class="col-md-2 space">
  <button type="submit" class="btn btn-primary size word_wrap">Phòng 1</button>
</div>

<div class="col-md-2 space">
  <button type="submit" class="btn btn-primary size word_wrap">Phòng 1</button>
</div>

<div class="col-md-2 space">
  <button type="submit" class="btn btn-primary size word_wrap">Phòng 1</button>
</div>

<div class="col-md-2 space">
  <button type="submit" class="btn btn-primary size word_wrap">Phòng 1</button>
</div>

<div class="col-md-2 space">
  <button type="submit" class="btn btn-primary size word_wrap">Phòng 1</button>
</div>

<div class="col-md-2 space">
  <button type="submit" class="btn btn-primary size word_wrap">Phòng 1</button>
</div>

<div class="col-md-2 space">
  <button type="submit" class="btn btn-primary size word_wrap">Phòng 1</button>
</div>

<div class="col-md-2 space">
  <button type="submit" class="btn btn-primary size word_wrap">Phòng 1</button>
</div>

<div class="col-md-2 space">
  <button type="submit" class="btn btn-primary size word_wrap">Phòng 1</button>
</div> -->