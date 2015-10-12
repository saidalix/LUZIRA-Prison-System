<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Luzira</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Visiting  
                    <small>Application</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                 <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                         <h3>Registration Online</h3>
                <form name="sentMessage" id="contactForm"  action="send_visiting.php">
                   <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name ="fname" class="form-control" placeholder="your name">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Second name</label>
                                        <input type="text" name="sname" class="form-control" placeholder="last name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Date of birthday</label>
                                        <input type="text" name="dob" class="form-control" placeholder="Date of birthday">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Nationality</label>
                                        <input type="text" name="nationality" class="form-control" placeholder="Your Country">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Present Adress</label>
                                        <input type="text" name="adress" class="form-control" placeholder="Your place">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="Mantal Status">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                  <div class="form-group">
                                        <label>Gender</label>
                                        
                                        <p>Male 
                                          <input type="checkbox" name="gender" value="checkbox">
                                    Female 
                                    <input type="checkbox" name="gender" value="checkbox">
                                    </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                  <div class="form-group">
                                      <label>In mater </label>
                                      <p>
                                        <select name="mater">
                                          <option value="Select">Select</option>
                                          <option value="Father">Father</option>
                                          <option value="Mather">Mather</option>
                                          <option value="Sister">Sister</option>
                                          <option value="Friend">Friend</option>
                                        </select>
                                    </p>
                                  </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Id Doc </label>
                                        <input type="text" name="id_doc" class="form-control" placeholder="Email Adress">
                                    </div>
                                </div>
                            </div>
                            <center>
                              <input type="submit" name="Submit" value="send ">
                              <p><br/></p></center>
                </form>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3><b>.IMPORTANT.</b></h3>
                <p>
                    PLEASE READ THIS FORM CAREFULLY.<br>Answer and sign in the applicable spaces.<br>
                </p>
                <p><i ><b>NOTE:</b> <br />Failure to complete the form fully will result in delays in the visitor approval process. Providing false information is sufficient to deny access.</i> </p>
                <p><i><b>PRIVACY ACT STATEMENT</b></i> <br />
                 Personal information about you is collected under the authority of the Corrections and Conditional Release Act to review your suitability for visiting privileges at the LUZIRA. This information is collected, with no obligation on your part, and held in the Visits and Correspondence Bank; however, your refusal to comply would result in the denial of visiting privileges. This information cannot be disclosed to other persons without your consent EXCEPT where disclosure would be justified pursuant to one of the paragraphs of subsection of the Privacy Act.
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                    <abbr title="Hours">H</abbr>: Saturday - Sanday: 8:00 AM to 7:00 PM</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p align="center">Copyright &copy; Slau Coding 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
