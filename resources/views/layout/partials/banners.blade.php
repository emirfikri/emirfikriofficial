<style type="text/css">
	.typewriter {
	    font-family: Courier, monospace;
		display: inline-block;
	}

	.typewriter-text {
	    display: inline-block;
	  	overflow: hidden;
	  	letter-spacing: 2px;
	 	animation: typing 5s steps(30, end), blink .75s step-end infinite;
	    white-space: nowrap;
	    /*font-size: 30px;*/
	    font-weight: 700;
	    border-right: 4px solid orange;
	    box-sizing: border-box;
	}

	@keyframes typing {
	    from { 
	        width: 0% 
	    }
	    to { 
	        width: 100% 
	    }
	}

	@keyframes blink {
	    from, to { 
	        border-color: transparent 
	    }
	    50% { 
	        border-color: orange; 
	    }
	}

	/*  
	Thanks to: Usama Tahir
	https://medium.com/@AmJustSam
	*/

	*{
	 margin: 0;
	 padding: 0;
	}

	html{
	    width: 100vw;
	    height: 100vh;
	}


	.blurred-box{
	  position: relative;
	  width: 250px;
	  height: 350px;
	  top: calc(50% - 175px);
	  left: calc(50% - 125px);
	  background: inherit;
	  border-radius: 2px;
	  overflow: hidden;
	}

	.blurred-box:after{
	 content: '';
	 width: 300px;
	 height: 300px;
	 background: inherit; 
	 position: absolute;
	 left: -25px;
	 left position
	 right: 0;
	 top: -25px;  
	 top position 
	 bottom: 0;
	 box-shadow: inset 0 0 0 200px rgba(255,255,255,0.05);
	 filter: blur(10px);
	}


	/* Form which you dont need */
	.user-login-box{
	  position: relative;
	  margin-top: 50px;
	  text-align: center;
	  z-index: 1;
	}
	.user-login-box > *{
	  display: inline-block;
	  width: 200px;
	}

	.user-icon{
	  width: 100px;
	  height: 100px;
	  position: relative;
	  border-radius: 50%;
	  background-size: contain;
	  background-image: url(my/img/untitled.jpg);
	}

	.user-name{
	  margin-top: 15px;
	  margin-bottom: 15px;
	  color: white;
	}

	input.user-password{
	  width: 130px;
	  height: 25px;
	  opacity: 0.4;
	  border-radius: 2px;
	  padding: 5px 15px;
	  border: 0;
	}
</style>

<section id="featured"  style="background-image:url(http://bit.ly/2gPLxZ4);/*background-attachment: fixed;*/
    background-position: center;">
<div class="blurred-box" style="background-color: #e2e2e2;">
  <!--  you dont need the user-login-box html  -->
  <!--  for demo purposes only and its shit  -->
  <div class="user-login-box">
    <span class="user-icon"></span>
    <div class="typewriter"> 
    	<h3 class="typewriter-text user-name">EMIR FIKRI</h3>
    </div>	
    <input class="user-password " type="text"  value="Webdeveloper" />
    
  </div>
  
</div>
			
</section>