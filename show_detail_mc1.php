
       <?php include 'navbar.php'; ?>
       <div class="bg-light py-3">
          <div class="container">
            <div class="row">
              <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="show_case.php">All Case</a> <span class="mx-2 mb-0">/</span><a href="show_genre_mc.php">ระบบงานบริการยานพาหนะ</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">ผู้ใช้งานทั่วไป</strong></div>
            </div>
          </div>
        </div>
       <div class="container">
   <br />
   
   <h4 align="center" style=color:#4BB3FF>เพิ่มข้อมูลทดสอบระบบ Manager Car</a></h4><br />
   <form action="insert.php" method="post" enctype="multipart/form-data">
   <div align="right" style="margin-bottom:5px;">
   <button type="summit"  class="btn btn-success btn-xs" style="width:80px;height:40px">เพิ่ม</button>
   </div>
    <select id="name_case" name="name_case" class="form-control" hidden>
      <option value="นายอรรถพล สีชา"></option>
    </select>
    <select id="check_case" name="check_case" class="form-control" hidden>
      <option value=0></option>
    </select>
    <select id="rights_case" name="rights_case" class="form-control" hidden>
      <option value="ผู้ใช้งานทั่วไป"></option>
    </select>
    <select id="system_test" name="system_test" class="form-control" hidden>
      <option value="ระบบงานบริการยานพาหนะ"></option>
    </select>
    <?php include 'detail_input.php'; ?>
  
    <?php
    $query = "SELECT * FROM case_main WHERE system_test='ระบบงานบริการยานพาหนะ' AND rights_case='ผู้ใช้งานทั่วไป'ORDER BY id_case asc limit {$start} , {$perpage}";
    $result = mysqli_query($mysqli, $query);
    while($row = mysqli_fetch_array($result)) {
      ?>   
     <?php include'detail_row_db.php';
  }   
  ?>
  </table>
  <?php
    $query1 = "SELECT * FROM case_main WHERE system_test='ระบบงานบริการยานพาหนะ' AND rights_case='ผู้ใช้งานทั่วไป'";
    $result1 = mysqli_query($mysqli, $query1);
    $total_record = mysqli_num_rows($result1);
    $total_page = ceil($total_record / $perpage);
  ?>
  <br>
  <div class="row aos-init aos-animate" data-aos="fade-up">
    <div class="col-md-12 text-center">
      <div class="site-block-27">
        <nav>
            <ul >
            <?php for($i=1;$i<=$total_page;$i++){ ?>
          <?php  if($page==$i){?>
          <li class="active"><a href=""><?php echo $i; ?></a></li>
          <?php }else{?>
          <li><a href="show_detail_mc1.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php }?>
        <?php } ?>
            </ul>
        </nav>
      </div>
    </div>
  </div>

<?php mysqli_close($mysqli); ?> 
</div>
</div>
<?php  include 'footer.php';?>


