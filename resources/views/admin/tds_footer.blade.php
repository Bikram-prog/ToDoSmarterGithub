<div class="modal fade" id="contact_modal" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Confirmation</h5>
      </div>
      <div class="modal-body">
        We are working on this, please come back soon.
      </div>
      <div class="modal-footer">
        <button type="button" onclick="hideModalCntct();" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<!-- Testimonial Modal -->
<div class="modal fade" id="suggstn_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title text-center" id="exampleModalLabel">Suggestion Box</h5><br>
              
              
                  <button type="button" onclick="hidesuggstn();" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </button>
          </div>
          <div class="modal-body">
              <form action="/suggestionupdatepost" method="post">
                  @csrf
                  <div class="form-group">
                      <label style="font-weight: 500;">Choose a category*</label>
                      <select class="form-control mt-1" name="web_name">
                          <option>Globallove/Date Free</option>
                          <option>Buy + Sell</option>
                          <option>The Daily Planet</option>
                          <option>Todo Smarter</option>
                      </select>
                  </div>

                  <div class="form-group">
                      <label style="font-weight: 500;">Please leave your comment below on how we can give you a better experience*</label>
                      <textarea required="required" name="comment" class="form-control mt-1" rows="6"></textarea>
                  </div>

                  <div class="form-group mt-2">
                  <span class="form-label" style="margin-top: 15px;margin-bottom: 15px; color: #c0392b;font-size: 14px;">This is Completely anonymous, but after it's approved, we will post your comments and suggestions on <a href="https://thedailyplanet.app/">thedailyplanet.app </a>, How does that sound?</span>
                  </div>

                  <div class="modal-footer mt-2">
                    <button type="submit" class="btn btn-warning">Save</button>
                  </div>

                  
              </form>
          </div>
      </div>
  </div>
</div>



<div class="container-fluid text-center mt-4" style="position: fixed;
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
              <a style="text-decoration: none; color: #fff; margin-left: 20px;font-weight:700;" href="/contactus">Contact Us</a>

              <a onclick="add_suggstn()" href="javascript:void(0)" style="margin-left: 20px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Suggestion Box"><img style="width: 45px;height: 45px;border-radius: 100%;" class="img-fluid" src="https://globallove.online/images/suggestion-box.png"></a>
          </div>
      </div>
  </div>
  </div>

<script src="https://www.globallove.online/content/assets/30603563/jquery.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript" src="{{asset('js/echarts.min.js')}}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.1.1/socket.io.js" integrity="sha512-oFOCo2/3DtjrJG4N27BjSLQWoiBv171sK6a+JiWjp/7agxC2nCUP358AqzxkBUb5jX8g6CYLPdSKQTbC0weCwA==" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>



<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
  </script>

@php
$open = DB::table('to_do_list_new')->where('to_do_list_new.to_do_list_status', '0')->where('to_do_list_new.to_do_list_add_id', '=', Crypt::decryptString($_COOKIE['UsersCompanyToDoSmarter']))->orderBy('to_do_list_datetime', 'desc')->get();

  $progress = DB::table('to_do_list_new')->where('to_do_list_new.to_do_list_status', 'In Progress')->where('to_do_list_new.to_do_list_add_id', '=', Crypt::decryptString($_COOKIE['UsersCompanyToDoSmarter']))->orderBy('to_do_list_datetime', 'desc')->get();

  $delay = DB::table('to_do_list_new')->where('to_do_list_new.to_do_list_status', 'Delay')->where('to_do_list_new.to_do_list_add_id', '=', Crypt::decryptString($_COOKIE['UsersCompanyToDoSmarter']))->orderBy('to_do_list_datetime', 'desc')->get();

  $completed = DB::table('to_do_list_new')->where('to_do_list_new.to_do_list_status', '1')->where('to_do_list_new.to_do_list_add_id', '=', Crypt::decryptString($_COOKIE['UsersCompanyToDoSmarter']))->orderBy('to_do_list_datetime', 'desc')->get();

@endphp

    <!-- <script type="text/javascript">
