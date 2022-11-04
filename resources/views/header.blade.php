<?php
//get all online users
$online_users = DB::Select("select onln_status  FROM `users`
LEFT JOIN `users_metas` ON `users_metas`.`user_id` = `users`.`id` WHERE `users`.`id` != '".Crypt::decryptString($_COOKIE['UserIds'])."' AND `users_metas`.`sex` = '".Crypt::decryptString($_COOKIE['LookingFor'])."' AND `users`.`prfl_approve_status` = '1' AND `users`.`onln_status` = 'online' AND `users`.`id` NOT IN (
  SELECT b_who_id
  FROM block_users
  WHERE b_whom_id = '".Crypt::decryptString($_COOKIE['UserIds'])."')");
//------------------end ----------------------------------
?>

  <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Totally Free International Dating Experience With 1000's of Filipino Woman, Transgender, Gay & Men Already Upgraded Members, And Waiting For You - GlobalLove</title>
  <meta name="description" content="The world's first and only true Multi Everythingdating website. Be a GlobalLove member and find your love.">
<meta name="keywords" content="Dating, Multi Gender, Dating website, GlobalLove">
<meta name="robots" content="index, follow">
  
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  
  <link rel="icon" type="image/x-icon" href="https://www.globallove.online/images/GlobalLoveLogo2.png">
<!--   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ url('app.min.css') }}">


  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

<!-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<meta name="csrf-token" content="{{ csrf_token() }}" />

<style type="text/css">
  h1,h2,h3,h4,h5,h6 {
    font-family: 'Source Sans Pro', sans-serif !important;
  }
  .title {
    font-family: 'Source Sans Pro', sans-serif !important;
  }
  .dropdown-item-notify {
        border-bottom: 1px solid #ccc !important;
        color: #222 !important;
  }

  .header-brand-img {
    height: 100px !important;
  }
  .text-default {
    color: #000 !important;
  }
  .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
    color:#fff
  }
  

</style>

{{-- <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-197802039-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-197802039-1');
</script> --}}

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-213324873-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-213324873-1');
</script>

