<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>  
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="front.css" />
        
    </head>
    <body>
 <?php
 
   include("php/config.php");
   if(isset($_POST['submit'])){
    
        $str=mysqli_real_escape_string($con,$_POST['str']);
    
        
     $result = mysqli_query($con,"SELECT * FROM admeen WHERE  novelname LIKE '%$str%' ") or die("Select Error");
     $row = mysqli_fetch_assoc($result);

     if(is_array($row) && !empty($row)){
         $_SESSION['novelname'] = $row['novelname'];

     
     }else{
       echo '<script>alert("this pdf is not available")</script>';
     }
     if(isset($_SESSION['novelname'])){
        $sq="SELECT * FROM admeen where novelname LIKE '%$str%'";
        $re=mysqli_query($con,$sq);
        $novelpdf="novelpdf/Hashim Nadeem - Parizaad.pdf";
    while($info=mysqli_fetch_array($re)){
    ?>
        <iframe   src="  <?php echo $novelpdf;?>"width="1300" height="600" > 
        <?php 
    }
    }
      } 
  ?>   
<body class="background">
    <nav class="navbar">
        <ul>
            <h1>
                NOVELS COLLECTION
            </h1>

            <li><a href="logout.php">Logout</a></li>
            <li><a href="front page.php">front page</a></li> 

        </ul>

    </nav>
        <div class="container">
            <form action="" method="post" class="search-bar">
                <input type="text" placeholder="search novels" name="str">
               <button type="submit" name="submit"  ><img src="search-icon.jpg"></button>
                
            </form>
            </div>
      
         <div class="full-img" id="fullimgBox">
         <span onclick="closeFullImg()">X</span>
            <img src="jkp.jpeg" id="fullimg">
         
         </div>
         <div class="image-gallery">
           <a href="view.php"><img src="parizad.jpeg" onclick="openFullImg(this.src)"></a> 
            <a href="view1.php"><img src="jkp.jpeg"  onclick="openFullImg(this.src)"></a>
            <a href="view2.php"><img src="mushaf.jpeg"  onclick="openFullImg(this.src)"> </a>
            <a href="view3.php"><img src="peerekamil.jpeg" onclick="openFullImg(this.src)"></a>
            <a href="view4.php"><img src="amarbail.jpeg" onclick="openFullImg(this.src)"> </a>
            <a href="view5.php"> <img src="abehayat.jpeg" onclick="openFullImg(this.src)"></a> 
         </div>
        
         <script>
            var fullimgBox = document.getElementById("fullimgBox");
            var fullimg = document.getElementById("fullimg");
            function openFullImg(pic){
                fullimgBox.style.display="flex";
                fullimg.src=pic;
            }
            function closeFullImg(){
                fullimgBox.style.display="none";
            }
         </script>
    
    </body>
</html>