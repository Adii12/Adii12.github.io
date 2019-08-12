
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<!-- PARALLAX -->
	
	<div class="parallax">
	</div>

	<!-- CONTAINER -->
	<div class="container">

		<div class="row">
			<div class="col-sm-3">

				<!-- CARD -->		

				<div class="card">
					<img src="img/adi.jpg" class="img-responsive"/>
					<div class="cardContent">
						<h1 class="text-center">Adrian Cimpean</h1>
						<h2 class="text-center">Programming Student</h2>

						<!-- SOCIAL MEDIA BUTTONS -->

						<div class="cardSocialMedia">
							<a href="https://twitter.com/AdiCimpean12"><i class="fab fa-twitter"></i></a>
							<a href="https://www.facebook.com/adi.cimpean.7"><i class="fab fa-facebook-f"></i></a>
							<a href="https://www.instagram.com/adicimpean/?hl=ro"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
				<button class="btn toggleCard">Toggle Card</button>
			</div>

			<!-- MENIU -->

			<div class="col-sm-9">
				<div class="meniu col-sm-12">
					<ul>
						<a href="about.html"><li><i class="fas fa-user"></i> About</li></a>
						<a href="resume.html"><li><i class="far fa-file-alt"></i> Portfolio</li>
						<a href="contact.php" class="selected"><li><i class="fas fa-map-marker-alt"></i> Contact</li></a>
					</ul>
				</div>

				<div>&nbsp;</div>

				<!-- CONTENT -->
				
<div class="contact col-sm-12">
	
	<h2>Contact</h2>

	<p>Hello! With the form below you can contact me. I'll do my best to respond ASAP!</p>

	<div class="clearfix"></div>

	<form method="POST" action="contact.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="nume" class="form-control">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" name="email" class="form-control" autocomplete="on" placeholder="123abc@email.com">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Subject</label>
    <input type="text" name="subiect" class="form-control" placeholder="Subject">
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Message</label>
    <textarea name="mesaj" placeholder="Hello world!"></textarea>
  </div>
  
 

  <button type="submit" name="trimite" class="btn btn-primary">Send</button>
  <button type ="reset">Reset</button>
</form>

<?php

$name= $_POST['nume'];
$email= $_POST['email'];
$subject= $_POST['subiect'];
$message= $_POST['mesaj'].' '.$name.' '.$email;

if(isset($_POST['trimite'])){
mail('adi12_steaua@yahoo.com', $subject, $message);
echo 'Message successfuly sent! Thank you!';
}

?>

<div class="clearfix"><br/></div>

</div>



				
			</div>

			<!-- FOOTER -->

			<div class="footer">
				Copyright &copy; 2018 Adrian Cimpean
			</div>

		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>