<?php
// Source PHP 

    if (isset($_POST["submit"])) {
        $file_url = $_POST["url"];
        $file_name = basename($file_url);
        
        header("Content-Disposition: attachment; filename=$file_name"); //HTTP Header

        readfile($file_url);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <title>PHP Donwloader</title>
</head>
<body>
    
    <div class="container bg-white box shadow p-4">
        <h2 class="title text-center mb-4">Simple PHP File Downloader</h2>
        <form action="" method="post" class="form">
            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <input type="url" name="url" id="url" class="form-control" placeholder="Enter your URL" required>
            </div>
            <button type="submit" name="submit" style="background-color:#8084bc"class="btn btn-primary w-100 shadow-sm">Download</button>
        </form>
    </div>
    
</body>
</html>