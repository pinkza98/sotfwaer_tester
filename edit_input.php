<?php include'navbar.php'; ?>
<div class="bg-light py-3">
          <div class="container">
            <div class="row">
              <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="show_case.php">All Case</a> <span class="mx-2 mb-0">/</span>แก้ไขข้อมูล <span class="mx-2 mb-0"></span></div>
            </div>
          </div>
        </div>
       <div class="container">
   <br />
<h4 align="center" style=color:#4BB3FF>แก้ไขข้อมูล</a></h4><br />
<div class="container">
<?php
$id_case = $_REQUEST["ID"];
$system_test = $_REQUEST["system_test"];
$genre_case = $_REQUEST["genre_case"];
$rights_case = $_REQUEST["rights_case"];
$input_case = $_REQUEST["input_case"];
$output_case = $_REQUEST["output_case"];
$status_case = $_REQUEST["status_case"];
$note_case = $_REQUEST["note_case"];
$img_case = $_REQUEST["img_case"];
$system_case = $_REQUEST["system_case"];


?>
<form action="edit_db.php" method="post" enctype="multipart/form-data">
    <div align="right" style="margin-bottom:5px;">
   <button type="summit"  class="btn btn-success btn-xs">แก้ไข</button>
   </div>
<div style=color:#0F1E29>
<div class="row justify-content-md-center" align="text-left" style=font-size:19px; >
       <div class="col col-lg-4">
       </select>
       <input type="hidden" name="id_case" value="<?=$id_case?>">
       <input type="hidden" name="rights_case" value="<?=$rights_case?>">
       <input type="hidden" name="system_test" value="<?=$system_test?>">
      
        <label >ประเภทเทส</label>
        <select name ="genre_case" id="genre_case" class="form-control">
          <option value="<?=$genre_case?>"><?=$genre_case?></option>
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
          <label >ข้อมูลนำเข้า</label>
          <select id="input_case" name="input_case" class="form-control">
            <option value="<?=$input_case?>"><?=$input_case?></option>
            <option value="ครบ">ครบ</option>
            <option value="ไม่ครบ">ไม่ครบ</option>
            <option value="ไม่มี">ไม่มี</option>
            <option value="มี">มี</option>
          </select>
      </div>
      <div class="col col-lg-4">
        <label >ข้อมูลนำออก</label>
          <select id="output_case" name="output_case"class="form-control" >
            <option value="<?=$output_case?>" ><?=$output_case?></option>
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
             <input type="text" name="system_case" class="form-control" value="<?=$system_case?>">
                
          </div>
          <div class="col col-lg-4">
          <label>สถานะ</label>
          <select id="status_case" name="status_case" class="form-control">
            <option value="<?=$status_case?>"><?=$status_case?></option>
            <option value="ผ่าน">ผ่าน</option>
            <option value="ไม่ผ่าน">ไม่ผ่าน</option>
            <option value="ไม่ทราบ">ไม่ทราบ</option>
          </select>
          
          </div>
        </div>
        
      <div class="row justify-content-md-center" align="text-left" style=font-size:19px;>
        <div class="col col-lg-8">
              <label>หมายเหตุ</label>
              <input type="text" name="note_case" id="note_case" class="form-control" value="<?=$note_case?>">
            
        </div>
        
        <div class="col col-lg-4">
        <label>รูปภาพ&nbsp;&nbsp;<?=$img_case?></label>
        <input type="file" value="<?=$img_case?>" name="img_case" multiple="multiple" id="img_case"  class="form-control" value=""> 
        
          </td >
         
      </div>
      </div>
      </div>
      </form>
      </div>
      <?php include 'footer.php'; ?>