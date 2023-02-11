<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Login Form Using Bootstrap 5</title>
    <!-- Bootstrap 5 CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="Css/login.css">
</head>
<body>
<section class="wrapper">
    <div class="container">
        <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
            <div class="logo mt-5">
                <img src="/Assets/logo-black-svg.svg" class="img-fluid" alt="Logo">
            </div>
            <form class="rounded bg-white shadow py-5 px-4">
                <h3 class="fw-bolder fs-4 mb-2">Sign In </h3>
                <div class="fw-normal text-muted mb-4"> New Here?
                    <a href="register.html" class="fw-bold text-decoration-none">Create an Account</a>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="mt-2 text-end">
                    <a href="#" class="fw-bold text-decoration-none">Forget Password?</a>
                </div>
                <button type="submit" class="btn  submit_btn w-100 my-4">Sign In</button>

            </form>
        </div>
    </div>
</section>

</body>
</html>

