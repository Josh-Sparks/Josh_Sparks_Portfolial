<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact-form</title>
<link rel="stylesheet" type="text/css" href="Style Sheet.css">
		<!--[if lt IE 9]>
			<script src="http://htm
	<link rel="stylesheet" type="text/css" href="Style-2.css">l5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
          <?php
		$to ="duane.ericson@mtchs.org";
		$subject = "Formmail Message";
		$form=$_REQUEST['emailAddress'];
		$message="Name: ".$_REQUEST['fullName'].
				"\nEmail: ".$_REQUEST['Email'].
				"\nPhone: ".$_REQUEST['phoneNumber'].
				"\nComments: ".$_REQUEST['comments'];
		$spamCheck=$_REQUEST['address'];
		
		if($spamCheck)
			die("Death to all Spambots");
		else {
			mail($to,$subject,$message);
		}
	?>
</head>
	<body>
		<main>
        	<header>
            	<h1>A One Step Away</h1>
            </header>
			<!-- #BeginLibraryItem "/Library/Untitled2.lbi" -->
			            <nav>
              <ul>
                <li> <a href="Main Page.html">Home</a></li>
                <li> <a href="History.html">History</a></li>
                <li> <a href="Pictures.html">Pictures</a></li>
                <li> <a href="Accomodations.html">Accommodations</a></li>
                <li> <a href="Special Sales Item.html">Special Sales Item</a></li>
                <li> <a href="Contact Page.html">Contact Us</a></li>
              </ul>
            </nav>
			<!-- #EndLibraryItem -->
			<section>
			<h2>Thank You for contacting us!</h2> 
            </section>
			<!-- #BeginLibraryItem "/Library/Untitled4.lbi" -->            
			<footer>
            	<div class="contactInfo">
            		<p>For more information on amenities, rates, or reservation for a room*, call us at: (208)-392-4938 or e-mail at: idrailtoot@gmail.com</p>
                </div>
                <div class="extraInfo">
                	<p class="extraInfo">*Advance reservations guaranteed to all credit cards. Full payment is required for each night stay. Minimum 4 weeks cancellation notice required. You may reschedule your reservation or resell your reservation for a refund to be made. *Check in time is 3 pm-8 pm unless previously arranged. Checkout time is 11 am. Sorry no smoking or pets.</p>
                </div>
            </footer>
			<!-- #EndLibraryItem -->
         </main>
	</body>
</html>