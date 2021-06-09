<!DOCTYPE html>
<html>  
    <head>  
        <title>Add Test Case</title>  
        <meta charset="utf-8">
        <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
        <link rel="stylesheet" href="fonts/icomoon/style.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        
        
  <style>
		body {
		  font-family: 'Kanit', sans-serif;
		}
		h1 {
		  font-family: 'Kanit', sans-serif;
    }
    @import url(https://fonts.googleapis.com/css?family=Varela+Round);
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700);
    .others {
    color:#F01212;
}
    </style>
    <?php
    include 'config_db.php';
    ?>
    <?php
	function DateThai($strDate)
        {
          $strYear = date("Y",strtotime($strDate))+543;
          $strMonth= date("n",strtotime($strDate));
          $strDay= date("j",strtotime($strDate));
          $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
          $strMonthThai=$strMonthCut[$strMonth];
          return "$strDay $strMonthThai $strYear";
        }
      ?>
      
    </head>  
    <body> 
    
      <div class="site-wrap">
        <header class="site-navbar" role="banner">
          <div class="site-navbar-top">
            <div class="container">
              <div class="row align-items-center">
    
                <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                  
                </div>
    
                <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                  <div class="site-logo">
                    <a href="index.php" class="js-logo-clone">GTW-solutions Ltd.</a>
                  </div>
                </div>
                
              </div>
            </div>
          </div> 
          <nav class="site-navigation text-right text-md-center" role="navigation" ">
          <div class="">
            <div class="container">
            
              <ul class="site-menu js-clone-nav d-none d-md-block">
                <li>
                  <a href="index.php">Home<i class="fa fa-home"></i></a>
                </li>
                <li class="has-children">
                  <a href="#">เกี่ยวกับบริษัท <i class="fa fa-list-alt"></i></a>
                  <ul class="dropdown">
                    <li><a href="about1.php">ระบบสนับสนุนโรงพยาบาล</a></li>
                    <li><a href="about2.php">ระบบจัดเก็บแฟ้มผู้ป่วย</a></li>
                    <li><a href="about3.php">สแกนเนอร์ความเร็วสูง</a></li>
                  </ul>
                </li>
                <li><a href="show_case.php">Test Data <i class="fa fa-th"></i></a></li>
                <li><a href="resume.php">Resume <i class="fa fa-address-card"></i></a>
              </ul>
              </div>
            </div>
          </nav>
        </header> 
        <div class="bg-light py-3">
          <div class="container">
            <div class="row">
              <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="show_case.php">All Case</a> <span class="mx-2 mb-0">/</span><a href="show_genre_ma.php">ระบบงานทรัพย์สิน</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">ผู้ใช้งานทั่วไป</strong></div>
            </div>
          </div>
        </div>
       <div class="container">
   <br />
   
   <h4 align="center" style=color:#4BB3FF>เพิ่มข้อมูลทดสอบระบบ Manager Asset</a></h4><br />
   <form action="insert.php" method="post" enctype="multipart/form-data">
   <div align="right" style="margin-bottom:5px;">
   <button type="summit"  class="btn btn-success btn-xs">เพิ่ม</button>
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
      <option value="ระบบงานทรัพย์สิน"></option>
    </select><div style=color:#0F1E29>
