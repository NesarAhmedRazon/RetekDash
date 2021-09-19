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
    <link rel="stylesheet" href="/assets/style.css?v=<?php echo time();?>">
</head>

<body class="bg-lucky text-white">
    <svg class="decor" xmlns="http://www.w3.org/2000/svg">
        <text class="textLogo" fill="red" x="2" y="2">ITPrix</text>
    </svg>
    <div class="container">
        <div class="row full-tall justify-content-center align-items-center">
            <div class="bc-hotstone col-12 p-4 mCont shadow-lg">
                <div class="row fhead">
                    <div class="col-6">
                        <picture>
                            <img src="/assets/itPrix-01-01.svg" alt="" class="w-25">
                        </picture>
                    </div>
                    <div class="col-6">hem</div>
                </div>
                <div class="align-items-center fbody justify-content-between my-5 row">
                    <div class="col-4">
                        <h2 class="h4 txt-rBold disabled">Welcome to ITPrix!</h2>
                        <p><small>You can use the mark tag to highlight text.</small></p>
                    </div>
                    <div class="col-4">
                        <form class="bg-White shadow p-4 py-5 login">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control rounded-0" aria-describedby="emailHelp">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="icon-mail_outline"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control rounded-0">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="icon-lock_outline"></i></span>
                                </div>
                            </div>  
                               
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input rounded-0">
                                <label class="on-white form-check-label" for="">Remember me</label>
                            </div>
                            <button type="submit" class="w-100 pill btn bg-hotstone on-color-w">Submit</button>
                        </form>
                    </div>
                    <div class="col-4">design</div>
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
</body>

</html>