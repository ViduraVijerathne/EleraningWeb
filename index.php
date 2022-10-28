<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- linking Boostrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">



    <link rel="stylesheet" href="./css/style.css">

    <title>Document</title>
</head>

<body>
    
    <section class=" vh-100 bg-light">
        <div class="col-12 container-fluid vh-100 ">
            <div class=" row vh-100  ">
                <div class=" col-lg-8 offset-md-1 offset-lg-0 col-md-10 col-12 row align-items-center  ">



                    <div class=" col-12 text-light ">
                        <div class=" text-danger text-center fw-bold fs-1 "> Harshana Disanayake </div><br>

                        <!-- about -->

                        <div class=" mt-3 ms-4 text-black-50 container-fluid text-capitalize text-center"> 
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et a inventore, quam suscipit deserunt, dolorem officia ratione dicta commodi quia eligendi odio nulla assumenda. Ex temporibus tenetur accusantium eos?</div>
                        <!-- about -->

                        <div

                        

                            class="offset-1 offset-lg-3 offset-md-1  col-lg-5 col-md-10 col-12 mt-lg-5 mt-2 mt-md-5  d-grid">
                            <div class=" row">
                                <div class=" col-lg-6 col-md-6 col-5  wrap1 ">
                                    <button class="button1 rounded-5  mt-4 " onclick="Navigate_User_signin()"> Sign In</button>
                                </div>

                                <div class="  col-lg-6 col-md-6 col-5   wrap2">
                                    <button class="button2 rounded-5  mt-4 " onclick="Navigate_User_signup()"> Sign Up</button>
                                </div>

                            </div>



                        </div>
                    </div>





                </div>
                <div
                    class=" col-10 col-lg-4 offset-md-2 offset-1 offset-lg-0 col-md-8 row  align-items-center justify-content-end    ">

                    <img src="./src/man.png" alt="" class="  rounded rounded-circle shadow shadow-lg "
                        style="height:auto; width:auto;">

                </div>
            </div>


        </div>

    </section>


    <?php require('./comporents/footer/flooter.php') ?>


    <!-- Boostrap Java Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="./js/script.js"></script>
</body>

</html>