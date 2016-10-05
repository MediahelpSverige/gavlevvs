<?php

/*

Template name: offert

*/

get_header();

?>

<?php
// define variables and set to empty values
$name = $email = $subject = $ovrigt = $nameErr = $emailErr = $tack = $phone =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["customer_name"]);
  $subject = test_input($_POST["customer_subject"]);
  $email = test_input($_POST["customer_email"]);
  $phone = test_input($_POST["customer_phone"]);
  $ovrigt = test_input($_POST["ovrigt"]);


  if (empty($_POST["customer_name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["customer_name"]);
  }

  if (empty($_POST["customer_email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["customer_email"]);

$headers[] = 'Content-Type: text/html; charset=UTF-8';
$headers[] = 'From: Hemsidan - Förfrågan <info@stilog.se>';
$body = "Namn: ".$name."<br />Telefon: ".$phone."<br />Email: ".$email."<br />".$ovrigt;
$recipients = array('info@stilog.se');

    if(wp_mail( $recipients, $subject, $body, $headers)){

    	$tack = "Tack! Vi återkopplar inom kort!";
    }


  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>





<section class="section-white single">



	<div class="container">

	<div class="container-wrap">

		<?php 

			if ( have_posts() ) {

				while ( have_posts() ) {

					the_title('<h1>','</h1>');

					the_post(); 

					//print_r($post);

					//

					// Post Content here

					the_content();

					//

				} // end while

			} // end if

?>

  <?php 
  	if (isset($_GET['id'])) { 
  		$id = "";
}
  ?>

<?php $id = $_GET['id']; ?>

<div class="col-md-12">
<form method="POST" name="offert"  onsubmit="return form_validation()" action="<?php the_permalink(); ?>">
<div class="row">
<div class="col-md-4">Ditt namn: <span class="error">* <?php echo $nameErr;?></span></div><div class="col-md-8"><input type="text" id="customer_name" name="customer_name" required><br /></div>
</div>
<div class="row">
<div class="col-md-4">
  Din Email: 
  <span class="error">* <?php echo $emailErr;?></span>
</div>
<div class="col-md-8"><input type="text" id="customer_email" name="customer_email" required><br /></div>
</div>
<div class="row">
<div class="col-md-4">Ditt Ämne: </div><div class="col-md-8"><input type="text" id="customer_name" name="customer_subject" value="<?php echo $id; ?>"/><br /></div>
</div>
<div class="row">
<div class="col-md-4">Ditt Telefonnummer: </div><div class="col-md-8"><input type="text" id="customer_phone" name="customer_phone" value=""/><br /></div>
</div>
<div class="row">
<div class="col-md-4">Övrigt: </div><div class="col-md-8"><textarea id="ovrigt" name="ovrigt"></textarea><br/></div>
</div>
<div class="row">
<input class="submit" type="submit" value="Skicka Förfrågan"/>
</div>
</form>
<div class="tack">
	<h2><?php echo $tack; ?></h2>
</div>
</div>

</div>

</div>

</section>



<script type="text/javascript">
function form_validation() {
/* Check the Customer Name for blank submission*/
var customer_name = document.forms["customer_details"]["customer_name"].value;
if (customer_name == "" || customer_name == null) {
alert("Name field must be filled.");
return false;
}

/* Check the Customer Email for invalid format */
var customer_email = document.forms["customer_details"]["customer_email"].value;
var at_position = customer_email.indexOf("@");
var dot_position = customer_email.lastIndexOf(".");
if (at_position<1 || dot_position<at_position+2 || dot_position+2>=customer_email.length) {
alert('Given email address is not valid.');
return false;
}
}
</script>



<?php 

get_footer();

?>