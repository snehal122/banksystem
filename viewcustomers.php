<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

*{
    margin:0;
    padding:0;
   box-sizing:border-box;
}
.display_table
{
    width:100vw;
    height:100vh;
    display:flex;
    flex-direction:column;
    justify-content: center;
    text-align:center;
}
.center_div
{
    width:90vw;
    height:80vh;
    background-image:url('images.jpeg');
    background-repeat:no-repeat;
    background-size:100%;
    padding:40px 0 0 0;
    box-shadow:0 10px 20px #888888;
    border-radius:10px;
    margin-left:70px;
}
h1
{
    font-size:30px;
    color:#000;
    text-align:center;
    margin-top:-30px;
    margin-bottom:20px;
}
table
{
    border-collapse:collapse;
    background-color:black;
    box-shadow:0 10px 20px #888888;
    border-radius: 20px;
    border-collapse:collapse;
    table-layout:auto;
    width:100%;
    opacity:0.9;
    color:#000;
    font-weight:500;
    margin:auto;
}
th,td
{
  border:2px solid #f2f2f2;
   padding:10px 30px;
  text-align:center;
  opacity:0.9;
  color:#f2f2f2 ; 
}
th{
    text-transform:uppercase;
    font-weight:bold;
}
td
{
    font-size:15px;
}

</style>
</head>
<body>
 
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

      
           
          <div class="display_table">
                 <h1 class="center" style="font-weight: bold;text-align: center;">Customers Details</h1>
                 <div class="center_div">
               <div class="table-responsive">
                    <table>
                    <thead>
                     <tr>
                     <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                       <th>Amount</th>
                    
                      <th colspan="2">Transaction</th>
                    </tr>
                    </thead>
                   <tbody>
                  </div>
          <?php
          include 'connection.php';
          $sql = " SELECT * FROM `customers_details`";
          $result = mysqli_query($conn,$sql);
          $numofrows = mysqli_num_rows($result);

           while($res = mysqli_fetch_array($result))
          {
            ?>
               <tr>
               <td><?php  echo $res['ID']; ?></td>
               <td><?php echo $res['Name']; ?></td>
               <td><?php echo $res['Email']; ?></td>
               <td><?php echo $res['Amount']; ?></td>
              <td><a href="transfermoney.php?idtransfer=<?php  echo $res['ID']; ?>" ><i button name="submit" >Transact</button></i></a></td>
               </tr>
             <?php
          }
           ?>


</tbody>
</table>
</div>

</div>

</div>
 </div>

</body>
</html>


    



















