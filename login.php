<!DOCTYPE html>
<html>

<head>
<title>Login Admin</title>
<link rel="stylesheet" href="../assets/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

<div class="card mx-auto" style="width:400px">

<div class="card-header text-center">
Login Admin
</div>

<div class="card-body">

<form action="proses_login.php" method="POST">

<div class="mb-3">
<label>Username</label>
<input type="text" name="username" class="form-control">
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control">
</div>

<button class="btn btn-primary w-100">Login</button>

</form>

</div>
</div>
</div>

</body>
</html>