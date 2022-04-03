
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="keywords" content="SECURE FILE STORAGE LTCE - SEcure cloud storage using hybrid CRYptography">
    <meta name="description" content="An application that uses hybrid cryptography to store your webpages securely in cloud.This is a project based on secure file storage on cloud usibg hybrid cryptography.">
    <meta name="author" content="Alin Babu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Quantico' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css"
        rel="stylesheet" />
    <link rel="icon" href="./static/images/logot-25.png" type="image/x-icon">
    <title>SECURE FILE STORAGE LTCE</title>
    <meta name="google-site-verification" content="FcHltav4fG9Okx8KDt8mPdycnb7YyIZBSlgauSvdJDY" />
    <link href="./static/css/style.css" rel="stylesheet" type="text/css">
</head>

<body style="background-color: white;">
    <!-- Page Loader -->
    <!--<div class="loader"></div>-->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
        <a class="navbar-brand" href=./index.php id="logo-name">SECURE FILE STORAGE LTCE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a href=./index.php>Home </a>
                </li>
                <li class="nav-item">
                    <a href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="./logsign.php">Log In</a>
                </li>
                <li class="nav-item">
                    <a href="./logsign.php">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>
    <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./static/images/Cloud1.png" alt="Cloud Security" class="img-fluid responsive">
                    <div class="container">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Secure your confidential files</h1>
                            <p>Sign Up for storing the files. Files will be stored securely.</p><br>
                            <p class="log-button">
                                <a class="btn btn-lg btn-outline-info" href="./logsign.php" role="button">Log
                                    In</a>
                                <a class="btn btn-lg btn-outline-info" href="./logsign.php" role="button">Sign
                                    up</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./static/images/Cloud2.png" alt="Cloud Security" class="img-fluid responsive">
                    <div class="container">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>A simple service focused on storing files.</h1>
                            <p>Store your files and access it from any where. Highly encrypted storage using
                                security
                                keys</p><br>
                            <p class="log-button">
                                <a class="btn btn-lg btn-outline-dark" href="./logsign.php" role="button">Log
                                    In</a>
                                <a class="btn btn-lg btn-outline-dark" href="./logsign.php" role="button">Sign
                                    up</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./static/images/Cloud3.png" alt="Cloud Security" class="img-fluid responsive">
                    <div class="container">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Protect your data on cloud.</h1>
                            <p>Sign Up now! To protect your files and only youc can acess it.</p><br>
                            <p class="log-button">
                                <a class="btn btn-lg btn-outline-primary" href="./logsign.php" role="button">Log
                                    In</a>
                                <a class="btn btn-lg btn-outline-primary" href="./logsign.php" role="button">Sign
                                    up</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </main>

    <!-- Decription of Product-->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="features-icons-item mx-auto mb-6 mb-lg-0 mb-lg-5">
                        <div class="features-icons-icon d-flex">
                            <i class="icon-cloud-upload m-auto "></i>
                        </div>
                        <h3>Upload</h3>
                        <p class="lead text-center m-auto">Your files are uploaded and stored in servers
                            securely using hybrid
                            cryptography. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="features-icons-item mx-auto mb-6 mb-lg-0 mb-lg-5">
                        <div class="features-icons-icon d-flex">
                            <i class="icon-layers m-auto "></i>
                        </div>
                        <h3>Storage</h3>
                        <p class="lead text-center m-auto">A single file is not in one server, it can be more
                            than one
                            server to
                            store a single file.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="features-icons-item mx-auto mb-6 mb-lg-5">
                        <div class="features-icons-icon d-flex">
                            <i class="icon-cloud-download m-auto "></i>
                        </div>
                        <h3>Download</h3>
                        <p class="lead text-center m-auto">Only you can access the files. Each download requires
                            the file
                            own
                            security key. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--About the product-->
    <div class="row no-gutters justify-content-md-center" id="about">
        <div class="col-md-6">
            <h1 class="display-4 font-weight-bolder">About</h1><br>
            <p class="lead h2 text-justify" style="line-height: 2;">
                &nbsp;&nbsp; Cloud computing has now become a major trend, it is a new data hosting technology that is
                very popular
                in recent years. In this project, we are developing
                an web application that can securely store the files to a cloud server. We proposes a system that uses
                hybrid cryptography technique to securely store the data in cloud.
                The hybrid approach when deployed in cloud environment makes the remote server more secure and thus,
                helps the users to fetch more trust of their data in the cloud.
                For data security and privacy protection issues, the fundamental challenge of separation of sensitive
                data and access control is fulfilled. Cryptography technique translates original data into unreadable
                format. This technique uses keys for translate data into unreadable form. So only authorized person can
                access data from cloud server.
            </p>
            <p class="lead h2 text-justify" style="line-height: 2;">
                &nbsp;&nbsp; We provide a cloud storage that uses multiple crypotraphic technique whichis known by
                hybrid
                cryptography. The
                product provides confidentiality by using security for both upload and
                download. The data will be secured since we use multi level security techniques and multiple servers for
                storage.
            </p>
        </div>
        <div class="col-md-3">
            <img class="featurette-image img-fluid" src="./static/images/secure.png" />
        </div>
    </div>

    <!--Features-->
    <section class="bg-light" id="features">
        <h1 class="text-center display-4 font-weight-bolder m-5 p-5">Features</h1>
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Hybrid encryption
                </h2>
                <p class="lead">The file uploaded will be encrypted using three different encryption algorithms.
                    The technique is known by hybrid encryption that provides better security of the files.</p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="./static/images/data-encryption.svg" alt="Data encryption image"
                    height="500" width="500">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="img-fluid" src="./static/images/box.svg" alt="Data encryption image" height="350"
                    width="350">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">Distributed manner for storage</h2>
                <p class="lead">Each file split into three shards. Each shard is sotred in distributed manner in
                    different virtual servers.
                </p>
            </div>

        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">LSB steganography for key storage</h2>
                <p class="lead text-justify">For encryption a security key is used and that key should be securely
                    passed to user using steganography.
                    The LSB technique is used by the application for securing the key.</p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="./static/images/key.svg" alt="Data encryption image" height="500"
                    width="500">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Provides authentication and confidentiality</h2>
                <p class="lead text-justify">The system provides both authentication and confidentiality through
                    securing users and their files in the cloud.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="img-fluid" src="./static/images/shield.svg" alt="Data encryption image" height="500"
                    width="400">
            </div>
        </div>
    </section>
    <!-- /END THE FEATURETTES -->
    <!-- Team members -->
    <div class="team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6  text-center">
                    <h2 class="team-heading">MEET OUR TEAM</h2>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img class="img-fluid" alt="team-photo"
                        src="./static/images/Samarthesh D Acharekar.jpg"
                        width="200px" height="200px">
                    <div class="team-member">
                        <h4>Samarthesh D Acharekar</h4>
                    </div>
                </div>
                <!--col-lg-4 -->

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img class="img-fluid" alt="team-photo"
                        src="./static/images/Niraj.jpg"
                        width="200px" height="200px">
                    <div class="team-member">
                        <h4>Niraj D Gupta</h4>
                    </div>
                </div>
                <!--col-lg-4 -->

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img class="img-fluid" alt="team-photo"
                        src="./static/images/Mukesh.jpg"
                        width="200px" height="200px">
                    <div class="team-member">
                        <h4>Mukesh S Gupta</h4>
                    </div>
                </div> <!-- col-lg-4 -->
            </div> <!-- row text-center -->
        </div>
    </div>
    <!--Contact Us-->
    <div class="container contact-form" id="contact">
        <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
        </div>
        <form method="POST" enctype="multipart/form-data" action="{% url 'contact' %}">
            <h3>Drop us a Message</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="txtName" class="form-control" placeholder="Your Name *" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Your Message *"
                            style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- FOOTER -->
    <footer class="text-muted">
        <div class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p class="float-left">&copy; SECURE FILE STORAGE LTCE - 2020</p>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script src="./static/js/main.js"></script>
</body>

</html>