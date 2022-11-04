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

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <title>To-Do-Smarter</title>

    <style>
      :root {
        --primary-color: #fff;
        --secondary-color: #222;
        --primary-border: rgba(0,0,0,.125);
        --primary-hover: #3742fa;
        --primary-btn-background: #5352ed;
        --primary-btn-border: #3742fa;
        --btn-color: #fff;
        --btn-close: #fff;
        --active-menu:#5352ed;
        --active-menu-border: #3742fa;
      }

      .dark-theme {
        --primary-color: #222;
        --secondary-color: #cfcfcf;
        --primary-border: rgba(90, 90, 90, 0.267);
        --primary-hover: #3f3f3f;
        --primary-btn-background: #000000;
        --primary-btn-border: #1a1a1a;
        --btn-color: #cfcfcf;
        --btn-close: #fff;
        --active-menu:#000000;
        --active-menu-border: #161616;
      }

      .light-theme {
        --primary-color: #fff;
        --secondary-color: #222;
        --primary-border: rgba(0,0,0,.125);
        --primary-hover: #3742fa;
        --primary-btn-background: #5352ed;
        --primary-btn-border: #3742fa;
        --btn-color: #fff;
        --btn-close: #fff;
        --active-menu:#5352ed;
        --active-menu-border: #3742fa;
      }

      

      body {
        background-color: var(--primary-color);
        color: var(--secondary-color);
      }

      .btn-primary {
        color: var(--btn-color) !important;
        background-color: var(--primary-btn-background) !important;
        border-color: var(--primary-btn-border) !important;
      }

      .btn-close {
        background-color: var(--btn-close) !important;
      }

      .modal-content {
        background-color: var(--primary-color);
        color: var(--secondary-color);
      }

      .form-control {
        background-color: var(--primary-color);
        color: var(--secondary-color);
      }

      .form-control:focus {
        background-color: var(--primary-color);
        color: var(--secondary-color);
      }

      

      .list-group a {
        background-color: var(--primary-color);
        color: var(--secondary-color);
      }

      .list-group-item {
        border: 1px solid var(--primary-border) !important;
      }

      h2 {
        font-size: 44px;
      }

      .todo_add {
        width: 100px;
        height: 100px;
        background: #ffa502;
        padding: 10px;
        border-radius: 50px;
        position: fixed;
        bottom: 50px;
        right: 100px;
        z-index: 1000;
      }

      .todo_add i {
        font-size: 45px;
        margin-top: 16px;
        margin-left: 20px;
        color: #fff;
      }

      .active {
        background-color: var(--active-menu) !important;
        border-color: var(--active-menu-border) !important;
        color: #fff !important;
      }

      .modal-title {
        font-size: 34px;
      }

      label {
        font-weight: 500;
        font-size: 16px;
      }

      span {
        font-weight: 600 !important;
        font-size: 13px !important;
        
      }

      .rec_all{
        font-weight: 700; 
        border: 1px solid #ccc; 
        float: right;
      }

      .completedbtn {
        border: 1px solid #ccc;
      }

      .globalA a:hover {
        background-color: var(--primary-hover) !important;
        color: #fff !important;
        transition: background-color 0.2s linear;
        border-color: var(--primary-hover);
      }

      .justify-content-between {
        display: flex;
      }

      

      @media  only screen and (min-device-width : 100px) and (max-device-width : 1200px) {

        .todo_add i {
            font-size: 35px;
            margin-top: 11px;
            margin-left: 16px;
            color: #fff;
        }

        .todo_add {
          width: 80px;
          height: 80px;
        }

        .todo_add {
          right: 5px;
          bottom: 30px;
        }

        .list-group-item {
          margin-bottom: 10px !important;
        }

        .complt {
          width: 100%;
          margin-top: 10px;
        }

        .justify-content-between {
          display: table;
        }

        small {
          font-size: 18px !important;
        }

        .rec_all {
          font-weight: 700; 
          border: 1px solid #ccc; 
          float: inherit;
          width: 100%;
          margin-top: 20px;
        }

        h2, .modal-title {
          font-size: 28px;
        }

      }
    </style>

    <!---------- loading css --------------->
    <style type="text/css">
    
