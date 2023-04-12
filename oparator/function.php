<?php
function image($v_img,$v_desc,$v_name,$v_id){
$ele = "
<div class='col-md-3 col-sm-6 my-3 my-md-0'>
<form action='/v-managament/index.php' method='post'>
  <div class='card shadow'>
    <div>
     <a href='/v-managament/oparator/show.php?id=$v_id'><img src='$v_img' alt='test' class='img-fluid card-img-top'></a>
    </div>
    <div class='card-body'>
      <h5 class='card-title'>$v_name</h5>
      <h6>
        <i class='fas fa-star'></i>
        <i class='fas fa-star'></i>
        <i class='fas fa-star'></i>
        <i class='fas fa-star'></i>
        <i class='far fa-star'></i>
      </h6>
      <p class='card-text'>
        $v_desc
      </p>
      <h5>
                
      </h5>
      <input type='hidden' name='v_id' value='$v_id'>

      
    </div>
  </div>
</form>
</div>

";
echo $ele;
}
?>