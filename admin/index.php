<?php
session_start();
if (isset($_SESSION['admin']) && $_SESSION['admin']=='admin') {
  

} else {
    header('location: ../index.php');
}
  include('include/config.php');
  include('include/dbcon.php');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Library Management System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo img; ?>favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo css; ?>bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo css; ?>font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo css; ?>owl.carousel.css">
    <link rel="stylesheet" href="<?php echo css; ?>owl.theme.css">
    <link rel="stylesheet" href="<?php echo css; ?>owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo css; ?>animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo css; ?>normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo css; ?>meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo css; ?>main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo css; ?>educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo css; ?>morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo css; ?>scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo css; ?>metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo css; ?>metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo css; ?>calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo css; ?>calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo css; ?>responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo js; ?>vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    
    <?php
        include("include/side.php");
        include("include/nav.php");

        if (isset($_REQUEST['file'])) {
          if ($_REQUEST['file'] == "admindash") {
            include("admindash.php");
          } elseif ($_REQUEST['file'] == "users") {
            include("user/users.php");
          } elseif ($_REQUEST['file'] == "useropr") {
            include ("user/useropr.php");
          } elseif ($_REQUEST['file'] == "categories") {
            include ("book/categories.php");
          } elseif ($_REQUEST['file'] == "categoryopr") {
            include ("book/categoryopr.php");
          } elseif ($_REQUEST['file'] == "authors") {
            include ("book/authors.php");
          } elseif ($_REQUEST['file'] == "authoropr") {
            include ("book/authoropr.php");
          } elseif ($_REQUEST['file'] == "books") {
            include ("book/books.php");
          } elseif ($_REQUEST['file'] == "bookopr") {
            include ("book/bookopr.php");
          } elseif ($_REQUEST['file'] == "issuenewbook") {
            include ("issuebook/issuenewbook.php");
          } elseif ($_REQUEST['file'] == "manageissuebooks") {
            include ("issuebook/manageissuebooks.php");
          } elseif ($_REQUEST['file'] == "logout") {
            include ("../logout.php");
          } elseif ($_REQUEST['file'] == "adminaccount") {
            include ("profile/adminaccount.php");
          }
        } elseif (!isset($_REQUEST['file'])) {
            if (isset($_REQUEST['eid']) || isset($_REQUEST['sid'])) {
              include ("user/useropr.php");
            } elseif (isset($_REQUEST['name'])) {
              include ("user/users.php");
            } elseif (isset($_REQUEST['ttl'])) {
              include ("book/categories.php");
            } elseif (isset($_REQUEST['ecid'])) {
              include ("book/categoryopr.php");
            } elseif (isset($_REQUEST['eaid']) || isset($_REQUEST['daid'])) {
              include ("book/authoropr.php");
            } elseif (isset($_REQUEST['athr'])) {
              include ("book/authors.php");
            } elseif (isset($_REQUEST['bk'])) {
              include ("book/books.php");
            } elseif (isset($_REQUEST['ebid']) || isset($_REQUEST['dbid'])) {
              include ("book/bookopr.php");
            } elseif (isset($_REQUEST['issuebook'])) {
              include ("issuebook/manageissuebooks.php");
            } elseif (isset($_REQUEST['eiid'])) {
              include ("issuebook/returnbook.php");
            } elseif (isset($_REQUEST['capass'])) {
              include ("profile/changepass.php");
            } else {
              include ("admindash.php");
            }
          }

        include("include/footer.php");
    ?>  

</body>

</html>