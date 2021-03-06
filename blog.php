 <!DOCTYPE html>
<body lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ecell||ggsipu</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link rel="shortcut icon" href="img/logo.ico" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="css/blog.css">
</head>

<nav>
    <!-- <div class="logo"></div> -->
    <p><a class="navbar-brand" href="index.php">z<span class="logo-dec">enith</span></a></p>
    <ul>
      <li><a class="nav-tag" href="index.php">HOME</a></li>
    </ul>
</nav>
<header>
    <div class="headline">
      <div class="inner">
        <h1>Hello</h1>
        <p>Scroll down the page</p>
      </div>
    </div>
</header>

 <?php
    require_once('db.php');    


    if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}

    $query = "SELECT * FROM posts ORDER by id DESC";

    if ($result = $conn->query($query)) {

        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            $post_title=$row['title'] ;
            $post_author=$row['author'] ;
            $post_content=$row['content'] ;
            $post_image=$row['image'] ;
            $post_summary=$row['summary'] ;
            $post_date=$row['date'] ;
            $post_id=$row['id'] ; 
?>          
           
           
            <!-- HTML/PHP for displaying blogs-->

                <div class="container">
                <br>
                <h2>
                    <a href="#"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="#"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date ?></p>
                <hr>
                <img class="img-responsive" src="img/<?php echo $post_image ?>" alt="image" style="width:800px;height:300px;">
                <hr>
                <p><?php echo $post_content ; ?></p>
                <hr>
                </div>
            <?php
        }    
}

?>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/blog.js"></script>
  
</body>
</html>