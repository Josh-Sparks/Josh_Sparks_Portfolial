<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="How to Tech Color.css">
<?php
		$to ="duane.erickson@mtchs.org";
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
	<main><!-- #BeginLibraryItem "/Library/Untitled2.lbi" -->		<header>
        	<h1>How To Tech</h1>
    	</header>
    	<nav>
        	<ul>
            	<li><a href="How to Tech.html">Home</a></li><li>
                <a>Programing</a>
                	<ul>
                    	<li><a href="How_to_Tech_HTML.html">HTML</a></li><li>
                        <a href="How to Tech JAVA.html">JAVA</a></li>
                    </ul></li><li>
                <a>Graphics</a>
                	<ul>
                    	<li><a href="How to Tech Illustrater.html">Illustrater</a></li><li>
                        <a href="How to Tech Photoshop.html">Photoshop</a></li><li>
                        <a href="How_to_Tech_Blender.html">Blender</a></li><li>
                        <a href="How to Tech Video.html">Video</a></li>
                    </ul></li><li>
                <a>Misc</a>
                	<ul>
                    	<li><a href="How to Tech Minecraft.html">Minecraft</a></li><li>
                        <a href="How to Tech RPG Maker.html">RPG Maker</a></li>
                    </ul></li><li>
                <a href="How_To_Tech_Contact_Page.html">Contact Us</a>
                </li>
            </ul>
   		</nav><!-- #EndLibraryItem --><section>
    	<h2> Contact Us</h2> 
    	<p>Thank you for submitting your thoughts. We will look into it and see what we can do.</p>
	</section><!-- #BeginLibraryItem "/Library/Untitled3.lbi" -->   		<footer>
        	<p>All Content on this Webpage is under Copyright.</p>
            <img src="images/How-To-Tech-Logo---Final-(1).gif" width="221" height="210" alt=""/>
        </footer><!-- #EndLibraryItem --></main>
</body>
</html>