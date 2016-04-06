<?php
				$email_from = $_POST['femail'];
				$email_subject = "Prisijunk prie Spindo klubo – Nemokamai!";
				$email_body = "
				<html>
					<head>
						<title></title>
					</head>
					<body>
						<center>
						<table width='490' cellspacing='0' cellpadding='0' border='0' align='center'>
							<tbody>
								<tr>
									<td valign='bottom' align='left' style='padding: 10px;'><span style='text-align: center; font-size: 12px; font-family: Arial,Verdana,Helvetica,sans-serif; color: rgb(51, 51, 51); line-height: 20px;'>Labas,<br>
									<br>
									Tavo draugas yra registruotas Spindo Club narys ir mano, kad Tau taip pat ten labai patiktų. <strong><a href='http://www.spindo.eu/?utm_source=SAF&utm_medium=email&utm_content=SAF&utm_campaign=SAF'>Spindo Club</a>  - tai nauja nemokamų Žaidimų, Specialių pasiūlymų, Nuolaidų, Prizų ir Siurprizų Svetainė. </strong> <br>
									<br>
									Kad lengviau įtikintų, pridėjo ir šį komentarą:<br>
									".$_POST['email_contents']."</span></td>
								</tr>
								<tr>
									<td valign='bottom' align='right' style='padding: 10px 10px 0px;'><a href='http://www.spindo.eu/?id=10483&utm_source=SAF&utm_medium=email&utm_content=SAF&utm_campaign=SAF'>Prisijungti prie Spindo Club!</a></td>
								</tr>
								<tr>
									<td valign='bottom' align='left' style='border-style: solid; border-color: rgb(204, 204, 204); border-width: 0px 0pt 1px; margin: 0pt; padding: 0pt 0pt 2px;'>&nbsp;</td>
								</tr>
							</tbody>
						</table>
						</center>
					</body>
				</html>
				";
				//$success_message_text = __("Thank you for confirming the results validation!","enfold");
					
				$to = "".$_POST['friend_email1'].",".$_POST['friend_email2'].",".$_POST['friend_email3'].",".$_POST['friend_email4'].",".$_POST['friend_email5']."";
				$headers = "From: ".$_POST['fname']." <".$_POST['femail']."> \r\n";
				$headers .= "Reply-To: ".$_POST['femail']." \r\n";
				$headers .= "Content-type: text/html; charset=utf8 \r\n";
				//Send the email!
				mail($to,$email_subject,$email_body,$headers);
				//header('Location: send-success.html');
				//$success_message = $success_message_text;
								
				// Function to validate against any email injection attempts

?>

        <h1>Dar kartą Ačiū!</h1>
        
        <p>Nuoširdžiai dėkojame, kad rekomendavote <a href="<?php echo site_url(); ?>/titulinis">Spindo klubą</a> savo draugams! <br>Tikimės, kad ir jiems jis patiks. <br><br>Jeigu norite, galite <a href="<?php echo site_url(); ?>/aciu">grįžti atgal</a> ir pridėti dar daugiau draugų, kad maksimaliai padidintumėte savo galimybes laimėti.</p>
        
       

