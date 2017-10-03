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
                            <h5>Kindly RSVP by December 20 2017</h5>
                            <br>  
                                                    
                        	<form method="post" action="form.php" class="bio">
                        		Name(s): <input type="text" name="name" size="30">
                        		<br>
                        		<span style="font-size: 12px !important;" > Please list full names of all attendees, including guests.</span>
                        		<p>&nbsp;<p>
                        		Total number of attendees (including yourself): <input type="text" name="numberguests" size="2" maxlength="1">
                        		<p>&nbsp;<p>
                        		I / We
                        		<select name="attend">
									<option name="yes">will</option>
									<option name="no">will not</option>
                        		</select>
                        		be attending.
                        		<p>&nbsp;<p>
                        		Email: <input type="text" name="email" size="30">
                        		<p>&nbsp;<p>
                        		<input type="submit" value="Submit" class="btn m-btn-base">
                        	</form>
                        	
                        	<!--
                        	<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdxZN85fLpD55bolcGyWgjtwtbmhyKKRmU4tJnZQJ-jMThn4w/viewform?embedded=true" width="300" height="350" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                        	-->
                        	
                        </div>
                        
                        <div class="photo">
                            <img src="media/fountain.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once("includes/footer.php"); ?>