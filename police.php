<?php
//1. เชื่อมต่อ database: 
include('config_db.php');
//ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรสำหรับรับค่า member_id จากไฟล์แสดงข้อมูล
$id_case = $_REQUEST["ID"];
$system_test = $_REQUEST["system_test"];
$rights_case = $_REQUEST["rights_case"];
$check_case=$_REQUEST["check_case"];

$sql = "UPDATE case_main SET status_case ='ผ่าน',note_case = 'ปกติ' ,check_case=0 WHERE id_case = $id_case ";
 mysqli_query($mysqli,$sql);


	if($system_test =="ระบบบุคลากร"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_ps1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_ps2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_ps3.php'; ";
			echo "</script>";
			}
			
		}
	elseif($system_test =="ระบบลงเวลา"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
				echo "<script type='text/javascript'>";
				echo "window.location = 'show_detail_mp1.php'; ";
				echo "</script>";
				}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mp2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mp3.php'; ";
			echo "</script>";
			}
			
		}
	elseif($system_test =="ระบบการลา"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_ml1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_ml2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_ml3.php'; ";
			echo "</script>";
			}
				}
	elseif($system_test =="ระบบสารบรรณ"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mb1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mb2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mb3.php'; ";
			echo "</script>";
			}
				}
	elseif($system_test =="ระบบห้องประชุม"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mm1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mm2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mm3.php'; ";
			echo "</script>";
			}
				}
	elseif($system_test =="ระบบยานพาหนะ"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mc1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mc2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mc3.php'; ";
			echo "</script>";
			}
				}
	elseif($system_test =="ระบบงานทรัพย์สิน"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_ma1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_ma2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_ma3.php'; ";
			echo "</script>";
			}
				}
	elseif($system_test =="ระบบงานพัสดุ"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_ms1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_ms2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_ms3.php'; ";
			echo "</script>";
			}
				}
	elseif($system_test =="ระบบงานซ่อมบำรุง"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mr1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mr2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mr3.php'; ";
			echo "</script>";
			}
				}
	elseif($system_test =="ระบบรปภ"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_msa1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_msa2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_msa3.php'; ";
			echo "</script>";
			}
				}	
	elseif($system_test =="ระบบคลังสินค้า"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mw1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mw2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mw3.php'; ";
			echo "</script>";
			}
				}
	elseif($system_test =="ระบบยาและเวชภัณฑ์"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mme1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mme2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mme3.php'; ";
			echo "</script>";
			}
				}
	elseif($system_test =="ระบบแผนงาน"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mpl1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mpl2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mpl3.php'; ";
			echo "</script>";
			}
				}
	elseif($system_test =="ระบบเงินเดือน"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mco1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mco2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mco3.php'; ";
			echo "</script>";
			}
				}				
	elseif($system_test =="ระบบบัญชี"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mac1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mac2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mac3.php'; ";
			echo "</script>";
			}
				}
	elseif($system_test =="ระบบRISK"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mri1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mri2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mri3.php'; ";
			echo "</script>";
			}
				}
	elseif($system_test =="ระบบงานจ่ายกลาง"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mmp1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mmp2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mmp3.php'; ";
			echo "</script>";
			}
				}
	elseif($system_test =="ระบบซักฟอก"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mla1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mla2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mla3.php'; ";
			echo "</script>";
			}
				}
	elseif($system_test =="ระบบบริหารบ้านพัก"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mg1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mg2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mg3.php'; ";
			echo "</script>";
			}
				}
	elseif($system_test =="ระบบENV"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_me1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_me2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_me3.php'; ";
			echo "</script>";
			}
				}
	elseif($system_test =="ระบบโภชนาการ"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mf1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mf2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mf3.php'; ";
			echo "</script>";
			}
				}
	elseif($system_test =="ระบบCRM"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mcr1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mcr2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mcr3.php'; ";
			echo "</script>";
			}
				}	
		
	elseif($system_test =="ระบบงานซ่อมคอมพิวเตอร์"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mrc1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mrc2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mrc3.php'; ";
			echo "</script>";
			}
				}					

	elseif($system_test =="ระบบงานซ่อมเครื่องมือแพทย์"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mrm1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mrm2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mrm3.php'; ";
			echo "</script>";
			}
				}					


	elseif($system_test =="ระบบตารางเวรปฏิบัติงาน"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mct1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mct2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mct3.php'; ";
			echo "</script>";
			}
				}					



	elseif($system_test =="ระบบประชุมอบรมดูงาน"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mtme1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_mtme2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_mtme3.php'; ";
			echo "</script>";
			}
				}					


	elseif($system_test =="ระบบตั้งค่าทั่วไป"){
		if($rights_case =="ผู้ใช้งานทั่วไป"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_set1.php'; ";
			echo "</script>";
			}
		if($rights_case =="เจ้าหน้าที่"){
					echo "<script type='text/javascript'>";
					echo "window.location = 'show_detail_set2.php'; ";
					echo "</script>";
			}
		if($rights_case =="ผู้ดูแลระบบ"){
			echo "<script type='text/javascript'>";
			echo "window.location = 'show_detail_set3.php'; ";
			echo "</script>";
			}
				}	
?>