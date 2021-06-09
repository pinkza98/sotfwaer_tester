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
        
        