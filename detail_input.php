<div style=color:#0F1E29>
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