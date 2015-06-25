# HTML Hider
This tool will hide the HTML source code of your page from the normal 'view source' option.


Use:-
```php
<?php
include('HTMLhider.class.php');
$hider = new \HTMLhider\hider();
$hider->hide($FullHTMLpage);
$hider->activateJS();
echo $hider->getHiddenPage();
?>
```

It will change this page:-
```html
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>HTML Hider</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
    <div class="container">
        <div class="section btl btr bbl bbr">
            <div class="sectitle btl btr bb">HTML Hider</div>
            <div class="seccontent tac">
                This tool will hide the HTML source code of your page from the normal 'view source' option.<br />
                Get a copy from <a href="https://github.com/AyoobAli" target="_blank">GitHub</a>.
            </div>
            <div class="secfooter bbl bbr bt">Copyright (c) 2015 AyoobAli.com</div>
        </div>
    </div>
    </body>
</html>
```

To this:-
```html

<html lang="en"><head><script src="/hjs.php" type="text/javascript"></script></head><body>
  				   		 	    			 	   		 		 	 		 		    	      		 		   		    	 		 			  		  			  				 	  	   	  		  	 	 		 			   	   	   					     		 	    	 	   	       	       	       	       				   		 	    		  	 	 		    	 		  	    					     		 	    	 	   	       	       	       	       	       	       	       	       				   		 		 	 		  	 	 			 	   		    	  	      		 	    			 	   			 	   			      	 		 	 		  	 	 			   	 			 	 	 		 	  	 			 		   				 	  	   	  	    		 		 				 		 			  			 	   		  	 	 		 			  			 	    	 		 	 	 	 	   				  	 			     		  	 	  	   	   	      		   		 		 				 		 			  			 	   		  	 	 		 			  			 	    				 	  	   	  			 	   		  	 	 				    			 	    	 				 		 	    			 	   		 		 	 		 		    			 		  	      		   		 		 	    		    	 			  	  			  		 		  	 	 			 	    				 	 	 	 	 	 	 	 	   	   		   	 		 	  			     	   	   	       	 				  					     		 	    	 	   	       	       	       	       	       	       	       	       				   			 	   		 	  	 			 	   		 		   		  	 	  					  	  	    	 	 	   	  		 	 	  		    	      	  	    		 	  	 		  	   		  	 	 			  	   				    	 				 			 	   		 	  	 			 	   		 		   		  	 	  					     		 	    	 	   	       	       	       	       	       	       	       	       				   		 		   		 	  	 		 			  		 	 		  	      			  	  		  	 	 		 		    				 	  	   	  			  		 			 	   				  	 		 		   		  	 	 			  		 		 	    		  	 	 		  	 	 			 	    	   	   	      		 	    			  	  		  	 	 		  		   				 	  	   	  			  		 			 	   				  	 		 		   		  	 	  	 			  		   		 			  		 			  		  	   	   	       	 				  					     		 	    	 	   	       	       	       	       				    	 				 		 	    		  	 	 		    	 		  	    					     		 	    	 	   	       	       	       	       				   		   	  		 				 		  	   				  	  					     		 	    	 	   	       	       	       	       				   		  	   		 	  	 			 		   	      		   		 		 		   		    	 			  		 			  		  				 	  	   	  		   		 		 				 		 			  			 	   		    	 		 	  	 		 			  		  	 	 			  	   	   	   					     		 	    	 	   	       	       	       	       	       	       	       	       				   		  	   		 	  	 			 		   	      		   		 		 		   		    	 			  		 			  		  				 	  	   	  			  		 		  	 	 		   		 			 	   		 	  	 		 				 		 			   	      		   	  			 	   		 		    	      		   	  			 	   			  	   	      		   	  		   	  		 		    	      		   	  		   	  			  	   	   	   					     		 	    	 	   	       	       	       	       	       	       	       	       	       	       	       	       				   		  	   		 	  	 			 		   	      		   		 		 		   		    	 			  		 			  		  				 	  	   	  			  		 		  	 	 		   		 			 	   		 	  	 			 	   		 		   		  	 	  	      		   	  			 	   		 		    	      		   	  			 	   			  	   	      		   	  		   	   	   	   					  	  	    	 	 	   	  		 	 	  		    	      	  	    		 	  	 		  	   		  	 	 			  	   				    	 				 		  	   		 	  	 			 		   					     		 	    	 	   	       	       	       	       	       	       	       	       	       	       	       	       				   		  	   		 	  	 			 		   	      		   		 		 		   		    	 			  		 			  		  				 	  	   	  			  		 		  	 	 		   		 		   		 		 				 		 			  			 	   		  	 	 		 			  			 	    	      			 	   		    	 		   		  	   	   					     		 	    	 	   	       	       	       	       	       	       	       	       	       	       	       	       	       	       	       	      	 	 	   		 	    		 	  	 			  		  	      			 	   		 				 		 				 		 		    	      			 			 		 	  	 		 		   		 		    	      		 	    		 	  	 		  	   		  	 	  	      			 	   		 	    		  	 	  	      	  	    	 	 	   	  		 	 	  		    	      			  		 		 				 			 	 	 			  	  		   		 		  	 	  	      		   		 		 				 		  	   		  	 	  	      		 				 		  		   	      				  	 		 				 			 	 	 			  	   	      			     		    	 		  			 		  	 	  	      		  		  			  	  		 				 		 		 	  	      			 	   		 	    		  	 	  	      		 			  		 				 			  	  		 		 	 		    	 		 		    	       	  			 			 		  		 	  	 		  	 	 			 			  	      			  		 		 				 			 	 	 			  	  		   		 		  	 	  	  			  	      		 				 			     			 	   		 	  	 		 				 		 			   	 			   				   		   	  			  	   	       	 				  					     		 	    	 	   	       	       	       	       	       	       	       	       	       	       	       	       	       	       	       	      	   			 		  	 	 			 	    	      		    	  	      		   		 		 				 			     				  	  	      		  		  			  	  		 				 		 		 	  	       				   		    	  	      		 	    			  	  		  	 	 		  		   				 	  	   	  		 	    			 	   			 	   			     			  		  			 	   	 				  	 				 		  			 		 	  	 			 	   		 	    			 	 	 		   	   	 			  		   		 		 				 		 		 	  	 				 	     	 				  	 		 				 		 				 		   	  	     	 		 		   		 	  	  	   	   	      			 	   		    	 			  	  		  			 		  	 	 			 	    				 	  	   	  	 					 		   	  		 		   		    	 		 			  		 	 		  	   	   					  	   			 		 	  	 			 	   	  	    			 	 	 		   	   				    	 				 		    	  					   	 			     		 	    	 	   	       	       	       	       	       	       	       	       	       	       	       	       				    	 				 		  	   		 	  	 			 		   					     		 	    	 	   	       	       	       	       	       	       	       	       	       	       	       	       				   		  	   		 	  	 			 		   	      		   		 		 		   		    	 			  		 			  		  				 	  	   	  			  		 		  	 	 		   		 		  		  		 				 		 				 			 	   		  	 	 			  	   	      		   	  		   	  		 		    	      		   	  		   	  			  	   	      		   	  			 	    	   	   					  	    		 		 				 			     				  	 			  	  		 	  	 		  			 		 	    			 	    	       	 	    		   		  	 	  	  	       		  	   		      		   	  		 	 	  	      	     	 				  	 		 				 		 				 		   	  	     	 		 		   		 	  	  	 			  		   		 		 				 		 		 	  				    	 				 		  	   		 	  	 			 		   					     		 	    	 	   	       	       	       	       	       	       	       	       				    	 				 		  	   		 	  	 			 		   					     		 	    	 	   	       	       	       	       				    	 				 		  	   		 	  	 			 		   					     		 	    	 	   	       	       	       	       				    	 				 		   	  		 				 		  	   				  	  					     		 	    	 	   				    	 				 		 	    			 	   		 		 	 		 		    					 
</body></html>
```

Website: [www.AyoobAli.com](http://www.AyoobAli.com)
