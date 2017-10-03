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
                            <div id="form-entry">
                                <h3>RSVP</h3>
                                <h5>Kindly RSVP by December 20 2017</h5>
                                <br/>  
                                <div id="form-error-message">Please check guest names and number of attendees.</div>
                            	<form id="lb-rsvp" class="bio">
                            		Name(s): <input type="text" name="guest-names" id="guest-names" placeholder="i.e., John Doe, Sarah Smith" size="30">
                            		<br>
                            		<span style="font-size: 12px !important;" > Please list full names of all attendees, including guests.</span>
                            		<p>&nbsp;</p>
                            		Total number of attendees (including yourself): <input type="text" name="guest-number" id="guest-number" size="2" maxlength="1">
                            		<p>&nbsp;</p>
                            		I / We
                            		<select id="attending-status" name="attending-status">
    									<option name="yes">will</option>
    									<option name="no">will not</option>
                            		</select>
                            		be attending.
                            		<br/><br/>
                            		<input type="submit" value="Submit" class="btn m-btn-base">
                            	</form>
                            </div>
                            <div id="form-success">
                                <h1>Thank you for responding!</h1>
                            </div>
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