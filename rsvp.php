<?php
$nav = "rsvp";
require_once("includes/header.php");
?>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="main">
                <div class="wedding-party">
                    <div class="wedding-party-attendant m-bg-large-divider-graphic has-bio has-photo">
                        
                        <div class="text-wrap">
                        
                            <h3>RSVP</h3>
                            <h5>Kindly RSVP by December 10 2017</h5>
                            <br>  
                                                    
                        	<form method="post" action="form.php" class="bio">
                        		Name(s): <input type="text" name="name" size="30">
                        		<br>
                        		<span style="font-size: 12px !important;" > Please list names of all who are attending.</span>
                        		<p>&nbsp;<p>
                        		Total number of guests (including yourself): <input type="text" name="numberguests" size="2" maxlength="1">
                        		<p>&nbsp;<p>
                        		I / We
                        		<select name="cars">
									<option value="volvo">will</option>
									<option value="saab">will not</option>
                        		</select>
                        		be attending.
                        		<p>&nbsp;<p>
                        		<input type="submit" value="Submit" class="btn m-btn-base">
                        	</form>
                        	
                        </div>
                        
                        <div class="photo">
                            <img src="media/head.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once("includes/footer.php"); ?>