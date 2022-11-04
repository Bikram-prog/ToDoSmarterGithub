<?php 
$today = date('Y-m-d H:i:s');
$getProfileApprove = DB::Select("select prfl_approve_status,prfl_photo_path from users where id = '".Crypt::decryptString($_COOKIE['UserIds'])."'");
    $premium_login = DB::Select("select * from payment_transactions where pt_u_id = '".Crypt::decryptString($_COOKIE['UserIds'])."' and pt_end_date > '".$today."'");
    $premium_log_cont = DB::Select("select * from users_metas where user_id = '".Crypt::decryptString($_COOKIE['UserIds'])."'");
    $country_status_login= DB::Select("Select * from country_price where cp_name ='".$premium_log_cont[0]->country."' and cp_price > 0.00");

    if(count($premium_login) > 0) {
        $premium_log = "Premium";
        $country_log = $premium_log_cont[0]->country;
    } else {
        $premium_log = "";
        $country_log = $premium_log_cont[0]->country;
    }

?>


  <div id="dialognoprofilepic" title="Alert">
  <p>GlobalLove prides itself on making this online meeting experience safer, and for that reason, we believe that every user on this site deserves to see who is contacting them, so we are respectively requesting you upload a picture  <a href="{{ url('photos') }}" style="color: #dc6b6d;
    font-weight: bold;">CLICK HERE </a>, so you can continue to message everybody in GlobalLove.</p>

</div>
  
<div id="dialogusernoprofile" title="Alert">
  <p>The user you are attempting to message does not have a valid and approved photo linked to their profile.</p>
</div>
<div id="suspendedalert" title="Alert">
  <p>Hi there, due to a members complaint, this account has been temporarily suspended, this maybe a miss understanding, so please contact customer service online so we can get this all fixed and get you back online again.</p>
</div>
 


<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.1.1/socket.io.js" integrity="sha512-oFOCo2/3DtjrJG4N27BjSLQWoiBv171sK6a+JiWjp/7agxC2nCUP358AqzxkBUb5jX8g6CYLPdSKQTbC0weCwA==" crossorigin="anonymous"></script>

