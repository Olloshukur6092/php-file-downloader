<?php
    if (isset($_POST["submit"])) {
        $file_url = $_POST["url"];
        $file_name = basename($file_url);

        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file_name");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
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
    <title>PHP File Downloader Script</title>
</head>
<body>
    
    <div class="container bg-white wrapper shadow-lg p-4 mt-3">
        <h2 class="title text-center mb-4">Simple File Downloader</h2>
        <form action="" method="post" class="form">
            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <input type="url" name="url" id="url" class="form-control" placeholder="Enter your URL" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100 shadow-sm">Download</button>
        </form>
    </div>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>