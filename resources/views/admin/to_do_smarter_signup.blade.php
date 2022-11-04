<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="color-scheme" content="dark light">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" type="image/x-icon" href="http://todosmarter.com/images/todosmarterlogo.jpg">
    <link rel="manifest" href="https://www.globallove.online/manifest.json">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2843148547180331"
     crossorigin="anonymous"></script>

    <title>To-Do-Smarter</title>

    <style>
      
      body {
        background-color: #3573FE;
        margin-bottom: 100px !important;
      } 

      .flex {
        display: flex;
        flex: 1;
        flex-wrap: nowrap;
        align-content: center;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        height: 100vh;
      }

      .flex a {
          margin-right: 60px;
      }

      .ksbtn {
        transform: rotate(90deg);
        position: fixed;
        right: -50px;
        top: 150px;
        z-index: 1000;
      }

      .adsbtn {
        transform: rotate(90deg);
        position: fixed;
        right: -40px;
        top: 300px;
        z-index: 1000;
      }

      .testimonialbtn {
          transform: rotate(90deg);
          position: fixed;
          top: 450px;
          right: -30px;
          z-index: 1000;
          font-weight: bold !important;
      }

      /*-- testimonial Section CSS --*/
#testimonial {
    margin-top: 30px;
    padding: 30px 0px 20px;
    color: #fff;
    background-color: #283270;
    margin-bottom: -30px;
}
#testimonial h2 {
    font-style: italic;
    color: #fff;
    font-size: 26px;
    text-align: center;
}
#testimonial .client-img {
    width: 80px;
    height: 80px;
    overflow: hidden;
    border: 3px solid #fff;
    margin: 0px auto;
    border-radius: 100%;
    position: absolute;
    left: 0px;
}
#testimonial .carousel-content {
    padding: 20px 0px 20px 100px;
    width: 70%;
    margin: 0 auto;
    position: relative;
}
#testimonial h3 {
    font-size: 17px;
    color: #fff;
    margin-bottom: 30px;
    font-style: italic;
    text-align: right;
}