<!-- <script src="{{asset('content')}}/assets/30603563/jquery.js"></script> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
 
    <style>
        .progress { position:relative; width:100%; }
        .bar { background-color: #b5076f; width:0%; height:20px; }
        .percent { position:absolute; display:inline-block; left:50%; color: #040608;}
   </style>


  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.1.1/socket.io.js" integrity="sha512-oFOCo2/3DtjrJG4N27BjSLQWoiBv171sK6a+JiWjp/7agxC2nCUP358AqzxkBUb5jX8g6CYLPdSKQTbC0weCwA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


<div class="toast_notify" style="position: fixed;bottom: 50px;left: 10px; width: 100%;"></div>



<!--------------------------------------chat box ------------------------------------------->

<style>
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
    bottom: 0;
    right: 330px;
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
    left: 8px;
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

<div class="wrapper">
    <div class="main">
      <div class="header-chat" style="margin-bottom: 10px;">
        <p class="" style="margin-bottom: 0px;"> 
        <span class="header-name"></span> 
        
        <span style="float: right;"><a onclick="hideBox()" href="javascript:void(0)"><i class="fas fa-times"></i></a></span>
        <a onclick="startVideo();" href="javascript:void(0)"><span style="float: right;"><i style="color: #4B9400; margin-right: 20px;" class="fas fa-video"></i></span></a>
        </p>
        <div class="typing" style="color:#66BB6A; font-weight: 700;"></div>
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
          left: -12px;
          padding: 0px;
          cursor: pointer;
          "></i>
            </div>
          
          <input type="submit" id="upload_start_gl_file" name="upload" value="Upload" class="btn btn-success" style="display: none;" />

        </form>


        <input oninput="typing_alert(this.value)" type="text" name="text" style="width: 90% !important;" class="form-control message-input" id="message-input-id" placeholder="Type a message...">

          <div class="icondiv d-flex justify-content-end align-content-center text-center ml-2" onclick="newMessage()"> <!--<i class="fa fa-paperclip icon1"></i>-->  <i class="far fa-paper-plane icon2"></i>
          </div>
          
        </nav>

        <!-- <div class="caution-msg"><i class="fa fa-exclamation-triangle" style="color: #cd201f;"></i> This chat is being monitored by GlobalLove, any bad language, and soliciting of any kind will result in temporary suspension</div> -->
    </div>
</div>


<!-- buy + sell -->

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Confirmation</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        It’s only available in Australia and the Philippines at present.
      </div>
      <div class="modal-footer">
        <button type="button" onclick="go_window();" class="btn btn-success" data-bs-dismiss="modal">Go to site</button>
        <button type="button" onclick="hideModal();return false;" class="btn btn-primary">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
  function bes_modal() {
    $('#staticBackdrop').modal('show');
}

  function go_window() {
    window.open( 
              "https://bescrow.world/", "_blank");
  }
  
  
  function hideModal() {
    $('#staticBackdrop').modal('hide');
  }
  
  </script>

<!-- buy + sell end -->

<!-- Ask An Expert -->

<div class="modal fade" id="staticBackdropExp" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
      We are in the process of activating these pages, please get back to us soon.
      </div>
      <div class="modal-footer">
        <button type="button" onclick="hideModalExp();" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
        
      </div>
    </div>
  </div>
</div>

<script>
  function exp_modal() {
    $('#staticBackdropExp').modal('show');
}
  
  function hideModalExp() {
    $('#staticBackdropExp').modal('hide');
  }
  
  </script>

<!-- End Ask An Expert -->

<!-- Ask An Moderator -->

<div class="modal fade" id="staticBackdropMod" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
      We are in the process of activating these pages, please get back to us soon.
      </div>
      <div class="modal-footer">
        <button type="button" onclick="hideModalMod();" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
        
      </div>
    </div>
  </div>
</div>

<script>
  function mod_modal() {
    $('#staticBackdropMod').modal('show');
}
  
  function hideModalMod() {
    $('#staticBackdropMod').modal('hide');
  }
  
  </script>

<!-- End Ask An Moderator -->

<!-- Send A Gift -->

<div class="modal fade" id="staticBackdropSnd" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
      We are in the process of activating these pages, please get back to us soon.
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

<!-- End Send A Gift -->






<!-----------------------------------------chat end ---------------------------------------->
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


<!-------------------------------- chat script ------------------------------------------>

<script>
  //-------------------- socket connection established-------------------------------------
  //ajax chat messages with socket------------------------------------------------------------------------
var socket = io('https://yourdeveloper.world', {transports: ['websocket']});
socket.emit('join', {email: '<?php echo Crypt::decryptString($_COOKIE['UserEmail']); ?>', id: '<?php echo Crypt::decryptString($_COOKIE['UserIds']); ?>'});

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
        id_user: <?php echo Crypt::decryptString($_COOKIE['UserIds']); ?>,
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

     
          
            if(msg[0][i].chat_from_id == <?php echo Crypt::decryptString($_COOKIE['UserIds']); ?>) {
              
              

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
                  $("#chat_messenger").append('<div class="d-flex align-items-center"><div class="text-left pr-1"></div><div class="pr-2 pl-1"> <span class="name"></span><a  data-toggle="tooltip" data-placement="top" title="" class="chat_d"  href="javascript:void(0)" data-original-title="'+moment(msg[0][i].chat_date_time).format('MMMM Do YYYY, h:mm:ss a')+'"><p class="msg">'+msg[0][i].chat_msg_trans+'</p></a></div></div>');
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
              from_id: <?php echo Crypt::decryptString($_COOKIE['UserIds']); ?>,
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
              from_id: <?php echo Crypt::decryptString($_COOKIE['UserIds']); ?>,
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
            socket.emit('send_msg_server', { user: em, msg: msg, to: <?php echo Crypt::decryptString($_COOKIE['UserIds']); ?>, toname: '<?php echo Crypt::decryptString($_COOKIE['UserFullName']); ?>', toemail: '<?php echo Crypt::decryptString($_COOKIE['UserEmail']); ?>'}); //socket
            
            $(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);
            $("#chat_messenger").append('<div class="d-flex align-items-center text-right justify-content-end "><div class="pr-2"> <span class="name"></span><p class="msg_other">'+message+'</p></div><div></div></div>');
            $('.message-input').val(null);
            $('.contact.active .preview').html('<span>You: </span>' + message);
          }
          
  
        });

        

        
    }
    
}



