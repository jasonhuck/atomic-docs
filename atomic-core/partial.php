<?php
$comp = $_GET["component"];
$cat = $_GET["category"];
?>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $_GET["comp-name"]; ?></title>
    <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- Custom css for every snippet. -->
   <!-- <style type="text/css">
        body, html { overflow: hidden}
    </style>-->
</head>
<!--Add conditional if component not found-->
<body>
    <div class="partial">
      <?php require ('../components/'.$cat.'/'.$comp.'.php'); ?>
    </div>
</body>
