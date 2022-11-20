
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Encryptor</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">    
    <link rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
</head>

<?php
    if(isset($_POST['pass'])){
        $password = $_POST['pass'];
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
    }

?>

<body>
    <div class="d-flex justify-content-center">
        <form action="index.php" class="row mt-5 shadow" method="post">
            <div class="col-12 border bg-dark border-1 border-dark">
                <h4 class="text-light mt-2">PHP Encryptor</h4>
            </div>
            <div class="col-12 border border-1 border-dark">
                <div class="my-3">
                    <label class="form-label">Password</label>
                    <input type="text" class="form-control border border-dark" name="pass" value="<?php echo $password ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Encrypted Password</label>
                    <input type="text" class="form-control border border-dark" value="<?php echo $encrypted_password ?>">
                </div>
                <div class="mb-3">
                    <button class="btn btn-dark" type="submit">Encrypt</button>
                </div>
            </div>
        </form>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>


</html>