<div class="row justify-content-md-center" align="text-left" style=font-size:19px; >
       <div class="col col-lg-4">
        <label >ประเภทเทส</label>
        <select name ="genre_case" id="genre_case" class="form-control">
         
          <option value="เพิ่มข้อมูล">เพิ่มข้อมูล</option>
          <option value="แก้ไขข้อมูล">แก้ไขข้อมูล</option>
          <option value="ค้นหาข้อมูล">ค้นหาข้อมูล</option>
          <option value="ลบข้อมูล">ลบข้อมูล</option>
          <option value="แสดงข้อมูล">แสดงข้อมูล</option>
          <option value="ดาวน์โหลดข้อมูล">ดาวน์โหลดข้อมูล</option>
          <option value="ฟอร์นข้อมูล">ฟอร์นข้อมูล</option>
        </select>
        </div>
        <div class="col col-lg-4">
          <label>ข้อมูลนำเข้า</label>
          <select id="input_case" name="input_case" class="form-control">
            
            <option value="ครบ">ครบ</option>
            <option value="ไม่ครบ">ไม่ครบ</option>
            <option value="ไม่มี">ไม่มี</option>
            <option value="มี">มี</option>
          </select>
      </div>
      <div class="col col-lg-4">
        <label>ข้อมูลนำออก</label>
          <select id="output_case" name="output_case"class="form-control">
            
            <option value="ครบ">ครบ</option>
            <option value="ไม่ครบ">ไม่ครบ</option>
            <option value="ไม่มี">ไม่มี</option>
            <option value="มี">มี</option>
          </select>
      </div>
    </div>

     <div class="row justify-content-md-center" align="text-left" style=font-size:19px;>
          <div class="col col-lg-8">
              <label>ในระบบ</label>
                <input type="text" name="system_case" id="system_case" class="form-control"  placeholder="ชื่อฟังของชั่นระบบ">
          </div>
          <div class="col col-lg-4">
          <label>รูปภาพ</label>
        <input type="file"id="img_case" name="img_case" multiple="multiple"  class="form-control"> 
          </div>
        </div>
        
      <div class="row justify-content-md-center" align="text-left" style=font-size:19px;>
        <div class="col col-lg-8">
              <label>หมายเหตุ</label>
                <input type="text" name="note_case" id="note_case" class="form-control" value="ปกติ">
        </div>
        
        <div class="col col-lg-4">
          
          <label>สถานะ</label>
          <select id="status_case" name="status_case" class="form-control">
            <option value="ผ่าน">ผ่าน</option>
            <option value="ไม่ผ่าน">ไม่ผ่าน</option>
            <option value="ไม่ทราบ">ไม่ทราบ</option>
          </select>
      </div>
      </div>
      </div>
      </form>
      <br></br>

     <table class="table table-sm" style=color:#4BB3FF>
     <thead  align="center">
      <tr class="bg-info" style="color:#ffffff" >
      
      <th style=font-size:16px;font-weight:normal;>วันที่บันทึกข้อมูล</th>
      <th style=font-size:16px;font-weight:normal;>ประเภท</th>
      <th style=font-size:16px;font-weight:normal;>ในระบบ</th>
      <th style=font-size:16px;font-weight:normal;>ข้อมูลนำเข้า</th>
      <th style=font-size:16px;font-weight:normal;>ข้อมูลนำออก</th>
      <th style=font-size:16px;font-weight:normal;>สถานะ</th>
      <th style=font-size:16px;font-weight:normal;>หมายเหตุ</th>
      <th style=font-size:16px;font-weight:normal;>รูปภาพ</th>
      <th style=font-size:16px;font-weight:normal;>แก้ไข</th>
      <th style=font-size:16px;font-weight:normal;>ลบ</th>
      <th style=font-size:16px;font-weight:normal;>ตรวจ</th>
      </tr>
    </thead>
    <?php
    /*------------*/
    $perpage = 11  ;
    if (isset($_GET['page'])) {
    $page = $_GET['page'];
    } else {
    $page = 1;
    }
    $start = ($page - 1) * $perpage;
 
    ?>
    <?php
    $query = "SELECT * FROM case_main WHERE system_test='ระบบสารบรรณ' AND rights_case='ผู้ดูแลระบบ'ORDER BY date_case asc limit {$start} , {$perpage}";
    $result = mysqli_query($mysqli, $query);
    while($row = mysqli_fetch_array($result)) {
      ?>
        <thead align="center">
    <tr style=color:#00477C >
      <th><output style=font-size:14px;><?=DateThai($row["date_case"]);?></output></th>
       <th><output style=font-size:14px;><?=$row["genre_case"];?> </output></th>
       <th><output style=font-size:14px;><?=$row["system_case"];?></output></th>
       <th><output style=font-size:14px;><?=$row["input_case"];?></output></th>
       <th><output style=font-size:14px;><?=$row["output_case"];?></output></th>
       <th><output style=font-size:14px;><?=$row["status_case"];?></output></th>
       <th><output style=font-size:14px;><?=$row["note_case"];?></output></th>

       <th>
       <?php
        if($row['img_case']!=='' &&$row['img_case']!=null){
            ?>
            <a class="btn btn-info" href="images_test/<?=$row['img_case'];?>" target="_blank"><i class="fa fa-eye"></i></a>
            <?php
          }
          elseif($row['img_case']==''&&$row['img_case']==null){
            ?>
          <a class="btn btn-outline-dark" ><i class="fa fa-minus"></i></a>
            <?php
          }
          ?>
       </th>
       <th>
       <a class="btn btn-outline-primary" href="edit_input.php?ID=<?=$row['id_case'];?>&genre_case=<?=$row['genre_case'];?>&system_case=<?=$row['system_case'];?>&input_case=<?=$row['input_case'];?>&output_case=<?=$row['output_case'];?>&status_case=<?=$row['status_case'];?>&note_case=<?=$row['note_case'];?>&img_case=<?=$row['img_case'];?>&rights_case=<?=$row['rights_case'];?>&system_test=<?=$row['system_test'];?>" onclick="return confirm('แก้ไขข้อมูล');"><i class="fa fa-share-square"></i></a>
       </th>
       <th><a class="btn btn-danger" href="delete.php?ID=<?=$row['id_case'];?>&system_test=<?=$row['system_test'];?>&rights_case=<?=$row['rights_case'];?>" onclick="return confirm('ยืนยันลบข้อมูล');"><i class="fa fa-trash"></i></a></th>
       <?php
        if($row['note_case'] !== 'ปกติ'){
           if($row['status_case'] == 'ผ่าน'){
        ?>
       <th align="center"><a class="btn btn-outline-warning"  href="police.php?ID=<?=$row['id_case'];?>&system_test=<?=$row['system_test'];?>&rights_case=<?=$row['rights_case'];?>&check_case=<?=$row['check_case'];?>" onclick="return confirm('ยืนยันแก้ไข');"><i class="fa fa-exclamation-triangle"></i></th> 
        <?php
      }
      elseif($row['status_case'] !== 'ผ่าน'){
          ?>
          <th align="center"><a class="btn btn-outline-danger"  href="police.php?ID=<?=$row['id_case'];?>&system_test=<?=$row['system_test'];?>&rights_case=<?=$row['rights_case'];?>&check_case=<?=$row['check_case'];?>" onclick="return confirm('ยืนยันแก้ไข');"><i class="fa fa-exclamation-triangle"></i></a></th>
          <?php
        }
      }
    if($row['note_case'] == 'ปกติ'){
      if($row['status_case'] == 'ผ่าน'){
        ?>
         <th align="center"><a class="btn btn-outline-info"><i class="fa fa-check"></i></a></th>
        <?php
      }
      else{
        ?>
             <th align="center"><a class="btn btn-outline-danger"  href="police.php?ID=<?=$row['id_case'];?>&system_test=<?=$row['system_test'];?>&rights_case=<?=$row['rights_case'];?>&check_case=<?=$row['check_case'];?>" onclick="return confirm('ยืนยันแก้ไข');"><i class="fa fa-exclamation-triangle"></i></a></th>
        <?php
      }
    }
  }    
     ?>
      </tr>
      </thead>
      </table>
      <?php
      $query1 = "SELECT * FROM case_main WHERE system_test='ระบบสารบรรณ' AND rights_case='ผู้ดูแลระบบ'";
      $result1 = mysqli_query($mysqli, $query1);
      $total_record = mysqli_num_rows($result1);
      $total_page = ceil($total_record / $perpage);
      
    ?>
    <br>
      <div class="row aos-init aos-animate" data-aos="fade-up">
        <div class="col-md-12 text-center">
          <div class="site-block-27">
          <nav>
              <ul>
              
              <?php for($i=1;$i<=$total_page;$i++){ ?>
              
                <?php  if($page==$i){?>
                <li class="active"><a href="test.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php }else{?>
                <li><a href="test.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php }?>
            
              <?php } ?>
             
              </ul>
              </nav>
          </div>
        </div>
      </div>
     
     
    
    </div>
  </div>
  
  <?php
      mysqli_close($mysqli);
     ?>
     
<footer class="site-footer border-top">
      <div class="container"> 
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <a href="https://www.facebook.com/Gotowin-Solutions-821785671331085/">GTW Back Office &copy;</a>
             <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> 
             <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>
  
<script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>
  
    
  </body>
</html>