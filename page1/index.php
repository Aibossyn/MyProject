<!DOCTYPE HTML>  
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Page 1</title>
    <link rel="stylesheet" href="index.js">
</head>
<body style="background-color: #550065">  


<div class="basy">
        <h1>Qatar 2022</h1>
        <div class="menu">
            <ul>
                <li>
                    <a href="C:\Users\Legion\Desktop\MyProject\MyProject\page1\index.html">Rega</a>
                </li>
                <li>
                    <a href="C:\Users\Legion\Desktop\MyProject\MyProject\page2\index.html">News</a>
                </li>
                <li>
                    <a href="">About</a>
                </li>
                <li>
                    <a href="">About</a>
                </li>
                <li>
                    <a href="">About</a>
                </li>
                <li>
                    <a href="">About</a>
                </li>
            </ul>
        </div>
    </div>

<div class="container" >
        <div class="basy"><h2>Qatar 2022 World CUP</h2>
            <img src="7.png" alt="">
        </div>
    <div class="orta">
        <div class="foto">
               <img src="4.png" alt="">       
            <div class="soz">
                <div class="soz1">
                    <h2>Mbappe gol salatn sen gana</h2>
                    <h3>Realga ays Airasn</h3>
                </div>
            </div>
        </div>
        

        
        <h1 style="color:white; margin-left:10%">Registor</h1>
          <form style="margin-left:10%;" onsubmit="onSubmit(event)" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
          <input style="margin-top:2%; padding:0.5%; border-radius:20px" id="login" type="text" placeholder="login" name="login" required><br>
          <input style="margin-top:2%; padding:0.5%;border-radius:20px" id="password" type="password" placeholder="Password" name="password" required><br>
          <input style="margin-top:2%; padding:0.5%;border-radius:20px" type="submit" name="submit" value="Submit">  
         </form>
            <a style="margin-left:10%; color:white; font-size:large; margin-top:2%; padding:0.5%;border-radius:20px" href="login.php">Login</a>      
    </div>

        <div class="asty">
            <div class="soz2">
               <p></p>
                <h1>World Cup Foto</h1>
            </div>
            <div class="karta">
                <ul class="nav">
                    <li class="active" data-cont="r1"><img src="2.png" alt=""></li>
                    <li data-cont="r2"><img src="5.png" alt=""></li>
                    <li data-cont="r3"><img src="3.png" alt=""></li>
                    <li data-cont="r4"><img src="6.png" alt=""></li>
                    <li data-cont="r5"><img src="1.png" alt=""></li>
                    <li data-cont="r6"><img src="4.png" alt=""></li>
                    <li data-cont="r7"><img src="8.png" alt=""></li>
                    </ul>
                    <section id="r1" class="section section-one active">
                    <h2><img src="2.png" alt=""></h2>
                    </section>
                    <section id="r2" class="section section-two">
                    <h2><img src="5.png" alt=""></h2>
                    </section>
                    <section id="r3" class="section section-three">
                    <h2><img src="3.png" alt=""></h2>
                    </section>
                    <section id="r4" class="section section-for">
                        <h2><img src="6.png" alt=""></h2>
                    </section>
                    <section id="r5" class="section section-five">
                        <h2><img src="5.png" alt=""></h2>
                    </section>
                    <section id="r6" class="section section-six">
                        <h2><img src="4.png" alt=""></h2>
                    </section>
                    <section id="r7" class="section section-seven">
                        <h2><img src="8.png" alt=""></h2>
                    </section>
                    
                    <button class="previous disable" id="previous">Previous</button>
                    <button class="next" id="next">Next</button>
            </div>
        </div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


  
  
  
  
  

  <?php
  $Pass =$login= "";
  $is = true;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["password"])) {
      $is = false;
    } else {
      $Pass = test_input($_POST["password"]);
    }
    if (empty($_POST["login"])) {
      $is = false;
    } else {
      $login = test_input($_POST["login"]);
    }
    
    
    if($is){
      include 'Conn.php';
      try {
        
        $sql = "INSERT INTO profile 
      VALUES ('$login','$Pass')";
      $pdo->exec($sql);
      session_start();
      $_SESSION['ID'] = $login;
      
      echo "New record created successfully";
      ?>
        <script>
          window.open('DB.php',"_self");
          </script>
      
      <?php
      
      } catch(PDOException $e) {
        echo'Try again with another login';
        
      }
      
      $pdo = null;
    }
    
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
<script src="index.js"></script>
</body>
</html>