{{-- <!-- Hotjar Tracking Code for https://www.globallove.online/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2401964,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script> --}}

<meta name="google-site-verification" content="cw9WUKpVnC9DW7v3kIl5Q1sZTNJRwB3jAT4ohM1Cxg4" />

@php 
  $payment= DB::Select("SELECT pt_u_id,pt_end_date,pt_start_date FROM payment_transactions WHERE pt_u_id= '".Crypt::decryptString($_COOKIE['UserIds'])."'");
@endphp



    {{-- This is for Google Adsense --}}

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2843148547180331"
        crossorigin="anonymous"></script>

    {{-- End Google Adsense --}}


<meta name="p:domain_verify" content="e8a56d4d17846ab6e5f0d43f19555677"/>


</head>
<body onunload="lol()" class="ltr body-default">



<div>
  <div class="headerr" style="background-color: #ffffff !important; color: #000 !important;">
  <div class="container">
      <div class="d-flex">
          <a class="header-brand" href="/" style="color: #FFFFFF;">
               <img class="header-brand-img" src="https://www.globallove.online/images/GlobalLoveLogo2.png" alt="GlobalLove">             </a>
          <div class="d-flex align-items-center order-lg-2 ml-auto">
                                  
                      <div class="nav-item d-none d-sm-block">
      <!-- <a href="/index.php?r=balance%2Fservices" class="btn btn-outline-primary btn-sm" data-pjax="0" title="Balance" rel="tooltip">
        <i class="fas fa-wallet mr-2"></i><span class="user-balance">0</span>
      </a> -->
  </div>












<div class="dropdown">

@php
$propic= DB::Select("SELECT prfl_photo_path,prfl_approve_status FROM users WHERE id= '".Crypt::decryptString($_COOKIE['UserIds'])."'");

$today = date('Y-m-d H:i:s');
$premium_login = DB::Select("select * from payment_transactions where pt_u_id = '".Crypt::decryptString($_COOKIE['UserIds'])."' and pt_end_date > '".$today."'");
@endphp  
@foreach($propic as $pro)
  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
    @if($pro->prfl_approve_status == '1')
      <span class="avatar" style="background-image: url({{ $pro->prfl_photo_path }})"></span>
    @else
        @if($propic != 'https://www.globallove.online/images/male-user-placeholder.png')
          <span class="avatar" style="background-image: url({{ $pro->prfl_photo_path }})"></span>
        @else  
        <span class="avatar" style="background-image: url('https://www.globallove.online/images/male-user-placeholder.png')"></span>
        @endif
    @endif
@endforeach
      @if (isset($_COOKIE['UserIds']))
      <span class="ml-2 d-none d-lg-block">
        
          <span class="text-default">{{ Crypt::decryptString($_COOKIE['UserFullName']) }}</span>

          <small class="text-muted d-block mt-1">
          @if(count($premium_login) == 1) 
          <span style="font-weight: 600;
    color: #5eba00;
    letter-spacing: 1.2px;
    font-size: 15px;">Premium</span>
          @else
          <span style="letter-spacing: 1px; font-size: 15px;">Profile</span>
          @endif
        </small>
      </span>

  </a>
  
  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
    <a class="dropdown-item" href="/profile">
           View Profile        </a>
    <a class="dropdown-item" href="/preferredlanguage">
           Chat Translation        </a>
      <a class="dropdown-item" href="/editprofile">
           Edit Profile        </a>
      <a class="dropdown-item" href="/verifyprofile">
           Verify Profile        </a>
          <a class="dropdown-item" href="/photos">
           Photos        </a>
      <a class="dropdown-item" href="/match">
           Match Settings        </a>
          <a class="dropdown-item" href="/profiledetails">
           Hobbies & Interest        </a>
      <a class="dropdown-item" href="/personalityquestion">
           Personality Questions        </a>
          
</div>


  
</div>

<div class="dropdown">

@php
    $notification= DB::Select("SELECT t1.*,t2.* FROM notifications t1 left join users t2 on (t1.notifications_user_id=t2.id) WHERE t1.notifications_to_id = '".Crypt::decryptString($_COOKIE['UserIds'])."' ORDER BY t1.notifications_date_time DESC LIMIT 50");

    $countnotif= DB::Select("SELECT count(*) as cnt FROM notifications where notifications_to_id = '".Crypt::decryptString($_COOKIE['UserIds'])."' and status = 0 ");

 
  @endphp

  <!-- badge -->
  @if(isset($countnotif))
    @if($countnotif[0]->cnt  > 0)
      <div id="badge_notif" style="width: 10px; height: 10px; border-radius: 25px; background-color: #f15052;
        position: absolute;
        right: 2px;
        top: -3px;"></div>
    @endif
 @endif
  <a href="#" class="nav-link pr-0 leading-none" id="notifbell" data-toggle="dropdown">
  <span class="ml-2">
        
          <span class="text-default"><i style="font-size: 26px;" class="far fa-bell"></i></span>

          <!-- <small class="text-muted d-block mt-1">sumanta</small> -->
      </span>

  </a>


  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="overflow: auto; height: 400px;">

    @foreach($notification as $notify)
    <?php $date = date('M j, Y', strtotime($notify->notifications_date_time));
          $time = date('g:i a', strtotime($notify->notifications_date_time)); ?>
    @if($notify->notifications_key == "view_profile")
    <a class="dropdown-item dropdown-item-notify" href="/userprofile/{{ $notify->id }}"> <strong>{{ $notify->name }}</strong> viewed your profile
      <p style="font-size: 12px;">{{ $date }}, {{ $time }}</p></a>
    @elseif($notify->notifications_key == "liked_me")
    <a class="dropdown-item dropdown-item-notify" href="/userprofile/{{ $notify->id }}"> <strong>{{ $notify->name }}</strong> Liked you
    <p style="font-size: 12px;">{{ $date }}, {{ $time }}</p></a>
    @endif
    @endforeach
   
</div>

</div>




<div class="dropdown">
  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
      
      
      <span class="ml-2">
        
          <span class="text-default"><i style="font-size: 26px;" class="fa fa-cog"></i></span>

          <!-- <small class="text-muted d-block mt-1">sumanta</small> -->
      </span>

  </a>
  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
    <a class="dropdown-item" href="/changeemail">
           E-mail Address        </a>
      <a class="dropdown-item" href="/account">
           Password        </a>
          <a class="dropdown-item" href="/profilesettings">
           Profile Settings        </a>
       
      <a class="dropdown-item" href="/membership">
           Upgrade Membership        </a>
          <a class="dropdown-item" href="/logout">
           Logout        </a>
           <a class="dropdown-item" href="/delete-account" onclick="return confirm('Are you sure you want to delete your account permanently?');">
           Delete Account        </a>
   
</div>


  
</div>

<div class="dropdown d-block d-lg-none"><a class="nav-link " href="/"><i style="font-size: 26px; color: #000;" class="fa fa-home"></i></a></div>


                  <a href="#" onclick="openNav();" class="header-toggler d-lg-none ml-3 ml-lg-0" > <!------- data-toggle="collapse" data-target="#header-navigation" -->
                      <span class="header-toggler-icon"></span>
                  </a>
                          </div>
      </div>
  </div>
</div>


<div class="header d-lg-block p-0 mobheader" id="header-navigation" style="display: none;">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg order-lg-first">
              <ul class="nav nav-tabs border-0 flex-column flex-lg-row"><!-- <li class="nav-item active"><a class="nav-link active" href="/dashboard"><i class="fas fa-home"></i>Dashboard </a></li> -->
<li class="nav-item"><a class="nav-link " href="/browse"><i class="fa fa-search"></i>BROWSE </a></li>

<li class="nav-item"><a class="nav-link " href="/matches"><i class="far fa-heart"></i>MY MATCHES </a></li>



        <li class="nav-item dropdown" style="margin-top: 4px;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-tasks"></i>  ACTIVITY
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/likes">LIKED ME</a>
            <a class="dropdown-item" href="/viewprofileuser">VIEWED MY PROFILE</a>
            <a class="dropdown-item" href="/connection">MY FAVOURITES</a>
            <a class="dropdown-item" href="/blocklist">BLOCK LIST</a>
        </div>
      </li>





        <?php 
          $chatUsers = DB::Select("SELECT t1.*,t2.* FROM users_chat_rooms t1 RIGHT JOIN users t2 ON (t1.room_to_id=t2.id) RIGHT JOIN users_metas um ON t2.id = um.user_id WHERE t1.room_from_id = ".Crypt::decryptString($_COOKIE['UserIds']). " ORDER BY t1.timedate DESC");
          $offlinemsg= DB::Select("SELECT room_status FROM users_chat_rooms WHERE room_from_id = '".Crypt::decryptString($_COOKIE['UserIds'])."'AND room_status= '1'");
        
          ?>
          


            <!-- badge -->



        <li class="nav-item dropdown" style="margin-top: 4px;">
        

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-comments"></i>  MESSAGES
         @if(count( $offlinemsg)  > 0)
                <div id="badge_notif_messages" style="    width: 24px;
    height: 22px;
    border-radius: 25px;
    background-color: #27b52b;
    position: absolute;
    right: 2px;
    top: -3px;
    text-align: center;">{{  count( $offlinemsg) }}</div>
              @endif
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="height:400px;overflow:auto;width:400px">
       

          
        <ul id="chat-list-header" style="margin: 0; padding: 10px;">

          <li class="mb-3" style="
              display: flex;
              flex: 1;
              align-items: flex-end;
              flex-direction: row;
              flex-wrap: nowrap;
              align-content: flex-end;
              justify-content: flex-end;
          ">
            <a style="margin-right: 5px;" class="btn btn-primary btn-sm btn-block" href="/messages/inbox2"><i class="fas fa-inbox"></i> Inbox</a>
            <a class="btn btn-dark btn-sm btn-block" href="messages/sent"><i class="fas fa-share"></i> Sent</a>
          </li>

        <?php foreach($chatUsers as $cu) { 
  
      
            if($cu->prfl_approve_status == '0'){
                $propic = 'https://www.globallove.online/images/male-user-placeholder.png';
            } else{
                $propic = $cu->prfl_photo_path;
            }
        $msgs = DB::Select("SELECT COUNT(*) AS msgCount FROM users_chat WHERE (chat_from_id = ".Crypt::decryptString($_COOKIE['UserIds'])." AND chat_to_id = ".$cu->room_to_id.") OR (chat_from_id = ".$cu->room_to_id." AND chat_to_id = ".Crypt::decryptString($_COOKIE['UserIds']).") ORDER BY chat_date_time ASC");

            $msg= DB::Select("SELECT room_status FROM users_chat_rooms WHERE room_from_id = '".Crypt::decryptString($_COOKIE['UserIds'])."' AND room_to_id= '".$cu->room_to_id."' AND room_status= '1'");

            $msg_latest = DB::Select("SELECT chat_msg FROM users_chat WHERE (chat_to_id = '".Crypt::decryptString($_COOKIE['UserIds'])."' AND chat_from_id= '".$cu->room_to_id."') OR (chat_from_id = '".Crypt::decryptString($_COOKIE['UserIds'])."' AND chat_to_id= '".$cu->room_to_id."') order by chat_id DESC LIMIT 1");

            if($cu->room_to_id > 0):
           if(empty($msgs[0]->msgCount) || $msgs[0]->msgCount <= 0){
		 continue;
	   }
      ?>

        <li onclick="loadChat('<?php echo $cu->room_to_id; ?>', '<?php echo $cu->name; ?>', '<?php echo $cu->email; ?>', '<?php echo $cu->onln_status; ?>')" id="idd_<?php echo $cu->room_to_id; ?>" style="margin-bottom: 10px; list-style: none; cursor: pointer;
          padding: 4px;
          font-size: 16px;
          font-weight: 700;
          color: #000;
          border-radius: 8px;"> 
          <span><img style="width: 48px;
          height: 48px;
          border-radius: 25px;

          border: 1px solid #444; display: inherit;" src="{{$propic}}" /></span>
          
        
          {{-- @if(count($msg) > 0)
          <span id="badge_<?php echo $cu->room_to_id; ?>" style="float: right;
          margin-top: 31px;
          margin-right: 20px;
          width: 20px;" class="badge badge-success"> {{count($msg)}} </span>
          
          @endif --}}

          <p style="float:right;margin-right:30px;width:270px">{{$cu->name}} <br>


          @if(count($msg_latest) > 0 && count($msg) > 0 && isset($msg_latest[0]->chat_msg) && $msg_latest[0]->chat_msg != '')

          <span style="font-size: 15px;
          color: #000000;
          font-weight: 700;">{{Str::limit ($msg_latest[0]->chat_msg, 30)}}</span></p>

          @elseif(count($msg_latest) > 0 && count($msg) == 0 && isset($msg_latest[0]->chat_msg) && $msg_latest[0]->chat_msg != '') 

          <span style="font-size: 15px;
          color: #a7a5a5;
          font-weight: 400;">{{Str::limit ($msg_latest[0]->chat_msg, 30)}}</span></p>

          @elseif(isset($msg_latest[0]->chat_msg) && $msg_latest[0]->chat_msg == '' && count($msg) > 0) 

          <span style="font-size: 15px;
          color: #000000;
          font-weight: 700;"><i class="fas fa-paperclip"></i> Media</span></p>

          @else

          <span style="font-size: 15px;
          color: #a7a5a5;
          font-weight: 400;"><i class="fas fa-paperclip"></i> Media</span></p>

         @endif

        </li>



      <?php endif; } ?>


    
</ul>





        </div>
      </li>



      <li class="nav-item"><a class="nav-link " href="/online">
         @if(count($online_users) > 0) 
        <i class="fas fa-circle text-success"></i>
        @endif
        <i class="fas fa-wifi"></i> &nbsp;ONLINE MEMBERS&nbsp;&nbsp;{{ count($online_users) }} </a></li>

        <!-- <li class="nav-item"><a style="color: #f9ca24;font-size:20px;" href="https://bescrow.world/" target="_blank">BUY + SELL</a></li>

        <li class="nav-item"><a style="color: #f9ca24;font-size:20px;" href="">ASK AN EXPERT</a></li>
        <li class="nav-item"><a style="color: #f9ca24;font-size:20px;" href="">ASK A MODERATOR</a></li>
        <li class="nav-item"><a style="color: #f9ca24;font-size:20px;" href="">SEND GIFT</a></li> -->




</ul>
</div>
      @endif
      <div id="google_translate_element"></div>
      </div>
  </div>
</div>

<div class="container">
  <div class="row mt-2">
    <div class="col-md-6">

      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2843148547180331"
     crossorigin="anonymous"></script>
<!-- header ad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2843148547180331"
     data-ad-slot="1669183625"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

    </div>
    <div class="col-md-6">
      <a class="btn btn-success" style="color: #fff;font-size:15px;margin-left: 20px;" onclick="bes_modal()" href="javascript:void(0)">BUY + SELL</a>
  
          <a class="btn btn-success" style="color: #fff;font-size:15px;margin-left: 20px;" onclick="exp_modal()" href="javascript:void(0)">ASK AN EXPERT</a>
          <a class="btn btn-success" style="color: #fff;font-size:15px;margin-left: 20px;" onclick="mod_modal()" href="javascript:void(0)">ASK A MODERATOR</a>
          <a class="btn btn-success" style="color: #fff;font-size:15px;margin-left: 20px;" onclick="snd_modal()" href="javascript:void(0)">SEND GIFT</a>
    </div>
    
  
    </div>  
</div>




@php
$userapprove = DB::Select("SELECT prfl_approve_status,prfl_photo_path FROM users WHERE id = '".Crypt::decryptString($_COOKIE['UserIds'])."'");
@endphp

@if(count($userapprove) > 0)
  @if($userapprove[0]->prfl_approve_status == 0  && $userapprove[0]->prfl_photo_path == 'https://www.globallove.online/images/male-user-placeholder.png')
  <div class="alert alert-success" role="alert">


  <h4 class="alert-heading"><i class="fa fa-camera" aria-hidden="true"></i> Upload Profile Photo</h4>
  <p>Your account is currently under review and needs the following in order go live and allow you to browse:<br>
  <span style= "font-weight: 700;">Your profile must have at least one pic of yourself</span></p>
  <a href="/photos" class="btn btn-success btn-lg">Upload Now</a>

  </div>
  @endif
  @if($userapprove[0]->prfl_approve_status == 1  && $userapprove[0]->prfl_photo_path == 'https://www.globallove.online/images/male-user-placeholder.png')
  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading"><i class="fa fa-camera" aria-hidden="true"></i> Upload Profile Photo</h4>
  <span style= "font-weight: 700;">Your profile must have at least one pic of yourself</span></p>
  <a href="/photos" class="btn btn-success btn-lg">Upload Now</a>

  </div>
  @endif
@endif



</div>




<!-------------------------------customer service ------------------------------->
<?php 
$cus_support= DB::Select("SELECT * FROM users_chat_rooms WHERE room_to_id= '".Crypt::decryptString($_COOKIE['UserIds'])."' AND room_from_id= '0' AND room_status='1'");
if(count($cus_support) > 0) {

?>




<div style="
position: fixed;
    background: red;
    border-radius: 25px;
    padding: 0px;
    width: 20px;
    height: 20px;
    right: 25px;
    top: 316px;
    z-index: 10000;
">
  <span style="
    color: #fff;
    font-weight: 700;
    margin-left: 6px;
  ">1</span>
</div>
<?php } ?>
<button onclick="loadChat('0', 'Customer support', 'customer@support.globallove', 'offline')" id="idd_0" type="button" class="btn btn-success btn-lg csbtn d-none d-sm-block">Customer Support

</button>



<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">


<style type="text/css">
.csbtn {
  transform: rotate(90deg);
  position: fixed;
  right: -65px;
  top: 230px;
  z-index: 1000;
}
    /* Smartphones (portrait and landscape) ----------- */
@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
  .main {
    right: 0 !important;
    left: 0 !important;
    width: 100% !important;
  }
  .csbtn {
    top: 180px;
  }
  
}
</style>

<script type="text/javascript">
  function openNav() {
    console.log('navi');
    $(".mobheader").slideToggle();
  }
</script>