@keyframes ldio-80snwug7ytt {
  0% { transform: translate(-50%,-50%) rotate(0deg); }
  100% { transform: translate(-50%,-50%) rotate(360deg); }
}
.ldio-80snwug7ytt div {
  position: absolute;
  width: 54px;
  height: 54px;
  border: 8px solid #ffa502;
  border-top-color: transparent;
  border-radius: 50%;
}
.ldio-80snwug7ytt div {
  animation: ldio-80snwug7ytt 1.3513513513513513s linear infinite;
  top: 50px;
  left: 50px
}
.loadingio-spinner-rolling-zumvkxrie8 {
  width: 44px;
  height: 44px;
  display: inline-block;
  overflow: hidden;
  background: none;
}
.ldio-80snwug7ytt {
  width: 100%;
  height: 100%;
  position: relative;
  transform: translateZ(0) scale(0.44);
  backface-visibility: hidden;
  transform-origin: 0 0; /* see note above */
}
.ldio-80snwug7ytt div { box-sizing: content-box; }
/* generated by https://loading.io/ */


    </style>

  </head>
  <body>
    
    

    <div class="container-lg mt-4 globalA">
      <div class="row mb-2">
        <div class="col-md-12">
          <h2>Todo List</h2>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Recipient</h5>
                
              </div>
              <div class="modal-body">

                <form action="/u/editreciepentpost" method="POST">
                    @csrf

                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">  {{ $error }}</div>
                    @endforeach

                    <div class="form-group mb-2">
                        <label>Name*</label>
                        <input class="form-control" type="text" name="title_rec" value="{{ $data[0]->reciepent_name }}" placeholder="Full name" autocomplete="off" required>
                      </div>
              
                      <div class="form-group mb-2">
                        <label>Email*</label>
                        <input class="form-control" type="email" name="email_rec" value="{{ $data[0]->reciepent_email }}" placeholder="Email ID" autocomplete="off" required>
                      </div>
              
                      <div class="form-group mb-2">
                        <label>Set Password*</label>
                        <input class="form-control" type="text" name="psw_rec" value="{{ $data[0]->reciepent_passwrd }}" placeholder="Set Password" autocomplete="off" required>
                      </div>
              
                      <div class="form-group mb-2">
                        <label>Choose Option*</label>
                        <select name="opt_rec" class="form-control">
                        <option value="0" <?php echo ($data[0]->reciepent_status ? 'selected' : ''); ?>>Without Admin Access</option>
                        <option value="1" <?php echo ($data[0]->reciepent_status ? 'selected' : ''); ?>>With Admin Access</option>
                        </select>
                        </div>

                    <input type="hidden" name="rec_id" value="{{ $data[0]->reciepent_id }}">
              
                      
                      <!-- <div class="alert alert-primary text-center" id="add_reciepent_msg" style="display: none;"></div> -->
              
              
                    </div>
                    <div class="modal-footer">
                      
                      
                      <button type="submit" class="btn btn-primary">Edit Recipient</button>
                    </div>
                </form>
                
                
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
        
      </div>
    </div>


   


    


    
  


    <!-- Add todo list modal -->



<footer class="text-left container-lg" style="font-size: 12px; font-weight: 600;">
      <!-- <p class="text-muted">&copy; 2021 WWWMEDIA.WORLD. All Rights Reserved.</p> -->
  </footer>




    <script src="https://www.globallove.online/content/assets/30603563/jquery.js"></script>

    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd',
                minDate: 0,
    });
  } );

  function add_reciepent(){
      var name = $("#title_rec").val();
      var email = $("#email_rec").val();
      var psswrd = $("#psw_rec").val();
      var status = $("#opt_rec").val();
      $.get("/u/add-reciepent/"+ name + "/" + email + "/" + psswrd + "/" + status, function(result){
        
        
      });
    }
    
  </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
      
      // CKEDITOR.replace( 'desc' );

      //dark theme
      var theme = document.getElementById("theme_chng");

      theme.onclick = function () {
        document.body.classList.toggle("dark-theme");
      }

      // Use matchMedia to check the user preference
      const prefersDark = window.matchMedia('(prefers-color-scheme: dark)');

      toggleDarkTheme(prefersDark.matches);

      // Listen for changes to the prefers-color-scheme media query
      prefersDark.addListener((mediaQuery) => toggleDarkTheme(mediaQuery.matches));

      // Add or remove the "dark" class based on if the media query matches
      function toggleDarkTheme(shouldAdd) {
        document.body.classList.toggle('dark-theme', shouldAdd);
      }

    

    </script>

    <script>
      //tooltip initializer
      
        $("[data-bs-toggle=tooltip").tooltip();
    </script>

<script>
      CKEDITOR.replace( 'desc_todo' );
    </script>

  </body>
</html>
