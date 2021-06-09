<?php include 'navbar.php';?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Resume</strong></div>
        </div>
      </div>
    </div>  
    <div class="site-section">
      <div class="container">
        <div class="row">
        <div class="container">
        <h2>ระบบจัดเก็บแฟ้มผู้ป่วย</h2>
        <div id="accordion">
          <div class="card">
            <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapseOne">
                  ผู้ป่วยภายใน
              </a>
            </div>
            <div id="collapseOne" class="collapse " data-parent="#accordion">
              <div class="card-body">
              <p><span style="font-size: 14pt; color: #008000;"><strong>โปรแกรมจัดเก็บแฟ้มประวัติผู้ป่วยในอิเล็กทรอนิกส์</strong></span></p>
              <p><span style="font-size: 12pt;">&nbsp; &nbsp; &nbsp; โปรแกรมจัดเก็บ(สแกน)แฟ้มประวัติผู้ป่วยในอิเล็กทรอนิกส์ เป็นโปรแกรมที่ทำหน้าที่สแกนประวัติผู้ป่วยใน ( Chart ) ให้อยู่ในรูปไฟล์อิเล็กทรอนิกส์เพื่อทำการสืบค้นได้อย่างสะดวกและรวดเร็ว ซึ่งในปัจจุบันการสแกนประวัติผู้ป่วยแบ่งเป็น 2 ประเภท คือ</span></p>
              <p><span style="font-size: 12pt;">1. การสแกนแบบไม่แยกประเภท หมายถึง การสแกนทั้ง Chart ไว้ในไฟล์เดียวกัน การดูเอกสารแต่ละประเภท เช่น Dischart Summary, ใบ Lab, ใบ EKG ใช้วิธีการเปิดหน้าภาพเอกสารไปเรื่อยๆจนถึงประเภทเอกสารที่ต้องการดู</span></p>
              <p><span style="font-size: 12pt;">2. การสแกนแบบแยกประเภทเอกสาร หมายถึง การเก็บเอกสารแต่ละประเภทแยกกัน หากต้องการดูเอกสารประเภทใด สามารถจะเปิดภาพเอกสารเหล่านั้นดูได้ทันที</span></p>
              <p><span style="font-size: 12pt;">โดยประโยชน์หลักของการสแกน Chart เป็นไฟล์อิเล็กทรอนิกส์ สามารถกล่าวได้ดังต่อไปนี้</span></p>
              <p><span style="font-size: 12pt;">- ประหยัดพื้นที่ในการจัดเก็บประวัติผู้ป่วย</span></p>
              <p><span style="font-size: 12pt;">- ช่วยป้องกันการสูญหาย การชำรุด Chart ผู้ป่วย</span></p>
              <p><span style="font-size: 12pt;">- เพิ่มระยะการเก็บข้อมูลของผู้ป่วยได้มากกว่าเอกสารที่เป็นกระดาษ</span></p>
              <p><span style="font-size: 12pt;">- สืบค้นข้อมูลได้อย่างสะดวกและรวดเร็ว</span></p>
              <p><span style="font-size: 12pt;">- ช่วยบริหารจัดการข้อมูลได้อย่างมีประสิทธิภาพ เช่น การเข้าดูข้อมูล, การยืม Chart, การคัดลอก เป็นต้น</span></p>
              <p><span style="font-size: 12pt;">ประโยชน์และคุณสมบัติโปรแกรมมีรายละเอียดค่อนข้างมาก และแต่ละโรงพยาบาลจะใช้โปรแกรมโรงพยาบาลที่แตกต่างกันไป หากโรงพยาบาลใดต้องการรายละเอียดเพิ่มเติมสามารถติดต่อบริษัทได้ตลอด 24 ชั่วโมงค่ะ</span></p>
              <p><span style="font-size: 12pt;"><img src="https://www.igetweb.com/uploads/8425/filemanager/365f1704a571a455af1ae26e49b40cbb_full.JPG" alt="" width="610" height="441" /></span></p>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
               ผู้ป่วยภายนอก
              </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
              <div class="card-body">
              <p><span style="font-size: 14pt; color: #008000;"><strong>โปรแกรมจัดเก็บแฟ้มประวัติผู้ป่วยนอกอิเล็กทรอนิกส์</strong></span></p>
              <p>&nbsp; <span style="font-size: 12pt;">&nbsp; &nbsp;ในปัจจุบัน โรงพยาบาลจำนวนมากมีการพัฒนาระบบข้อมูลของผู้ป่วยนอกให้เป็นแบบ paperless เพื่อความสะดวกและรวดเร็วในการรักษาผู้ป่วย ซึ่งแต่ละโรงพยาบาลมีข้อจำกัดในการพัฒนาระบบที่แตกต่างกันไป เราจึงสามารถแบ่งโรงพยาบาลได้เป็น 2 แบบคือ</span></p>
              <p><span style="font-size: 12pt;">แบบที่ 1 โรงพยาบาลที่ใช้ระบบ paperless ได้อย่างสมบูรณ์ โดยแพทย์ทุกท่านคีย์ข้อมูลการรักษาลงในโปรแกรมโรงพยาบาลทั้งหมด แต่อย่างไรก็ดียังคงมีเอกสารที่เป็นกระดาษอยู่บ้าง เช่น ใบ Refer, หนังสือรับรองความพิการ, ใบ EKG, ประวัติผู้ป่วยเก่าก่อนขึ้นระบบ paperless เป็นต้น</span></p>
              <p><span style="font-size: 12pt;">แบบที่ 2 โรงพยาบาลที่แพทย์ยังเขียนข้อมูลลงไปใน OPD Card ที่เป็นกระดาษ เนื่องจาก ต้องตรวจรักษาผู้ป่วยเป็นจำนวนมากทำให้ไม่สามารถคีย์ข้อมูลลงในโปรแกรมโรงพยาบาลได้ทันเวลา จึงจำเป็นต้องใช้OPD Card ที่เป็นกระดาษอยู่</span></p>
              <p><span style="font-size: 12pt;">โปรแกรมจัดเก็บแฟ้มประวัติผู้ป่วยนอกอิเล็กทรอนิกส์ ( OPD-SCAN ) เป็นโปรแกรมที่เข้ามาช่วยส่งเสริมการทำงานของโรงพยาบาลทั้ง 2 แบบให้มีประสิทธิภาพมากยิ่งขึ้น สำหรับโรงพยาบาลแบบที่ 1 โปรแกรมจะเข้ามาช่วยในการจัดเก็บ OPD Card เก่าๆและเอกสารบางประเภทให้เป็นไฟล์อิเล็กทรอนิกส์ ส่วนโรงพยาบาลในแบบที่ 2 โปรแกรมจะช่วยในการเก็บทั้ง OPD Card เก่าและปัจจุบันให้เป็นไฟล์อิเล็กทรอนิกส์ทั้งหมด ทำให้แพทย์ตรวจรักษาผู้ป่วยได้อย่างสะดวกและรวดเร็วขึ้น เพราะไม่ต้องรอ OPD Card ทีเป็นกระดาษ</span></p>
              <p><span style="font-size: 12pt;">ประโยชน์ของการใช้โปรแกรมจัดเก็บ(สแกน)แฟ้มประวัติผู้ป่วยนอกอิเล็กทรอนิกส์</span></p>
              <p><span style="font-size: 12pt;">- ประหยัดพื้นที่ในการจัดเก็บประวัติผู้ป่วย</span></p>
              <p><span style="font-size: 12pt;">- ช่วยป้องกันการสูญหายของ OPD Card</span></p>
              <p><span style="font-size: 12pt;">- สืบค้นข้อมูลได้อย่างสะดวกและรวดเร็ว</span></p>
              <p><span style="font-size: 12pt;">- เพิ่มศักยภาพการทำงานของบุคคลากร ฯลฯ</span></p>
              <p><span style="font-size: 12pt;"><img src="https://www.igetweb.com/uploads/8425/filemanager/365f1704a571a455af1ae26e49b40cbb_full.JPG" alt="" width="610" height="441" /></span></p>
             </div>
            </div>
          </div>

         
          </div>
        
        

        </div>
      </div>
    </div>
   <?php include 'footer.php'; ?>