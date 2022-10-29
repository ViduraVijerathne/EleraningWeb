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

    <link rel="stylesheet" href="../../css/style.css">
    <title> Home </title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Left Side -->
            <div class="col-lg-2 bg-light " style="height: 100vh;">
                <div class="row">

                    <div class="col-6 offset-lg-3">
                        <img src="../../src/logo.png" class="img-fluid" alt="" srcset="">
                    </div>

                    <div class="col-10 offset-lg-2 mt-5">

                        <div onclick="LeftBtnNavigation('OverView')" id="OverViewBTN" class="row mt-3  fw-bold btn btn-dark d-grid ">
                            <div class="col-12 ">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="bi bi-grid-1x2-fill"></i>
                                    </div>
                                    <div class="col-2">
                                        <span class="ms-3">OverView</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div onclick="LeftBtnNavigation('Exam')" id="ExamBTN" class="row mt-3  fw-bold btn  d-grid ">
                            <div class="col-12 ">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="bi bi-newspaper"></i>
                                    </div>
                                    <div class="col-2">
                                        <span class="ms-3">Exams</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div onclick="LeftBtnNavigation('AllCauses')" id="AllCausesBTN" class="row mt-3  fw-bold btn  d-grid ">
                            <div class="col-12 ">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="bi bi-alexa"></i>
                                    </div>
                                    <div class="col-2">
                                        <span class="ms-3">AllCauses</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div onclick="LeftBtnNavigation('MyCases')" id="MyCasesBTN" class="row mt-3  fw-bold btn  d-grid ">
                            <div class="col-12 ">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="bi bi-wallet2"></i>
                                    </div>
                                    <div class="col-2">
                                        <span class="ms-3">MyCousess</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div onclick="LeftBtnNavigation('Invoces')" id="InvocesBTN" class="row mt-3  fw-bold btn  d-grid ">
                            <div class="col-12 ">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="bi bi-receipt"></i>
                                    </div>
                                    <div class="col-2">
                                        <span class="ms-3">Invoces</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div onclick="LeftBtnNavigation('Msg')" id="MsgBTN" class="row mt-3  fw-bold btn  d-grid ">
                            <div class="col-12 ">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="bi bi-chat-fill"></i>
                                    </div>
                                    <div class="col-2">
                                        <span class="ms-3">Messages</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div onclick="LeftBtnNavigation('LeaderBord')" id="LeaderBordBTN" class="row mt-3  fw-bold btn  d-grid ">
                            <div class="col-12 ">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="bi bi-trophy-fill"></i>
                                    </div>
                                    <div class="col-2">
                                        <span class="ms-3">LeaderBord</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div onclick="LeftBtnNavigation('Setting')" id="SettingBTN" class="row mt-3  fw-bold btn  d-grid ">
                            <div class="col-12 ">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="bi bi-gear-fill"></i>
                                    </div>
                                    <div class="col-2">
                                        <span class="ms-3">Setting</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <img src="../../src/learning.png" class="img-fluid" alt="" srcset="">
                    </div>
                </div>
            </div>

            <!-- Center View -->
            <div class="col-lg-8 col-12  border-end overflow-scroll MyScrollBar" style="height: 100vh;" id="centerView">

                <!-- Header -->
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 fw-bold fs-3 text-capitalize">Hello <span class="">Ahamed</span> ! </div>
                        </div>
                        <div class="row fw-bold text-black-50">Let's Learn Something new Day !</div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="row">
                            <div class="col-10">
                                <input type="text" name="" id="" class="form-control ">
                            </div>

                            <div class="col-2">
                                <button class="btn btn-outline-dark"><i class="bi bi-bell-fill"></i></button>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- OverViewTab -->
                <div class="row " id="OverViewTab">
                    <div class="col-12">
                        <?php require('../../comporents/user/overViewComp.php') ?>
                    </div>
                </div>

                <!-- ExamsTab -->
                <div class="row  d-none" id="ExamTab">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="row mt-5">
                                    <div class="col-12 fw-bold fs-4  ">
                                        Term Test Exams
                                    </div>
                                </div>
                                <div class="row">
                                    <?php require('../../comporents/user/examCard.php') ?>
                                    <?php require('../../comporents/user/examCard.php') ?>
                                    <?php require('../../comporents/user/examCard.php') ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="row mt-5">
                                    <div class="col-12 fw-bold fs-4  ">
                                        Lesson Exams
                                    </div>
                                </div>
                                <div class="row">
                                    <?php require('../../comporents/user/examCard.php') ?>
                                    <?php require('../../comporents/user/examCard.php') ?>
                                    <?php require('../../comporents/user/examCard.php') ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="row mt-5">
                                    <div class="col-12 fw-bold fs-4  ">
                                        You Faced Exams
                                    </div>
                                </div>
                                <div class="row">
                                    <?php require('../../comporents/user/examCard.php') ?>
                                    <?php require('../../comporents/user/examCard.php') ?>
                                    <?php require('../../comporents/user/examCard.php') ?>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- All Causes -->
                <div class="row d-none " id="AllCausesTab">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 mt-5 fw-bold text-capitalize fs-4">Availabe All Cases</div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <?php
                                    for ($x = 0; $x < 10; $x++) {
                                        require('../../comporents/user/couseBuyCard.php');
                                    }
                                    ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- My Couses -->
                <div class="row d-none " id="MyCasesTab">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 mt-5 fw-bold text-capitalize fs-4">Availabe All Cases</div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <?php
                                    for ($x = 0; $x < 10; $x++) {
                                        require('../../comporents/user/EncrolledCouseCard.php');
                                    }
                                    ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Invocess -->
                <div class="row  d-none" id="InvocesTab">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 mt-5 fw-bold text-capitalize fs-4">My All Invoces</div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <?php
                                    for ($x = 0; $x < 10; $x++) {
                                        require('../../comporents/user/invoicesViewCard.php');
                                    }
                                    ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Messeges -->
                <div class="row  d-none" id="MsgTab">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 mt-5 fw-bold text-capitalize fs-4">Your Messages</div>
                        </div>

                        <div class="row">
                            <?php require('../../comporents/user/chatPage.php') ?>
                        </div>

                        <div class="row sticky-bottom ">
                            <div class="col-9 mb-5">
                                <input type="text" class="form-control" placeholder="Type Semething">
                            </div>
                            <div class="col-3 mb-5">
                                <button class="btn btn-dark"><i class="bi bi-send-fill"></i></button>
                            </div>
                        </div>


                    </div>
                </div>

                <!--LeaderBord  -->
                <div class="row  d-none" id="LeaderBordTab">
                    <div class="col-12">
                        <!-- Leader Bord -->
                        <div class="row mt-3 ">
                            <div class="col-11 ms-3 bg-light rounded-1">
                                <div class="row mt-3">
                                    <span class="fw-bold  fs-3"> LeaderBord</span>
                                </div>

                                <div class="row ms-2 mt-2 fw-bold text-black-50">
                                    <div class="col-2">Rank</div>
                                    <div class="col-4">Name</div>
                                    <div class="col-2">Grade</div>
                                    <div class="col-2">Avg Marks</div>
                                    <div class="col-2">Points</div>
                                    <div class="col-12">
                                        <hr>
                                    </div>
                                </div>

                                <?php
                                for ($x = 0; $x < 100; $x++) {
                                    require("../../comporents/user/leaderBord.php");
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Setting -->
                <div class="row  d-none" id="SettingTab">
                    <div class="col-12">
                        <div class="row">
                            <!-- Edit Profile -->
                            <div class="col-6">
                                <div class="row fw-bold fs-3 mt-5"> Edit Profile</div>

                                <div class="row p-2">
                                    <div class="col-12 m-2  border rounded">

                                        <div class="row mt-3">
                                            <div class="col-12 fw-bold fs-5"> User Name</div>
                                            <div class="col-12">
                                                <input type="text" placeholder="User Name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-6 fw-bold fs-5"> First Name</div>
                                            <div class="col-6 fw-bold fs-5"> Last Name</div>

                                            <div class="col-6">
                                                <input type="text" placeholder="First Name" class="form-control">
                                            </div>
                                            <div class="col-6">
                                                <input type="text" placeholder="Last Name" class="form-control">
                                            </div>


                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-6 fw-bold fs-5"> WhatsApp Number</div>
                                            <div class="col-6 fw-bold fs-5"> Telegram Number</div>

                                            <div class="col-6">
                                                <input type="text" placeholder="WhatsApp Number" class="form-control">
                                            </div>
                                            <div class="col-6">
                                                <input type="text" placeholder="Telegram Number" class="form-control">
                                            </div>


                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-6 fw-bold fs-5"> Email</div>
                                            <div class="col-6 fw-bold fs-5"> School</div>

                                            <div class="col-6">
                                                <input type="text" placeholder="Email" class="form-control">
                                            </div>
                                            <div class="col-6">
                                                <input type="text" placeholder="School" class="form-control">
                                            </div>


                                        </div>



                                        <div class="row mt-3 mb-5">
                                            <div class="col-12 fw-bold fs-5"> Address</div>
                                            <div class="col-12">
                                                <input type="text" placeholder="Address" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Change Password -->
                            <div class="col-6">
                                <div class="row fw-bold fs-3 mt-5"> Change Password</div>
                                <div class="row p-2">
                                    <div class="col-12 m-2  border rounded">

                                        <div class="row mt-3">
                                            <div class="col-12 fw-bold fs-5"> Currunt Password</div>
                                            <div class="col-12">
                                                <input type="text" placeholder="Currunt Password" class="form-control">
                                            </div>
                                        </div>


                                        <div class="row mt-3">
                                            <div class="col-12 fw-bold fs-5"> Password</div>
                                            <div class="col-12">
                                                <input type="text" placeholder="Password" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mt-3 mb-5">
                                            <div class="col-12 fw-bold fs-5"> Retype Password</div>
                                            <div class="col-12">
                                                <input type="text" placeholder=" Retype Password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Edit Profile img -->
                                    <div class="col-6">
                                        <div class="row fw-bold fs-3 mt-5 ms-2"> Profile Image</div>
                                        <div class="row p-2">
                                            <div class="col-12 m-2  border rounded">

                                                <div class="row">
                                                    <div class="col-12  d-flex justify-content-center">
                                                        <input type="file" name="" id="profileUploder" class="d-none">
                                                        <label for="profileUploder" >
                                                            <img src="../../src/prfile.png" class="img-fluid" alt="" srcset="">
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>


            </div>

            <!-- Right View -->
            <div class="col-lg-2 bg-light " id="rightView">
                <div class="row mt-5">
                    <span class="fw-bold  fs-4">Profile</span>
                </div>

                <div class="row">
                    <div class="col-12"><img src="../../src/prfile.png" class="img-fluid" alt=""></div>
                    <div class="col-12 fw-bold text-center fs-5"><span>Feric Ahamed</span></div>
                    <div class="col-12 fw-bold text-black-50 text-center"><span class="">Grade 11 </span></div>
                    <hr>
                </div>

                <div class="row">
                    <div class="col-12 mt-3 fw-bold fs-4">
                        <span>To Do List</span>
                        <input type="checkbox" class="form-check-input" name="" id="" checked disabled>
                    </div>

                    <div class="col-12 overflow-scroll MyScrollBar" style="height:50vh;">
                        <div class=" row list-group ">



                            <!-- One Couse -->
                            <a href="#" class=" mt-1 col-12 list-group-item list-group-item-action bg-dark text-light" aria-current="true">
                                <div class="row">
                                    <div class="col-12 fw-bold  fs-5 text-center text-capitalize">Couse Header</div>
                                    <div class="col-12">
                                        <img src="../../src/emptyVider.png" class="img-thumbnail" alt="" srcset="">
                                    </div>
                                    <div class="col-12 fw-bold">Couse Sub Header </div>
                                    <div class="col-12">3 Days Ago</div>
                                    <div class="col-12 ms-2 ">
                                        <hr>
                                        <!-- One Video -->
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="checkbox" class="form-check-input" name="" id="video_1" disabled>
                                                <label for="video_1">Video 1 Title</label>
                                            </div>
                                        </div>

                                        <!-- One Video -->
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="checkbox" class="form-check-input" name="" id="video_21" disabled>
                                                <label for="video_2">Video 1 Title</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <!-- One Couse -->
                            <a href="#" class=" mt-1 col-12 list-group-item list-group-item-action bg-dark text-light" aria-current="true">
                                <div class="row">
                                    <div class="col-12 fw-bold  fs-5 text-center text-capitalize">Couse Header</div>
                                    <div class="col-12">
                                        <img src="../../src/emptyVider.png" class="img-thumbnail" alt="" srcset="">
                                    </div>
                                    <div class="col-12 fw-bold">Couse Sub Header </div>
                                    <div class="col-12">3 Days Ago</div>
                                    <div class="col-12 ms-2 ">
                                        <hr>
                                        <!-- One Video -->
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="checkbox" class="form-check-input" name="" id="video_1" disabled>
                                                <label for="video_1">Video 1 Title</label>
                                            </div>
                                        </div>

                                        <!-- One Video -->
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="checkbox" class="form-check-input" name="" id="video_21" disabled>
                                                <label for="video_2">Video 1 Title</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>

                </div>

            </div>


        </div>
    </div>
    <!-- Boostrap Java Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script src="../../js/script.js"></script>
</body>

</html>