<?php
    if (isset($_POST['email'])) {
            echo filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	            echo "<br/><br/>";
		        }
			 
			     if (isset($_POST['homepage'])) {
			             echo filter_var($_POST['homepage'],
				     FILTER_SANITIZE_URL);
				             echo "<br/><br/>";
					         }
						 ?>
						  
						  <form name="form1"
						  method="post"
						  action="form-sanitize.php">
						      Email Address: <br/>
						          <input type="text"
							  name="email"
							  value="<?php echo
							  $_POST['email']; ?>"
							  size="50"/>
							  <br/><br/>
							      Home Page: <br/>
							          <input
								  type="text"
								  name="homepage"
								  value="<?php
								  echo
								  $_POST['homepage'];
								  ?>" size="50"
								  /> <br/>
								      <br/>
								          <input
									  type="submit"
									  />
									  </form>
