<!DOCTYPE html>
<html>
<head>
    <title>Unggah File Gambar</title>
</head>
<body>
    <form id="upload-form" action="upload_ajax3.2.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" id="files" multiple accept="image/*">
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upload3.2.js"></script>
</body>
</html>
