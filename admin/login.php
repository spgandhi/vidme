<!DOCTYPE html>
<html lang="en">
  <head>
  	<title> Smart forms - contact form </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css"  href="../css/smart-forms.css">
    <link rel="stylesheet" type="text/css"  href="../css/font-awesome.min.css">
 

    <script type="text/javascript" src="../js/additional-methods.js"></script>
    <script type="text/javascript" src="../js/smart-form.js"></script>     
    

    <!--[if lte IE 9]>
        <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
    <![endif]-->    
    
    <!--[if lte IE 8]>
        <link type="text/css" rel="stylesheet" href="css/smart-forms-ie8.css">
    <![endif]-->
       
       
</head>

<body class="woodbg">

	<div class="smart-wrap">
    	<div class="smart-forms smart-container wrap-2">
        
            <div class="form-header header-primary">
                    <h4><i class="fa fa-comments"></i>Login</h4>
            </div><!-- end .form-header section -->
            
            <form method="post" action="smartprocess.php" id="smart-form">
            	<div class="form-body">
                
                	<div class="section">
                    	<label class="field prepend-icon">
                        	<input type="text" name="username" id="username" class="gui-input" placeholder="Enter username...">
                            <label class="field-icon"><i class="fa fa-user"></i></label>  
                        </label>
                    </div><!-- end section -->
                    
                	<div class="section">
                    	<label class="field prepend-icon">
                        	<input type="password" name="password" id="password" class="gui-input" placeholder="Enter password...">
                            <label class="field-icon"><i class="fa fa-envelope"></i></label>  
                        </label>
                    </div><!-- end section -->
                    
                                                                                                                
                </div><!-- end .form-body section -->
                <div class="form-footer">
                	<button type="submit" class="button btn-primary">Login</button>
                </div><!-- end .form-footer section -->
            </form>
            
        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->

</body>
</html>
