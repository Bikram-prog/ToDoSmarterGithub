<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="https://todosmarter.com/images/todosmarterlogo.jpg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <link href="css/style.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="https://unpkg.com/dropzone/dist/dropzone.css" rel="stylesheet"/>
   <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>

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
      .dropzone{
    border: 1px solid #ccc !important;
    border-radius: 10px !important;
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

      .dropzone {
    background: white;
    border-radius: 5px;
    border: 2px dashed rgb(0, 135, 247);
    border-image: none;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
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

.dropzone {
    background: white;
    border-radius: 5px;
    border: 2px dashed rgb(0, 135, 247);
    border-image: none;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}

    </style>

  </head>
  <body>

    <div class="container-lg mt-4 globalA">
      <div class="row mb-2">
        <div class="col-md-12">
          <h2>Add Attachment</h2>
        </div>
      </div>
      
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6 mt-2">
          @if($image < '5')
            <div class="dropzone" id="myDropzone"></div>
            <input type="hidden" id="prod_id" value="<?php echo $lstprodid; ?>">
            <p class="text-center mt-2">You can upload upto 5 attachments.</p>
            @else
            <p>Maximum 5 images are allowed.</p>
            @endif
            
            
            <div class="lol"></div>
            <div class="row mt-4">
              
              <div class="col-12">
                  <div class="row" id="img_loop">
                  
                                                       
                      
                      
                      
                  
                  </div>
      
                  <p>&nbsp;</p>
      
                  
                  <a class="btn btn-success" style="float: right; border-radius: 8px !important;" href="/jobfinish/<?php echo $lstprodid; ?>">Post Now</a>
                  
                  
      
                  
      
                  
                  
              </div>
              
          </div>
          </div>
          <div class="col-md-3"></div>
          
      </div>


   


    


    
</div>


    <!-- Add todo list modal -->



<footer class="text-left container-lg" style="font-size: 12px; font-weight: 600;">
      <!-- <p class="text-muted">&copy; 2021 WWWMEDIA.WORLD. All Rights Reserved.</p> -->
  </footer>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      

      <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
      <script src="https://unpkg.com/cropperjs"></script>

    <script>
        Dropzone.options.myDropzone = {
          url: '/post',
          addRemoveLinks: false,
          headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            init: function() {
                        this.on("sending", function(file, xhr, formData){
                                let prodid = document.getElementById('prod_id').value;
                                formData.append("prod_id", prodid);
                        });
                    },
                    success: function(file,response) {
                      if(response.error){
                        $("#myDropzone").hide();
                        $(".lol").html("<p>Maximum 6 images are allowed.</p>")
                        alert(response.error)
                      }
                      ajaxCall();
                    },
                 maxFilesize: 100,
                 maxFiles: 5,
                 dictDefaultMessage: "Drop or click here to upload attachments (*Optional)",
                    renameFile: function(file) {
                        var dt = new Date();
                        var time = dt.getTime();
                       return time+file.name;
                    },
                    acceptedFiles: ".jpeg,.jpg,.png,.gif,.docx,.csv,.pdf,.xlsx,.doc,.xls,.txt,.mp4",
                    addRemoveLinks: true,
                    timeout: 5000,
        };
        </script>

<script>
    function ajaxCall(){
      $.get('/prodimage/<?php echo $lstprodid; ?>',  // url
        function (data, textStatus, jqXHR) {  // success callback
          console.log(data)
          $("#img_loop").html('')
          data.ProImage.forEach(e => {
            
            if(e.attach_ext == 'jpg' || e.attach_ext == 'jpeg' || e.attach_ext == 'png') {
              $("#img_loop").append('<div class="col-3"><img style="width: 100px; height: 100px; object-fit: cover;" src="https://todosmarter.com/images/to_do_smarter_img/'+e.attach_path+'" class="img-thumbnail" alt=""> <form method="post"> <input type="hidden" name="img_path_name" value="'+e.attach_path+'"> <a onclick="return confirmbox()" href="/delprodimage/'+e.attach_id+'/'+e.attach_job_id+'/'+e.attach_path+'" class="btn btn-clear-primary"><i style="color: #ff4757; font-size: 16px;"class="fas fa-trash"></i></a> </form></div>')
            }else if(e.attach_ext == 'mp4' || e.attach_ext == 'gif'){
              $("#img_loop").append('<div class="col-3"><video style="width: 100px; height: 100px; object-fit: cover;" controls muted class="embed-responsive-item"><source src="https://todosmarter.com/images/to_do_smarter_img/'+e.attach_path+'" type="video/mp4"  class="img-thumbnail" alt=""></video> <form method="post"> <input type="hidden" name="img_path_name" value="'+e.attach_path+'"> <a onclick="return confirmbox()" href="/delprodimage/'+e.attach_id+'/'+e.attach_job_id+'/'+e.attach_path+'" class="btn btn-clear-primary"><i style="color: #ff4757; font-size: 16px;"class="fas fa-trash"></i></a> </form></div>')
            } else {
              $("#img_loop").append('<div class="col-3"><a href="https://todosmarter.com/images/to_do_smarter_img/'+e.attach_path+'" alt="">'+e.attach_path+'</a> <form method="post"> <input type="hidden" name="img_path_name" value="'+e.attach_path+'"> <a onclick="return confirmbox()" href="/delprodimage/'+e.attach_id+'/'+e.attach_job_id+'/'+e.attach_path+'" class="btn btn-clear-primary"><i style="color: #ff4757; font-size: 16px;"class="fas fa-trash"></i></a> </form></div>')
            }
              
            
            
          });
           //
      });
    }
  
    ajaxCall()
  </script>




@include('admin.tds_footer')
