<?php
session_start();
require_once('connect.php');

if (isset($_SESSION["f_name"])){
	$f_name=$_SESSION["f_name"];


	}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
</head>

<body>
    <div class="py-3 bg-warning">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center d-md-flex justify-content-between align-items-center">
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item text-dark" style=""> <a class="nav-link active" href="concert_info.php"><b class="">HOME</b></a> </li>
            <li class="nav-item text-dark"> <a class="nav-link" href="buy_ticket.php"><b>BUY TICKET</b></a> </li>
            <li class="nav-item"> <a class="nav-link" href="line_up.php"><b>LINE UP</b></a> </li>
            <li class="nav-item"> <a class="nav-link" href="location.php"><b>LOCATION</b></a> </li>
          </ul>
        </div>
        <div class="col-md-6 text-center d-md-flex justify-content-between align-items-center">
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul> <a class="btn btn-primary" href="contact_us.php">Q&amp;A</a>
         	<?php
	if (isset($_SESSION["f_name"])&isset($_SESSION["l_name"])){?>
		<div class="btn-group"> <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><?php echo ("Hi! ".$f_name." ");?></button>

	<?php }
		else{?>
			<div class="btn-group"> <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">USER</button>
		<?php }?>
            <div class="dropdown-menu"> <a class="dropdown-item" href="user-profile.php">MY PROFILE</a>
              <div class="dropdown-divider"></div> <a class="dropdown-item" href="user-my_ticket.php" style="">MY TICKET</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="anwer_user.php" style="" >MESSAGE</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="user-changepass.php" style="">CHANGE PASSWORD</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="home_page.php" style="">LOG OUT</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
  <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><img class="img-fluid d-block mx-auto" src="winner-2018-everywhere-tour-in-bangkok-seating.gif"></div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="text-center mx-auto col-md-12">
          <h1>Choose your tickets</h1>
        </div>
      </div>
<?php
$q2 = "call avariable(10)";
$result2 = $mysqli->query($q2);

$q = "select * from ticket_avi";
$result = $mysqli->query($q);
$row=$result->fetch_array();
?>
      <div class="row">
        <div class="col-lg-3 col-md-6 p-3">
          <div class="card bg-light text-center">
            <div class="card-body p-4">
              <h3>A1 STANDING</h3>
              <h2><b>4500 ฿</b></h2>
				<h5 >Remaining Ticket: <b style="color: #C4080B">
					<?php if ($row['remainA1']<1)
						{
						echo('out of order');
						}
					else{	echo ($row['remainA1']);
			 			}?></b></h5>
              <hr>
				<?php if ($row['remainA1']>1){?>
			   <form action="blankA1.php" method="POST">
              <input type="number" name="quality" min="1" class="form-control" placeholder="Quantity" required>
              <hr><input class="btn btn-primary" type="submit" value="BUY">
			  </form>
				<?php }else?>
				<div></div>
				<?php?>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 p-3">
          <div class="card bg-light text-center">
            <div class="card-body p-4">
              <h4 contenteditable="true">A2 STANDING</h4>
              <h2> <b>4500 ฿</b></h2>
				<h5>Remaining Ticket:  <b style="color: #C4080B">
					<?php if ($row['remainA2']<1)
						{
						echo('out of order');
						}
					else{	echo ($row['remainA2']);
			 			}?></b></h5>
              <hr>
			<?php if ($row['remainA2']>1){?>
			   <form action="blankA2.php" method="POST">
              <input type="number" name="quality" min="1" class="form-control" placeholder="Quantity" required>
              <hr><input class="btn btn-primary" type="submit" value="BUY">
			  </form>
				<?php }else?>
				<div></div>
				<?php?>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 p-3">
          <div class="card bg-light text-center">
            <div class="card-body p-4" style="">
              <h3>B STANDING</h3>
              <h2> <b>3500 ฿</b></h2>
				<h5>Remaining Ticket:  <b style="color: #C4080B">

					<?php if ($row['remainB']<1)
						{
						echo('out of order');
						}
					else{	echo ($row['remainB']);
			 			}?></b></h5>
				<hr>
			 <?php if ($row['remainB']>1){?>
			   <form action="blankB.php" method="POST">
              <input type="number" name="quality" min="1" class="form-control" placeholder="Quantity" required>
              <hr><input class="btn btn-primary" type="submit" value="BUY">
			  </form>
				<?php }else?>
				<div></div>
				<?php?>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 p-3">
          <div class="card bg-light text-center">
            <div class="card-body p-4">
              <h3>C STANDING</h3>
              <h2> <b>2500 ฿</b></h2>
				<h5>Remaining Ticket:  <b style="color: #C4080B">
					<?php if ($row['remainC']<1)
						{
						echo('out of order');
						}
					else{	echo ($row['remainC']);
			 			}?></b></h5>
              <hr>
			 <?php if ($row['remainC']>1){?>
			   <form action="blankC.php" method="POST">
              <input type="number" name="quality" min="1" class="form-control" placeholder="Quantity" required>
              <hr><input class="btn btn-primary" type="submit" value="BUY">
			  </form>
				<?php }else?>
				<div></div>
				<?php?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center d-md-flex align-items-center"> <i class="d-block fa fa-stop-circle fa-2x mr-md-5 text-primary"></i>
          <ul class="nav mx-md-auto d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link active" href="#">&nbsp;</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-md-between justify-content-center my-2"> <a href="#">
                <i class="d-block fa fa-facebook-official text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
              </a> </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mt-2 mb-0">© 1993-2018 DBMusic. All rights reserved</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