.carousel-item p {
  font-size: 22px !important;
  font-weight: bold;
  text-align: center;
}
#testimonial p {
    font-size: 15px;
}
#testimonial .client-img img {
    width: 100%;
}
#testimonial .carousel-control-prev,
#testimonial .carousel-control-next {
    font-size: 36px;
}


    </style>

  </head>
  <body>

    <button onclick="showCntct()" href="javascript:void(0)" data-toggle="modal" data-target="#contact_modal" type="button" class="btn btn-success btn-sm ksbtn d-sm-block">Customer Support</button>

    <a onclick="showCntct()" href="javascript:void(0)" data-toggle="modal" data-target="#contact_modal" class="btn btn-info btn-sm adsbtn ">No More Ads <i class="fas fa-ban"></i></a>

    <a onclick="showCntct()" href="javascript:void(0)" data-toggle="modal" data-target="#contact_modal" class="btn btn-warning btn-sm testimonialbtn ">Testimonial </a>

    

    {{-- https://www.globallove.online/images/www-media-world-logo.png --}}
    <div class="container-lg mt-4 pb-5 h-100">
      <div class="row mb-2 h-100">
        <div class="col-md-4">
        <a href="/"><img style="align-content: center; align-items: center; align-self: center;width: 300px;height: 300px;" class="img-fluid" src="http://todosmarter.com/images/todosmarterlogo.jpg" alt="ToDoSmarter"></a>
        </div>
        <div class="col-md-4" style="margin-top: 150px;margin-top: 150px;background: #fff;padding: 25px;
border-radius: 8px;">
        
        <h2 style="color: #111; display: flex; align-content: center; align-items: center; align-self: center; flex-direction: column;">Create Account</h2>

        <form action="/u/todosmartersignuppost" method="POST">
            {{ csrf_field() }}
            @if (Session::has('msg'))
                <div class="alert alert-danger">{{Session::get('msg')}}</div>
            @endif
            <!-- <div class="form-group">
              <label style="color: #111;">Company Name</label>
              <input type="text" class="form-control" name="comp_name" required>
            </div> -->

            <div class="form-group">
              <label style="color: #111;">Name</label>
              <input type="text" class="form-control" name="name" required>
            </div>

            <div class="form-group">
              <label style="color: #111;">E-mail</label>
              <input type="email" class="form-control" name="username" required>
            </div>

            <div class="form-group">
              <label style="color: #111;">Password</label>
              <input type="password" class="form-control" name="pswrd" required>
            </div>

            <div class="form-group">
              <label style="color: #111;">Confirm Password</label>
              <input type="password" class="form-control" name="repswrd" required>
            </div>

            <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary btn-block mt-2">Signup</button>
            </div>

            <div class="d-grid gap-2">
            <a class="text-center btn btn-link" style="text-decoration: none;
            margin-top: 20px;
            font-weight: 500;
            font-size: 14px;" href="/u/to-do-smarter-login">Already have an account? Login</a>
            </div>
            
          </form>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>

   

    <div class="container-fluid text-center" style="position: fixed;
    left: 0;
    bottom: 0;background-color: #0d6efd !important;padding: 10px;">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                <a href="https://thedailyplanet.app/" data-bs-toggle="tooltip" data-bs-placement="top" title="The Daily Planet" target="_blank"><img style="width: 50px;height: 40px;border-radius: 100%;" class="img-fluid" src="https://todosmarter.com/images/dailyplanet.png"></a>
    
                <a href="https://globallove.online/" style="margin-left: 20px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Date Free (Formally GlobalLove)" target="_blank"><img style="width: 45px;height: 45px;border-radius: 100%;" class="img-fluid" src="https://todosmarter.com/images/datefreelogo1.png"></a>
    
                <a href="/" style="margin-left: 20px;" data-bs-toggle="tooltip" data-bs-placement="top" title="To Do Smarter (Project Management)"><img style="width: 45px;height: 45px;border-radius: 100%;" class="img-fluid" src="http://todosmarter.com/images/todosmarterlogo.jpg" alt="ToDoSmarter"></a>
    
                <a href="https://bescrow.world/" style="margin-left: 20px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Buy & Sell (Only available in Australia & Phillipines)" target="_blank"><img style="width: 45px;height: 45px;border-radius: 100%;" class="img-fluid" src="http://todosmarter.com/images/bescrow.png"></a>
    
                <a href="https://globallove.online/group-chat-terms" style="margin-left: 20px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Online group chat for over 18 years" target="_blank"><img style="width: 45px;height: 45px;border-radius: 100%;" class="img-fluid" src="http://todosmarter.com/images/groupchat.png"></a>
    
                  <a style="text-decoration: none; color: #fff; margin-left: 20px;font-weight:700;" href="/terms">Terms & Conditions</a>
                  <a style="text-decoration: none; color: #fff; margin-left: 20px;font-weight:700;" href="/privacy">Privacy</a>
                  <a style="text-decoration: none; color: #fff; margin-left: 20px;font-weight:700;" href="/cookies">Cookies</a>

                  <a style="text-decoration: none; color: #fff; margin-left: 20px;font-weight:700;" onclick="showCntct()" href="javascript:void(0)" data-toggle="modal" data-target="#contact_modal">Contact Us</a>
    
                  <a onclick="showSg()" href="javascript:void(0)" data-toggle="modal" data-target="#suggestion_modal" style="margin-left: 20px;" data-toggle="tooltip" data-placement="top" title="Suggestion Box"><img style="width: 45px;height: 45px;border-radius: 100%;" class="img-fluid" src="https://globallove.online/images/suggestion-box.png"></a>
                  
              </div>
          </div>
      </div>
      </div>

         <!-- Modal suggestion over popup-->
<div class="modal fade" id="suggestion_modal" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Confirmation</h5>
      </div>
      <div class="modal-body">
        You must be signed up to use these facilities
      </div>
      <div class="modal-footer">
        <button type="button" onclick="hideModalSg();" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Contact us over popup-->
<div class="modal fade" id="contact_modal" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Confirmation</h5>
      </div>
      <div class="modal-body">
        You must be signed up to use these facilities
      </div>
      <div class="modal-footer">
        <button type="button" onclick="hideModalCntct();" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
      



    <script src="https://www.globallove.online/content/assets/30603563/jquery.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
      function add_testimonial() {
        $('#testimonial_modal').modal('show');
    }
    
      function hideModalTstmnl() {
        $('#testimonial_modal').modal('hide');
      }
    
      </script>

<script>

  function showCntct() {
    $('#contact_modal').modal('show');
  }
  
    function hideModalCntct() {
    $('#contact_modal').modal('hide');
  }
  
  function showSg() {
    $('#suggestion_modal').modal('show');
  }
  
    function hideModalSg() {
    $('#suggestion_modal').modal('hide');
  }
  </script>

  </body>
</html>
