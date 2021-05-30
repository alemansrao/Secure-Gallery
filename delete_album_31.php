<?php
include "auth.php";


function deleteDirectory($dir)
{
    if (!file_exists($dir)) {
        return true;
    }
    if (!is_dir($dir)) {
        return unlink($dir);
    }
    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }
        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }
    }
    return rmdir($dir);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="./css/gitsite.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="../index.php">
            Home
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container">
        <div class="fileUploadBox">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="albumName">Album Name</label>
                    <select class="form-control" name="albumName" id="dropDown">
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
                            echo "<option value=\"" . $directoryName . "\">" . ucfirst($directoryName) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <label id="fail" style="color:red;display:none">
                    <?php
                    if (isset($_POST['albumName'])) {
                        echo "Could not delete" . $_POST['albumName'] . " album!";
                    }
                    ?>

                </label>
                <label id="success" style="color:blue;display:none">
                    <?php
                    if (isset($_POST['albumName'])) {
                        echo $_POST['albumName'] . " album deleted!";
                    }
                    if (isset($_POST['albumName'])) {
                        $dirName = "album/" . $_POST['albumName'];
                        $isRemoved = deleteDirectory($dirName);
                        unlink("/".$_POST['albumName'].".php");
                        if ($isRemoved)
                            echo '<script type="text/javascript">document.getElementById("success").style.display="inline-block";</script>';

                        else
                            echo '<script type="text/javascript">document.getElementById("fail").style.display="inline-block";</script>';
                    }

                    ?>
                </label>

                <center>
                    <input type="submit" class="btn btn-primary" value="Delete Directory" name="submit">
                </center>
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


    </div>
</body>
<?php
if (isset($_POST["submit"])) {
}
?>
<script src="js/removeBanner.js"></script>

</html>