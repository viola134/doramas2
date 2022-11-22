<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <style>
            .pressbox {
	width: 0; 
	height: 0; 
	position: fixed; 
	overflow: hidden; 
	left: 0; 
	top: 0; 
	
	z-index: 9999; 
	text-align: center; 
	
	background: rgba(0,0,0,0.7);
} 
.pressbox img {
	opacity: 0; 
	padding: 10px; 
	background: #ffffff; 
	margin-top: 100px; 
    margin-left: 500px;
	 width: 350px;
	box-shadow: 0px 0px 15px #444; 
	height: 500px;
	transition: opacity .25s ease-in-out;
} 
.pressbox:target { 
	width: auto; 
	height: auto; 
	bottom: 0; 
	right: 0; 
} 
.pressbox:target img { 
	opacity: 1; 
}
        </style>
    </head>
<body>
    <div class="compilation">
<div class="first"><a href="#image1"><img src="./images/moyo-imya.jpg" width="300px"></a> 
<a href="#" id="image1" class="pressbox"><img src="./images/moyo-imya.jpg"></a> </div>
<div class="second"><a href="#image2"><img src="./images/kymiho.jpg" width="300px"></a> 
<a href="#" id="image2" class="pressbox"><img src="./images/kymiho.jpg"></a></div>
<div class="third"><a href="#image3"><img src="./images/neznakomzi.jpg" width="300px"></a> 
<a href="#" id="image3" class="pressbox"><img src="./images/neznakomzi.jpg"></a></div>
<div class="fourth"><a href="#image4"><img src="./images/boltun.jpg" width="300px"></a> 
<a href="#" id="image4" class="pressbox"><img src="./images/boltun.jpg"></a></div>
<div class="fifth"><a href="#image5"><img src="./images/potomki-solnca.jpg" width="300px"></a> 
<a href="#" id="image5" class="pressbox"><img src="./images/potomki-solnca.jpg"></a></div>
<div class="sixth"><a href="#image6"><img src="./images/zvetok.jpg" width="300px"></a> 
<a href="#" id="image6" class="pressbox"><img src="./images/zvetok.jpg"></a></div>
    </div>
    
</body>
</html>