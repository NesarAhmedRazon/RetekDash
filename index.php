<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Retek Dashboard | Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css?v=<?php echo time();?>">
</head>

<body class="bg-lucky text-white">
    <div class="decor">
        <p class="changeText pt-3 pt-md-5 pt-sm-4 text-uppercase textLogo">Sign Up</p>
    </div>
    <div class="container">
        <div class="row full-tall justify-content-center align-items-center">
            <div class="bc-hotstone col-11 p-4 mCont bg-White shadow-lg sup">
                <div class="fhead justify-content-center justify-content-sm-start row">
                    <div class="col-6 col-sm-4">
                        <picture>
                            <img src="assets/itPrix-01-01.svg" alt="" class="w-md-50 w-lg-25 w-xs-100">
                        </picture>
                    </div>
                    <div class="col-6 d-none">hem</div>
                </div>
                <div class="align-items-md-center align-items-start fbody flex-column flex-md-row justify-content-center justify-content-md-between my-4 my-md-5 row">
                    <div class="col-lg-4 col-md-6 col-12 text-center">
                        <h2 class="h4 txt-rBold disabled">Welcome to ITPrix!</h2>
                        <p><small>You can use the mark tag to highlight text.</small></p>
                    </div>
                    <div class="col-md-6 col-lg-4 col-12">
                        <form class="bg-White login pb-2 pt-4 px-5 shadow">
                            <p class="on-white text-center text-uppercase form-title">
                                <span class="changeText">Sign Up</span>
                            </p>
                            <div class="form-group mb-4 hide-l hide-r">
                                <div class="input-group">
                                    <input type="text" class="form-control rounded-0 pl-0" aria-describedby="namelHelp" placeholder="Name">
                                    <div class="input-group-append">
                                        <span class="input-group-text pr-0"><i class="icon-person_outline"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="input-group">
                                    <input type="text" class="form-control rounded-0 pl-0" aria-describedby="emailHelp" placeholder="Email">
                                    <div class="input-group-append">
                                        <span class="input-group-text pr-0"><i class="icon-mail_outline"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4 hide-r">
                                <div class="input-group">
                                    <input type="password" class="form-control rounded-0 pl-0" placeholder="Password">
                                    <div class="input-group-append">
                                        <span class="input-group-text pr-0"><i class="icon-lock_outline"></i></span>
                                    </div>
                                </div>                                 
                            </div>
                            <div class="mb-4 align-items-center d-flex form-check form-group justify-content-start hide-r hide-s">
                                <input type="checkbox" class="form-check-input mr-1 mt-0 rounded-0">
                                <label class="on-white form-check-label" for="">Remember me</label>
                            </div>
                            <button type="submit" class=" mb-5 w-100 pill btn bg-hotstone on-color-w">Submit</button>
                            <div class="form-group">
                                <p class="on-white text-center hide-l hide-r" ><small>Already have an account? <a href="/signup.html" class="on-white" target="_blank" rel="noopener noreferrer">Sign In</a></small></p>
                                <p class="on-white text-center hide-s" ><small>Register a new account. <a href="/signup.html" class="on-white" target="_blank" rel="noopener noreferrer">Sign Up</a></small></p>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-12 d-none d-md-block">design</div>
                </div>
                <div class="row ffoot">
                    <div class="col-6 on-color"><a href="#" class="on-color-w icon-arrow_back_ios text-uppercase txt-sBold" target="_blank" rel="noopener noreferrer">Home</a></div>
                    <div class="col-6 on-white text-right itprix">Ⓒ ITPrix.com</div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="assets/app.js"></script>
</body>

</html>