var pie_basic_element = document.getElementById('pie_basic');
if (pie_basic_element) {
    var pie_basic = echarts.init(pie_basic_element);
    pie_basic.setOption({
        color: [
            '#f1c40f','#3498db','#2ecc71','#e74c3c','',
            '#8d98b3','#e5cf0d','#97b552','#95706d','#dc69aa',
            '#07a2a4','#9a7fd1','#588dd5','#f5994e','#c05050',
            '#59678c','#c9ab00','#7eb00a','#6f5553','#c14089'
        ],          
        
        textStyle: {
            fontFamily: 'Roboto, Arial, Verdana, sans-serif',
            fontSize: 13
        },

        title: {
            text: 'Digital Project Chart',
            left: 'center',
            textStyle: {
                fontSize: 17,
                fontWeight: 700
            },
            subtextStyle: {
                fontSize: 12
            }
        },

        tooltip: {
            trigger: 'item',
            backgroundColor: 'rgba(0,0,0,0.75)',
            padding: [10, 15],
            textStyle: {
                fontSize: 12,
                fontFamily: 'Roboto, sans-serif'
            },
            formatter: "{a} <br/>{b}: {c} ({d}%)"
        },

        legend: {
            orient: 'horizontal',
            bottom: '0%',
            left: 'center',                   
            data: ['Open', 'In-progress','Comp', 'Delayed'],
            itemHeight: 8,
            itemWidth: 8
        },

        series: [{
            name: 'Status',
            type: 'pie',
            radius: '70%',
            center: ['50%', '50%'],
            itemStyle: {
                normal: {
                    borderWidth: 1,
                    borderColor: '#fff'
                }
            },
            data: [
                {value: {{ count($open) }}, name: ''},
                {value: {{ count($progress) }}, name: ''},
                {value: {{ count($completed) }}, name: ''},
                {value: {{ count($delay) }}, name: ''}
            ]
        }]
    });
}
</script> -->


<div class="modal fade" id="staticBackdropSnd" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        We are working on this, please come back soon.
      </div>
      <div class="modal-footer">
        <button type="button" onclick="hideModalSnd();" class="btn btn-primary" data-bs-dismiss="modal">OK</button>

      </div>
    </div>
  </div>
</div>


<script>
  function snd_modal() {
    $('#staticBackdropSnd').modal('show');
}

  function hideModalSnd() {
    $('#staticBackdropSnd').modal('hide');
  }

  </script>
  

<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<!-- <h5 class="modal-title" id="modalLabel"></h5> -->
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<div class="img-container">
<div class="row">
<div class="col-md-8">
<img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
</div>
<div class="col-md-4">
<div class="preview"></div>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
<button type="button" class="btn btn-primary" id="crop">Crop</button>
</div>
</div>
</div>
</div>

<script>
var $modal = $('#modal');
var image = document.getElementById('image');
var cropper;
$("body").on("change", ".image", function(e){
var files = e.target.files;
var done = function (url) {
image.src = url;
$modal.modal('show');
};
var reader;
var file;
var url;
if (files && files.length > 0) {
file = files[0];
if (URL) {
done(URL.createObjectURL(file));
} else if (FileReader) {
reader = new FileReader();
reader.onload = function (e) {
done(reader.result);
};
reader.readAsDataURL(file);
}
}
});
$modal.on('shown.bs.modal', function () {
cropper = new Cropper(image, {
aspectRatio: 1,
viewMode: 3,
preview: '.preview'
});
}).on('hidden.bs.modal', function () {
cropper.destroy();
cropper = null;
});
$("#crop").click(function(){
canvas = cropper.getCroppedCanvas({
width: 300,
height: 300,
});
canvas.toBlob(function(blob) {
url = URL.createObjectURL(blob);
var reader = new FileReader();
reader.readAsDataURL(blob); 
reader.onloadend = function() {
var base64data = reader.result; 
$.ajax({
type: "POST",
dataType: "json",
url: "/propicactionsmarter",
data: {'_token': $('meta[name="csrf-token"]').attr('content'), 'image': base64data},
success: function(data){
console.log(data);
$modal.modal('hide');
alert("Your photo successfully uploaded");
window.location.href = '/u/to-do-list-smarter';
}
});
}
});
})
</script>


        <script type="text/javascript">
            function openFile() {
                $('#p_pic').trigger('click'); 
            }
        </script>

        <!-- //////////////////////// -->

