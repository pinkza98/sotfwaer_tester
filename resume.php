<?php include 'navbar.php';?>

<style>
.tab {
  overflow: hidden;
  border: 0px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color:#3498DB;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
  
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 18px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a ef="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-#96bdc4">Resume</strong></div>
        </div>
      </div>
    </div> 
    <div class="container">
    <br>
    <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Eng</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Thai</button>
</div>
</div>
<div id="London" class="tabcontent">
   

    <div class="site-section">
      <div class="container">
      <table class="rounded-sm" width="950px"  height="700px" border="1" cellpadding="0" cellspacing="0"style="background-color:#d9f1f1">
        <thead>
        <tr style="border:5px solid #96bdc4;background-color:#96bdc4;color:#ffff;align:center;">
          <th colspan="1" width="30%"height="30" style="font-size:25px;text-align:center;">RESUME</th >        
          <th width="70%" colspan="2" height="30" style="font-size:25px;text-align:center;" >SOFTWARE SKILLS</th >        
      </tr>
      </thead>
      <tbody>
      <tr border="3" >
          <td colspan="1" height="275" width="30%"><img src="images/atthapol.png" ">
          </td >
          <td width="70%" style="" rowspan="1">
          <br>
          <div class="container">
            <div class="container">
              <div class="container">
                <div class="container">
              
             
              <div class="row" >
                  <div class="col-sm-1">
                    <img src="images/sony_icon.png" alt="Smiley face" width="25" height="25" style="vertical-align:bottom">
                  </div>
                  <div class="col-sm-11">
                    <div class="progress">
                      <div class="progress-bar bg-success" style="width:65%;align:left">Sony Vegas 65% </div>
                      <div class="progress-bar bg-danger" style="width:35%"></div>
                    </div>
                  </div>
             </div>   

             <div class="row" >
                  <div class="col-sm-1">
                    <img src="images/sketchup_icon.png" alt="Smiley face" width="25" height="25"  style="vertical-align:bottom"> 

                    </div>

                  <div class="col-sm-11">
                        <div class="progress">
                              <div class="progress-bar bg-success" style="width:65%;align:left">Sketchup Pro 65% </div>
                              <div class="progress-bar bg-danger" style="width:35%"></div>
                        </div>
                  </div>

             </div>   

             <div class="row" >
                  <div class="col-sm-1">
                    <img src="images/word_icon.png" alt="Smiley face" width="25" height="25" style="vertical-align:bottom">
                   </div> 
                   <div class="col-sm-11">
              <div class="progress">
                <div class="progress-bar bg-success" style="width:60%;align:left">Microsoft Word 60% </div>
                <div class="progress-bar bg-danger" style="width:40%"></div>
              </div>
              </div>
              </div>

              <div class="row" >
                  <div class="col-sm-1">
                    <img src="images/ppw_icon.png" alt="Smiley face" width="25" height="25" style="vertical-align:bottom">
                  </div>
                  <div class="col-sm-11">
              <div class="progress">
                <div class="progress-bar bg-success" style="width:35%;align:left">Microsoft Powerpoint 35% </div>
                <div class="progress-bar bg-danger" style="width:65%"></div>
              </div>
              </div>
              </div>


                <div class="row" >
                        <div class="col-sm-1"> 
                        <img src="images/sql_icon.jpg" alt="Smiley face" width="25" height="25"> 
                        </div>
                    <div class="col-sm-11">
                        <div class="progress">
                          <div class="progress-bar bg-success" style="width:50%;align:left">SQL 50%</div>
                          <div class="progress-bar bg-danger" style="width:50%"></div>
                        </div>
                    </div>
                    </div>

                    <div class="row" >
                    <div class="col-sm-1"> 
                  <img src="images/html.png" alt="Smiley face" width="25" height="25"> 
                  </div>
                  <div class="col-sm-11">
                      <div class="progress">
                        <div class="progress-bar bg-success" style="width:45%;align:left">Html 45%</div>
                        <div class="progress-bar bg-danger" style="width:55%"></div>
                      </div>
                    </div>
                    </div>

                    <div class="row" >
                        <div class="col-sm-1"> 
                        <img src="images/css_icon.png" alt="Smiley face" width="25" height="25"> 
                        </div>
                    <div class="col-sm-11">
                        <div class="progress">
                          <div class="progress-bar bg-success" style="width:30%;align:left">CSS 30%</div>
                          <div class="progress-bar bg-danger" style="width:70%"></div>
                        </div>
                    </div>
                    </div>

                <div class="row" >
                  <div class="col-sm-1">
                    <img src="images/php_icon.png" alt="Smiley face" width="25" height="25" ">
                    </div>
                  <div class="col-sm-11">
                      <div class="progress">
                        <div class="progress-bar bg-success" style="width:20%;align:left">PHP 20% </div>
                        <div class="progress-bar bg-danger" style="width:80%"></div>
                      </div>
                    </div>
                    </div>
                    
                    <div class="row" >
                        <div class="col-sm-1"> 
                        <img src="images/jquery_icon.png" alt="Smiley face" width="25" height="25"> 
                        </div>
                    <div class="col-sm-11">
                        <div class="progress">
                          <div class="progress-bar bg-success" style="width:15%;align:left">Jquery 15%</div>
                          <div class="progress-bar bg-danger" style="width:85%"></div>
                        </div>
                    </div>
                    

               </div>
              </div>
            </div>
          </div>
      </td > 
      </td >     
      <tr>
          <td colspan="1"  height="25" width="30%"  style="font-size:20px;background-color:#96bdc4;color:#ffff;text-align:center;"> 
          Persona Data
          </td>
          </td >        
          <td colspan="2" width="30%" style="background-color:#96bdc4;color:#ffff;text-align:center;font-size:20px;">Education</td >
          </td > 
      </tr>
      
      <tr>
          <td colspan="1"  width="30%" height="200" style="font-size:16px;color:#2E2C2C;">
            <a style="font-size:22px;float:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <b>Mr.Atthapol Seesha</b></a><hr>
          <a>&nbsp;Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;24</a>
          <br><a>&nbsp;Heigth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;165</a>
          <br><a>&nbsp;Width &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;79</a>
          <br><a>&nbsp;Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;Man</a>
          </br><a>&nbsp;Marital Status&nbsp;&nbsp;:&nbsp;Single</a>       
          <td  width="70%" colspan="2" style="font-size:13px;text-align:note;float:center;color:#2E2C2C;">
          
          <a style="float:center;"> &nbsp;Years  2007 primary school education at Nong Luang Wittaya Nukun School</a>
          <br><a style="float:center;"> &nbsp;Year  2009 Secondary school education at Nong Luang Sueksa School</a>
          <br><a style="float:center;"> &nbsp;Year  2014, studied at high school at Nong Luang Sueksa School</a>
          <br><a style="float:center;"> &nbsp;Year  2020 Maha Sarakham University Faculty of Information Technology Information Technology</a>
          </td > 
      </tr>
      <tr >
          <td colspan="1"  width="30%"height="25" style="background-color:#96bdc4;color:#ffff;text-align:center;font-size:20px;">
          Contact
          </td >        
          <td colspan="2" width="70%" style="background-color:#96bdc4;color:#ffff;text-align:center;font-size:20px;">Experience</td >      
      </tr>
      <tr >
          <td colspan="1" width="30%" height="100"  style="font-size:16px;text-align:left;color:#2E2C2C;">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fab fa-facebook" aria-hidden="true"> facebook : Atthapol Seesha </i><br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fab fa-line"> Line ID : 0828602362</i><br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="far fa-envelope" aria-hidden="true"> E-mail : pinkza88@gmail.com</i><br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-phone-volume"></i> Tel : 0828602362<br></td >        
         <td colspan="2" width="30%"" style="font-size:12px;;color:#2E2C2C;"><br>
         <p> &nbsp;&nbsp; In the year 2020,the trainees have experience working with Gotowin Solutions Co.,Ltd.  <br>&nbsp;&nbsp; working in Tester Programmer for 2 months.</p>
          </td >
        </tr>
      </tbody>
      </table>
      </div>
    </div>
</div>
</div>
<!-- #ไทย-->
<div id="Paris" class="tabcontent">


    <div class="site-section">
      <div class="container">
      <table class="rounded-sm" width="950px"  height="700px" border="1" cellpadding="0" cellspacing="0"style="background-color:#d9f1f1">
        <thead>
        <tr style="border:5px solid #96bdc4;background-color:#96bdc4;color:#ffff;align:center;">
          <th colspan="1" width="30%"height="30" style="font-size:25px;text-align:center;">ประวัติส่วนตัว</th >        
          <th width="70%" colspan="2" height="30" style="font-size:25px;text-align:center;" >ความสามารถด้าน ซอฟแวร์</th >        
      </tr>
      </thead>
      <tbody>
      <tr border="3" >
          <td colspan="1" height="275" width="30%"><img src="images/atthapol.png" ">
          </td >
          <td width="70%" style="" rowspan="1">
          <br>
          <div class="container">
            <div class="container">
              <div class="container">
                <div class="container">
              
             
              <div class="row" >
                  <div class="col-sm-1">
                    <img src="images/sony_icon.png" alt="Smiley face" width="25" height="25" style="vertical-align:bottom">
                  </div>
                  <div class="col-sm-11">
                    <div class="progress">
                      <div class="progress-bar bg-success" style="width:65%;align:left">Sony Vegas 65% </div>
                      <div class="progress-bar bg-danger" style="width:35%"></div>
                    </div>
                  </div>
             </div>   

             <div class="row" >
                  <div class="col-sm-1">
                    <img src="images/sketchup_icon.png" alt="Smiley face" width="25" height="25"  style="vertical-align:bottom"> 

                    </div>

                  <div class="col-sm-11">
                        <div class="progress">
                              <div class="progress-bar bg-success" style="width:65%;align:left">Sketchup Pro 65% </div>
                              <div class="progress-bar bg-danger" style="width:35%"></div>
                        </div>
                  </div>

             </div>   

             <div class="row" >
                  <div class="col-sm-1">
                    <img src="images/word_icon.png" alt="Smiley face" width="25" height="25" style="vertical-align:bottom">
                   </div> 
                   <div class="col-sm-11">
              <div class="progress">
                <div class="progress-bar bg-success" style="width:60%;align:left">Microsoft Word 60% </div>
                <div class="progress-bar bg-danger" style="width:40%"></div>
              </div>
              </div>
              </div>

              <div class="row" >
                  <div class="col-sm-1">
                    <img src="images/ppw_icon.png" alt="Smiley face" width="25" height="25" style="vertical-align:bottom">
                  </div>
                  <div class="col-sm-11">
              <div class="progress">
                <div class="progress-bar bg-success" style="width:35%;align:left">Microsoft Powerpoint 35% </div>
                <div class="progress-bar bg-danger" style="width:65%"></div>
              </div>
              </div>
              </div>


                <div class="row" >
                        <div class="col-sm-1"> 
                        <img src="images/sql_icon.jpg" alt="Smiley face" width="25" height="25"> 
                        </div>
                    <div class="col-sm-11">
                        <div class="progress">
                          <div class="progress-bar bg-success" style="width:50%;align:left">SQL 50%</div>
                          <div class="progress-bar bg-danger" style="width:50%"></div>
                        </div>
                    </div>
                    </div>

                    <div class="row" >
                    <div class="col-sm-1"> 
                  <img src="images/html.png" alt="Smiley face" width="25" height="25"> 
                  </div>
                  <div class="col-sm-11">
                      <div class="progress">
                        <div class="progress-bar bg-success" style="width:45%;align:left">Html 45%</div>
                        <div class="progress-bar bg-danger" style="width:55%"></div>
                      </div>
                    </div>
                    </div>

                    <div class="row" >
                        <div class="col-sm-1"> 
                        <img src="images/css_icon.png" alt="Smiley face" width="25" height="25"> 
                        </div>
                    <div class="col-sm-11">
                        <div class="progress">
                          <div class="progress-bar bg-success" style="width:30%;align:left">CSS 30%</div>
                          <div class="progress-bar bg-danger" style="width:70%"></div>
                        </div>
                    </div>
                    </div>

                <div class="row" >
                  <div class="col-sm-1">
                    <img src="images/php_icon.png" alt="Smiley face" width="25" height="25" ">
                    </div>
                  <div class="col-sm-11">
                      <div class="progress">
                        <div class="progress-bar bg-success" style="width:20%;align:left">PHP 20% </div>
                        <div class="progress-bar bg-danger" style="width:80%"></div>
                      </div>
                    </div>
                    </div>
                    
                    <div class="row" >
                        <div class="col-sm-1"> 
                        <img src="images/jquery_icon.png" alt="Smiley face" width="25" height="25"> 
                        </div>
                    <div class="col-sm-11">
                        <div class="progress">
                          <div class="progress-bar bg-success" style="width:15%;align:left">Jquery 15%</div>
                          <div class="progress-bar bg-danger" style="width:85%"></div>
                        </div>
                    </div>
                    

               </div>
              </div>
            </div>
          </div>
      </td > 
      </td >     
      <tr>
          <td colspan="1"  height="25" width="30%"  style="font-size:20px;background-color:#96bdc4;color:#ffff;text-align:center;"> 
          ข้อมูลส่วนตัว
          </td>
          </td >        
          <td colspan="2" width="30%" style="background-color:#96bdc4;color:#ffff;text-align:center;font-size:20px;">การศึกษา</td >
          </td > 
      </tr>
      
      <tr>
          <td colspan="1"  width="30%" height="200" style="font-size:16px;color:#2E2C2C;">
            <a style="font-size:22px;float:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <b>นายอรรถพล สีชา</b></a><hr>
          <a>&nbsp;อายุ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;24 ปี</a>
          <br><a>&nbsp;ส่วนสูง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;165 เซนติเมตร</a>
          <br><a>&nbsp;น้ำหนัก &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;79 กิโล</a>
          <br><a>&nbsp;เพศ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;ชาย</a>
          </br><a>&nbsp;สถานะภาพ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;โสด</a>       
          <td  width="70%" colspan="2" style="font-size:13px;text-align:note;float:center;color:#2E2C2C;">
          
          <a style="float:center;"> &nbsp;พ.ศ.2550, ประถมศึกษาที่ โรงเรียนหนองหลวงศึกษาวิทยานุกูล</a>
          <br><a style="float:center;"> &nbsp;พ.ศ.2552, ศึกษามัธยม ม.ต้น โรงเรียนศึกษาที่หนองหลวงศึกษา</a>
          <br><a style="float:center;"> &nbsp;พ.ศ.2557, ศึกษามัธยม ม.ปลาย สายวิทย์-คณิต ที่โรงเรียนหนองหลวงศึกษา </a>
          <br><a style="float:center;"> &nbsp;พ.ศ.2563, ศึกษา ป.ตรี ที่ มหาวิยาลัยมหาสารคาม คณะวิทยาการสารสนเทศ สาขาเทคโนโลยีสารสนเทศ(ICT)</a>
          </td > 
      </tr>
      <tr >
          <td colspan="1"  width="30%"height="25" style="background-color:#96bdc4;color:#ffff;text-align:center;font-size:20px;">
          Contact
          </td >        
          <td colspan="2" width="70%" style="background-color:#96bdc4;color:#ffff;text-align:center;font-size:20px;">ประสบการณ์ทำงาน</td >      
      </tr>
      <tr >
          <td colspan="1" width="30%" height="100"  style="font-size:16px;text-align:left;color:#2E2C2C;">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fab fa-facebook" aria-hidden="true"> facebook : Atthapol Seesha </i><br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fab fa-line"> Line ID : 0828602362</i><br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="far fa-envelope" aria-hidden="true"> E-mail : pinkza88@gmail.com</i><br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-phone-volume"></i> Tel : 0828602362<br></td >        
         <td colspan="2" width="30%"" style="font-size:12px;;color:#2E2C2C;"><br>
         <p> &nbsp;&nbsp;ในปี2563 ได้ฝึกงานกับที่บริษัท โกทูวินโซลูชั่นส์ จำกัด ในตำแหน่ง เทสเตอร์โปรแกรมเมอร์ระบบของบริษัท  <br>&nbsp; เป็นระยะเวลา 2 เดือน</p>
          </td >
        </tr>
      </tbody>
      </table>
      </div>
    </div>
</div>
</div>
</div>





    

   <?php include 'footer.php'; ?>
   <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
