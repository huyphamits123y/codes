
<?php

include 'inc/header.php';
// include 'inc/slider.php';
//include 'classes/customer.php';

?>
<?php

?>


//<?php
//       $cs = new customer();
//	   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
//	   {
//
//		$insertCustomer = $cs->insert_customer($_POST);
//
//	   }
//		
//		
//		
//?>
//<?php
//       $cs = new customer();
//	   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login']))
//	   {
//
//		$login_Customer = $cs->login_customer($_POST);
//
//	   }
//		
//		
//		
//?>
 <div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Existing Customers</h3>
        	<p>Sign in with the form below.</p>
			<?php
			if (isset($login_Customer))
			   {
				echo "$login_Customer";
			   }

			?>
        	<form action="" method="POST">
                	<input type="text" name="email" class="field" placeholder="Enter Email....">
                    <input type="password" name="password" sclass="field" placeholder="Enter Password....">
                 
                 <p class="note">If you forgot your passoword just enter your email and click <a href="#">here</a></p>
                    <div class="buttons"><div><input type="submit" name="login" class="grey" value="Sign In"></div></div>
			</form>
		</div>
		<?php

		?>


    	<div class="register_account">
    		<h3>Register New Account</h3>
			<?php
			if (isset($insertCustomer))
			{
				echo "$insertCustomer";
			}
			?>
    		<form action="" method="POST">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name="name" placeholder="Enter Name..." >
							</div>
							
							<div>
							   <input type="text" name="city" placeholder="Enter City..." >
							</div>
							
							<div>
								<input type="text" name="zipcode" placeholder="Enter Zipcode...">
							</div>
							<div>
								<input type="text" name="email"  placeholder="Enter Email...">
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" name="address" placeholder="Enter Address...">
						</div>
		    		<div>
						<select id="country" name="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Select a Country</option>         
							<option value="AF">TPHCM</option>
							<option value="AF">HA NOI</option>
							<option value="AF">LONG AN</option>
							<option value="AF">TAY NINH</option>
							<option value="AF">HAI PHONG</option>
							

		         </select>
				 </div>		        
	
		           <div>
		          <input type="text" name="phone" placeholder="Enter Phone...">
		          </div>
				  
				  <div>
					<input type="text" name="password" placeholder="Enter Password..."">
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><input type="submit" name="submit" class="grey" value="Create Account"></div></div>
		    <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>

 <?php

     include 'inc/footer.php';
	
?>