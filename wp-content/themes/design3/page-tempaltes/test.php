<?php







/*







Template name: bokatest







*/




get_header();




?>



<?php print_r(error_get_last()); ?>



<!--




<section class="banner boka-banner" style="background-image:url('http://trepebilvard.se.mediahelpcrm.se/html/img/sparks.jpg')">







	<div class="container">







	<div class="banner-wrap" >






		<div class="boka-banner-text-box">







		</div>







	</div>







	</div>







</section>



-->



<!--







<section class="boka">















<div class="container boka-cont">







<div class="boka-nav">







	<ul>







		<li>1. Generell info</li>







		<li>2. Välj tid</li>







		<li>3. Dina uppgifter</li>







		<li>4. Bekräfta</li>







	</ul>







</div>







	<div class="boka-wrap">















	<form class="boka">







		<div class="boka-field">







			<label><h3>Önskad verkstadstjänst</h3></label>







			<input type="text" id="service">







		</div>







		<div class="boka-field">







		<label><h3>Vilket fordon?</h3></label>







		<input type="text" id="service">







		</div>







		<div class="boka-field">







		<label><h3>Övrig information</h3></label>







		<input type="textarea" id="service">







		<div class="boka-field">







		<input type="submit" class="red-btn" value="GÅ VIDARE TILL NÄSTA STEG">







	</form>







		







		</div>







	</div>















</section>







-->







<?php











// define variables and set to empty values



$carYear = $carModel =  $carMotor =  $carBrand = $name = $email = $subject = $ovrigt = $nameErr = $emailErr = $tack = $phone =  "";







$service = array();







