
<!doctype html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?= isset($PageTitle) ? $PageTitle : "Priismo"?></title>
    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>
  </head>


<div class="footer">	

 			<!-- Newsletter-->

 			<div id="newsletter-form">

 				<h3>Stay updated!</h3>
 				 <!-- 100rbased -->
 				 <form action="https://tinyletter.com/priismo" method="post" target="popupwindow" onsubmit="window.open('https://tinyletter.com/priismo', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true"><input type="email" value="" name="EMAIL" class="email" placeholder="email@address.com" required=""/><input type="hidden" value="1" name="embed"/><input type="submit" value="Subscribe" name="subscribe" class="button" /><p style="display:inline-block;padding:0px 8px;"><a href="https://tinyletter.com" target="_blank">powered by TinyLetter</a></p></form>
         

			</div>



     
     	<div>

     		<hr class="solid">
    
 		 <p class="footlist"><a class="footlist" href="https://therealdalbon.cargo.site/">Portfolio</a></p>
  
   		<p class="footlist"><a class="footlist" href="https://write.as/chromalinconia/">Journal</a></p>
   
    	<p class="footlist"><a class="footlist" href="https://www.instagram.com/sansansansan___/?hl=sv">Polaroids</a></p>
  		
  		<p class="footlist" id="mailfooter"><a class="footlist" href="mailto:lorenzodalbon@gmail.com">Email me!</a></p>

		</div>	

	</div> 
