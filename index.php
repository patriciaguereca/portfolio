<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="favicon-16x16.png" type="image/gif" sizes="16x16">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
<title>Patricia Guereca</title>

<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">
<script type="text/javascript">
$(function() { // $(document).ready shorthand
  $('.monster').fadeIn('slow');
});

$(document).ready(function() {

  /* Check the location of each desired element */
  $('.hideme').each(function(i) {

    var bottom_of_object = $(this).position().top + $(this).outerHeight();


    /* If the object is completely visible in the window, fade it it */
    if (bottom_of_object) {

      $(this).animate({
        'opacity': '1'
      }, 2500);

    }

  });


});
</script>
<style type="text/css">
.carousel {
	width: 100%;

}
.carousel-control {
	width: 8%;
}
.carousel-indicators .active {
	background-color: #c0cadb;
}
.carousel-indicators li {
	border: 1px solid black;
}
.carousel-inner {
	height: 400px;
}

.success {
	color: red;
	text-align: center;
	font-size: 15px;
}
.hideme {
	opacity: 0;}

.hover figure img {
	-webkit-filter: grayscale(0) blur(0);
	filter: grayscale(0) blur(0);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover figure:hover img {
	-webkit-filter: grayscale(100%) blur(3px);
	filter: grayscale(100%) blur(3px);
}
</style>


</head>
<body>
<header class="container-fluid">
	<div class="row navbar-fixed-top">
		<h1 class="col-sm-8">Patricia Guereca</h1>

	</div>
</header>
<section class="jumbotron">
	<div class="container-fluid">
		<div class="row text-center hideme">
		<img src="logo.png" alt="logo_pg">
		<h2>Hello, World.</h2>
		<h3>I'm Patricia Guereca. A web developer.</h3>
		</div>
	</div>
</section>
<section class="container-fluid">
	<div class="row is-table-row">
		<div class="col-sm-6">
		<h1>About Me</h1>
		<p>My name is Patricia Guereca and I am from Fort Worth, Texas. I graduated 
		from Tarleton State University with a Bachelors of Science in Computer
		Information Systems. My passion is web development, and I created this website
		to showcase my capabilities of building websites but also to have my
		own platform.  </p>
		<div class="hover">
			<figure><img src="me.jpg" alt="me" class="img-thumbnail center-block"></figure>	
		</div>
	
				<br>
		<div class="well text-center">
		Click <a href="http://patriciaguereca.com/resume_website.pdf" target="_blank">here </a>for my resume.<br>
	Contact Me: <a href="mailto:patriciaguereca20@gmail.com">patriciaguereca20@gmail.com</a><br>
	You can also find me on <a href="https://github.com/patriciaguereca" target="_blank">GitHub</a>, 
	<a href="https://www.linkedin.com/in/patriciaguereca/" target="_blank">LinkedIn</a>, 
	<a href="https://www.twitter.com/Pattyguereca" target="_blank">Twitter</a>, 
	<a href="https://www.instagram.com/patriciacodes/" target="_blank">Instagram</a>, or 
	<a href="https://www.facebook.com/pattyguereca" target="_blank">Facebook</a>.
	<br>
</div>


	<div id="contact_results"></div>
	<form name="contactForm" id="contact_body" method="post" action="contact_me.php">
	<div class="form-group row">
		<fieldset>
		<label for="first-name-input">Name</label>
				<input type="text" class="form-control" name="name">
		</fieldset>

	</div>
	<div class="form-group row">
		<fieldset>
			<label for="name-text-input">Email</label>
		<input type="text" class="form-control" placeholder="email@example.com" name="email">
		</fieldset>
		
	</div>
	<div class="form-group row">
		<fieldset> 
		<label for="name-text-input">Message</label>
		<textarea type="text" class="form-control" name="message"></textarea>
		</fieldset>
		<fieldset>
			<label><span>Attachment</span>
        <input type="file" name="file_attach[]"  />
    </label>
		</fieldset>
	</div>
		<fieldset>
				<button type="submit" class="btn btn-block" name="submit">Submit</button>
		</fieldset>

	</form>

		</div>
		
			<div class="col-sm-6">
				
				
				
  <h2>Portfolio</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="website_image2.png" alt="Desktop views" style="width:100%;">
      </div>

      <div class="item">
        <img src="website_image3.png" alt="Desktop view" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="website_image5.png" alt="Desktop view" style="width:100%;">
      </div>
      <div class="item">
        <img src="website_image4.png" alt="Mobile View" style="width:100%;">
      </div>
      <div class="item">
        <img src="screenshot.png" alt="Mobile view" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>




				<h3>My Skills</h3>
		<table class="table table-hover">
 			<tbody>
 				<tr>
 					<th>HTML/CSS</th>
 					<td>When I began to code this is what I started off with. I built my first website from the 
 					ground up using only HTML/CSS, that was about 4 years ago. Since then my passion to built sites has grown.</td>
 				</tr>
 				<tr>
 					<th>JavaScript</th>
 					<td>Still learning my way around it. I've learned about alert methods, getElementById, dates, and some loops.</td>
 				</tr>
 				<tr>
 					<th>PHP/MYSQL</th>
 					<td>I used PHP for a class and learned my way around a database and displaying its data.
 					I used XAMPP for the server and phpMyAdmin for the database and MySQL statements.</td>
 				</tr>
 				<tr>
 					<th>SQL</th>
 					<td>I learned to use SQL statements by using a database and manipulating the tables, to get the output we need. I use Oracle SQL Developer.
 					</td>
 				</tr>
 				<tr>
 					<th>C#</th>
 					<td>I used Visual Studio to write my C# code and built business applications that would calculate pay etc., as well as a website.</td>
 				</tr>
 				<tr>
 					<th>Java</th>
 					<td>I took Intro to Java in college. I created classes and methods. I used while, for loops, and if statements.
 					 We used the scanner to get information. I was also introduced to constructors.</td>
 				</tr>
 				<tr>
 					<th>Bootstrap</th>
 					<td>I built this site for my personal use, using Bootstrap. My goal
 					was to learn a framework because I know they are growing in popularity.</td>
 				</tr>
 			</tbody>

</table>

		</div>

	</div>
	
	



<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
var allowed_file_size = "1048576";
var allowed_files = ['image/png', 'image/gif', 'image/jpeg', 'image/pjpeg'];
var border_color = "#C2C2C2"; //initial input border color

$("#contact_body").submit(function(e){
    e.preventDefault(); //prevent default action 
	proceed = true;
	
	//simple input validation
	$($(this).find("input[data-required=true], textarea[data-required=true]")).each(function(){
            if(!$.trim($(this).val())){ //if this field is empty 
                $(this).css('border-color','red'); //change border color to red   
                proceed = false; //set do not proceed flag
            }
            //check invalid email
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
            if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                $(this).css('border-color','red'); //change border color to red   
                proceed = false; //set do not proceed flag              
            }   
	}).on("input", function(){ //change border color to original
		 $(this).css('border-color', border_color);
	});
	
	//check file size and type before upload, works in modern browsers
	if(window.File && window.FileReader && window.FileList && window.Blob){
		var total_files_size = 0;
		$(this.elements['file_attach[]'].files).each(function(i, ifile){
			if(ifile.value !== ""){ //continue only if file(s) are selected
                if(allowed_files.indexOf(ifile.type) === -1){ //check unsupported file
                    alert( ifile.name + " is unsupported file type!");
                    proceed = false;
                }
             total_files_size = total_files_size + ifile.size; //add file size to total size
			}
		}); 
       if(total_files_size > allowed_file_size){ 
            alert( "Make sure total file size is less than 1 MB!");
            proceed = false;
        }
	}
	
	//if everything's ok, continue with Ajax form submit
	if(proceed){ 
		var post_url = $(this).attr("action"); //get form action url
		var request_method = $(this).attr("method"); //get form GET/POST method
		var form_data = new FormData(this); //Creates new FormData object
		
		$.ajax({ //ajax form submit
			url : post_url,
			type: request_method,
			data : form_data,
			dataType : "json",
			contentType: false,
			cache: false,
			processData:false
		}).done(function(res){ //fetch server "json" messages when done
			if(res.type == "error"){
				$("#contact_results").html('<div class="error">'+ res.text +"</div>");
			}
			
			if(res.type == "done"){
				$("#contact_results").html('<div class="success">'+ res.text +"</div>");
			}
		});
	}
});
</script>




</section>
<footer class="container-fluid">
	<div class="row">
		<p class="col-sm-4">&copy; 2017 Patricia Guereca</p>
			<ul class="col-sm-8">
				<li class="col-sm-1">
					<a href="https://www.instagram.com/patriciacodes/" target="_blank">
					<img src="insta.png" width="40" height="40" alt="instagram">
					</a>
				</li>
				<li class="col-sm-1">
					<a href="https://www.twitter.com/Pattyguereca" target="_blank">
					<img src="twitter.png" width="40" height="40" alt="twitter">
					</a>
				</li>
				<li class="col-sm-1">
					<a href="https://www.linkedin.com/in/patriciaguereca/" target="_blank">
					<img src="linkedin.png" width="40" height="40" alt="linkedin">
					</a>
				</li>
				<li class="col-sm-1">
					<a href="https://www.facebook.com/pattyguereca" target="_blank">
					<img src="facebook.png" width="40" height="40" alt="facebook">
					</a>
				</li>
			</ul>
	</div>
</footer>
</body>
</html>
