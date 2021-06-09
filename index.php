
<?php include 'navbar.php'; ?>

    <div class="site-blocks-cover" style="background-image: url(images/aaa.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-7 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2 "><h1><font color="##0F8F17">บริษัท</font> <font color="#0F8F17">โกทูวินโซลูชั่นส์ จำกัด</h1></font>
            <div class="intro-text text-center text-md-left" >
              <p class="mb-4">เป็นบริษัท ที่พัฒนาซอฟแวร์ต่างๆให้กับหน่วยงาน ภาครัฐที่ช่วยสนับสนุนการตัดสินใจต่างๆภายในองค์กร</p>
              <p>
                <a href="https://gotowin.igetweb.com/th" class="btn btn-sm btn-primary">รับชม</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
            <i class="far fa-folder-open fa-3x"></i>
            </div>
            <div class="text">
              <h2 class="text-uppercase">สแกนเนอร์ความเร็วสูง</h2>
              <p>ผลิตภัณฑ์สแกนเนอร์ความเร็วสูงทางบริษัทได้จัดจำหน่ายให้กับองค์กรต่างๆ อย่างโรงพยาบาลที่เป็นลูกค้าผลิตภัณฑ์นี้ถึง 269 แห่ง เป็นที่ยอมรับในองค์กรต่างๆในการนำมันใช้ในการด้านเอกสารเพื่อความสะดวกของลูกค้าทุกๆ ขนาดองค์กร</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
            <i class="fas fa-archive fa-3x"></i>
            </div>
            <div class="text">
              <h2 class="text-uppercase">ระบบจัดเก็บแฟ้มผู้ป่วย</h2>
              <p>ประกอบด้วย 2 ส่วนสำคัญคือ เครื่องสแกนเนอร์ความเร็วสูงและโปรแกรมจัดเก็บแฟ้มประวัติผู้ป่วยอิเล็กทรอนิกส์ ซึ่งการเลือกใช้ต้องเหมาะสมกับงาน เพื่อความสะดวกและรวดเร็วในการทำงาน</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
            <i class="fas fa-hospital-alt fa-3x"></i>
            </div>
            <div class="text">
              <h2 class="text-uppercase">ระบบสนับสนุบโรงพยาบาล</h2>
              <p>เป็นระบบที่ช่วยสนับสนุนการทำงานของเจ้าหน้าที่บุคลากรในโรงพยาบาลในด้านงานเบื้องหลังต่างๆขององค์กรเพื่อให้การทำงานเป็นไปอย่างมีประสิทธิภาพ สะดวกเข้าถึงข้อมูลได้ง่าย มีการวิเคราะห์และสรุปอีกทั้งยังช่วยสนับสนุนการลดใช้การดาษและช่วยในการสนับสนุนการตัดสินใจ ภายในองค์กร </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center pt-4"  data-aos="fade-up">
            <h2 style=color:#4699c2>ระบบ Test ใน GTW-Back-Office</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">

              

              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_ps.php"> <img src="images/บุคคล.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_ps.php">ระบบบุคลากร</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบบุคลากร' ORDER BY id_case asc";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$ps++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$ps>=1){
                         echo " ".$ps;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                  </div>
                </div>
              </div>
  
              <div class="item">
             
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mp.php"> <img src="images/ลงเวลา.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mp.php">ระบบลงเวลา</a></h3>

                <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบลงเวลา'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                      if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mp++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mp>=1){
                         echo " ".$mp;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>

                      </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_ml.php"><img src="images/ระบบการลา.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_ml.php">ระบบการลา</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบการลา'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$ml++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$ml>=1){
                         echo " ".$ml;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                      </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mb"> <img src="images/สารบรรณ.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mb.php">ระบบสารบรรณ</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบสารบรรณ'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mb++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mb>=1){
                         echo " ".$mb;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                      </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mm.php">  <img src="images/ระบบห้องประชุม.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mm.php">ระบบห้องประชุม</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบห้องประชุม'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mm++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mm>=1){
                         echo " ".$mm;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                      </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mc.php"> <img src="images/ยานพาหนะ.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mc.php">ระบบยานพาหนะ</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบงานบริการยานพาหนะ'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mc++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mc>=1){
                         echo " ".$mc;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                      </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_ma.php"> <img src="images/งานทรัพย์สิน.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_ma.php">ระบบงานทรัพย์สิน</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบงานทรัพย์สิน'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$ma++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$ma>=1){
                         echo " ".$ma;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                      </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_ms.php"> <img src="images/งานพัสดุ.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_ms.php">ระบบงานพัสดุ</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบงานพัสดุ'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$ms++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$ms>=1){
                         echo " ".$ms;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mr.php"> <img src="images/งานซ่อมบำรุง.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mr.php">ระบบซ่อมบำรุง</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบงานซ่อมบำรุง'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mr1++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mr1>=1){
                         echo " ".$mr1;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mrc.php"> <img src="images/ศูนย์คอมพิวเตอร์.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mrc.php">ระบบศูนย์คอมพิวเตอร์</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบงานซ่อมคอมพิวเตอร์'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mrc++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mrc>=1){
                         echo " ".$mrc;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mrm.php"> <img src="images/ศูนย์เครื่องมือการแพทย์.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mrm.php">ระบบศูนย์เครื่องมือแพทย์</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบงานซ่อมเครื่องมือแพทย์'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mrm++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mrm>=1){
                         echo " ".$mrm;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_msa.php"> <img src="images/รปภ.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_msa.php">ระบบ รปภ.</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบรปภ'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$msa++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$msa>=1){
                         echo " ".$msa;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mw.php"><img src="images/คลังสินค้า.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mw.php">ระบบคลังสินค้า</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบคลังสินค้า'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mw++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mw>=1){
                         echo " ".$mw;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mme.php"><img src="images/ยาและเวชภัณฑ์.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mme.php">ระบบยาและเวชภัณฑ์</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบยาและเวชภัณฑ์'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mme++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mme>=1){
                         echo " ".$mme;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mpl.php"><img src="images/แผนงาน.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mpl.php">ระบบแผนงาน</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบแผนงาน'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mpl++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mpl>=1){
                         echo " ".$mpl;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mco.php"><img src="images/เงินเดือน.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mco.php">ระบบเงินเดือน</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบเงินเดือน'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mco++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mco>=1){
                         echo " ".$mco;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mac.php"><img src="images/บัญชี.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mac.php">ระบบบัญชี</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบบัญชี'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mac++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mac>=1){
                         echo " ".$mac;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mri.php"><img src="images/RISK.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mri.php">ระบบRISK</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบRISK'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mri++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mri>=1){
                         echo " ".$mri;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mmp.php"> <img src="images/งานจ่ายกลาง.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mmp.php">ระบบงานจ่ายกลาง</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบงานจ่ายกลาง'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mmp++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mmp>=1){
                         echo " ".$mmp;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mla.php"><img src="images/ซักฟอก.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mla.php">ระบบซักฟอก</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบซักฟอก'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mla++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mla>=1){
                         echo " ".$mla;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mg.php"><img src="images/บริหารบ้านพัก.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mg.php">ระบบบริหารบ้านพัก</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบบริหารบ้านพัก'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mg++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mg>=1){
                         echo " ".$mg;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_me.php"><img src="images/ENV.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_me.php">ระบบ ENV</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบENV'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$me++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$me>=1){
                         echo " ".$me;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mf.php"> <img src="images/โภชนาการ.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mf.php">ระบบโภชนาการ</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบโภชนาการ'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mf++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mf>=1){
                         echo " ".$mf;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="show_genre_mcr.php"> <img src="images/CRM.jpg" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mcr.php">ระบบCRM</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบCRM'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mcr++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mcr>=1){
                         echo " ".$mcr;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                   
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <br><br>
                  <a href="show_genre_mct.php"> <i class="far fa-address-card fa-9x text-info fa-fluid"></i></a>
                  </figure>
                  <br><br><br>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mct.php">ระบบตารางเวรปฏิบัติงาน</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบตารางเวรปฏิบัติงาน'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mct++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mct>=1){
                         echo " ".$mct;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                   
                  </div>
                </div>
              </div>


              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <br><br>
                  <a href="show_genre_set.php"> <i class="fas fa-cogs fa-9x"></i></a>
                  </figure>
                  <br><br><br>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_set.php">ระบบตั้งค่าทั่วไป</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบตั้งค่าทั่วไป'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$set++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$set>=1){
                         echo " ".$set;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                   
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <br><br>
                  <a href="show_genre_mtme.php"><i class="fas fa-user-tie fa-9x"></i></a>
                  </figure>
                  <br><br><br>
                  <div class="block-4-text p-4">
                    <h3><a href="show_genre_mtme.php">ระบบประชุมอบรมดูงาน</a></h3>
                    <?php
                  $query = "SELECT * FROM case_main WHERE system_test='ระบบประชุมอบรมดูงาน'";
                  $result = mysqli_query($mysqli, $query);
                    while($row = mysqli_fetch_array($result)) {
                      
                    if( $row['note_case']!=="ปกติ"||$row['status_case']!=="ผ่าน"){
                        @$mtme++;
                    }
                  }
                ?>
                      <p class="text-primary font-weight-bold">Error<?php
                      if(@$mtme>=1){
                         echo " ".$mtme;
                      }
                      else{
                        echo " ไม่มี";
                      }
                    ?>
                   
                  </div>
                </div>
              </div>
                      



                   <?php
                      mysqli_close($mysqli);
                    ?>      
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

   
   <?php include 'footer.php'; ?>