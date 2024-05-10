<!---Evan_Munasinghe--->
<?php 

session_start();

if (isset($_SESSION["email"])) {
        include "logged-in-header.php";
    } else {
        include "logged-out-header.php";
        header("Location: Login-page.php");
        exit();
    }

$email = $_SESSION["email"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online4 Customer Support System</title>
	<link rel="stylesheet" type="text/css" href="IWT_openticket.css">
</head>
<body>
	
		<nav class="nav">
			<ul class="nav">
				<li><a href="Customer Dashboard.php">Dashboard</a></li>
				<li><a href="#">Tickets</a></li>
				<li><a href="feedback-page.php">Feedback</a></li>
				<li><a href="FAQ.php">FAQ</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a href="aboutus.php">About us</a></li>
			</ul>
		</nav>


	<section class="#"></section>

    <div class="wrapper">
        <h2>Open a New Ticket</h2>
	 <p>Fill out our form to notify us of any issues you<br> may be facing, so we can get them resolved <br>as soon as possible.</p>

        <form id="ticketForm" action="Submit_Ticket.php" method="POST" enctype="multipart/form-data">
        <div class="form">           
            <h2>Ticket Details</h2>
            
            <div class="container">
                <h3>Subject</h3>
      
                <div class="select-box">
                   
                    <div class="option-container active ">
                        

                        
                            <input  
                            type="radio" 
                            class="radio" 
                            id="subject 1"
                            name="subject"
                            value="subject 1" 
                            />
                            <label for="subject 1">Subject 1</label>
                       
                            <br>
                        
                            <input  
                            type="radio" 
                            class="radio" 
                            id="subject 2"
                            name="subject"
                            value="subject 2" 
                            />
                            <label for="subject 2">Subject 2</label>
                       
                            <br>
                        
                            <input 
                            type="radio" 
                            class="radio" 
                            id="subject 3"
                            name="subject"
                            value="subject 3" 
                            />
                            <label for="subject 3">Subject 3</label>
                        

                            <br>
                            <input 
                            type="radio" 
                            class="radio" 
                            id="subject 4"
                            name="subject"
                            value="subject 4" 
                            />
                            <label for="subject 4">Subject 4</label>
                    
                </div>
                <div class="selected">
                    --Please select--
                </div>
            </div>







            <div class="container1">
                <h3>Category</h3>
      
                <div class="select-box">
                   
                    <div class="option-container   ">
                        

                        
                            <input 
                            type="radio" 
                            class="radio" 
                            id="category 1"
                            name="category"
                            value="category 1" 
                            />
                            <label for="category 1">Category 1</label>
                        

                            <br>
                            <input 
                            type="radio" 
                            class="radio" 
                            id="category 2"
                            name="category"
                            value="category 2" 
                            />
                            <label for="category 2">Category 2</label>
                            <br>

                       
                            <input 
                            type="radio" 
                            class="radio" 
                            id="category 3"
                            name="category"
                            value="category 3" 
                            />
                            <label for="category 3">Category 3</label>
                        
                            <br>
                        
                            <input 
                            type="radio" 
                            class="radio" 
                            id="category 4"
                            name="category"
                            value="category 1" 
                            />
                            <label for="category 4">Category 4</label>
                    
                </div>
                <div class="selected">
                    --Please select--
                </div>
            </div>

            <div class="comment">
                <h3>Massage</h3>
                <textarea name="massage" cols="60" rows="5" placeholder="--Describe your issues-- "></textarea>
            </div>
            
            <div class="file">
                <h3>Attachment</h3>
                <input type="file" id="uploadBtn" name="attachment" />
                <label for="uploadBtn">Choose a file</label>
            </div>
            
            <div class="btn-group">
				<button type="submit" class="btn submit">Submit</button>
				
			</div>
        </form>

            
        </div>

    </div>

    </div>

    </div>

   

     
    <footer class="footer" >

    <div class="left-links" >
      <ul class="left-links">
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="contactus.php">Contact us</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
        <li><a href="feedback-page.php">Feedback</a></li>
      </ul>
    </div>

    <div class="right-links">
      <ul class="right-links">
        <li><a href="#"><img src="fb-b-logo.png" alt="Facebook" height="auto" width="20px"></a></li>
        <li><a href="#"><img src="ig-b-logo.png" alt="Instagram" height="auto" width="20px"></a></li>
        <li><a href="#"><img src="x-b-logo.png" alt="Twitter" height="auto" width="20px"></a></li>
      </ul>
    </div>

  </footer>




    <script src="IWT_openticket.js"></script>
	
  
</body>

</html>