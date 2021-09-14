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

  span {
    height: 150px;
    width: 35px;
    display: inline-block;
    text-align: center;
    padding-top: 65px;
  }

  span:before {
    border-left: 1px solid black;
    content: "";
    display: block;
    height: 65px;
    left: 32px;
    position: absolute;
    top: 0px;
    width: 1px;
    z-index: 0;
  }

  span:after {
    border-left: 1px solid black;
    content: "";
    display: block;
    height: 65px;
    left: 32px;
    position: absolute;
    top: 88px;
    width: 1px;
    z-index: 0;
  }

  .button{
    width:120px;
    height:36px;
    background-color:#49274A;
    background: #49274A 0% 0% no-repeat padding-box;
    border-radius: 18px;
    opacity: 1;
    color:#F8EEE7
  }


</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Create Tribute</title>
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
        <h2 class="sub-header">Create A Tribute For A Loved One</h2>
        <br>
        <h3 class="sub">PLEASE TELL US WHO THE TRIBUTE IS ABOUT</h3>
        <br>

        <div class="row" style="margin-top:20px; ">
          <div class="col-md-3 col-sm-12" style="text-align:center;">
            <img src="https://www.delhi.edu/campus-life/activities/images/male-profile-picture-vector-1862205.jpg"
              style="background: var(--unnamed-color-ffffff) 0% 0% no-repeat padding-box; background: #FFFFFF 0% 0% no-repeat padding-box;border: 1px solid #94618E;border-radius: 90px;opacity: 1; width: 180px; height: 180px;">
          </div>

          <div class="col-md-9">
            <div class="row">
              <form>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size:14px; color:#49274A">First Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" ria-describedby="emailHelp"
                      placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1" style="font-size:14px; color:#49274A">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" ria-describedby="emailHelp"
                      placeholder="">
                  </div>
                </div>
              </form>
            </div>

            <div class="row">
              <form>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1" class="la">Date</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1" class="la">Month</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1" class="la">Year</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1" class="la">Date</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1" class="la">Month</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1" class="la">Year</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </div>
              </form>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleFormControlSelect1" class="la">Place Of Birth</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" ria-describedby="emailHelp"
                    placeholder="">
                </div>
              </div>
              <div class="col-md-6">
                <label for="exampleFormControlSelect1" class="la">Gender</label>
                <div class="row" style="padding:5px;">
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="g1" id="exampleRadios1" value="1" checked>
                      <label class="form-check-label " for="exampleRadios1" style="font-size: 14px;
                      color: #49274A">
                        Male
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="g1" id="exampleRadios2" value="2">
                      <label class="form-check-label " for="exampleRadios2" style="font-size: 14px;
                        color: #49274A">
                        Female
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="font-size:14px; color:#49274A">Reason Of Death</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" ria-describedby="emailHelp"
                    placeholder="">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group purple-border">
                  <label for="exampleFormControlTextarea4" style="font-size: 14px;color: #49274A">About This
                    Person</label>
                  <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

      <div class="col-md-2 col-sm-2 col-lg-2"></div>
    </div>
  </div>

  <div class="clar:both"></div>
  <br>

  <div class="con" style="padding:20px">
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-5 col-sm-12">
        <h4 class="">YOUR TRIBUTE OPTION</h4>
        <br>
        <h5 class="">Change a layout design, you can always change at later time</h5>

      </div>
      <div class="col-md-3">

      </div>
    </div>

    <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-5 col-sm-12">
        <div class="row" style="text-align:center">
          <div class="col-md-4 col-sm-12">
            <img src="img/create_step/elegant.png" alt="" height="113px" width="140px">
            <div class="form-check" style="text-align:center">
              <input type="radio" name="2" id="exampleRadios3" value="3" checked>
              <label class="form-check-label " for="exampleRadios3" style="font-size: 14px;
                      color: #49274A;"> </label>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <img src="img/create_step/simple.png" alt="" height="113px" width="140px">
            <div class="form-check" style="text-align:center">
              <input type="radio" name="2" id="exampleRadios4" value="4">
              <label class="form-check-label " for="exampleRadios4" style="font-size: 14px;
                      color: #49274A;"> </label>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <img src="img/create_step/stylish.png" alt="" height="113px" width="140px">
            <div class="form-check" style="text-align:center">
              <input type="radio" name="2" id="exampleRadio5" value="5">
              <label class="form-check-label " for="exampleRadio5" style="font-size: 14px; color: #49274A;"> </label>
            </div>
          </div>
        </div>

      </div>

      <div class="col-md-1" style="width: 50px; margin-left: -20px;">
        <span class="hidden-xs">
          or
        </span>
      </div>

      <div class="col-md-3">
        <div class="box" style="padding:50px; background-color:d3d2d1">
          Upload Image here
        </div>
        <div class="form-check" style="text-align:center">
          <input type="radio" name="2" id="exampleRadio6" value="6">
          <label class="form-check-label " for="exampleRadio6" style="font-size: 14px; color: #49274A;"> </label>
        </div>
      </div>


      <div class="col-md-1">

      </div>
    </div>
  </div>

  <div class="con" style="padding:20px">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 col-sm-12">
        <h5 style="font-size: 14px; color: #49274A; font-weight:600">Set Privacy</h5> <br>
        <div class="form-check">
          <input type="radio" name="g3" id="public" value="public" checked>
          <label class="form-check-label " for="public" style="font-size: 14px; color: #49274A;"> Public - Anyone can view the tribute </label>
        </div> <br>
        <div class="form-check">
          <input type="radio" name="g3" id="private" value="private">
          <label class="form-check-label " for="private" style="font-size: 14px; color: #49274A;"> Private - Only you and invited friends can view the tribute </label>
        </div>
        <br>

        <button class="button"> Create </button>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>

  <br>

  <?php include 'includes/footer.php'?>

  <?php include 'includes/scripts.php'?>

  <script>


  </script>


</body>

</html>