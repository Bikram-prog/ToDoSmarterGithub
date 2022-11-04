<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="color-scheme" content="dark light">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" type="image/x-icon" href="https://todosmarter.com/images/todosmarterlogo.jpg">
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
        right: -55px;
        top: 150px;
        z-index: 1000;
      }

      .adsbtn {
        transform: rotate(90deg);
        position: fixed;
        right: -45px;
        top: 300px;
        z-index: 1000;
      }

      .testimonialbtn {
          transform: rotate(90deg);
          position: fixed;
          top: 450px;
          right: -35px;
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
        <div class="col-md-2">
        <!-- <h1>Welcome to ToDoSmarter.com</h1> -->
        <a href="/"><img style="align-content: center; align-items: center; align-self: center;width: 200px;height: 200px;" src="https://todosmarter.com/images/todosmarterlogo.jpg" alt="ToDoSmarter"></a>
        </div>
        <div class="col-md-6 mt-4" style="">
          
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="background: #fff;padding: 25px;
border-radius: 8px;height: 480px;margin-top: 80px;">
        <h2 class="mb-4" style="color: #111;">Login</h2>

<form action="/u/todosmarterlogpost" method="POST">
    {{ csrf_field() }}
    @if (Session::has('regsucmsg'))
        <div class="alert alert-success">{{Session::get('regsucmsg')}}</div>
    @endif

    <a href="{{ $glogin }}" class="btn btn-light w-100 mt-2 login-btn" style="background: #fff;
border: 1px solid #888;
height: auto;
padding: 5px;
border-radius: 50px;"><img style="width: 20px;
height: 20px;
margin-right: 15px;" src="data:image/png;base64,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">Continue With Google</a>
    <div class="form-group mt-2">
      <label style="color: #111;">Username</label>
      <input type="email" value="admin@wwwmedia.world" class="form-control" name="username">
    </div>

    <div class="form-group mt-2">
      <label style="color: #111;">Password</label>
      <input type="password" value="Media2022." class="form-control" name="pswrd">
    </div>

    <div class="d-grid gap-2 mt-4">
    <button type="submit" class="btn btn-primary btn-block mt-2">Login</button>
    </div>

    <div class="d-grid gap-2">
    <a class="text-center text-danger" style="text-decoration: none;
    margin-top: 20px;
    font-weight: 700;
    font-size: 14px;" href="/u/to-do-smarter-signup">Create a free account</a>
    </div>
    
  </form>
    </div>
    <div class="col-md-2"></div>
          </div>
             
          
        </div>
        <div class="col-md-4" style="margin-top: 100px;">
          
        </div>
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
