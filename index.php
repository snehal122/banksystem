<html>
<head>
<title>Yes Bank</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
<style>
  *{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

.center
{
    color:black;
    margin-top:120px;
    font-family: 'Arial', monospace;
}
.main
{
   
    margin:20px 0;
    color:black;
    font-family: 'Times New Roman', monospace;
}
.contactus{
    width:100%;
    height: 100vh;
    background-image:url('paisa.jpg');
    background-repeat:no-repeat;
    background-size:100%;
    padding: 80px 0;
    position: relative;
}

.contactus:before{
    content:"";
    position: absolute;
    top:0;
    left:0;
    bottom:0;
    right:0;
    background-image:url('green.jpg');
    background-repeat:no-repeat;
    background-size:100%;
    /* background:linear-gradient(173deg,#212529 18%, #fff 20%); */
    background:linear-gradient(369deg,#212529 25%, #fff 27%);
    z-index: -1;
}
.formbutton button{
    border:1px solid #50d1c0;
    border-radius:100px;
    margin:0 50px;
    padding: 12px 35px;
    outline:none;
    columns: #50d1c0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.4;
    text-align: center;
    background:black;
    color:#fff;
   
}
form:hover .formbutton button{
background: pink;
color:#5E11A3 ;
box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);

}

</style>
</head>

<body style="background:url(green.jpg);background-repeat:no-repeat;background-size:400% 400%">
<!-- <div class="main_div"> -->
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Yes Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Customers 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="viewcustomers.php">Customers Details</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#contact" tabindex="-1" aria-disabled="true">Contact us</a>
            </li>
            
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

     <div class="container">
        <div class="row">

          <div class="col-sm-6">
            <h1 class="center" style="font-weight: bold;text-align:bottom;">Yes Bank</h1>
            <h2 class="main" style="font-weight:arial;text-align:left;">Welcome to YES Bank<br>Yes Bank, is a high quality, customer centric and service driven Bank</h2>
          </div>

          <div class="col-sm-6">
            
          <img src="sparks.jpg"  width="800" height="300";>
           
          </div>

       </div>
       
    </div>

</div>

</div>


  <!--contact starts-->
  <section class="contactus" id="contact" >
        <div class="container headings text-center">
          
            <h1 class="center" style="font-weight: bold;text-align: center;">ANY QUERIES</h1>
            

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offet-md-2-col col-1">
                    <form action="action_page.php" method="post">
                        <div class="form-group">
                          
                          Name: <input type="text" class="form-control" name="name" placeholder="Enter name" id="username" required autocomplete="off">
                        </div>
                        <form action="action_page.php" method="post">
                            <div class="form-group">
                              
                              Email: <input type="email" class="form-control" name="email" placeholder="Enter email" id="email" required autocomplete="off">
                            </div>
                           
                                <div class="form-group">
                                    <label for="comment">Comment:</label>
                                    <textarea class="form-control" rows="4" name="com" id="comment" placeholder="Your Comments"></textarea>
                                  </div>
                                  <div class="formbutton" style="display: flex;justify-content: center;">
                        <button type="submit" >Submit</button></div>
                      </form>
                </div>
            </div>
       </section>
</body>
</html>