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

    <title>To-Do-Smarter</title>

    <style>
      
      body {
        background-color: #111111;
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

    * {box-sizing: border-box;}
    body {font-family: Verdana, sans-serif;}
    .mySlides {display: none;}
    img {vertical-align: middle;}
    
    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }
    
    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }
    
    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }
    
    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: none;
      transition: background-color 0.6s ease;
    }

    .carousel-item img {
        /* width: 150% !important; */
        height: 300px !important;
    }
    
    .active {
      background-color: #717171;
    }
    
    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }
    
    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    
    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
    </style>

  </head>
  <body>
    
    
    {{-- https://www.globallove.online/images/www-media-world-logo.png --}}
    <div class="container-fluid mt-4">
      <div class="row mb-2">
        <div class="col-md-4">
        <!-- <h1>Welcome to ToDoSmarter.com</h1> -->
        

        {{-- <div class="slideshow-container mt-5">

            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="https://todosmarter.com/images/todoads1.jpeg" style="width:100%">
              <div class="text"></div>
            </div>
            
            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="https://todosmarter.com/images/todoads2.jpeg" style="width:100%">
                <div class="text"></div>
              </div>
            
              <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="https://todosmarter.com/images/todoads3.jpeg" style="width:100%">
                <div class="text"></div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="https://todosmarter.com/images/todoads4.jpeg" style="width:100%">
                <div class="text"></div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="https://todosmarter.com/images/todoads5.jpeg" style="width:100%">
                <div class="text"></div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="https://todosmarter.com/images/todoads6.jpeg" style="width:100%">
                <div class="text"></div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="https://todosmarter.com/images/todoads7.jpeg" style="width:100%">
                <div class="text"></div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="https://todosmarter.com/images/todoads8.jpeg" style="width:100%">
                <div class="text"></div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="https://todosmarter.com/images/todoads9.jpeg" style="width:100%">
                <div class="text"></div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="https://todosmarter.com/images/todoads10.jpeg" style="width:100%">
                <div class="text"></div>
              </div>
            
            </div>
            <br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div> --}}

<div id="carouselExampleDark" class="carousel carousel-dark slide mt-5" data-bs-ride="carousel">

 

    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="https://todosmarter.com/images/todoads1.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="https://todosmarter.com/images/todoads2.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://todosmarter.com/images/todoads3.jpeg" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="https://todosmarter.com/images/todoads4.jpeg" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="https://todosmarter.com/images/todoads5.jpeg" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="https://todosmarter.com/images/todoads6.jpeg" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="https://todosmarter.com/images/todoads7.jpeg" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="https://todosmarter.com/images/todoads8.jpeg" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="https://todosmarter.com/images/todoads9.jpeg" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="https://todosmarter.com/images/todoads10.jpeg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  {{-- <a class="btn btn-danger mt-5">Login</a>

  <a class="btn btn-link mt-5">Create an account</a> --}}

        </div>
        {{-- <div class="col-md-2">
        
             
          
        </div> --}}
        <div class="col-md-8">

            <div class="text-center">
                <a href="/"><img style="align-content: center; align-items: center; align-self: center;width: 200px;height: 200px;" src="https://todosmarter.com/images/todosmarterlogo.jpg" alt="ToDoSmarter"></a>
            </div>

            

            <h3 class="text-center mt-3" style="color:  #d35400;font-weight: 700;"><a href="/" style="text-decoration: none; color:#d35400">ToDoSmarter.com</a></h3>
            <p class="text-center" style="color:  #d35400;font-size: 20px;font-weight: 700;">Project Planning The Affordable Way</p>
            <p class="text-center" style="color:  #d35400;font-size: 20px;font-weight: 700;">Totally Free</p>
            
            
            <p class="text-center" style="color:  #f1c40f;font-size: 17px;"><em><strong>
                ● No Credit Card Required<br />
                ● ToDoSmarter.com is a fully Functional Premium<br />
                ● Turn-Key Project Planning System<br />
                ● All Levels are free to Access&nbsp;<br />
                ● Excel download<br />
                ● Excel Upload (template required)<br />
                ● Extended Recipients Profiles<br />
                ● See what Projects are assigned to what Recipients (at a glance)<br />
                ● All, Open, In Progress, Delayed, and Completed Shown (at a glance)<br />
                ● Posting a Project Video and File Upload Available<br />
                ● Monthly Breakdown of Projects<br />
                ● Real Time Tally of Projects Status<br />
                ● Project start &amp; finish dates (at a glance)<br />
                ● Project Reference No. Assigned to Recipient when created<br />
                ● Easy Tracking of Recipient&rsquo;s Performance with a 0 - 5 Rating (at a glance)<br />
                ● Optional Delete &amp; Edit of Projects on Front Page<br />
                ● Confirmation Emails sent to Recipients for new Project Allocation<br />
                ● Suggestion Box - we want to hear your thoughts<br />
                ● $20 a month to see no ads<br />
                ● This and many many more features to this Amazing FREE Essential Business Tool</strong></em></p>

                <p class="text-center" style="color:  #c0392b;font-size: 20px;font-weight: 700;"><a href="/" style="text-decoration: none; color:#c0392b">Check it out now, it's free</a></p>
                

          {{-- <p style="color: #fff;font-size: 20px;margin-left: 20px;"><em>● Free(No Credit Card Requirred)</em></p>
          <p style="color: #fff;font-size: 20px;margin-left: 20px;"><em>● One Company Per Login</em></p>
          <p style="color: #fff;font-size: 20px;margin-left: 20px;"><em>● Unlimited Admin/User/Reciepents</em></p>
          <p style="color: #fff;font-size: 20px;margin-left: 20px;"><em>● Unlimited Departments</em></p>
          <p style="color: #fff;font-size: 20px;margin-left: 20px;"><em>● Excel Report</em></p>
          <p style="color: #fff;font-size: 20px;margin-left: 20px;"><em>● Easy To Use</em></p>
          <p style="color: #fff;font-size: 20px;margin-left: 20px;"><em>● Easy To Follow Calendar To Show Progress</em></p>
          <p style="color: #fff;font-size: 20px;margin-left: 20px;"><em>● 4 stages in Progress,Delayed,Completed,no Completed</em></p>
          <p style="color: #fff;font-size: 20px;margin-left: 20px;"><em>● Ability To Add Files</em></p>
          <p style="color: #fff;font-size: 20px;margin-left: 20px;"><em>● Ability To Add Notes</em></p> --}}
        </div>

      </div>

      <div class="row mb-2">
        <div class="col-md-4">
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
                  <input type="email" class="form-control" name="username">
                </div>
            
                <div class="form-group mt-2">
                  <label style="color: #111;">Password</label>
                  <input type="password" class="form-control" name="pswrd">
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
        <div class="col-md-4"></div>
      </div>
    </div>
      



    <script src="https://www.globallove.online/content/assets/30603563/jquery.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
    

  </body>
</html>
