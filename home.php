<?php


include('includes/header.php');

include('includes/navbar.php');
?>

<h1>welcome</h1>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

<script>

    $('#li0').addClass('active');
    
</script>

<?php


include('includes/footer.php');

?>