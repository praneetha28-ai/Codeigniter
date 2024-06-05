<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        Upload your file here   
    </h2>
    <form action="<?= base_url()?>index.php/upload/do_upload" method="POST" enctype="multipart/form-data">  
        <label for="">Select your file</label>
        <input type="file" name="customfile">

        <input type="submit" name="submit" id="" value="Upload">
    </form>
</body>
</html>