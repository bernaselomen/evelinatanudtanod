<!DOCTYPE.html>   
<html>   
<head>  

<title> Luega Evil Tanudtanod</title>  

<link rel="stylesheet"href=login.css>
  <script src="login.js"></script>
</head>
<style>
Body {
 background: url("EVIL.jpg");
}  
button {  
       background-color:gray ;   
       width: 100%;  
        color:black;   
        padding:15px;   
        margin: 5px 5px;   
        border: 3px solid black;   
        font-family:Arial;
		border-radius:30px;
         }   
 form {   
        border: 5px solid red; 
		 width:30%;
		 padding:80px;
		position:absolute;
		top:50px;
		left:450px;
		margin: 5px 5px; 
    }   
 input[type=text], input[type=password]  {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid blue;   
        box-sizing: border-box; 
    }  
 .container {   
        padding:50px;   
        background-color: skyblue; 
		width: 100%;   
        margin: 10px 0;  
		border:auto;   
        box-sizing:border-box; 
        top:100px;
		left:450px;
    } 
 .selection{
		width:50%;
		padding :15px;
		color:blue;
		border-radius:15px;
	} 
    </style>   
<body>   
<br>
<br> 
    <center> <h1>  Putot Log in</h1>  </center>   

   <form action="login.html"method="post">  
   <br>
<br>
        <div class="container">   
		
            <label>Username : </label>   
            <input type="text"placeholder="Enter Username"id="username"required>  
            <label>Password : </label>   
            <input type="password"placeholder="Enter Password"id="password"required>  
            
        <button><a href="index.php" class="btn btn-danger">Log in</a></button>
            
        
		
            
            
        </div>   
    </form>     
</body>     
</html>  