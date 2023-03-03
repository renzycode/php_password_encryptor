<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP hasher</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
</head>

<?php
    if(isset($_POST['pass'])){
        $password = $_POST['pass'];
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
    }else{
        $password = '';
        $encrypted_password = '';
    }
    
?>

<body>
    <div class="d-flex justify-content-center align-self-center mt-5">
        <form action="index.php" class="row mt-5 shadow" method="post">
            <div class="col-12 border bg-dark border-1 border-dark">
                <h4 class="text-light mt-2">PHP hasher</h4>
            </div>
            <div class="col-12 border border-1 border-dark">
                <div class="my-3">
                    <label class="form-label">Password</label>
                    <input type="text" class="form-control border border-dark" name="pass"
                        value="<?php echo $password ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Hashed Password</label>
                    <textarea rows="3" type="text" class="form-control border border-dark"
                        ><?php echo $encrypted_password ?></textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-dark" type="submit">Hash Hash</button>
                </div>
            </div>
        </form>
    </div>
    <div class="card fixed-bottom">
        <div class="card-body">
            <blockquote class="blockquote my-2">
                <footer class="blockquote-footer">© 2021 Copyright: RenzyCode</cite>
                </footer>
            </blockquote>
        </div>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>


</html>