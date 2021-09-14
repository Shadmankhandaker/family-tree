<style>
  body {
    background-color: #F8EEE7 !important;
    overflow-x: hidden !important;
  }

  .sub-header {
    color: #49274A;
    font-size: 34px;
    font-family: 'OpenSans-regular';
    line Spacing: 44;
    character Spacing: 0;
  }

  .sub {
    letter-spacing: var(--unnamed-character-spacing-0);
    text-align: left;
    letter-spacing: 0px;
    color: #49274A;
    opacity: 1;
    font-size: 16px;
  }

  .la {
    font-size: 14px;
    color: #49274A
  }


  .button {
    width: 120px;
    height: 36px;
    background-color: #49274A;
    background: #49274A 0% 0% no-repeat padding-box;
    border-radius: 18px;
    opacity: 1;
    color: #F8EEE7;
    margin-bottom:20px
  }

  .package{
    margin-bottom:20px
  }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Create Tribute 2</title>
  <?php include 'includes/links.php'?>
</head>

<body>
  <?php include 'includes/nav.php'?>
  <?php include 'includes/preloader.php' ?>

  <br>

  <div class="con">
    <div class="row" style="padding:20px">
      <div class="col-md-2 col-sm-2 col-lg-2"></div>

      <div class="col-md-8 col-sm-8 col-lg-8">
        <h2 class="sub-header">One More Step</h2>
        <br>
        <h3 class="sub">Choose a plan for your tribute.</h3> 
        <h3 class="sub">You can always decide at a later time.</h3>
        <br>
      </div>

      <div class="col-md-2 col-sm-2 col-lg-2"></div>
    </div>
  </div>

  <div class="con" style="padding:20px">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6" style="text-align:center;">
            <div class="package">
              <a href="#">
                <img src="img/create_step/basic_version.png" alt="" height="285px" width="285px">               
              </a>
            </div>
            <button class="button"> Select </button>
          </div>
          <div class="col-md-6" style="text-align:center;">
            <div class="package">
              <a href="#">
                <img src="img/create_step/upgrade_version.png" alt="" height="385px" width="300px" >
              </a>
            </div>  
            <button class="button"> Select </button>          
          </div>
        </div>


        
        

      </div>
      <div class="col-md-2"></div>
    </div>
  </div>

  <div class="clar:both"></div>
  <br>





  <?php include 'includes/footer.php'?>

  <?php include 'includes/scripts.php'?>



</body>

</html>