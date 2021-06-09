<meta charset="utf-8">
<?php
	include 'config_db.php';
	ini_set('display_errors', 1);
	error_reporting(~0);

	@$system_test = $_POST['system_test']; 
	@$date_case = $_POST['date_case'];
	@$name_case  = $_POST['name_case']; 
    @$genre_case =$_POST['genre_case'];
    @$system_case = $_POST['system_case']; 
	@$input_case = $_POST['input_case'];
	@$output_case  = $_POST['output_case']; 
	@$rights_case = $_POST['rights_case'];
	@$img_case = $_POST['img_case'];
    @$status_case =$_POST['status_case'];
    @$note_case = $_POST['note_case'];
	@$check_case = $_POST['check_case'];


	
	echo $check_case;
	if(isset($_FILES["img_case"]))
	{
		$str = $_FILES['img_case']['name'];
		$file_type_raw = explode(".",$str);		//แบ่ง String ด้วย . และจะเก็บเป็น array
		$file_type = end($file_type_raw);		//เรียกค่าของ array ตัวสุดท้ายออกมา
		$file_name = $str;
		$file_tmp = $_FILES['img_case']['tmp_name'];
		move_uploaded_file($file_tmp,"images_test/".$file_name);		
	}

	if($status_case =="ผ่าน"){
		if($note_case =="ปกติ"){
			$check_case=0;
		}
		elseif($note_case !=="ปกติ"){
			$check_case=1;
			
		}
		}
		elseif($status_case!=="ผ่าน"){
			$check_case=2;
		}
	$sql="INSERT INTO case_main (system_test,date_case,name_case,genre_case,system_case,input_case,output_case,rights_case,status_case,note_case,img_case,check_case) 
			VALUES ('$system_test',
			NOW(),
			'$name_case',
			'$genre_case',
			'$system_case',
			'$input_case',
			'$output_case',
			'$rights_case',
			'$status_case',
			'$note_case',
			'$file_name',
			'$check_case')";
		
    

		mysqli_query($mysqli,$sql);
		mysqli_close($mysqli);
	

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

	
