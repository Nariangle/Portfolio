<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700');
        .body{
        font-family: 'cal';
        background-size: cover;
        background-repeat: no-repeat; 
        text-transform: uppercase;
        }

        .navbar{
background: none;
z-index: 1;
width:90%;
padding: 0px 100px;
box-sizing: border-box;
position: fixed;
top: 0;
left: 50%;
transform: translateX(-50%);
height: 80px;
display: flex;
justify-content: space-between;
align-items: center;
}

.navbar-list ul{
display: flex;
align-items: center;
list-style: none;
padding: 0px;
}
.navbar-list ul li a{ 
    padding:10px;
    font-size: 30px;
     text-decoration:none;
    color: black;
    font-weight: bold;
    display: block;
}

.navbar-list ul li button{
background: linear-gradient(112.82deg, purple 19.93%, #ad50ca 102.22%);
border: none;
padding: 10px 20px;
font-weight: bold; color: white;
border-radius: 9px;
cursor: pointer;
transform: .4s ease;
text-transform: uppercase;
}
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <h1>LOGO</h1>
        </div>
        <div class="navbar-list">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Portfolio</a></li>
                
            </ul>
        </div>
</nav>
<script src="../assets/js/main.js"></script>
</body>
</html>