<?php
        if(isset($_POST['name']) && !empty($_POST['name'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phonenum = $_POST['phonenum'];
                $datetime = $_POST['datetime'];
                $message = $_POST['message'];
                $finalMessage = "Pozdravljeni, moje ime je ".$name." in bi se rad/a naročil/a za strizenje dne ".$datetime.".".
                "\r\n".
                "\r\n".
                "Prosim vas, da me o prostem terminu obvestite na telefonsko številko ".$phonenum.".".
                 "\r\n".
                 "\r\n".
                "Imam pa še eno vprašanje in sicer: ".$message;
	// CREATE THE EMAIL
	$headers	= "Content-Type: text/plain; charset=iso-8859-1\n";
	$headers	.= "From: $name <$email>\n";
	$recipient	= "sustar.anze@gmail.com";
	$subject = "Rezervacija termina ".$_POST['datetime'];
	$body	= wordwrap($finalMessage, 1024);

	// SEND THE EMAIL TO YOU
	mail($recipient, $subject, $body, $headers);
                header("Location: prejeto.php");
        }


?>