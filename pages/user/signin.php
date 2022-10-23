<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- linking Boostrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">



    <link rel="stylesheet" href="style.css">

</head>

<body>





    <section class="vh-100">
        <div class="container py-1 h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-9">


                    <!-- start card -->
                    <div class="col-12 offset-lg-2 col-lg-8 offset-md-1 col-md-10 card rounded-5  ">
                        <div class="row g-0 ">


                            <!-- start contend right side -->
                            <div class="col-lg-12 ">
                                <div class="card-body p-md-1 mx-md-4">
                                    <div class="card-body">


                                        <!--start top Logo and name -->

                                        <div class="text-center">

                                            <!-- logo -->
                                            <img src="photo-1628563694622-5a76957fd09c.jfif" style="height: 60px;">
                                            <!-- logo -->
                                            <h4 class="mt-1 mb-0 pb-4 ">Accounting</h4>

                                        </div>

                                        <!--end top Logo and name -->



                                        <!--start login -->

                                        <form id="login" class=" ">

                                            <h5 class="fw-normal mb-3 pt-3">Sign into your account</h5>

                                            <div class="alert alert-warning  mb-0 d-none  text-center " id="alert2"
                                                role="alert">
                                                <!-- alert -->
                                            </div>


                                            <div class="form-outline mb-1 pt-1">
                                                <input type="email" placeholder="Email Addres"
                                                    class="form-control form-control-lg mt-4 " value=" " id="email2" />

                                            </div>

                                            <div class="form-outline mb-1">
                                                <input type="password" placeholder="Password"
                                                    class="form-control form-control-lg mt-4" value="" id="password2" />

                                            </div>

                                            <div class="form-check d-flex mt-3  mb-3">
                                                <input class="form-check-input me-2" type="checkbox" id="rememberMe" />
                                                <label class="form-check-label" for="form2Example33">
                                                    Remember me
                                                </label>
                                            </div>


                                            <div class="pt-1 mb-0 col-12 d-grid text-center">
                                                <button class="btn btn-dark btn-lg btn-block mb-3 rounded-5"
                                                    type="button" onclick="login();">Login
                                                </button>


                                                <a class="text-muted fs-6 mb-3" href="#">Forgot password?</a>
                                                <span> Don't have an account? <a class=" d-none d-lg-inline d-md-inline  text-danger text-decoration-none  mt-4" href="./signup.php">Creat new account</a></span>
                                                <a class=" d-lg-none d-md-none d-block  text-danger text-decoration-none "  href="./signup.php">Creat new account</a>

                                            </div>



                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    </section>



    <!-- end login -->



    <!-- Boostrap Java Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>






</body>

</html>