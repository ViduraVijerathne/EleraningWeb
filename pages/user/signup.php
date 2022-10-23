<?php
require('../../DataBase/getDataForOptionCom.php');

?>

<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

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

                                        <h2 class="mt-2 mb-4 text-center "> <u> New Accounting</u></h2>


                                        <div class=" row m-2">


                                            <div class="col-12 col-lg-12 col-md-12 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="uname" class="form-control" placeholder="User Name" />

                                                </div>
                                            </div>




                                            <div class="col-12 col-lg-6 col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="fname" class="form-control" placeholder="First Name" />

                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-6 col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="lname" class="form-control" placeholder="Last Name" />

                                                </div>
                                            </div>




                                            <div class="col-12 col-lg-12 col-md-12 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="schoolName" class="form-control" placeholder="School Name" />

                                                </div>
                                            </div>


                                            <div class="col-12 col-lg-6 col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="wNumber" class="form-control" placeholder="Whatsapp Number" />

                                                </div>
                                            </div>




                                            <div class="col-12 col-lg-6 col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="tNumber" class="form-control" placeholder="Telegram Number" />

                                                </div>
                                            </div>



                                            <div class="col-12  mb-4">
                                                <input type="email" id="email1" class="form-control" placeholder="Email address" />

                                            </div>

                                            <div class="col-12  mb-4">
                                                <input type="email" id="email2" class="form-control" placeholder="Email address Again" />

                                            </div>

                                            <div class="col-12  mb-4">
                                                <input type="text" id="address" class="form-control" placeholder="Address" />

                                            </div>




                                            <div class="col-12 col-lg-6 col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="password1" class="form-control" placeholder="Password" />

                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-6 col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="password2" class="form-control" placeholder="Password Again" />

                                                </div>
                                            </div>



                                            <div class="col-6 mb-4">
                                                <div class="form-outline">
                                                    <select id="gender" class="form-select">
                                                        <option value="0" class="form-label">Gender</option>

                                                        <?php



                                                        $genderArray = getGenders();



                                                        if ($genderArray->num_rows > 0) {
                                                            // output data of each row
                                                            while ($genderRow = $genderArray->fetch_assoc()) {
                                                                $gender = $genderRow['gender'];
                                                                $genderID = $genderRow['g_id'];

                                                        ?>
                                                                <option class="form-select" value=" <?php echo ($genderID) ?>  "><?php echo ($gender) ?> </option>
                                                        <?php


                                                            }
                                                        }

                                                        ?>




                                                    </select>


                                                </div>
                                            </div>

                                            <div class="col-6 mb-4">
                                                <div class="form-outline">
                                                    <select id="grade" class="form-select">
                                                        <option value="0">Grade</option>

                                                        <?php


                                                        $gradeArray = getGrade();



                                                        if ($gradeArray->num_rows > 0) {
                                                            // output data of each row
                                                            while ($gradeRow = $gradeArray->fetch_assoc()) {

                                                                $grade = $gradeRow['grade_name'];
                                                                $gradeID = $gradeRow['g_id'];

                                                        ?>
                                                                <option class="form-select" value=" <?php echo ($gradeID) ?>  "><?php echo ($grade) ?> </option>
                                                        <?php


                                                            }
                                                        }

                                                        ?>







                                                    </select>


                                                </div>
                                            </div>

                                            <div class="col-6 mb-4">
                                                <div class="form-outline">
                                                    <select id="province" class="form-select">
                                                        <option value="0">Province</option>
                                                        <?php


                                                        $ProvinceArray = getProvince();



                                                        if ($ProvinceArray->num_rows > 0) {
                                                            // output data of each row
                                                            while ($ProvinceRow = $ProvinceArray->fetch_assoc()) {

                                                                $Province = $ProvinceRow['province'];
                                                                $ProvinceID = $ProvinceRow['p_id'];

                                                        ?>
                                                                <option class="form-select" value=" <?php echo ($ProvinceID) ?>  "><?php echo ($Province) ?> </option>
                                                        <?php


                                                            }
                                                        }

                                                        ?>





                                                    </select>


                                                </div>
                                            </div>

                                            <div class="col-6 mb-4">
                                                <div class="form-outline">
                                                    <select id="Destrict" class="form-select">
                                                        <option value="0">Destrict</option>
                                                        <?php


                                                        $DistricArray = getDistric();



                                                        if ($DistricArray->num_rows > 0) {
                                                            // output data of each row
                                                            while ($DistricRow = $DistricArray->fetch_assoc()) {

                                                                $Distric = $DistricRow['distric'];
                                                                $DistricID = $DistricRow['d_id'];

                                                        ?>
                                                                <option class="form-select" value=" <?php echo ($DistricID) ?>  "><?php echo ($Distric) ?> </option>
                                                        <?php


                                                            }
                                                        }

                                                        ?>









                                                    </select>


                                                </div>
                                            </div>









                                        </div>



                                        <div class="pt-1 mb-4 col-12 d-grid text-center ">
                                            <button class="btn btn-dark btn-lg btn-block rounded-5" onclick="signup();" type="button">
                                                signup
                                            </button>
                                        </div>
                                        <span> Already Have an Account ? <a href="signin.php" class="text-decoration-none text-danger fw-bolder text-capitalize"> sign in</a></span>



                                    </div>
                                </div>
                            </div>
                        </div>

    </section>



    <!-- end login -->



    <!-- Boostrap Java Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script src="../../js/script.js"></script>






</body>

</html>