<?php include("_/inc/head.php"); ?>

<h1>Heading 1</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, id, vero, commodi ut aperiam corporis nisi laudantium explicabo quis consequatur debitis eligendi quasi consequuntur asperiores deserunt placeat eos dolor ipsa.</p>
<h2>Heading 2</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, omnis, dolore, quos, numquam facilis voluptatum consectetur minima alias molestiae libero quibusdam rem error adipisci dolorem repellat accusamus dignissimos doloribus et!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, tempora, similique pariatur quo nostrum quia nam quaerat impedit optio commodi iste delectus nihil hic minus dolorum possimus sunt maxime dicta.</p>
<h3>Heading 3</h3>
<blockquote>To guild refined gold, to paint the lilly, to put purfume on the violet... is... well... just silly.</blockquote>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, a non hic nam repellat dolorem voluptatum vero nihil quas beatae consequuntur eligendi et ipsum recusandae vitae magnam laborum laboriosam amet.</p>
<h4>Heading 4</h4>
<img src="http://www.placehold.it/400x300" alt="">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora quae iure eius enim praesentium quia doloremque. Modi, molestias, nisi, cumque pariatur sint quaerat ullam recusandae reprehenderit eos dolores perferendis quidem.</p>

<div id="contact">
	<?php if(isset($hasError) || isset($captchaError) ) { ?>
        <p class="alert">Error submitting the form</p>
    <?php } ?>

	<form id="contact-us" action="contact-submit.php" method="post">
		<div class="formblock">
			<label class="screen-reader-text">Name</label>
			<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="txt requiredField" placeholder="Name:" />
			<?php if($nameError != '') { ?>
				<br /><span class="error"><?php echo $nameError;?></span> 
			<?php } ?>
		</div>
        
		<div class="formblock">
			<label class="screen-reader-text">Email</label>
			<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="txt requiredField email" placeholder="Email:" />
			<?php if($emailError != '') { ?>
				<br /><span class="error"><?php echo $emailError;?></span>
			<?php } ?>
		</div>
        
		<div class="formblock">
			<label class="screen-reader-text">Message</label>
			 <textarea name="comments" id="commentsText" class="txtarea requiredField" placeholder="Message:"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
			<?php if($commentError != '') { ?>
				<br /><span class="error"><?php echo $commentError;?></span> 
			<?php } ?>
		</div>
        
			<button name="submit" type="submit" class="subbutton">Send us Mail!</button>
			<input type="hidden" name="submitted" id="submitted" value="true" />
	</form>			
</div>
			
<?php include("_/inc/foot.php"); ?>