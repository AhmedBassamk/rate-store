<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Password Reset - SB Admin</title>
    <link href="dashboard/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .primary video{
            width: 100%;
            position:absolute;
        }
        .primary{
            overflow: hidden;
        }
        .card1 {
            width: 30%;
            box-shadow: 0 0 10px gray;
            border-radius: 10px;
            margin: 20px;
            position: relative;
        }

        .lay {
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.438);
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: .5s;
            border-radius: 10px;

        }
        .lay h3{
            color:white;
        }
        .lay a{
            text-decoration: none;
        }

        .card1:hover .lay {
            opacity: 1;
        }

        .img img {
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .text {
            padding: 15px;
            text-align: center;
        }

        .text p {
            font-size: 10px;
            color: gray;
        }

        .parent {
            display: flex;
            justify-content: space-around;
        }
        *{
            text-decoration: none;
        }
    </style>
</head>

<body class="primary">
    <video src="assets/Technology Background Video Loop For Website.mp4"  loop muted autoplay></video>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card shadow-lg border-0 rounded-lg mt-5" style="position: relative;top:70px">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Choise Use</h3>
                                </div>
                                <div class="card-body">

                                    <div class="parent" >
                                        <div class="card1">
                                            <div class="lay">
                                                <a href="dashboard/login_2.php"><h3>Login</h3></a>
                                            </div>
                                            <div class="img">
                                                <img src="dashboard/assets/img/p10.jpg" alt="">
                                            </div>
                                            <div class="text">
                                                <h3>Visitor</h3>
                                                <p>For visitors and people who benefit from the services of stores.</p>
                                            </div>
                                        </div>
                                        <div class="card1">
                                            <div class="lay">
                                            <a href="dashboard/login.php"><h3>Login</h3></a>
                                            </div>
                                            <div class="img">
                                                <img src="dashboard/assets/img/p10.jpg" alt="">
                                            </div>
                                            <div class="text">
                                                <h3>Admin</h3>
                                                <p>For general business owners.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="dashboard/register.html">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>