//--------------- report
function report(rptid,id) {
  let _token   = $('meta[name="csrf-token"]').attr('content');
  if(rptid != 9){

    var r = confirm("Are you sure you want to report this user?");
      if (r == true) {

        


            $.ajax({
                type: "POST",
                url: '/postinsert', // This is what I have updated
                data:{
                      report:"asdasdasd",
                      rptid:rptid,
                      user:id,
                      _token: _token
                    },
                }).done(function( msg ) {

                  alert("Thank you for reporting! Our team will review your concern.");
                  $('.report_block').hide();
          });
        
      } else {
        $('.report_block').hide();
      }

    }else{

      $('.report_block').hide();
    }    




}

function typing_alert(str) {
	too = $("#hd_t").val();
    em = $("#emchat").val()
	if(str.length > 0) {
		socket.emit('typing', { user: em, msg: 'typing...', to: <?php echo Crypt::decryptString($_COOKIE['UserIds']); ?>}); //socket
	} else {
		socket.emit('typing', { user: em, msg: '', to: <?php echo Crypt::decryptString($_COOKIE['UserIds']); ?>}); //socket
	}
	
}

function hideBox() {
  $(".wrapper").hide();
}

function hidechatbox() {
  $(".toast").hide();
}

</script>




<!------------------------------------------------------ chat script end ----------------------------------------------------->




<?php if(isset($_COOKIE['UserEmail'])) { ?>

<?php } ?>

<script>
  $(function () {

    $("#dialognoprofilepic").dialog({
        autoOpen: false,
        modal: true,
        title: "No photos",
        open: function(event, ui) {
        $(".ui-dialog-titlebar-close", ui.dialog || ui).hide();
       },
        buttons: {
            Close: function () {
                $(this).dialog('close');
            }
        }
    });

    $("#dialogusernoprofile").dialog({
        autoOpen: false,
        modal: true,
        title: "No photos",
        open: function(event, ui) {
        $(".ui-dialog-titlebar-close", ui.dialog || ui).hide();
       },
        buttons: {
            Close: function () {
                $(this).dialog('close');
            }
        }
    });

    $("#suspendedalert").dialog({
        autoOpen: false,
        modal: true,
        title: "Suspended",
        open: function(event, ui) {
        $(".ui-dialog-titlebar-close", ui.dialog || ui).hide();
       },
        buttons: {
            Close: function () {
                $(this).dialog('close');
            }
        }
    });


    let _token   = $('meta[name="csrf-token"]').attr('content');
    $("#notifbell").click(function(){

      $.ajax({
        type: "POST",
        url: '/updatenotif', // This is what I have updated
        data:{
          _token: _token
            },
        }).done(function( msg ) {
           //loading users list
          
           $('#badge_notif').hide();

  
        });

  });

  $("#report-btn").click(function(){

    if($('.report_block').is(':visible')){
      $('.report_block').hide();
    }else{
      $('.report_block').show();
    }
    

});


            $("#profile-dob").datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd/mm/yy',
                yearRange: '1950:2003'   //Current Year -10 to Current Year + 10.
            });


    // INITIALIZE DATEPICKER PLUGIN
    $('.datepicker').datepicker({
        clearBtn: true,
        format: "dd/mm/yyyy"
    });


    // FOR DEMO PURPOSE
    $('#reservationDate').on('change', function () {
        var pickedDate = $('input').val();
        $('#pickedDate').html(pickedDate);
    });
});
</script>

<script>



    function search() {

        
        window.ReactNativeWebView.postMessage('search')
      }

    function upgrade() {
        
        window.ReactNativeWebView.postMessage('upgrade')
      }

    function login() {
      
      window.ReactNativeWebView.postMessage('loggedin')
    }

    function profile() {
      
      window.ReactNativeWebView.postMessage('profile')
    }
