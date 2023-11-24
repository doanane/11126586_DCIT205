<? php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@doanane@st.ug.edu.gh.com';

$email_subject = 'New from Submission';

$email_body = "User Name: $name.\n".
            = "User Name: $name.\n".
            = "User Name: $name.\n".
            = "User Name: $name.\n";

$to = 'anane365221@gmail.com';

$headers ="From: $email_from \r\n";

$headers ="Reply-To: $Visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header(Location: website CONTACT.html); 
?>
