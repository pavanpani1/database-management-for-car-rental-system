<?php
session_start();
if(isset($_SESSION['email']))
{
?>
    <a class="hiddenanchor" id="home"></a>
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style1.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
        <title>KAR Rentals & Services</title>
    </head>
    <body link="warning">
   <!--navbar-->
   <nav class=" navbar navbar-expand-md navbar-light bg-dark fixed-top"  >
       <a class="navbar-brand" href="#home">
          <!-- <img src="images/image2.jpg" width="30" height="30" alt="">-->
           <i class="fas fa-child text-warning fa-3x"></i>
           <!-- <div id="navigation-container"> -->
            <!-- <img src="images/LOGO11.png">  -->
       </a>
       <button type="button" class="navbar-toggler bg-light" data-toggle="collapse"
               data-target="#nav"><span class="navbar-toggler-icon"></span>

       </button>
       <div class="collapse navbar-collapse justify-content-between" id="nav">
           <ul class="navbar-nav">
               <li class="nav-item"><a class="nav-link text-light text-uppercase
        font-weight-bold px-3"  href="#home">Home</a></li>
               <li class="nav-item"><a class="nav-link text-light text-uppercase
          font-weight-bold px-3 " href="#toservice">Services</a></li>

               <li class="nav-item"><a  class="nav-link text-light
          text-uppercase font-weight-bold px-3"href="#sales">Bookings</a></li>
               <li class="nav-item"><a  class="nav-link text-light
          text-uppercase font-weight-bold px-3"href="#companies">Advantages</a></li>
               <li class="nav-item"><a  class="nav-link text-light
          text-uppercase font-weight-bold px-3"href="#feedback">Feedback</a></li>
           </ul>
           <form class="form-inline ml-3">
              <!-- <div class="input-group">

                   <input type="text" class="form-control" placeholder="search">-->

               <a href="logout.php" class="btn btn-dark btn-lg text-light font-weight-bold px-3  ">LOGOUT</a>
              <!-- <button><a href="logout.php">logout</a> </button>-->
                   <div class="input-group-append">
                       <?php
                       $connection=mysqli_connect("localhost","root","","dbms");
                       $sessionvar=$_SESSION['email'];
                       $sql="SELECT * FROM user where User_email='$sessionvar'";
                       $result=mysqli_query($connection,$sql);

                       if($result->num_rows>0) {

                           while ($row = mysqli_fetch_assoc($result)) {
                               $id1= $row['id'];
                           }

                       }
                       ?>
                                                      <a href="update.php?id=<?php echo $id1?>" class="btn btn-dark btn-lg text-light font-weight-bold px-3 ">
                                                          EDIT
                                                      </a>

                   </div>

       </div>

       </form>
       </div>
   </nav>
   <!--nabvar-->

   <!--banner-->
<br><br><br><br>
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
       <div class="carousel-inner">
           <div class="carousel-item active">
               <img src="images/corsel1a.jpg" class="d-block w-100" alt="...">
           </div>
           <div class="carousel-item">
               <img src="images/corsel3a.jpg" class="d-block w-100" alt="...">
           </div>
           <div class="carousel-item">
               <img src="images/hatchback.jpeg" class="d-block w-100" alt="...">
           </div>
       </div>

   </div>
   <div class="main-text hidden-xs ">
       <div>
           <div  class="row justify-content-center
  align-items-center" style="height:100vh" >
               <!--<center><h1 style="padding-bottom: 000px" class="text-warning display-2 font-weight-bold">
                           VEHICLE MANAGEMENT SYSTEM</h1></center>-->
           </div>
           <!--  <h3>

                 Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                 copied from - https://bootsnipp.com/snippets/featured/carousel-static-headline-caption
             </h3>
             <div class="">
                 <a class="btn btn-clear btn-sm btn-min-block" href="http://www.jquery2dotnet.com/">Login</a><a class="btn btn-clear btn-sm btn-min-block"
                                                                                                                href="http://www.jquery2dotnet.com/">Registration</a></div>-->
       </div>
   </div>
   </div>
   <!--end of banner-->
   <a class="hiddenanchor" id="toservice"></a>
   <section class="bg-light p-5">
       <div class="container-fulid">
           <!--tittle-->
           <div class="row">
               <div class="col text-center mb-3" > <br>
                   <h1 class="text-warning display-2 font-weight-bold">SERVICES</h1>
                   <p class="lead text-secondary">which is the most appropriate choice for you.</p>
               </div> 

           </div>
           <div class="row text-center">
               <div class="col-lg-4 col-sm-10 mx-auto mb-5">
                   <i class="fas fa-desktop fa-6x text-warning mb-3"></i>
                   <h1 class="text-secondary">Safety Service</h1>
                   <p class="text-muted my-4">A safety service involves replacing your engine oil, replacing your oil filter, checking under your bonnet, topping up fluids,
                       inspecting belts and hoses and testing the battery.  </p>
                   <a href="service.php" class="btn btn-outline-warning">  SERVICES  </a>
               </div>

               <div class="col-lg-4 col-sm-10 mx-auto mb-5">
                   <i class="far fa-edit fa-6x text-warning mb-3"></i>
                   <h1 class="text-secondary">Major Service</h1>
                   <p class="text-muted my-4"> a major service will cost a little bit more but will also last you for twice as long — 24 months and 30,000km, to be exact.
                       a diagnostic scan and fault code analysis, replacement of the air filter, replacement of the external fuel filter and non-platinum spark plugs.</p>
                   <a href="service.php" class="btn btn-outline-warning">  SERVICES  </a>
               </div>
               <div class="col-lg-4 col-sm-10 mx-auto mb-5">
                   <i class="fas fa-cogs fa-6x text-warning mb-3"></i>
                   <h1 class="text-secondary">Premium Service</h1>
                   <p class="text-muted my-4">Even better than the Major Service and lasting an extra year (36 months) and an extra 15,000km (45,000km total),
                       a premium service should do everything you’ll get in a major service with just two small but crucial additions.</p>
                   <a href="service.php" class="btn btn-outline-warning">  SERVICES  </a>
               </div>

           </div>
       </div>
   </section>

   <!--skills-->
   <a class="hiddenanchor" id="sales"></a> <br><br>

   <section class="bg-light p-5">
       <div class="container-fulid">
           <!--tittle-->
           <div class="row">
               <div class="col text-center mb-3">
                   <h1 class="text-warning display-2 font-weight-bold">BOOKINGS</h1>
                   <p class="lead text-info">Great Prices. Great Vehicles. Great Service.</p>

               </div>

           </div>
           <!-- end of tittle-->
           <!--vehicles-->
           <!-- end of tittle-->
           <?php
    $connection=mysqli_connect("localhost","root","","dbms");
    $sql="SELECT * FROM vehicle";
    $result=mysqli_query($connection,$sql);

    if($result->num_rows>0) {
?>
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                   <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                   <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                   <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
        <?php
        $i=0;
        while ($row = mysqli_fetch_assoc($result)) {


            ?>
<!--            <div class="carousel-item --><?php //if($i==0) echo 'active';?><!--">-->
<!--                <img src="../admin/images1/--><?php //echo $row['Image'];?><!--" class="d-block w-100" alt="...">-->
<!--            </div>-->


            <div class="carousel-item <?php if($i==0) echo 'active';?>">
                <img src="../admin/images1/<?php echo $row['Image'];?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <a href="vinfo.php?id=<?php echo $row['veh_id'];?>">
                    <h5><?php echo $row['veh_model_no'];?></h5>
                    <p><?php echo $row['veh_spec'];?></p></a>
                </div>
            </div>


            <?php
            $i++;
        }
        ?>


               </div>
               <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
               </a>
           </div>

        <?php
        }
    else
    {
        echo "<script>alert('No Vehicle For Sale..');</script>";
    }
        ?>

   </section>
   


   <!--end of project-->

   <!--manfactures-->
   <!-- <a class="hiddenanchor" id="companies"></a>
   <section class="bg-secondary p-2 p-sm-5">

       <div class="container-fulid"> -->
           <!--tittle-->
           <!-- <div class="row">
               <div class="col text-center mb-3">
                   <h1 class="text-warning display-4">MANUFACTURING COMPANIES</h1>
                   <p class="lead text-light"></p>
               </div>

           </div> -->
           <!-- end of tittle-->

<!-- <br>
           <br>
           <div class="row">
               <div class="col-lg-4 col-sm-10 mx-auto mb-4">
                   <div class="card">
                       <img src="images/Mercedes-Benz-logo-640x480.jpg" class="card-img-top">
                       <div class="card-body">
                           <div class="card-tittle">
                               <h3 class="text-muted">Mercedes-Benz</h3>
                           </div>
                           <div class="card-subtittle">
                               <p class="lead text-secondary">The Best or Nothing</p>
                           </div>
                           <div class="text-right">
                               <a href="#">
                                   <i class="fab fa-facebook fa-2x mx-2 text-primary"></i>
                               </a>
                               <a href="#">
                                   <i class="fab fa-twitter fa-2x mx-2 text-info"></i>
                               </a>
                               <a href="#">
                                   <i class="fab fa-youtube fa-2x mx-2 text-danger"></i>
                               </a>

                           </div>

                       </div>

                   </div>
               </div>
               <div class="col-lg-4  col-sm-10 mx-auto mb-4">
                   <div class="card">
                       <img src="images/BMW-logo-640x480.jpg" class="card-img-top">
                       <div class="card-body">
                           <div class="card-tittle">
                               <h3 class="text-muted">
                                   BMW (Bavarian Motor Works) </h3>
                           </div>
                           <div class="card-subtittle">
                               <p class="lead text-secondary">Sheer Driving Pleasure.</p>
                           </div>
                           <div class="text-right">
                               <a href="#">
                                   <i class="fab fa-facebook fa-2x mx-2 text-primary"></i>
                               </a>
                               <a href="#">
                                   <i class="fab fa-twitter fa-2x mx-2 text-info"></i>
                               </a>
                               <a href="#">
                                   <i class="fab fa-youtube fa-2x mx-2 text-danger"></i>
                               </a>

                           </div>

                       </div>

                   </div>
               </div>
               <div class="col-lg-4  col-sm-10 mx-auto mb-4">
                   <div class="card">
                       <img src="images/audi_logo.jpg" class="card-img-top">
                       <div class="card-body">
                           <div class="card-tittle">
                               <h3 class="text-muted">Audi </h3>
                           </div>
                           <div class="card-subtittle">
                               <p class="lead text-secondary">Vorsprung durch Technik.</p>
                           </div>
                           <div class="text-right">
                               <a href="#">
                                   <i class="fab fa-facebook fa-2x mx-2 text-primary"></i>
                               </a>
                               <a href="#">
                                   <i class="fab fa-twitter fa-2x mx-2 text-info"></i>
                               </a>
                               <a href="#">
                                   <i class="fab fa-youtube fa-2x mx-2 text-danger"></i>
                               </a>

                           </div>

                       </div>

                   </div>
               </div>

           </div>
       </div>
   </section> -->
<section id="companies">
    <div><br><br><br><br>
   <img   style="margin-top: 12px; margin-left: 200px;margin-right: auto;" class="footer1"src= "../admin/images1/footer1.png" width="1000" height="500">
   </div>
</section>

   <a class="hiddenanchor" id="feedback"></a>
   <section class="bg-light p-5 ">
       <div class="container-fulid">
           <!--tittle-->

           <div class="row"><br><br><br><br>
               <div class="col text-center mb-3">
                   <h1 class="text-warning display-2">FEEDBACK</h1>
                   <!-- <p class="lead text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                       Iste suscipit qui aliquam.</p> -->
               </div>

           </div>
           <!-- end of tittle-->
           <div class="row justify-content-center">
               <div class="col-lg-6 col-sm-10 col-md-8">
                   <div class="text-center text-secondary">
                       <!-- <h2>FEEDBACK</h2> -->
                       <h3>You Help Us to Grow</h3>
                   </div>
                   <form class="text-muted" action="contact.php" method="GET">
                       <div class="form-group">
                           <label for="name">Name</label>
                           <input type="text" class="form-control" name="name">
                       </div>
                       <div class="form-group">
                           <label for="email">Email</label>
                           <input type="email" class="form-control" name="email" >
                       </div>
                       <div class="form-group">
                           <label for="message">Message</label>
                           <textarea class="form-control" rows="3" name="message"></textarea>
                       </div>
                       <button class="btn btn-outline-warning btn-block" type="submit">
                           Submit 
                       </button>
                   </form>

               </div>


           </div>

       </div>
   </section>

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
    <?php
}
else{
    echo "<script>   window.location.href='index.php';</script>";

}
?>