</script>


<script>
$(function () {
  $('body').tooltip({selector: '[data-toggle="tooltip"]'});
})


//minimize and maximize chat list box
function minimize_chat_box() {
  $("#chat-list").slideToggle("slow");
}



</script>


<script type="text/javascript">
    var page = 1;
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height()) {
        //if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            //console.log('bottom')
            page++;
            
                loadMoreData(page);
            
            
             //console.log(page)
        }
    });


    function loadMoreData(page){
        
      $.ajax(
            {
                url: '?page=' + page,
                type: "get",
                beforeSend: function()
                {
                    
                         //$('.ajax-load').show();
                    
                   
                }
            })
            .done(function(data)
            {
              //console.log(data);
                  
                
                if(data.html == ""){
                    //$('.ajax-load').html("No more records found");
                    //$('.ajax-load').hide();
                   
                    return;
                }
                //$('.ajax-load').hide();
                $("#cont").append(data.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                $('.ajax-load').hide();
                  alert('server not responding...');
            });
    }
</script>


<script>
  //file transfer 

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
    socket.emit('send_msg_server', { user: em, msg: '', img: data[i], to: <?php echo Crypt::decryptString($_COOKIE['UserIds']); ?>, toname: '<?php echo Crypt::decryptString($_COOKIE['UserFullName']); ?>', toemail: '<?php echo Crypt::decryptString($_COOKIE['UserEmail']); ?>'});

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

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



<style type="text/css">
  #chat_messenger img {
    max-width: 200px;
    max-height: 100%;
  }
</style>



<!------- modal for customer support broadcast notification -------------->

<?php 
$cus_support= DB::Select("SELECT * FROM users_chat_rooms WHERE room_to_id= '".Crypt::decryptString($_COOKIE['UserIds'])."' AND room_from_id= '0' AND room_status='1'");
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
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Customer Support</h5>
        <button style="
          background-color: #eee !important;
        " type="button" class="close" data-dismiss="modal" aria-label="Close">
          <!-- <span aria-hidden="true">&times;</span> -->
          <i class="fas fa-times"></i>
        </button>
      </div>
      <div class="modal-body" style="
        font-size: 18px;
      ">
        You have a new message from the Customer Support Team.
      </div>
      <div class="modal-footer">
        <button onclick="loadChat('0', 'Customer support', 'customer@support.globallove', 'offline')" type="button" class="btn btn-primary btn-lg btn-block">View message</button>
      </div>
    </div>
  </div>
</div>


<!------------------- Video call ------------------------>

<script>
    function startVideo() {
      var em = $("#emchat").val();
      $("#videocallDiolog").modal("hide");
     window.open("/videocall?q=" + em, "_blank", "toolbar=no,scrollbars=no,resizable=no,top=0,left=0,width=600,height=600,fullscreen=yes");
        
    }

    function startVideoAccept() {
      $("#videocallDiolog").modal("hide");
      var room = $("#room").val();
     window.open("/videocall?room="+room, "_blank", "toolbar=no,scrollbars=no,resizable=no,top=0,left=0,width=600,height=600,fullscreen=yes");
    }

    function denyCall() {
      $("#videocallDiolog").modal("hide");

      //call socket for deny
    }

    function pause() {
        var x = document.getElementById("myAudio"); 
        x.pause();
    }
</script>


<div class="modal fade" id="videocallDiolog" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content" style="background-color: #f1f2f6; color: #000;">
      <div class="modal-header ">
      <audio loop id="myAudio">
        <source src="{{ url('ring.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
        <button onclick="pause();" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color: #000;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <h2>Calling from <span id="calling_from"></span></h2>
        <input type="hidden" id="room" value="">
        <h4><a class="btn btn-success" onclick="startVideoAccept();" href="#">Accept</a> &nbsp; <a onclick="denyCall();" class="btn btn-danger" href="#">Deny</a></h4>
      </div>
    
    </div>
  </div>
</div>


</body>
</html>
