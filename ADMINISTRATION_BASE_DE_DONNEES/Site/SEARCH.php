<!DOCTYPE html>
<html>
<head>
  <title>MENTALHEAL Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  
  <div class="wrapper">
      <form action="">
         <h1>SEARCH</h1>
         <div class="input-box">
              <input type="text" placeholder="TYPE MY CITY" required>
         </div>
    
         <button type="submit" class="btn">VALIDATE</button>
         </div>
	
      </form>
  </div>
  
</body>

<style>
     @import url("https://fonts.googleleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh; 
    background: url(AA.jpg) no-repeat;
    background-size: cover;
    background-position: center;
}

.wrapper {
    width: 310px;
    height: 310px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 20px rgba(0, 0, 0, .3);
    color: white;
    border-radius: 20px;
    padding: 30px 40px;
}

.wrapper h1 {
    font-size: 36 px;
    text-align: center;
    color: white;
}

.wrapper .input-box {
    position: relative; 
    width: 100%;
    height: 50px;
    margin: 30px 0;
}

.input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    color: white;
    padding: 20px 40px 20px 20px;
}
 
.input-box input::placeholder {
    color: white;
    text-align: center;
    font-size: 20px;
}

.wrapper .btn {
    padding: 12px 22px;
    width: 110px;
    background: transparent;
    border: none;
    outline: none;
    border-radius: 60px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .5);
    cursor: pointer;
    font-size: 15px;
    color: white;
    margin-bottom: 40px;
    margin-left: 50px;
    font-weight: 100px;
      
    
}

</style>
</html>