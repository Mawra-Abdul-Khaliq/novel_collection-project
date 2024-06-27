<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <?php
      include("php/config.php");
      if(isset($_POST['submit'])){
        $novelname = $_POST['novelname'];
         $novelpdf = $_FILES['novelpdf']['name'];
         $novelpdf_type = $_FILES['novelpdf']['type'];
         $novelpdf_size= $_FILES['novelpdf']['size'];
         $novelpdf_tmp_loc = $_FILES['novelpdf']['tmp_name'];
         $novelpdf_store="novelpdf/".$novelpdf;
         move_uploaded_file($novelpdf_tmp_loc,$novelpdf_store);
       
        $verify_query = mysqli_query($con,"SELECT novelname FROM admeen WHERE novelname='$novelname'");
        if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message' style='color: white; margin-top:80px;'>
                        <h3>This pdf is already uploaded!</h3>
                   </div> <br>";
             echo "<a href='pdf.php'><button class='btn' style='margin-top:150px;color:  rgb(17, 187, 218); padding:6px;margin-left:-170px '>Go Back</button>";
          }
        
         else{
        mysqli_query($con,"INSERT INTO admeen(novelname,novelpdf) VALUES('$novelname','$novelpdf')") or die("Erroe Occured");
        echo "<div class='message' style='color: white; margin-top:80px;'>
         <h3>successfully upload!</h3>
      </div> <br>";
         }
    

    
      }else{
    ?>
    <div style="padding-top: 30px;">
        <h2 style="color:white">Novels Collection</h2>
        <form class="register_style" action="" method="post" enctype="multipart/form-data">
            <label for="novelname">Novel Name</label><br>
            <input type="text" name="novelname" required><br>
            <label for="Pdf File">Choose Your Pdf File</label><br>
            <input type="file" id="file" class="inp" name="novelpdf" required onchange="return fileValidation()"/><br>
            <input type="submit" style=" margin-top: 4%;
        width:270px; padding: 7px; background: linear-gradient(to right , rgb(242, 240, 244), rgb(1, 84, 120)) ;
        color: #fff; border-radius: 3px; font-size: medium; " class="btn" name="submit" value="Upload"
                required><br><br>
        </form>
    </div>
 <?php } ?>
    <script language="JavaScript" type="text/javascript">
        function fileValidation() {
            var fileInput = document.getElementById("file");
            var filePath = fileInput.value;
            var allowedExtensions = /(\.pdf)$/i;
            if (!allowedExtensions.exec(filePath)) {
                alert("Please upload file having extension .pdf only.");
                fileInput.value = "";
                return false;
            }
        }
    </script>
</body>

</html>