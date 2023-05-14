<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Personal Portfolio Website Design</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="https://www.facebook.com/ramzi.elbadaoui.9" class="fab fa-facebook-f" target="blank"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/ramzi-el-badaoui-26b0b81a7/" class="fab fa-linkedin" target="blank"></a>
      <a href="https://github.com/ramzi1024" class="fab fa-github" target="blank"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/1.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am ramzi el badaoui</h3>
      <span data-aos="fade-up">back-end developer</span>
      <p data-aos="fade-up">I am Ramzi El Badaoui, i am 23 years old and i am a back-end developer.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up"></p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Ramzi El Badaoui</h3>
         <h3 data-aos="zoom-in"> <span>email : </span> ramzi.badaoui.1024@gmail.com </h3>
      <h3 data-aos="zoom-in"> <span>address : </span> Témara,Morocco </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +212652-66-39-75 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 23 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 1+ years </h3>
      </div>

      <a href="cv/EL BADAOUI RAMZI.pdf" class="btn" data-aos="fade-up" download>download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>90%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>60%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>Angular</span> <span>60%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>Laravel</span> <span>50%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2017 - 2018 )</span>
               <h3>Baccalauréat</h3>
               <p>Baccalauréat en sciences physique-chimie lycée Salmane El Farissi Témara.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2018 - 2019 )</span>
               <h3>Faculté</h3>
               <p>Première année à la faculté des sciences de Rabat.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2020 - 2022 )</span>
               <h3>Diplome DTS</h3>
               <p>Technicien spécialisé en techniques de développement informatique ISTA-NTIC Rabat.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2022 - Présent )</span>
               <h3>Licence Professionnelle</h3>
               <p>Licence Professionnelle en inénierie des sciences d'informatique à l'école nationale des sciences appliqées Kénitra (Week-end).</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 01/07/2019 - 01/09/2019 )</span>
               <h3>Installation du FTTH</h3>
               <p>Installation des boites de raccordement fibre optique Orange.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 13/03/2022 - 14/04/2022 )</span>
               <h3>Stage d'observation</h3>
               <p>Stage chez la société QualitAdd Casablanca (Création d'une application web).</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022 - Présent )</span>
               <h3>Back-end Developer</h3>
            <p>Freelancer sur les plateformes (Upwork et Freelancer).</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 13/03/2023 - Présent )</span>
               <h3>Stage de fin d'études</h3>
            <p>Stage chez la Division de l'Informatique et des Méthodes relevante à la ministère du santé.</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>web development</h3>
         <p>Designing and building web applications.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-mobile"></i>
         <h3>mobile development</h3>
         <p>Building mobile applications.</p>
      </div>

    <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>wordpress</h3>
         <p>Build a custom websites for clients including API's,Plugins and theme developement.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-solid fa-bug"></i>
         <h3>fixing bugs</h3>
         <p>Debugging and solving problems.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/1.png" alt="">
         <h3>E-commerce</h3>
         <span>( 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/2.png" alt="">
         <h3>Grocery</h3>
         <span>( 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/3.png" alt="">
         <h3>portfolio</h3>
         <span>( 2023 )</span>
      </div>

     
   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+212652-66-39-75</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>ramzi.badaoui.1024@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Témara, Morocco - 12000</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Ramzi El Badaoui</span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>