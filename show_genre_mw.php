<?php include 'navbar.php'; ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span><a href="show_case.php">All Case</a> <span class="mx-2 mb-0">/</span><strong class="text-black">ระบบคลังสินค้า</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">User Test</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">

                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">

            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="show_detail_mw1.php"><img src="images/User-green-icon.png" alt="Image placeholder" class="img-fluid" width="60%"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3>ผู้ใช้งานทั่วไป</a></h3>
                    <p class="mb-0">เทสระบบ ผู้ใช้งานทั่วไป</p>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบคลังสินค้า' AND rights_case='ผู้ใช้งานทั่วไป'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mp1++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mp1>=1){
                         echo " ".$mp1;
                      }
                      else{
                        echo " ไม่มี";
                      }
                      
                    ?>
                      </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="show_detail_mw2.php"><img src="images/User-yellow-icon.png" alt="Image placeholder" class="img-fluid "width="60%"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3>เจ้าหน้าที่</a></h3>
                    <p class="mb-0">เทสระบบ เจ้าหน้าที่ระบบ</p>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบคลังสินค้า' AND rights_case='เจ้าหน้าที่'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mp2++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mp2>=1){
                         echo " ".$mp2;
                      }
                      else{
                        echo " ไม่มี";
                      }
                      
                    ?>
                      </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="show_detail_mw3.php"><img src="images/User-red-icon.png" alt="Image placeholder" class="img-fluid"width="60%"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3>ผู้ดูแลระบบ</a></h3>
                    <p class="mb-0">เทสระบบ ผู้ดูแลระบบ</p>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบคลังสินค้า' AND rights_case='ผู้ดูแลระบบ'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$m3++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$m3>=1){
                         echo " ".$m3;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                      </p>
                    <?php
                      mysqli_close($mysqli);
                    ?>
                  </div>
                </div>
              </div>

            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                   
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <?php include 'footer.php'; ?>