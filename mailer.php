<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// then send the form to your email
	mail( 'mercuryd@burlingtontelecom.net', 'Contact Form', print_r($_POST,true) );
}

// otherwise, let the spammer think that they got their message through

// redirect to thank you page

header('Location: plattsburghstudenthousing.com/thankyou.html');
exit('Redirecting you to plattsburghstudenthousing.com/thankyou.html');

?>
