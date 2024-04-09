<head>
<link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
 <style>
    .form-box{
        border:solid;
        margin-top: 20%;
        margin-bottom:30%;
        margin-left:10%;
        border-radius:10px;
        width:80%;
        display: flex; 
        justify-content: center; 
        align-items: center; 
        background-color:grey;

    }
    .form-name{
        margin:5px 5px 5px 5px;
        color: white;
        font-family: Arial;
        font-size:20px;
    }
    .form-pass{
        margin:5px 5px 5px 5px;
        color: white;
        font-family: Arial;
        font-size:20px;
    }
    input{
        margin:7px;
        height:20px;
        width:50%;
    }
</style>
</head>
<div class="form-box">
<form action="#">
    <div class="form-name">
        <label for="class-username" class="uname-cls">username</label>
        <input type="text" class="userlogin" name="uname">
    </div>

    <div class="form-pass">
        <label for="class-password">password</label>
        <input type="password" class="userPass" name="uPass">
    </div>
</form>
</div>