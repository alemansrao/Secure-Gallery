<?php
include "auth.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Album</title>
    <link rel="stylesheet" href="./css/gitsite.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="../index.php">
            <!-- <img src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt=""> -->
            Home
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container">
        <div class="fileUploadBox">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="albumName">Album Name</label>
                    <select onchange="yesnoCheck(this);" class="form-control" name="albumName" id="dropDown">
                        <?php
                        $dirr    = './album/' . "";
                        $filesArray = scandir($dirr);
                        array_shift($filesArray);
                        array_shift($filesArray);
                        if (($key = array_search("index.php", $filesArray)) !== false) {
                            unset($filesArray[$key]);
                            //removing index.php from the result array
                        }
                        foreach ($filesArray as $directoryName) {
                            # code...
                            echo "<option value=\"" . $directoryName . "\">" . ucfirst($directoryName) . "</option>";
                        }
                        ?>
                        <option value="other">Create new...</option>
                    </select>
                    <input type="text" class="form-control" id="ifYes" placeholder="Enter the album name" style="display: none;">
                    <!-- <small id="Help" class="form-text text-muted">Default Password. Can be changed by the student later.</small> -->
                </div>
                <div class="custom-file">
                    <input type="file" multiple accept="image/*" name="fileToUpload[]" id="fileToUpload" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file(s)</label>
                    <label id="fileUploaded" style="color:green;display:none">File(s) uploaded to<?php if (isset($_POST['albumName'])) {
                                                                                                        echo " " . $_POST['albumName'] . " album";
                                                                                                    }  ?> </label>
                    <label id="fileNotUploaded" style="color:red;display:none">File(s) not uploaded.</label>
                    <label id="fileExists" style="color:red;display:none">One or more files were already on the server.</label>
                    <br><br>
                    <center>
                        <input type="submit" class="btn btn-primary" value="Upload Images" name="submit">
                    </center>
                </div>
            </form>
        </div>
        <style>
            .fileUploadBox {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                width: 75%;
            }
        </style>
        <script src="./js/jquery-3.5.1.min.js"></script>
        <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });

            function yesnoCheck(that) {
                if (that.value == "other") {
                    document.getElementById("dropDown").name = "baba";
                    document.getElementById("dropDown").style.display = "none";
                    document.getElementById("ifYes").style.display = "block";
                    document.getElementById("ifYes").name = "albumName";
                } else {
                    document.getElementById("ifYes").style.display = "none";
                }
            }
        </script>
    </div>
</body>
<?php
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $totalFiles = count($_FILES['fileToUpload']['name']);
    for ($i = 0; $i < $totalFiles; $i++) {
        $target_dir = "./album/" . $_POST['albumName'] . "/";
        $tmp = explode('.', $_FILES["fileToUpload"]["name"][$i]);
        $file_extension = "." . end($tmp);
        $target_file = $target_dir . md5(basename($_FILES["fileToUpload"]["name"][$i], $file_extension)) . $file_extension;

        //cheeck if the album directory exists
        //if not create directory
        if (!file_exists("album/" . $_POST['albumName'])) {
            mkdir("album/" . $_POST['albumName'], 0755, true);
            $my_file = "album/" . $_POST['albumName'] . "/index.php";
            //create index.php inside the albumFolders
            $handle = fopen($my_file, 'w') or die('Cannot open file:  ' . $my_file); //open file for writing ('w','r','a')...

            $data = '<?php' . " " . "header(\"Location:\" . \"../../index.php\", true, 301);";
            fwrite($handle, $data);


            //create the main album.php file in home
            $source = "./template.php";
            $destination = "./" . $_POST['albumName'] . ".php";
            copy($source, $destination);


            fclose($handle);
        } else {
            // echo "<br>" . $_POST['albumName'] . "directory exists";
        }
        //check if the uploaded file is a image
        $info = getimagesize($_FILES['fileToUpload']['tmp_name'][$i]);
        if ($info === FALSE) {
            die('<script type="text/javascript">document.getElementById("fileNotUploaded").style.display="inline-block";</script>');
        }
        //check if upload success or not
        if ($_FILES['fileToUpload']['error'][$i] !== UPLOAD_ERR_OK) {
            die("Upload failed with error code " . $_FILES['fileToUpload']['error'][$i]);
        } else if (file_exists($target_file)) {
            //check if file already exists in album
            echo '<script type="text/javascript">document.getElementById("fileExists").style.display="inline-block";</script>';

            $uploadOk = 0;
        } else if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
            //upload the file
            echo '<script type="text/javascript">document.getElementById("fileUploaded").style.display="inline-block";</script>';
        }
    }
    // $target_dir = "./album/" . $_POST['albumName'] . "/";
    // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // // Check if file already exists
    // Check if $uploadOk is set to 0 by an error
    // if ($uploadOk == 0) {
    // echo "<br>Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    // }
    // else {
    // if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //     echo '<script type="text/javascript">document.getElementById("fileUploaded").style.display="inline-block";</script>';
    //     // echo "<br>The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    // } else {
    //     // echo "<br>Sorry, there was an error uploading your file.";
    //     echo '<script type="text/javascript">document.getElementById("fileNotUploaded").style.display="inline-block";</script>';
    // }
    // }
}
?>
<script src="js/removeBanner.js"></script>

</html>