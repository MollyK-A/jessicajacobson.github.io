<?php include("incl/header.php"); ?>

    <div class="main">

        <div class="contactform">
            <h2>Kontakta mig här!</h2>
            <?php 
                if(isset($_POST['submit'])){
                    $to = "jessicajmusik@gmail.com"; // this is your Email address
                    $from = $_POST['email']; // this is the sender's Email address
                    $sender_name = $_POST['sender_name'];
                    $subject = "Nytt meddelande!";
                    $subject2 = "Någon vill kontakta dig via din hemsida.";
                    $message = $sender_name . " skrev följande:" . "\n\n" . $_POST['message'];
                    $message2 = "Here is a copy of your message " . $sender_name . "\n\n" . $_POST['message'];

                    $headers = "From:" . $from;
                    $headers2 = "From:" . $to;
                    mail($to,$subject,$message,$headers);
                    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                    echo "Tack för ditt mejl, " . $sender_name . "! Jag återkommer inom kort.";
                    // You can also use header('Location: thank_you.php'); to redirect to another page.
                    }
                ?>

            <form action="" method="post">
            <input type="text" name="sender_name" placeholder="Ditt namn"><br>
            <input type="text" name="email" placeholder="Din epost"><br>
            <br><textarea rows="5" name="message" cols="30" placeholder="Meddelande"></textarea><br>
            <input type="submit" name="submit" value="Skicka">
            </form>
        </div>
        
    </div>


    

<?php include("incl/footer.php"); ?>