if ($_SERVER["REQUEST_METHOD"] == "POST") {











	$carYear = test_input($_POST["car_year"]);



	$carModel = test_input($_POST["car_model"]);



	$carMotor = test_input($_POST["car_motor"]);



	$carBrand = test_input($_POST["car_brand"]);





	if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $check) {


    	$services[] = $check;

    	//print_r($services);
            //echo $check; //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.
    }
}







	$name = test_input($_POST["name"]);







	$lastname = test_input($_POST["lastname"]);







	//$service = test_input($_POST["customer_name"]);











	$done1 = test_input($_POST["done1"]);







	$done2 = test_input($_POST["done2"]);











	//$subject = test_input($_POST["customer_subject"]);











	$email = test_input($_POST["email"]);











	$phone = test_input($_POST["phone"]);











	$ovrigt = test_input($_POST["ovrigt"]);















	if (empty($_POST["name"])) {











		$nameErr = "Name is required";











	} else {











		$name = test_input($_POST["name"]);











	}











	if (empty($_POST["email"])) {





		$emailErr = "Email is required";





	} else {











		$email = test_input($_POST["email"]);











		$headers[] = 'Content-Type: text/html; charset=UTF-8';











		$headers[] = 'From: Hemsidan - Förfrågan <info@trepebilvard.se.mediahelpcrm.se/>';





		$subject="Offertförfrågan";





		$body = "Namn: ".$name."<br />Telefon: ".$phone."<br />Email: ".$email."<br />".$ovrigt."</br><h2>Bilinformation: </h2>".$carYear."Bilmodell".$carModel;











		$recipients = array($email, 'johanwendin@gmail.com');











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







<form method="POST" name="offert"  onsubmit="return form_validation()" action="<?php the_permalink(); ?>">







	<div class="container-wrap">







		<div class="container">







			<div class="row">



			<div class="col-md-12"><h2 class="title">Varmt välkomna att boka tid här nedan</h2></div></div>



			<div class="row">



				<div class="boka-wrap col-md-8 col-sm-8">



					<div class="info-section" id="bil">



					<div class="row">



					<div class="col-md-12">

		

						<h4 class="sub-title">Information om bilen</h3>



						</div>





</div>



<div class="row">



						<div class="col-md-6 col-sm-6">

							<label>Välj bilmärke</label>



							<input type="text" name="car_brand" placeholder="">



							<label>skriv in modell</label>



							<input type="text" name="car_model" placeholder="">



						</div>

						<div class="col-md-6 col-sm-6">



							<label>Motorstorlek/variant</label>



							<input type="text" name="car_motor" placeholder="">



							<label>Registreringsdatum:</label>



							<input type="text" name="car_year" placeholder="2016">

			</div>

			</div>



							<div class="clearfix"></div>



						</div>







						<div class="info-section" id="tjanst">







							<h4 class="sub-title">Vilken tjänst är du intresserad av? Klicka på rubriken för att läsa mer</h4>







							<?php $count = 0; ?>







							<?php $query8 = new WP_Query(array( 'post_type' => 'tjanst', 'post_per_page' => -1) );







							while ( $query8->have_posts() ) : $query8->the_post(); ?>







					<?//php print_r($post);



					$parent_id = $post->post_parent;











					?>











					<?php if ($post->post_parent == 0) {  







						$prev_parent_id = $post->ID







						?>



						<?php if($count != 0){ ?>



					<div class="clearfix"></div>	



						</div>



						<?php }else { ?>











							<?php } ?>



							<div class="service-boka-wrap">



		



								<div class="service-header">



																							<?php the_title('<h4>', '</h4>');?>



									<div class="tjanst-image"><?php the_post_thumbnail();?></div>







									<?php $count++ ?>



								</div>



								<?php }else if($post->post_parent == $prev_parent_id){ ?>



									<div class="tjanst-item-boka col-md-3 col-sm-3">



										<?php 



										the_title('<h5>', '</h5>'); ?>







										<input type="checkbox" name="check_list[]" value="<?php echo get_the_title(); ?>">



									</div>







									<?php }







									?>







								<?php endwhile;?>



								<?php wp_reset_postdata(); ?>





								<div class="clearfix"></div>


							</div>



















							<div class="info-section" id="person">



								<h4 class="sub-title">Dina uppgifter</h4>



								<div class="col-md-6 col-sm-6">



									<label>Förnamn*</label>



									<span class="error">* <?php echo $nameErr;?></span>



									<input type="text" name="name" placeholder="">



									<label>Telefon*</label>



									<input type="text" name="phone" placeholder="">



								</div>







								<div class="col-md-6 col-sm-6">



									<label>Efternamn*</label>



									<span class="error">* <?php echo $nameErr;?></span>



									<input type="text" name="lastname" placeholder="">



									<label>E-post*</label>



								 	<span class="error">* <?php echo $emailErr;?></span>



									<input type="text" name="email" id="email" placeholder="">



								</div>



								<div class="calendar-wrap">



								<h4 class="sub-title">Önskemål om tid</h4>



								<div class='col-md-5'>



								<label>Jobbet ska utföras tidigast</label>



									<div class="form-group">



										<div class='input-group date' id='datetimepicker1'>







											<input type='text' name="done1" class="form-control" />



											<span class="input-group-addon">



												<span class="glyphicon glyphicon-calendar"></span>



											</span>



										</div>



									</div>



								</div>



								<div class='col-md-5'>



									<label>Jobbet ska utföras senast</label>



									<div class="form-group">



										<div class='input-group date' id='datetimepicker2'>



											<input type='text' name="done2" class="form-control" />



											<span class="input-group-addon">



												<span class="glyphicon glyphicon-calendar"></span>



											</span>



										</div>



									</div>



								</div>



																<div class="clearfix"></div>



								</div>



								<div class="col-sm-12 col-md-12">



									<label>Meddelande till verkstaden. Vänligen specificera så noggrant du kan vad du önskar ha hjälp med på bilen gällande service & reparation.</label>



									<textarea name="ovrigt" id="ovrigt"></textarea>



								</div>



								<h4 class="sub-title">Kontrollera dina uppgifter och klicka sedan på knappen så här vi av oss så fort vi kan!</h4>



								<div class="col-md-12">



									<input class="btn-blue" type="submit" value="Begär offert">







								</div>



								<div class="clearfix"></div>



							</div>






		</div>



	</div>







	</form>



<div class="tack">







	<h2><?php echo $tack; ?></h2>







</div>







</div>







</div>







</section>











<script type="text/javascript">







function form_validation() {







/* Check the Customer Name for blank submission*/







var customer_name = document.forms["customer_details"]["name"].value;







if (customer_name == "" || customer_name == null) {







alert("Name field must be filled.");







return false;







}




/* Check the Customer Email for invalid format */






var customer_email = document.forms["customer_details"]["email"].value;






var at_position = customer_email.indexOf("@");






var dot_position = customer_email.lastIndexOf(".");






if (at_position<1 || dot_position<at_position+2 || dot_position+2>=customer_email.length) {






alert('Given email address is not valid.');






return false;




}





}





</script>







<script type="text/javascript">



(function($) { 


   		$('#datetimepicker1').datetimepicker({
   		});



		$('#datetimepicker2').datetimepicker({

		});



})(jQuery)



   $(document).ready(function(){









		$('.service-header').click(function(){



			console.log(this);



			var parent = $(this).parent();



			$('.tjanst-item-boka', parent).slideToggle();



		})



























	});







</script>















<?php get_footer(); ?>


