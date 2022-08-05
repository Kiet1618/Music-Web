<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
  date_default_timezone_set("Asia/Manila");
  
  ob_start();
  $title = isset($_GET['page']) ? ucwords(str_replace("_", ' ', $_GET['page'])) : "Home";
  ?>
  <title>Music</title>
  <?php ob_end_flush() ?>


  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

  
  <script src="assets/plugins/jquery/jquery.min.js"></script>


  
</head>