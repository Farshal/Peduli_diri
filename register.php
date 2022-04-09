<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peduli Diri - Login</title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">
<body>
<div class="global-container">
<div class="card login-form">
    <div class="card-body">
        <h1 class="card-title text-center">Daftar</h1>
        <div class="card-text">
            <form class="user" method="post" action="proses_register.php">
                <div class="form-group">
                    <input type="text" name="nik" class="form-control form-control-user"
                     id="InputNik" aria-describedby="emailHelp"
                    placeholder="NIK" required>
                </div>
                <div class="form-group">
                    <input type="text" name="nama_lengkap" class="form-control form-control-user"
                     id="InputNama" placeholder="Nama Lengkap" required>
                  </div>
                  <button class="btn btn-primary w-100" type="submit">Daftar</button>
                <div class="signup">
                    Sudah punya akun? <a href="index.php">Masuk</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>

</html>