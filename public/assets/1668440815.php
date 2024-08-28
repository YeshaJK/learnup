<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> GO TRIP </title>



  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <?php require('links.php') ?>
</head>

<body class="bg-light">

  <?php require('header.php') ?>

  <div class="my-5 px-4">
    <h1 class="fw-semibold h-font text-center"><b> EVENTS </b></h1>
    <p class="fw-light text-center">Life is either a daring adventure or nothing..</p>

    <div class="h-line bg-dark"></div>

  </div>
  
  <?php
include('conn.php');
$selqur = "select * from add_tour";
$res    = mysqli_query($con, $selqur);
while ($row = mysqli_fetch_assoc($res)) {

	?>
  <div class="card mb-4 border-0 shadow">
    <div class="row g-0 p-3 align-items-center">
      <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="<?php echo $row['PHOTO'];?>" class="img-fluid rounded">
      </div>
      
      <div class="col-md-5 px-lg-3 px-md-3 px-0">
        <h3 class="mb-1"><b><?php echo $row['TOUR_NAME'];?></b></h3>
        
        <div class="facilities mb-4">
        <h6 class="mb-1">INCLUDES</h6>
        <span class="badge rounded-pill bg-secondary text-light mb-3 text-wrap lh-base "><?php echo $row['INCLUDES'];?></span>
        </div>
      
        <div class="facilities mb-4">
              <h6 class="mb-1"><i class="bi bi-calendar"> DURATION </i></h6>
              <h6 class="badge rounded-pill bg-secondary text-light mb-3 text-wrap lh-base "><i class="bi bi-people"><?php echo $row['DURATION'];?></i> </h6>

            </div>
       
            <div class="guests mb-4">
              <h6 class="mb-1"><i class="bi bi-people"> AGE GROUP </i></h6>
              <span class="badge rounded-pill bg-secondary text-light mb-3 text-wrap lh-base "><?php echo $row['AGE'];?></span>

            </div>
        <p>
          <a class="btn btn-secondary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><?php echo $row['MONTH'];?></a>
          <!-- <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button> -->
          <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">AUGUST</button>
        </p>
        <div class="row">
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="btn-group" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn btn-outline-secondary">21</button>
                <button type="button" class="btn btn-outline-secondary">12</button>
                <button type="button" class="btn btn-outline-secondary">26</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="btn-group" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn btn-outline-secondary">21</button>
                <button type="button" class="btn btn-outline-secondary">12</button>
                <button type="button" class="btn btn-outline-secondary">26</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
        <h6 class="mb-4"><?php echo $row['PRICE'];?>/person</h6>
        <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none mb-2">BOOK NOW</a>
        <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none">Book Now</a>
      </div>
    </div>


  </div>
  <?php }
?>
 
</body>
<?php require('footer.php') ?>
</html>