<script type="text/javascript">
var bars_basic_element = document.getElementById('bars_basic');
if (bars_basic_element) {
    var bars_basic = echarts.init(bars_basic_element);
    bars_basic.setOption({
        color: ['#3398DB'],
        tooltip: {
            trigger: 'axis',
            axisPointer: {            
                type: 'shadow'
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis: [
            {
                type: 'category',
                data: ['Open', 'In-progress','Completed', 'Delay'],
                axisLabel: {
        rotate: 90
      },
                axisTick: {
                    alignWithLabel: true
                }
            }
        ],
        yAxis: [
            {
                type: 'value'
            }
            
        ],
        series: [
            {
                name: 'Total',
                type: 'bar',
                barWidth: '20%',
                data: [
                    {
                        value: {{count($open)}},
                        itemStyle: {color: '#f1c40f'},
                    },
                    {
                        value: {{count($progress)}},
                        itemStyle: {color: '#3498db'},
                    },
                    {
                        value: {{count($completed)}},
                        itemStyle: {color: '#2ecc71'},
                    },
                    {
                        value: {{count($delay)}},
                        itemStyle: {color: '#e74c3c'},
                    }
                
                ]
            }
        ]
    });
}
</script>




<!------- modal for customer support broadcast notification -------------->

<?php
$cus_support= DB::Select("SELECT * FROM users_chat_rooms WHERE room_from_id= '".Crypt::decryptString($_COOKIE['UserIdToDoSmarter'])."' AND room_to_id= '0' AND room_status='1' AND room_key='tds'");
if(count($cus_support) > 0) {

  echo '<script type="text/javascript">';
  echo '$(document).ready(function(){ $("#customer_support_broadcast_notify").modal("show"); });';
  echo '</script>';

}
?>

<style>
.close:before {
  content: none !important;
}
</style>

<div class="modal fade" id="customer_support_broadcast_notify" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #ee4646; color: #eee;">
        <h5 class="modal-title" id="staticBackdropLabel">Customer Support</h5>
        <button style="
          color: #eee !important;border: none !important; background-color: transparent !important;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <!-- <span aria-hidden="true">&times;</span> -->
          
        </button>
      </div>
      <div class="modal-body" style="
        font-size: 18px;
      ">
        You have a new message from the Customer Support Team.
      </div>
      <div class="modal-footer">
        <div class="d-grid gap-2 w-100">
        <a href="/customersupport/#/cs-user/{{ Crypt::decryptString($_COOKIE['UserIdToDoSmarter']) }}/{{ Crypt::decryptString($_COOKIE['UserEmailToDoSmarter']) }}/tds" class="btn btn-primary btn-lg btn-block">View message</a>
        </div>
      </div>
    </div>
  </div>
</div>



{{-- Sumanta's CHAT CODE --}}

<?php
$cus_support= DB::Select("SELECT * FROM users_chat_rooms WHERE room_from_id= '".Crypt::decryptString($_COOKIE['UserIdToDoSmarter'])."' AND room_to_id= '0' AND room_status='1' AND room_key='tds'");
if(count($cus_support) > 0) {

?>




<div style="
position: fixed;
    background: red;
    border-radius: 25px;
    padding: 0px;
    width: 22px;
    height: 22px;
    right: 25px;
    top: 206px;
    z-index: 10000;
">
  <span style="
    color: #fff;
    font-weight: 700;
    margin-left: 6px;
  ">1</span>
</div>
<?php } ?>
<a href="/customersupport/#/cs-user/{{ Crypt::decryptString($_COOKIE['UserIdToDoSmarter']) }}/{{ Crypt::decryptString($_COOKIE['UserEmailToDoSmarter']) }}/tds" id="idd_0" class="btn btn-success btn-sm csbtn d-none d-sm-block active">Customer Support</a>


{{-- <button onclick="loadChat('0', 'Customer support', 'customer@support.globallove', 'offline')" id="idd_0" type="button" class="btn btn-success btn-sm csbtn d-none d-sm-block active">Customer Support</button> --}}



<a onclick="showCntct()" href="javascript:void(0)" data-toggle="modal" data-target="#contact_modal" class="btn btn-info btn-sm adsbtn ">No More Ads <i class="fas fa-ban"></i></a>

<a onclick="add_testimonial()" href="javascript:void(0)" class="btn btn-warning btn-sm testimonialbtn d-none d-sm-block active">Add Testimonial </a>




<!--------------------------------------chat box ------------------------------------------->

<style>
    .progress { position:relative; width:100%; }
    .bar { background-color: #b5076f; width:0%; height:20px; }
    .percent { position:absolute; display:inline-block; left:50%; color: #040608;}
</style>

<style>

    .msg_other img {
        max-width: 100%;
    }

    #image{
        max-width: 100% !important;
    }
    .csbtn {
    transform: rotate(90deg);
    position: fixed;
    right: -45px;
    top: 150px;
    z-index: 1000;
}

.adsbtn {
        transform: rotate(90deg);
        position: fixed;
        right: -38px;
        top: 300px;
        z-index: 1000;
      }

.testimonialbtn {
    transform: rotate(90deg);
    position: fixed;
    top: 450px;
    right: -43px;
    z-index: 1000;
    font-weight: bold !important;
}

a {
    text-decoration: none !important;
}

    .wrapper {
      display: none;
  }
  .ui-dialog-titlebar-close {
      visibility: hidden;
  }
  .main {
      background-color: #eee;
      width: 320px;
      position: fixed;
      bottom: 130px;
      right: 42px;
      border-radius: 8px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      /* padding: 6px 0px 0px 0px */
  }
  
  .scroll {
      overflow-y: scroll;
      scroll-behavior: smooth;
      height: 325px
  }
  
  .img1 {
      border-radius: 50%;
      background-color: #66BB6A
  }
  
  .name {
      font-size: 13px
  }
  
  .msg {
      background-color: #5C54AD;
      font-size: 16px;
      padding: 5px;
      border-radius: 5px;
      font-weight: 500;
      color: #fff;
  }
  
  .msg_other {
    background-color: #fff;
    font-size: 16px;
    padding: 5px;
    border-radius: 5px;
    font-weight: 500;
    color: #2c2c2c;
  }
  
  .between {
      font-size: 8px;
      font-weight: 500;
      color: #a09e9e
  }
  
  
  .caution-msg{
    border-bottom-right-radius: 8px;
      background: #fff;
      padding: 0px 20px;
      font-size: 12px;
      border-bottom-left-radius: 8px;
      box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
  }
  
  
  
  .icon1 {
      color: #7C4DFF !important;
      font-size: 18px !important;
      cursor: pointer
  }
  
  .icon2 {
      color: #512DA8 !important;
      font-size: 18px !important;
      position: relative;
      left: -4px;
      padding: 0px;
      cursor: pointer
  }
  
  .icondiv {
      border-radius: 50%;
      width: 15px;
      height: 15px;
      padding: 2px;
      position: relative;
      bottom: 1px
  }
  .header-chat {
    background-color: #fff;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-weight: 700;
  }
  
  
  .lds-roller {
    display: inline-block;
    position: relative;
    width: 64px;
    height: 64px;
  }
  .lds-roller div {
    animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
    transform-origin: 32px 32px;
  }
  .lds-roller div:after {
    content: " ";
    display: block;
    position: absolute;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #F15052;
    margin: -3px 0 0 -3px;
  }
  .lds-roller div:nth-child(1) {
    animation-delay: -0.036s;
  }
  .lds-roller div:nth-child(1):after {
    top: 50px;
    left: 50px;
  }
  .lds-roller div:nth-child(2) {
    animation-delay: -0.072s;
  }
  .lds-roller div:nth-child(2):after {
    top: 54px;
    left: 45px;
  }
  .lds-roller div:nth-child(3) {
    animation-delay: -0.108s;
  }
  .lds-roller div:nth-child(3):after {
    top: 57px;
    left: 39px;
  }
  .lds-roller div:nth-child(4) {
    animation-delay: -0.144s;
  }
  .lds-roller div:nth-child(4):after {
    top: 58px;
    left: 32px;
  }
  .lds-roller div:nth-child(5) {
    animation-delay: -0.18s;
  }
  .lds-roller div:nth-child(5):after {
    top: 57px;
    left: 25px;
  }
  .lds-roller div:nth-child(6) {
    animation-delay: -0.216s;
  }
  .lds-roller div:nth-child(6):after {
    top: 54px;
    left: 19px;
  }
  .lds-roller div:nth-child(7) {
    animation-delay: -0.252s;
  }
  .lds-roller div:nth-child(7):after {
    top: 50px;
    left: 14px;
  }
  .lds-roller div:nth-child(8) {
    animation-delay: -0.288s;
  }
  .lds-roller div:nth-child(8):after {
    top: 45px;
    left: 10px;
  }
  @keyframes lds-roller {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
  
  .chat_d:hover{
    text-decoration:none
  }
  </style>

  <!-- Testimonial Modal -->
  <div class="modal fade" id="testimonial_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Write A Testimonial</h5>
                
                    <button type="button" onclick="hideModalTstmnl();" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('add.testimonial.post') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Choose a category*</label>
                        <select class="form-control" name="cate">
                            <option>Globallove/Date Free</option>
                            <option>Buy + Sell</option>
                            <option>The Daily Planet</option>
                            <option>Todo Smarter</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Your full name*</label>
                        <input required="required" type="text" name="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Your Country*</label>
                        <select name="country" class="form-control">
                            <option value="Afganistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bonaire">Bonaire</option>
                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Canary Islands">Canary Islands</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Channel Islands">Channel Islands</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos Island">Cocos Island</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote DIvoire">Cote DIvoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Curaco">Curacao</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor">East Timor</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands">Falkland Islands</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Ter">French Southern Ter</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Great Britain">Great Britain</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="India">India</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea North">Korea North</option>
                            <option value="Korea Sout">Korea South</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedonia">Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Midway Islands">Midway Islands</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Nambia">Nambia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherland Antilles">Netherland Antilles</option>
                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                            <option value="Nevis">Nevis</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau Island">Palau Island</option>
                            <option value="Palestine">Palestine</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Phillipines">Philippines</option>
                            <option value="Pitcairn Island">Pitcairn Island</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                            <option value="Republic of Serbia">Republic of Serbia</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="St Barthelemy">St Barthelemy</option>
                            <option value="St Eustatius">St Eustatius</option>
                            <option value="St Helena">St Helena</option>
                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                            <option value="St Lucia">St Lucia</option>
                            <option value="St Maarten">St Maarten</option>
                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                            <option value="Saipan">Saipan</option>
                            <option value="Samoa">Samoa</option>
                            <option value="Samoa American">Samoa American</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Tahiti">Tahiti</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Erimates">United Arab Emirates</option>
                            <option value="United States of America">United States of America</option>
                            <option value="Uraguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican City State">Vatican City State</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                            <option value="Wake Island">Wake Island</option>
                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zaire">Zaire</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Remarks*</label>
                        <textarea required="required" name="remarks" class="form-control" rows="6"></textarea>
                    </div>

                    <div class="modal-footer">
                      <button type="submit" class="btn btn-warning">Save</button>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
</div>
  
  <div class="wrapper">
      <div class="main">
        <div class="header-chat" style="margin-bottom: 10px;">
          <p class="" style="margin-bottom: 0px;">
          <span class="header-name"></span>
  
          <span style="float: right;"><a onclick="hideBox()" href="javascript:void(0)"><i class="fas fa-times"></i></a></span>
          {{-- <a onclick="startVideo();" href="javascript:void(0)"><span style="float: right;"><i style="color: #4B9400; margin-right: 20px;" class="fas fa-video"></i></span></a> --}}
          </p>
          <div class="typing" style="color:#66BB6A; font-weight: 700;"></div>
          <a onclick="return confirm('Are you sure?');" class="text-danger" style="float: right; margin-right: 32px; margin-top: -21px; font-size: 13px;" href="{{ route('cs.clear.chat', [Crypt::decryptString($_COOKIE['UserIdToDoSmarter'])]) }}">Clear Chat</a>
        </div>
  
        <input type="hidden" id="hd_t" value="">
        <input type="hidden" id="emchat" value="">
  
        <div style="display: none;" class="lds-roller"><div></div></div>
  
        <div class="px-2 scroll" id="chat_messenger">
  
  
          </div>
  
          <div class="progress">
          <div class="progress-bar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: 0%; display: none;">
            0%
          </div>
          </div>
          <div id="success"></div>
          <div id="preview_gl"></div>
  
          <nav class="navbar bg-white navbar-expand-sm d-flex justify-content-between">
  
  
            <form method="post" id="gl_file_upload" action="/sendfile" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file[]" multiple id="imgupload" style="display:none"/>
            <input type="hidden" name="to" id="hd_to_img">
  
            <div id="OpenImgUpload" class="icondiv d-flex justify-content-start align-content-center text-center ml-2"> <!--<i class="fa fa-paperclip icon1"></i>-->  <i class="fas fa-plus-circle" style="
            color: #512DA8 !important;
            font-size: 18px !important;
            position: relative;
            left: 3px;
            padding: 0px;
            cursor: pointer;
            "></i>
              </div>
  
            <input type="submit" id="upload_start_gl_file" name="upload" value="Upload" class="btn btn-success" style="display: none;" />
  
          </form>
  
  
          <input oninput="typing_alert(this.value)" type="text" name="text" style="width: 80% !important;" class="form-control message-input" id="message-input-id" placeholder="Type a message...">
  
            <div class="icondiv d-flex justify-content-end align-content-center text-center ml-2" onclick="newMessage()"> <!--<i class="fa fa-paperclip icon1"></i>-->  <i class="far fa-paper-plane icon2"></i>
            </div>
  
          </nav>
  
       
      </div>
  </div>

  




  <!-------------------------------- chat script ------------------------------------------>

  <script>
var input = document.getElementById("message-input-id");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   newMessage();
   //document.getElementById("sendChat").click();
  }
});
    </script>

<script>
    //-------------------- socket connection established-------------------------------------
    //ajax chat messages with socket------------------------------------------------------------------------
  var socket = io('https://yourdeveloper.world', {transports: ['websocket']});
  socket.emit('join', {email: '<?php echo Crypt::decryptString($_COOKIE['UserEmailToDoSmarter']); ?>', id: '<?php echo Crypt::decryptString($_COOKIE['UserIdToDoSmarter']); ?>'});
  
  // from video call request
  socket.on("new_msg_call_req", function(data) {
    $("#calling_from").html(data.toname);
    $("#room").val(data.room)
    $("#videocallDiolog").modal("show");
  });
  
  
  
  
  //get message from server
  socket.on("new_msg", function(data) {
      $(".typing").html('');
    // $('.toast').show();
    // $(".toast-body").html(data.msg);
    // $('.toast').toast('show');
  
    if(data.msg !=''){
      $('.toast_notify').append(`<div onclick="loadChat('${data.to}','${data.toname}','${data.toemail}','')" style="cursor: pointer; opacity: 1 !important; background: #F15052;color: #fff; width: 100%;" class="toast" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header" style="color:#000;"><i class="far fa-comment"></i> &nbsp; <strong class="mr-auto">${data.toname}</strong><small class="text-muted"> </small><button style="background: transparent;border: none;" type="button" class="ml-2 mb-1" onclick="hidechatbox()"><i class="fas fa-times"></i></button></div><div class="toast-body">${data.msg}</div></div>`);
    } else {
      $('.toast_notify').append(`<div onclick="loadChat('${data.to}','${data.toname}','${data.toemail}','')" style="cursor: pointer; opacity: 1 !important; background: #F15052;color: #fff; width: 100%;" class="toast" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header" style="color:#000;"><i class="far fa-comment"></i> &nbsp; <strong class="mr-auto">${data.toname}</strong><small class="text-muted"> </small><button style="background: transparent;border: none;" type="button" class="ml-2 mb-1" onclick="hidechatbox()"><i class="fas fa-times"></i></button></div><div class="toast-body"><i class="fas fa-camera-retro"></i> Photo</div></div>`);
    }
  
  
  
  
  
    $("#badge_"+data.to).text('1+');
    $("#badge_notif_messages").text('1').show();
    ///console.log(data)
  //	$(".preview_typing").html('');
  
    var toid = $("#hd_t").val();
    $("#idd_"+data.to+" .preview").html('<span> </span>' + data.msg)
      if(toid == data.to) {
        if(data.msg != '') {
          $("#chat_messenger").append('<div class="d-flex align-items-center"><div class="text-left pr-1"></div><div class="pr-2 pl-1"> <span class="name"></span><p class="msg">'+data.msg+'</p></div></div>');
          $("#idd_"+toid+".active .preview").html('<span> </span>' + data.msg);
          $(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);
        } else {
          $("#chat_messenger").append('<div class="d-flex align-items-center"><div class="text-left pr-1"></div><div class="pr-2 pl-1"> <span class="name"></span><p class="msg"><img loading="lazy" src="'+data.img+'"></p></div></div>');
          $("#idd_"+toid+".active .preview").html('<span> </span>' + data.msg);
          $(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);
        }
  
  
      }
  
  
     
  });
  
  //typing from server
  socket.on("typing_from_server", function(data) {
    var toid = $("#hd_t").val();
    $("#idd_"+data.to+" .preview_typing").html('<span> </span>' + data.msg)
      if(toid == data.to) {
        $(".typing").html(data.msg);
        $("#idd_"+toid+" .preview_typing").html('<span> </span>' + data.msg);
        $(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);
      }
  });
  
  var online_status = '';
  
  function loadChat(str,name,email,$status) {
    $("#customer_support_broadcast_notify").modal("hide");
    online_status = $status;
    var pic = true;
    let _token   = $('meta[name="csrf-token"]').attr('content');
    var suspended = false;
    var block = false;
  
  
  
      //check if block
          $.ajax({
      type: "POST",
      url: '/postinsert', // This is what I have updated
      async: false,
      data:{
          r_who_id: str,
          block: "adasd",
            _token: _token
          },
      }).done(function( msg ) {
        if(msg == "suspended"){
  
          $("#suspendedalert").dialog(("open"));
          suspended = true;
        }
  
  
      })
  
  
      if(suspended){
        return false;
      }
  
  
  
  
        //check if suspended
    $.ajax({
      type: "POST",
      url: '/postinsert', // This is what I have updated
      async: false,
      data:{
          r_who_id: str,
          checksuspended: "adasd",
            _token: _token
          },
      }).done(function( msg ) {
        if(msg == "suspended"){
  
          $("#suspendedalert").dialog(("open"));
          suspended = true;
        }
  
  
      })
  
  
      if(suspended){
        return false;
      }
  
  
    $.ajax({
      type: "POST",
      url: '/postinsert', // This is what I have updated
      async: false,
      data:{
          id_user: <?php echo Crypt::decryptString($_COOKIE['UserIdToDoSmarter']); ?>,
          id_chat_user: str,
          checkprofile: "adasd",
            _token: _token
          },
      }).done(function( msg ) {
        if(msg == "no profile pic"){
         // alert("You cannot send or receive messages until you have a valid and approved photo.");
         //$( "#dialognoprofilepic" ).dialog(("open"));
          pic =  true;
        }
        if(msg == "user no profile"){
         // alert("The user you are attempting to message does not have a valid and approved photo linked to their profile.");
         //$( "#dialogusernoprofile" ).dialog(("open"));
          pic =  true;
        }
  
      })
    //console.log(pic);
  
      if(!pic){
        return false;
      }
  
  
    $(".wrapper").show();
      $(".typing").html('');
      $(".preview_typing").html('');
      $(".header-name").html('<a href="/userprofile/'+str+'">' + name + '</a>')
      $("#emchat").val(email)
      $("#hd_t").val(str)
      $("#hd_to_img").val(str)
      $(".lds-roller").show();
      $(".contact").removeClass("active");
      $("#idd_"+str).addClass("active");
      $("#chat_messenger").html("");
      $("#badge_notif_messages").hide();
      $(".toast").hide();
  
  
      $.ajax({
      type: "POST",
      url: '/chatdisplay', // This is what I have updated
      data:{
            id: str,
            _token: _token
          },
      }).done(function( msg ) {
  
  
  
  
        $(".lds-roller").hide();
  
        if(msg[1].length > 0) {
         // console.log(msg[1].indexOf(Number(str)));
          if( msg[1].indexOf(Number(str)) >= 0 ) {
  
            $("#chat_messenger").append('<div class="d-flex align-items-center text-right justify-content-end "><div class="pr-2"> <span class="name"></span><p class="msg_other"><i class="fa fa-exclamation-triangle" style="color: #cd201f;"></i>You cant reply to this conversation.</p></div><div></div></div>');
            $("#message-input-id").prop('disabled', true);
            return false;
  
          } else {
            $("#message-input-id").prop('disabled', false);
  
          }
        }
  
  
          for(var i = 0; i<=msg[0].length; i++) {
  
  
  
              if(msg[0][i].chat_from_id == <?php echo Crypt::decryptString($_COOKIE['UserIdToDoSmarter']); ?>) {
  
  
  
                if(msg[0][i].chat_msg == null && msg[0][i].chat_files != null) {
                  $("#chat_messenger").append('<div class="d-flex align-items-center text-right justify-content-end "><div class="pr-2"> <span class="name"></span><a  data-toggle="tooltip" data-placement="top" title="" class="chat_d"  href="javascript:void(0)" data-original-title="'+moment(msg[0][i].chat_date_time).format('MMMM Do YYYY, h:mm:ss a')+'"><p class="msg_other"><img loading="lazy" src="'+msg[0][i].chat_files+'"></p></a></div><div></div></div>');
                } else {
                  $("#chat_messenger").append('<div class="d-flex align-items-center text-right justify-content-end "><div class="pr-2"> <span class="name"></span><a  data-toggle="tooltip" data-placement="top" title="" class="chat_d"  href="javascript:void(0)" data-original-title="'+moment(msg[0][i].chat_date_time).format('MMMM Do YYYY, h:mm:ss a')+'"><p class="msg_other">'+msg[0][i].chat_msg+'</p></a></div><div></div></div>');
                }
  
  
  
              } else {
  
                if(msg[0][i].chat_msg == null && msg[0][i].chat_files != null) {
                  $("#chat_messenger").append('<div class="d-flex align-items-center"><div class="text-left pr-1"></div><div class="pr-2 pl-1"> <span class="name"></span><a  data-toggle="tooltip" data-placement="top" title="" class="chat_d"  href="javascript:void(0)" data-original-title="'+moment(msg[0][i].chat_date_time).format('MMMM Do YYYY, h:mm:ss a')+'"><p class="msg"><img loading="lazy" src="'+msg[0][i].chat_files+'"></p></a></div></div>');
                } else {
                  if(msg[0][i].chat_from_id == 0 || msg[0][i].chat_to_id == 0) {
                    $("#chat_messenger").append('<div class="d-flex align-items-center"><div class="text-left pr-1"></div><div class="pr-2 pl-1"> <span class="name"></span><a  data-toggle="tooltip" data-placement="top" title="" class="chat_d"  href="javascript:void(0)" data-original-title="'+moment(msg[0][i].chat_date_time).format('MMMM Do YYYY, h:mm:ss a')+'"><p class="msg">'+msg[0][i].chat_msg+'</p></a></div></div>');
                  } else {
                    if(msg[0][i].chat_msg_trans != null && msg[0][i].chat_msg_trans != '') {
                      $trans = msg[0][i].chat_msg_trans;
                    } else {
                      $trans = msg[0][i].chat_msg;
                    }
                    $("#chat_messenger").append('<div class="d-flex align-items-center"><div class="text-left pr-1"></div><div class="pr-2 pl-1"> <span class="name"></span><a  data-toggle="tooltip" data-placement="top" title="" class="chat_d"  href="javascript:void(0)" data-original-title="'+moment(msg[0][i].chat_date_time).format('MMMM Do YYYY, h:mm:ss a')+'"><p class="msg translate">'+$trans+'</p></a></div></div>');
                  }
  
                }
  
  
  
  
              }
  
              $(".lds-roller").hide();
              $(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);
          }
  
  
      });
  }
  
  
  
  
  //--------------- send message
  function newMessage() {
    $(".toast").hide();
      $(".preview_typing").html('');
      $(".typing").html('');
      let _token   = $('meta[name="csrf-token"]').attr('content');
      message = $(".message-input").val();
  
  
      var abusive = false;
  
  
      too = $("#hd_t").val();
      em = $("#emchat").val()
  
    if(message != ''){
      //check if message abusive
      $.ajax({
      type: "POST",
      url: '/postinsert', // This is what I have updated
      async: false,
      data:{
          chat: message,
          abusive: "adasd",
            _token: _token
          },
      }).done(function( msg ) {
  
        if(msg.status == "true"){
          $(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);
          $("#chat_messenger").append('<div class="d-flex align-items-center text-right justify-content-end "><div class="pr-2"> <span class="name"></span><p class="msg_other"><i class="fa fa-exclamation-triangle" style="color: #cd201f;"></i> '+msg.msg+'</p></div><div></div></div>');
          $('.message-input').val(null);
          $('.contact.active .preview').html('<span>You: </span>' + message);
          abusive = true;
        }
      })
  
      if(abusive){
        return false;
      }
  
    }
  
    if((online_status == "offline" && message != '')){
  
      $.ajax({
          type: "POST",
          url: '/postinsert', // This is what I have updated
          data:{
                online_status:online_status,
                msg: $(".message-input").val(),
                from_id: <?php echo Crypt::decryptString($_COOKIE['UserIdToDoSmarter']); ?>,
                to_id: too,
                _token: _token
              },
          }).done(function( msg ) {
  
    });
  
  
  }
  
  
      if(too != '') {
  
  
          if($.trim(message) == '') {
              return false;
          }
          $.ajax({
          type: "POST",
          url: '/chatinsert', // This is what I have updated
          data:{
                msg: message,
                from_id: <?php echo Crypt::decryptString($_COOKIE['UserIdToDoSmarter']); ?>,
                to_id: too,
                _token: _token
              },
          }).done(function( msg ) {
  
        
  
            if(msg == "false") {
              $(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);
            $("#chat_messenger").append('<div class="d-flex align-items-center text-right justify-content-end "><div class="pr-2"> <span class="name"></span><p class="msg_other">You cannot send message to this user as you are both FREE standard members.</p> <a href="/membership" style="text-decoration: none;" class="btn btn-success btn-block btn-lg">Upgrade Now</a></div><div></div></div>');
            $('.message-input').val(null);
            } else if(msg == "apprvestatus") {
              $(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);
            $("#chat_messenger").append('<div class="d-flex align-items-center text-right justify-content-end "><div class="pr-2"> <span class="name"></span><p style="color:#E9343F;" class="msg_other">You cannot send message to this user as your account is under review.</p></div><div></div></div>');
            $('.message-input').val(null);
            } else {
              socket.emit('send_msg_server', { user: em, msg: msg, to: <?php echo Crypt::decryptString($_COOKIE['UserIdToDoSmarter']); ?>, toname: '<?php echo Crypt::decryptString($_COOKIE['UserFullNameToDoSmarter']); ?>', toemail: '<?php echo Crypt::decryptString($_COOKIE['UserEmailToDoSmarter']); ?>'}); //socket
  
              $(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);
              $("#chat_messenger").append('<div class="d-flex align-items-center text-right justify-content-end "><div class="pr-2"> <span class="name"></span><p class="msg_other">'+message+'</p></div><div></div></div>');
              $('.message-input').val(null);
              $('.contact.active .preview').html('<span>You: </span>' + message);
            }
  
  
          });
  
  
  
  
      }
  
  }
  
  
  


  
  function typing_alert(str) {
      too = $("#hd_t").val();
      em = $("#emchat").val()
      if(str.length > 0) {
          socket.emit('typing', { user: em, msg: 'typing...', to: <?php echo Crypt::decryptString($_COOKIE['UserIdToDoSmarter']); ?>}); //socket
      } else {
          socket.emit('typing', { user: em, msg: '', to: <?php echo Crypt::decryptString($_COOKIE['UserIdToDoSmarter']); ?>}); //socket
      }
  
  }
  
  function hideBox() {
    $(".wrapper").hide();
  }
  
  function hidechatbox() {
    $(".toast").hide();
  }
  
  </script>
  
  
  <script>


//   file transfer

$('#OpenImgUpload').click(function(){ $('#imgupload').trigger('click'); });

$('#imgupload').on('change', function(){
  $("#upload_start_gl_file").trigger('click');


});



$('#gl_file_upload').ajaxForm({

beforeSend:function(){
  //console.log("before send")

$('.progress-bar').show();
$('.progress-bar').text('0%');
$('.progress-bar').css('width', '0%');
},
uploadProgress:function(event, position, total, percentComplete){
  //console.log("upload progress...")
$('.progress-bar').text(percentComplete + '0%');
$('.progress-bar').css('width', percentComplete + '0%');
},
success:function(data)
{

  //console.log(data)
  // send image through socket
  var em = $("#emchat").val();
  for(var i = 0; i < data.length; i++) {
    socket.emit('send_msg_server', { user: em, msg: '', img: data[i], to: <?php echo Crypt::decryptString($_COOKIE['UserIdToDoSmarter']); ?>, toname: '<?php echo Crypt::decryptString($_COOKIE['UserFullNameToDoSmarter']); ?>', toemail: '<?php echo Crypt::decryptString($_COOKIE['UserEmailToDoSmarter']); ?>'});

    $("#chat_messenger").append('<div class="d-flex align-items-center"><div class="text-left pr-1"></div><div class="pr-2 pl-1"> <span class="name"></span><p class="msg"><img loading="lazy" src="'+data[i]+'"></p></div></div>');
        //$("#idd_"+toid+".active .preview").html('<span> </span>' + data.msg);
        $(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);

  }




$('.progress-bar').text('Uploaded');
$('.progress-bar').css('width', '100%');
$('.progress-bar').hide();

}



});

</script>
  

<script>
  function add_testimonial() {
    $('#testimonial_modal').modal('show');
}

  function hideModalTstmnl() {
    $('#testimonial_modal').modal('hide');
  }

  </script>

  <script>
  function add_suggstn() {
    $('#suggstn_modal').modal('show');
}

  function hidesuggstn() {
    $('#suggstn_modal').modal('hide');
  }

  

function showCntct() {
  $('#contact_modal').modal('show');
}

  function hideModalCntct() {
  $('#contact_modal').modal('hide');
}

  </script>

  


    

  </body>
</html>


