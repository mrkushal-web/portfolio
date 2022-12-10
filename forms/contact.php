<?php
    if (isset($_POST['submit'])) {
        $to = "www.kushalmukherjee@gmail.com";
        $from = $_POST['email'];
        $name = $_POST['name'];
        $sub = $_POST['subject'];
        $message = $_POST['message'];
        $subject = "Wow! Contact from fillup from your website...";

        $html = "
            <table>
                <tr><td>Name:- </td><td>$name</td></tr>
                <tr><td>Email:- </td><td>$from</td></tr>
                <tr><td>Subject:- </td><td>$sub</td></tr>
                <tr><td>Message:- </td><td>$message</td></tr>
            </table>
            ";

        $headers  = "From: " . strip_tags($from) . "\r\n";
        $headers .= "Reply-To: " . strip_tags($from) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $mail=mail($to, $subject, $html, $headers);
        if ($mail==true)
        {
            echo "<script>
                alert('Message Sent Successfully !')
            </script>";
        }
    }
