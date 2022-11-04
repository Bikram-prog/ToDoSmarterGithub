<html lang="en">

<head>
  <title>Globallove Chat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Font Awesome File -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>










<meta name="csrf-token" content="{{ csrf_token() }}" />


<link rel="icon" type="image/x-icon" href="https://www.globallove.online/images/GlobalLoveLogo2.png">
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.1.1/socket.io.js" integrity="sha512-oFOCo2/3DtjrJG4N27BjSLQWoiBv171sK6a+JiWjp/7agxC2nCUP358AqzxkBUb5jX8g6CYLPdSKQTbC0weCwA==" crossorigin="anonymous"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 

 
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


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-213324873-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-213324873-1');
</script>


</head>
<style>

html,
body,
div,
span {

  width: 100%;
  overflow: hidden;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}



.fa-2x {
  font-size: 1.5em !important;
}

.app {
  position: relative;
  overflow: hidden;
  top: 19px;
  height: calc(100% - 38px);
  margin: auto !important;
  padding: 0 !important;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .06), 0 2px 5px 0 rgba(0, 0, 0, .2);
}

.app-one {
  background-color: #f7f7f7;
  height: 100%;
  overflow: hidden;
  margin: 0 !important;
  padding: 0 !important;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .06), 0 2px 5px 0 rgba(0, 0, 0, .2);
}

.side {
  padding: 0 !important;
  margin: 0 !important;
  height: 100%;
}
.side-one {
  padding: 0;
  margin: 0;
  height: 100%;
  width: 100%;
  z-index: 1;
  position: relative;
  display: block;
  top: 0;
}

.side-two {
  padding: 0 !important;
  margin: 0 !important;
  height: 100%;
  width: 100%;
  z-index: 2;
  position: relative;
  top: -100%;
  left: -100%;
  -webkit-transition: left 0.3s ease;
  transition: left 0.3s ease;

}


.heading {
  padding: 10px 16px 10px 15px;
  margin: 0 !important;
  height: 60px;
  width: 100%;
  background-color: #eee;
  z-index: 1000;
}

.heading-avatar {
  padding: 0 !important;
  cursor: pointer;

}

.heading-avatar-icon img {
  border-radius: 50%;
  height: 40px;
  width: 40px;
}

.heading-name {
  padding: 0 !important;
  cursor: pointer;
}

.heading-name-meta {
  font-weight: 700;
  font-size: 100%;
  padding: 5px;
  padding-bottom: 0;
  text-align: left;
  text-overflow: ellipsis;
  white-space: nowrap;
  color: #000;
  display: block;
}
.heading-online {
  display: none;
  padding: 0 5px;
  font-size: 12px;
  color: #93918f;
}
.heading-compose {
  padding: 0;
}

.heading-compose i {
  text-align: center;
  padding: 5px;
  color: #93918f;
  cursor: pointer;
}

.heading-dot {
  padding: 0;
  margin-left: 10px;
}

.heading-dot i {
  text-align: right;
  padding: 5px;
  color: #93918f;
  cursor: pointer;
}

.searchBox {
  padding: 0 !important;
  margin: 0 !important;
  height: 60px;
  width: 100%;
}

.searchBox-inner {
  height: 100%;
  width: 100%;
  padding: 10px !important;
  background-color: #fbfbfb;
}


/*#searchBox-inner input {
  box-shadow: none;
}*/

.searchBox-inner input:focus {
  outline: none;
  border: none;
  box-shadow: none;
}

.sideBar {
  padding: 0 !important;
  margin: 0 !important;
  background-color: #fff;
  overflow-y: auto;
  border: 1px solid #f7f7f7;
  height: calc(100% - 120px);
}

.sideBar-body {
  position: relative;
  padding: 10px !important;
  border-bottom: 1px solid #f7f7f7;
  height: 72px;
  margin: 0 !important;
  cursor: pointer;
}

.sideBar-body:hover {
  background-color: #f2f2f2;
}

.sideBar-avatar {
  text-align: center;
  padding: 0 !important;
}

.avatar-icon img {
  border-radius: 50%;
  height: 49px;
  width: 49px;
}

.sideBar-main {
  padding: 0 !important;
}

.sideBar-main .row {
  padding: 0 !important;
  margin: 0 !important;
}

.sideBar-name {
  padding: 10px !important;
}

.name-meta {
  font-size: 100%;
  padding: 1% !important;
  text-align: left;
  text-overflow: ellipsis;
  white-space: nowrap;
  color: #000;
}

.sideBar-time {
  padding: 10px !important;
}

.time-meta {
  text-align: right;
  font-size: 12px;
  padding: 1% !important;
  color: rgba(0, 0, 0, .4);
  vertical-align: baseline;
}

/*New Message*/

.newMessage {
  padding: 0 !important;
  margin: 0 !important;
  height: 100%;
  position: relative;
  left: -100%;
}
.newMessage-heading {
  padding: 10px 16px 10px 15px !important;
  margin: 0 !important;
  height: 100px;
  width: 100%;
  background-color: #00bfa5;
  z-index: 1001;
}

.newMessage-main {
  padding: 10px 16px 0 15px !important;
  margin: 0 !important;
  height: 60px;
  margin-top: 30px !important;
  width: 100%;
  z-index: 1001;
  color: #fff;
}

.newMessage-title {
  font-size: 18px;
  font-weight: 700;
  padding: 10px 5px !important;
}
.newMessage-back {
  text-align: center;
  vertical-align: baseline;
  padding: 12px 5px !important;
  display: block;
  cursor: pointer;
}
.newMessage-back i {
  margin: auto !important;
}

.composeBox {
  padding: 0 !important;
  margin: 0 !important;
  height: 60px;
  width: 100%;
}

.composeBox-inner {
  height: 100%;
  width: 100%;
  padding: 10px !important;
  background-color: #fbfbfb;
}

.composeBox-inner input:focus {
  outline: none;
  border: none;
  box-shadow: none;
}

.compose-sideBar {
  padding: 0 !important;
  margin: 0 !important;
  background-color: #fff;
  overflow-y: auto;
  border: 1px solid #f7f7f7;
  height: calc(100% - 160px);
}

/*Conversation*/

.conversation {
  padding: 0 !important;
  margin: 0 !important;
  height: 100%;
  /*width: 100%;*/
  border-left: 1px solid rgba(0, 0, 0, .08);
  /*overflow-y: auto;*/
}

.message {
  padding: 0 !important;
  margin: 0 !important;
  /*background: url("w.jpg") no-repeat fixed center;*/
  background-size: cover;
  overflow-y: auto;
  border: 1px solid #f7f7f7;
  height: calc(100% - 120px);
}
.message-previous {
  margin : 0 !important;
  padding: 0 !important;
  height: auto;
  width: 100%;
}
.previous {
  font-size: 15px;
  text-align: center;
  padding: 10px !important;
  cursor: pointer;
}

.previous a {
  text-decoration: none;
  font-weight: 700;
}

.message-body {
  margin: 0 !important;
  padding: 0 !important;
  width: auto;
  height: auto;
}

.message-main-receiver {
  /*padding: 10px 20px;*/
  max-width: 60%;
}

.message-main-sender {
  padding: 3px 20px !important;
  margin-left: 40% !important;
  max-width: 60%;
}

.message-text {
  margin: 0 !important;
  padding: 5px !important;
  word-wrap:break-word;
  font-weight: 200;
  font-size: 14px;
  padding-bottom: 0 !important;
}

.message-time {
  margin: 0 !important;
  margin-left: 50px !important;
  font-size: 12px;
  text-align: right;
  color: #9a9a9a;

}

.receiver {
  width: auto !important;
  padding: 4px 10px 7px !important;
  border-radius: 10px 10px 10px 0;
  background: #ffffff;
  font-size: 12px;
  text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
  word-wrap: break-word;
  display: inline-block;
}

.sender {
  float: right;
  width: auto !important;
  background: #dcf8c6;
  border-radius: 10px 10px 0 10px;
  padding: 4px 10px 7px !important;
  font-size: 12px;
  text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
  display: inline-block;
  word-wrap: break-word;
}


/*Reply*/

.reply {
  height: 60px;
  width: 100%;
  background-color: #f5f1ee;
  padding: 10px 5px 10px 5px !important;
  margin: 0 !important;
  z-index: 1000;
}

.reply-emojis {
  padding: 5px !important;
}

.reply-emojis i {
  text-align: center;
  padding: 5px 5px 5px 5px !important;
  color: #93918f;
  cursor: pointer;
}

.reply-recording {
  padding: 5px !important;
}

.reply-recording i {
  text-align: center;
  padding: 5px !important;
  color: #93918f;
  cursor: pointer;
}

.reply-send {
  padding: 5px !important;
}

.reply-send i {
  text-align: center;
  padding: 5px !important;
  color: #93918f;
  cursor: pointer;
}

.reply-main {
  padding: 2px 5px !important;
}

.reply-main textarea {
  width: 100%;
  resize: none;
  overflow: hidden;
  padding: 5px !important;
  outline: none;
  border: none;
  text-indent: 5px;
  box-shadow: none;
  height: 100%;
  font-size: 16px;
}

.reply-main textarea:focus {
  outline: none;
  border: none;
  text-indent: 5px;
  box-shadow: none;
}

.msg-images{
    width: 100%;
    height: auto;
}

@media screen and (max-width: 700px) {
  .app {
    top: 0;
    height: 100%;
  }
  .heading {
    height: 70px;
    background-color: #009688;
  }
  .fa-2x {
    font-size: 2.3em !important;
  }
  .heading-avatar {
    padding: 0 !important;
  }
  .heading-avatar-icon img {
    height: 50px;
    width: 50px;
  }
  .heading-compose {
    padding: 5px !important;
  }
  .heading-compose i {
    color: #fff;
    cursor: pointer;
  }
  .heading-dot {
    padding: 5px !important;
    margin-left: 10px !important;
  }
  .heading-dot i {
    color: #fff;
    cursor: pointer;
  }
  .sideBar {
    height: calc(100% - 130px);
  }
  .sideBar-body {
    height: 80px;
  }
  .sideBar-avatar {
    text-align: left;
    padding: 0 8px !important;
  }
  .avatar-icon img {
    height: 55px;
    width: 55px;
  }
  .sideBar-main {
    padding: 0 !important;
  }
  .sideBar-main .row {
    padding: 0 !important;
    margin: 0 !important;
  }
  .sideBar-name {
    padding: 10px 5px !important;
  }
  .name-meta {
    font-size: 16px;
    padding: 5% !important;
  }
  .sideBar-time {
    padding: 10px !important;
  }
  .time-meta {
    text-align: right;
    font-size: 14px;
    padding: 4% !important;
    color: rgba(0, 0, 0, .4);
    vertical-align: baseline;
  }
  /*Conversation*/
  .conversation {
    padding: 0 !important;
    margin: 0 !important;
    height: 100%;
    /*width: 100%;*/
    border-left: 1px solid rgba(0, 0, 0, .08);
    /*overflow-y: auto;*/
  }
  .message {
    height: calc(100% - 140px);
  }
  .reply {
    height: 70px;
  }
  .reply-emojis {
    padding: 5px 0 !important;
  }
  .reply-emojis i {
    padding: 5px 2px !important;
    font-size: 1.8em !important;
  }
  .reply-main {
    padding: 2px 8px !important;
  }
  .reply-main textarea {
    padding: 8px !important;
    font-size: 18px;
  }
  .reply-recording {
    padding: 5px 0 !important;
  }
  .reply-recording i {
    padding: 5px 0 !important;
    font-size: 1.8em !important;
  }
  .reply-send {
    padding: 5px 0 !important;
  }
  .reply-send i {
    padding: 5px 2px 5px 0 !important;
    font-size: 1.8em !important;
  }
}

</style>
<body>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome File -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@php
$propic= DB::Select("SELECT prfl_photo_path,prfl_approve_status FROM users WHERE id= '".Crypt::decryptString($_COOKIE['UserIds'])."'");

$today = date('Y-m-d H:i:s');
$premium_login = DB::Select("select * from payment_transactions where pt_u_id = '".Crypt::decryptString($_COOKIE['UserIds'])."' and pt_end_date > '".$today."'");
@endphp  
  <div class="container app">
    <div class="row app-one">

      <div class="col-sm-4 side">
        <div class="side-one">
          <!-- Heading -->
          <div class="row heading">
            <div class="col-sm-6 col-xs-6 heading-avatar" style="display:flex;">
              <div class="heading-avatar-icon">
@foreach($propic as $pro)
    @if($pro->prfl_approve_status == '1')
   	<img id="profile-img" src="{{ $pro->prfl_photo_path }}">
    @else
        @if($propic != 'https://www.globallove.online/images/male-user-placeholder.png')
	   <img id="profile-img" src="{{ $pro->prfl_photo_path }}">
        @else  
   	   <img id="profile-img" src="https://www.globallove.online/images/male-user-placeholder.png">
        @endif
    @endif
@endforeach
              </div>
		<div class="heading-user-name" style="font-weight:bold;">
		   Welcome {{ Crypt::decryptString($_COOKIE['UserFullName']) }}
		</div>
            </div>

          </div>
          <!-- Heading End -->

          <!-- SearchBox -->
          <div class="row searchBox">
            <div class="col-sm-12 searchBox-inner">
              <div class="form-group has-feedback">
                <input id="searchText" type="text" onchange="searchUser(this)" class="form-control" name="searchText" placeholder="Search">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </div>
          </div>

          <!-- Search Box End -->
          <!-- sideBar -->
          <div id="main-div" class="row sideBar">
          
	@foreach ($users as $key => $user)
	    @php
		$count = 0;
	    @endphp
	    @if(empty($user['msgCount']) || $user['msgCount'] <= 0)
		 @continue
	    @endif
            <div id="{{$user['user_id']}}" data-username="{{$user['name']}}" onclick="loadChat('{{$user['user_id']}}', '{{$user['name']}}', '{{$user['email']}}','offline', '{{$user['propic']}}')" class="row sideBar-body">
              <div class="col-sm-3 col-xs-3 sideBar-avatar">
                <div class="avatar-icon">
                  <img src="{{$user['propic']}}">
                </div>
              </div>
              <div class="col-sm-9 col-xs-9 sideBar-main">
                <div class="row">
                  <div style="display:flex; justify-content:center; align-items:center;" class="col-sm-8 col-xs-8 sideBar-name">
                    <span class="name-meta">{{$user['name']}}
                  </span>
		  <span id="count-msg-{{$user['user_id']}}"  data-id="{{$user['user_id']}}" style="width: 20px;display: none;justify-content: center;align-items: center;background-color:#e50000;" class="badge badge-danger">1</span>
                  </div>
                  <div onclick="deleteChat({{$user['user_id']}}, {{$count}})" class="col-sm-4 col-xs-4 pull-right sideBar-time" style="display: flex;justify-content: end;width: 15%;">
<i class="fa fa-minus-circle" style="color: #9f1414 !important;font-size: 25px !important;position: relative;left: -5px;padding: 0px;cursor: pointer;"></i>
                  </div>
                </div>
              </div>
           </div>
	    @php
		$count++;
	    @endphp
   @endforeach
        
          </div>
          <!-- Sidebar End -->
        </div>
        <div class="side-two">

          <!-- Heading -->
          <div class="row newMessage-heading">
            <div class="row newMessage-main">
              <div class="col-sm-2 col-xs-2 newMessage-back">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
              </div>
              <div class="col-sm-10 col-xs-10 newMessage-title">
                New Chat
              </div>
            </div>
          </div>
          <!-- Heading End -->

          <!-- ComposeBox -->
          <div class="row composeBox">
            <div class="col-sm-12 composeBox-inner">
              <div class="form-group has-feedback">
                <input id="composeText" type="text" class="form-control" name="searchText" placeholder="Search People">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </div>
          </div>
          <!-- ComposeBox End -->

          <!-- sideBar -->
          <div class="row compose-sideBar">
            <div class="row sideBar-body">
              <div class="col-sm-3 col-xs-3 sideBar-avatar">
                <div class="avatar-icon">
                  <img src="">
                </div>
              </div>
              <div class="col-sm-9 col-xs-9 sideBar-main">
                <div class="row">
                  <div class="col-sm-8 col-xs-8 sideBar-name">
                    <span class="name-meta">Ankit Jain
                  </span>
                  </div>
                  <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                    <span class="time-meta pull-right">18:18
                  </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="row sideBar-body">
              <div class="col-sm-3 col-xs-3 sideBar-avatar">
                <div class="avatar-icon">
                  <img src="">
                </div>
              </div>
              <div class="col-sm-9 col-xs-9 sideBar-main">
                <div class="row">
                  <div class="col-sm-8 col-xs-8 sideBar-name">
                    <span class="name-meta">Ankit Jain
                  </span>
                  </div>
                  <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                    <span class="time-meta pull-right">18:18
                  </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row sideBar-body">
              <div class="col-sm-3 col-xs-3 sideBar-avatar">
                <div class="avatar-icon">
                  <img src="">
                </div>
              </div>
              <div class="col-sm-9 col-xs-9 sideBar-main">
                <div class="row">
                  <div class="col-sm-8 col-xs-8 sideBar-name">
                    <span class="name-meta">Ankit Jain
                  </span>
                  </div>
                  <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                    <span class="time-meta pull-right">18:18
                  </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row sideBar-body">
              <div class="col-sm-3 col-xs-3 sideBar-avatar">
                <div class="avatar-icon">
                  <img src="">
                </div>
              </div>
              <div class="col-sm-9 col-xs-9 sideBar-main">
                <div class="row">
                  <div class="col-sm-8 col-xs-8 sideBar-name">
                    <span class="name-meta">Ankit Jain
                  </span>
                  </div>
                  <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                    <span class="time-meta pull-right">18:18
                  </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row sideBar-body">
              <div class="col-sm-3 col-xs-3 sideBar-avatar">
                <div class="avatar-icon">
                  <img src="">
                </div>
              </div>
              <div class="col-sm-9 col-xs-9 sideBar-main">
                <div class="row">
                  <div class="col-sm-8 col-xs-8 sideBar-name">
                    <span class="name-meta">Ankit Jain
                  </span>
                  </div>
                  <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                    <span class="time-meta pull-right">18:18
                  </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row sideBar-body">
              <div class="col-sm-3 col-xs-3 sideBar-avatar">
                <div class="avatar-icon">
                  <img src="">
                </div>
              </div>
              <div class="col-sm-9 col-xs-9 sideBar-main">
                <div class="row">
                  <div class="col-sm-8 col-xs-8 sideBar-name">
                    <span class="name-meta">Ankit Jain
                  </span>
                  </div>
                  <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                    <span class="time-meta pull-right">18:18
                  </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row sideBar-body">
              <div class="col-sm-3 col-xs-3 sideBar-avatar">
                <div class="avatar-icon">
                  <img src="">
                </div>
              </div>
              <div class="col-sm-9 col-xs-9 sideBar-main">
                <div class="row">
                  <div class="col-sm-8 col-xs-8 sideBar-name">
                    <span class="name-meta">Ankit Jain
                  </span>
                  </div>
                  <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                    <span class="time-meta pull-right">18:18
                  </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row sideBar-body">
              <div class="col-sm-3 col-xs-3 sideBar-avatar">
                <div class="avatar-icon">
                  <img src="">
                </div>
              </div>
              <div class="col-sm-9 col-xs-9 sideBar-main">
                <div class="row">
                  <div class="col-sm-8 col-xs-8 sideBar-name">
                    <span class="name-meta">Ankit Jain
                  </span>
                  </div>
                  <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                    <span class="time-meta pull-right">18:18
                  </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row sideBar-body">
              <div class="col-sm-3 col-xs-3 sideBar-avatar">
                <div class="avatar-icon">
                  <img src="">
                </div>
              </div>
              <div class="col-sm-9 col-xs-9 sideBar-main">
                <div class="row">
                  <div class="col-sm-8 col-xs-8 sideBar-name">
                    <span class="name-meta">Ankit Jain
                  </span>
                  </div>
                  <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                    <span class="time-meta pull-right">18:18
                  </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row sideBar-body">
              <div class="col-sm-3 col-xs-3 sideBar-avatar">
                <div class="avatar-icon">
                  <img src="">
                </div>
              </div>
              <div class="col-sm-9 col-xs-9 sideBar-main">
                <div class="row">
                  <div class="col-sm-8 col-xs-8 sideBar-name">
                    <span class="name-meta">Ankit Jain
                  </span>
                  </div>
                  <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                    <span class="time-meta pull-right">18:18
                  </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Sidebar End -->
      </div>


      <!-- New Message Sidebar End -->

      <!-- Conversation Start -->
      <div class="col-sm-8 conversation">
        <!-- Heading -->
	<div id="first-display" style="height: 100%;display: flex;justify-content: center;align-items: center;font-size: 30px;font-weight: bold;">
		Welcome to Chat Side
	</div>
	<div id="msgs-display" style="display:none;">
        <div class="row heading">
          <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
            <div class="heading-avatar-icon">
              <img id="profile-user" src="">
            </div>
          </div>
          <div class="col-sm-8 col-xs-7 heading-name">
            <a class="heading-name-meta">Ankit Jain
            </a>
            <span class="heading-online">Online</span>
          </div>

        </div>
        <!-- Heading End -->

        <!-- Message Box -->
        <div class="row message" id="chat_messenger">

          <div class="row message-previous">
            <div class="col-sm-12 previous">
              <a onclick="previous(this)" id="ankitjain28" name="20">
              Show Previous Message!
              </a>
            </div>
          </div>

          <div class="row message-body">
            <div class="col-sm-12 message-main-receiver">
              <div class="receiver">
                <div class="message-text">
                 Hyy, Its Awesome..!
                </div>
                <span class="message-time pull-right">
                  Sun
                </span>
              </div>
            </div>
          </div>

          <div class="row message-body">
            <div class="col-sm-12 message-main-sender">
              <div class="sender">
                <div class="message-text">
                  Thanks n I know its awesome...!
                </div>
                <span class="message-time pull-right">
                  Sun
                </span>
              </div>
            </div>
          </div>

        </div>
        <!-- Message Box End -->

        <!-- Reply Box -->
        <div class="row reply">
          <form method="post" id="gl_file_upload" action="/sendfile" enctype="multipart/form-data" style="margin:0;">
          @csrf

          <div class="col-sm-1 col-xs-1 reply-emojis" style="display: flex;justify-content: center;align-items: center;">
            <i class="fa fa-plus-circle" id="OpenImgUpload" style="color: #512DA8 !important;font-size: 25px !important;position: relative;left: -5px;padding: 0px;cursor: pointer;"></i>
	    	<i class="fa fa-smile-o" id="call-emoji" style="color: #433e08 !important;font-size: 25px !important;position: relative;left: -5px;padding: 0px;cursor: 	pointer;"></i>
          </div>

          <div class="col-sm-9 col-xs-9 reply-main">
      	  <input type="hidden" id="hd_t" value="">
      	  <input type="hidden" id="emchat" value="">
	<input type="file" name="file[]" multiple="" id="imgupload" style="display:none">
          <input type="hidden" name="to" id="hd_to_img">
            <textarea class="form-control" rows="1" id="comment"></textarea>
		<input type="submit" id="upload_start_gl_file" name="upload" value="Upload" class="btn btn-success" style="display: none;">
	</form>
          </div>
          <div class="col-sm-1 col-xs-1 reply-send" onclick="newMessage()" style="display: flex;justify-content: center;align-items: center;">
            <i class="fa fa-send fa-2x" aria-hidden="true"></i>
          </div>
        </div>
        <!-- Reply Box End -->
	</div>
      </div>
      <!-- Conversation End -->
    </div>
    <!-- App One End -->
  </div>

  <!-- App End -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.1.1/socket.io.js" integrity="sha512-oFOCo2/3DtjrJG4N27BjSLQWoiBv171sK6a+JiWjp/7agxC2nCUP358AqzxkBUb5jX8g6CYLPdSKQTbC0weCwA==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.1.1/socket.io.js" integrity="sha512-oFOCo2/3DtjrJG4N27BjSLQWoiBv171sK6a+JiWjp/7agxC2nCUP358AqzxkBUb5jX8g6CYLPdSKQTbC0weCwA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
<!-----------------------------------------chat end ---------------------------------------->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>




    <script src="{{ url('vanillaEmojiPicker.js') }}"></script>

    <script>

        new EmojiPicker({
            trigger: [
                {
                    selector: '#call-emoji',
                    insertInto: ['#comment'] // '.selector' can be used without array
                },

            ],
            closeButton: true,
            //specialButtons: green
        });

    </script>



<script>

//$("#comment").emojioneArea({
 //  standalone: true,
  // pickerPosition:"top"
//});

var input = document.getElementById("comment");
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
console.log(data);
	const main = document.querySelectorAll("#main-div")[0];
	for(var i=0; i<main.children.length; i++){
	  if(main.children[i].id == data.to){
	  	main.children[i].parentNode.insertBefore(main.children[i], main.children[0]);
	  }
	}
  $("#calling_from").html(data.toname);
  $("#room").val(data.room)
  $("#videocallDiolog").modal("show");
});


socket.on("send_msg_server", function(data){
console.log('got data');
console.log(data);
})

//get message from server
socket.on("new_msg", function(data) {
console.log(data);
	$(".typing").html('');
  // $('.toast').show();
  // $(".toast-body").html(data.msg);
  // $('.toast').toast('show');

  if(data.msg !=''){
	const main = document.querySelectorAll("#main-div")[0];
	for(var i=0; i<main.children.length; i++){
	  if(main.children[i].id == data.to){
	  	main.children[i].parentNode.insertBefore(main.children[i], main.children[0]);
	  }
	}

    $('.toast_notify').append(`<div onclick="loadChat('${data.to}','${data.toname}','${data.toemail}','')" style="cursor: pointer; opacity: 1 !important; background: #F15052;color: #fff; width: 100%;" class="toast" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header" style="color:#000;"><i class="far fa-comment"></i> &nbsp; <strong class="mr-auto">${data.toname}</strong><small class="text-muted"> </small><button style="background: transparent;border: none;" type="button" class="ml-2 mb-1" onclick="hidechatbox()"><i class="fas fa-times"></i></button></div><div class="toast-body">${data.msg}</div></div>`);
  } else {
	const main = document.querySelectorAll("#main-div")[0];
	for(var i=0; i<main.children.length; i++){
	  if(main.children[i].id == data.to){
	  	main.children[i].parentNode.insertBefore(main.children[i], main.children[0]);
	  }
	}
    $('.toast_notify').append(`<div onclick="loadChat('${data.to}','${data.toname}','${data.toemail}','')" style="cursor: pointer; opacity: 1 !important; background: #F15052;color: #fff; width: 100%;" class="toast" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header" style="color:#000;"><i class="far fa-comment"></i> &nbsp; <strong class="mr-auto">${data.toname}</strong><small class="text-muted"> </small><button style="background: transparent;border: none;" type="button" class="ml-2 mb-1" onclick="hidechatbox()"><i class="fas fa-times"></i></button></div><div class="toast-body"><i class="fas fa-camera-retro"></i> Photo</div></div>`);
  }
  


//$("#count-msg-"+data.to).text('1+');
  $("#count-msg-"+data.to).text('1+').css('display', 'flex');
  ///console.log(data)
//	$(".preview_typing").html('');
	
  var toid = $("#hd_t").val();
  $("#idd_"+data.to+" .preview").html('<span> </span>' + data.msg)
    if(toid == data.to) {
      if(data.msg != '') {
        $("#chat_messenger").append(`<div class="row message-body">
            <div class="col-sm-12 message-main-receiver" style="margin-bottom: 7px !important;">
              <div class="receiver">
                <div class="message-text">
                 ${data.msg}
                </div>
                <span class="message-time pull-right">
                  Sun
                </span>
              </div>
            </div>
          </div>`);
        $("#idd_"+toid+".active .preview").html('<span> </span>' + data.msg);
        //$(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);
      } else {
        $("#chat_messenger").append(`<div class="row message-body">
            <div class="col-sm-12 message-main-receiver" style="margin-bottom: 7px !important;">
              <div class="receiver">
                <div class="message-text">
                 <img class="msg-images" loading="lazy" src="${data.img}">
                </div>
                <span class="message-time pull-right">
                  Sun
                </span>
              </div>
            </div>
          </div>`);
        $("#idd_"+toid+".active .preview").html('<span> </span>' + data.msg);
        //$(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);
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
      //$(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);
    }
});

var online_status = '';

function searchUser(e){
	const main = document.querySelectorAll("#main-div")[0];
	for(var i=0; i<main.children.length; i++){
		var userVal = main.children[i].getAttribute("data-username").toLowerCase();
		var searchVal = e.value.toLowerCase();
		console.log(userVal.toLowerCase())
		console.log(searchVal.toLowerCase())
//userVal.toLowerCase() === searchVal.toLowerCase()
	  if(userVal.indexOf(searchVal) > -1){
		console.log('test1')
	  	main.children[i].style.display = 'block';
	  }else if(e.value == ''){
		console.log('test2')
		main.children[i].style.display = 'block';
	  }else{
		console.log('test3')
		main.children[i].style.display = 'none';
	  }
	}
}

function deleteChat(RuserId,index){
        //check if block
	const main = document.querySelectorAll("#main-div")[0];
	main.children[index].removeAttribute("onclick");
	main.children[index].remove();
	document.getElementById('msgs-display').style.display = 'none';
	document.getElementById('first-display').style.display = 'flex';
	//$("#msgs-display").hide();
	//$("#first-display").css('display', 'flex');
  let _token   = $('meta[name="csrf-token"]').attr('content');
   var fromUId = <?php echo Crypt::decryptString($_COOKIE['UserIds']); ?>;
   $.ajax({
    type: "POST",
    url: '/deleteChat', // This is what I have updated
    async: false,
    data:{
        chat_from_id: fromUId,
        chat_to_id: RuserId,
          _token: _token
        },
    }).done(function( msg ) {
	main.children[index].removeAttribute("onclick");
	document.getElementById('msgs-display').style.display = 'none';
	document.getElementById('first-display').style.display = 'flex';
    })
}

function loadChat(str,name,email,$status,userImg) {
// $('#chat_messenger').slideToggle();
//$('#chat_messenger').animate({scrollTop: $("#chat_messenger")[0].scrollHeight}, 'slow');
//$("#chat_messenger").stop().animate({ scrollTop: $("#chat_messenger")[0].scrollHeight}, 100);
//$("#chat_messenger").animate({ scrollTop: $("#chat_messenger").scrollHeight}, 100);
$('#chat_messenger').animate({scrollTop: $("#chat_messenger").offset().top}, 100);
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
    $(".heading-name-meta").html('<a href="/userprofile/'+str+'">' + name + '</a>')
    $("#emchat").val(email)
    $("#hd_t").val(str)
    $("#hd_to_img").val(str)
    $(".lds-roller").show();
    $(".contact").removeClass("active");
    $("#idd_"+str).addClass("active");
    $("#chat_messenger").html("");
    //$("#badge_notif_messages").hide();
    $("#count-msg-"+str).hide();
    $(".toast").hide();
    $("#profile-user")[0].src = userImg;
	$("#msgs-display").show();
	$("#first-display").hide();

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
      

        for(var i = 0; i<msg[0].length; i++) {

     
          
            if(msg[0][i].chat_from_id == <?php echo Crypt::decryptString($_COOKIE['UserIds']); ?>) {
              



              if(msg[0][i].chat_msg == null && msg[0][i].chat_files != null) {
                $("#chat_messenger").append(`<div class="row message-body">
            <div class="col-sm-12 message-main-sender">
              <div class="sender">
                <div class="message-text">
                 <img class="msg-images" loading="lazy" src="${msg[0][i].chat_files}">
				
                </div>
                <span class="message-time pull-right">
                  ${moment(msg[0][i].chat_date_time).format('MMMM Do YYYY, h:mm:ss a')}
                </span>
              </div>
            </div>
          </div>`);
              } else {
                $("#chat_messenger").append('<div class="row message-body"><div class="col-sm-12 message-main-sender"><div class="sender"><div class="message-text">'+msg[0][i].chat_msg+'</div><span class="message-time pull-right">'+moment(msg[0][i].chat_date_time).format('MMMM Do YYYY, h:mm:ss a')+'</span></div></div></div>');
              }



            } else {

              if(msg[0][i].chat_msg == null && msg[0][i].chat_files != null) {
                $("#chat_messenger").append(`<div class="row message-body">
            <div class="col-sm-12 message-main-receiver" style="margin-bottom: 7px !important;">
              <div class="receiver">
                <div class="message-text">
                 <img class="msg-images" loading="lazy" src="${msg[0][i].chat_files}">
				
                </div>
                <span class="message-time pull-right">
                  ${moment(msg[0][i].chat_date_time).format('MMMM Do YYYY, h:mm:ss a')}
                </span>
              </div>
            </div>
          </div>`);
              } else {
                if(msg[0][i].chat_from_id == 0 || msg[0][i].chat_to_id == 0) {
                  $("#chat_messenger").append(`<div class="row message-body">
            <div class="col-sm-12 message-main-receiver" style="margin-bottom: 7px !important;">
              <div class="receiver">
                <div class="message-text">
                 ${msg[0][i].chat_msg}
                </div>
                <span class="message-time pull-right">
                  ${moment(msg[0][i].chat_date_time).format('MMMM Do YYYY, h:mm:ss a')}
                </span>
              </div>
            </div>
          </div>`);
                } else {
                  $("#chat_messenger").append(`<div class="row message-body">
            <div class="col-sm-12 message-main-receiver" style="margin-bottom: 7px !important;">
              <div class="receiver">
                <div class="message-text">
                 ${msg[0][i].chat_msg_trans}
                </div>
                <span class="message-time pull-right">
                  ${moment(msg[0][i].chat_date_time).format('MMMM Do YYYY, h:mm:ss a')}
                </span>
              </div>
            </div>
          </div>`);
                }
                
              }


              
                
            }
                
            $(".lds-roller").hide();
            //$(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);
        }
        
        
    });
}

//--------------- send message
function newMessage() {
  $(".toast").hide();
	$(".preview_typing").html('');
	$(".typing").html('');
    let _token   = $('meta[name="csrf-token"]').attr('content');
    message = $("#comment").val();


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
        //$(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);
        $("#chat_messenger").append(`<div class="row message-body">
            <div class="col-sm-12 message-main-sender">
              <div class="sender">
                <div class="message-text">
                  ${msg.msg}
                </div>
                <span class="message-time pull-right">
                  Just Now
                </span>
              </div>
            </div>
          </div>`);
	const main = document.querySelectorAll("#main-div")[0];
	for(var i=0; i<main.children.length; i++){
	  if(main.children[i].id == too){
	  	main.children[i].parentNode.insertBefore(main.children[i], main.children[0]);
	  }
	}
        $('#comment').val(null);
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
            //$(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);
          $("#chat_messenger").append(`<div class="row message-body">
            <div class="col-sm-12 message-main-sender">
              <div class="sender">
                <div class="message-text">
                  You cannot send message to this user as you are both FREE standard members.
		  <a href="/membership" style="text-decoration: none;" class="btn btn-success btn-block btn-lg">Upgrade Now</a>
                </div>
                <span class="message-time pull-right">
                  Just Now
                </span>
              </div>
            </div>
          </div>`);
          $('#comment').val(null);
          } else if(msg == "apprvestatus") {
            //$(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);
          $("#chat_messenger").append(`<div class="row message-body">
            <div class="col-sm-12 message-main-sender">
              <div class="sender">
                <div class="message-text">
			You cannot send message to this user as your account is under review.
                </div>
                <span class="message-time pull-right">
                  Just Now
                </span>
              </div>
            </div>
          </div>`);
          $('#comment').val(null);
          } else {
            socket.emit('send_msg_server', { user: em, msg: msg, to: <?php echo Crypt::decryptString($_COOKIE['UserIds']); ?>, toname: '<?php echo Crypt::decryptString($_COOKIE['UserFullName']); ?>', toemail: '<?php echo Crypt::decryptString($_COOKIE['UserEmail']); ?>'}); //socket

            socket.emit('new_msg', { user: em, msg: msg, to: <?php echo Crypt::decryptString($_COOKIE['UserIds']); ?>, toname: '<?php echo Crypt::decryptString($_COOKIE['UserFullName']); ?>', toemail: '<?php echo Crypt::decryptString($_COOKIE['UserEmail']); ?>'});            

            //$(".scroll").stop().animate({ scrollTop: $(".scroll")[0].scrollHeight}, 100);
            $("#chat_messenger").append(`<div class="row message-body">
            <div class="col-sm-12 message-main-sender">
              <div class="sender">
                <div class="message-text">
                  ${message}
                </div>
                <span class="message-time pull-right">
                  Just Now
                </span>
              </div>
            </div>
          </div>`);
	const main = document.querySelectorAll("#main-div")[0];
	for(var i=0; i<main.children.length; i++){
	  if(main.children[i].id == too){
	  	main.children[i].parentNode.insertBefore(main.children[i], main.children[0]);
	  }
	}
            $('#comment').val(null);
            $('.contact.active .preview').html('<span>You: </span>' + message);
          }
          
  
        });

        

        
    }
    
}

</script>
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

$('#imgupload').on('change', function(e){

  $("#upload_start_gl_file").trigger('click');


});

$('#gl_file_upload').ajaxForm({

beforeSend:function(){
  //console.log("before send")
  console.log(<?php echo Crypt::decryptString($_COOKIE['UserIds']); ?>)
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
  var em = $("#emchat").val();
  for(var i = 0; i < data.length; i++) {
    $("#chat_messenger").append(`<div class="row message-body">
            <div class="col-sm-12 message-main-sender">
              <div class="sender">
                <div class="message-text">
                 <img class="msg-images" loading="lazy" src="${data[i]}">
				
                </div>
                <span class="message-time pull-right">
                  Just Now
                </span>
              </div>
            </div>
          </div>`);
        //$("#idd_"+toid+".active .preview").html('<span> </span>' + data.msg);
        $("#chat_messenger").stop().animate({ scrollTop: $("#chat_messenger")[0].scrollHeight}, 100);

    socket.emit('send_msg_server', { user: em, msg: '', img: data[i], to: <?php echo Crypt::decryptString($_COOKIE['UserIds']); ?>, toname: '<?php echo Crypt::decryptString($_COOKIE['UserFullName']); ?>', toemail: '<?php echo Crypt::decryptString($_COOKIE['UserEmail']); ?>'});

}

  }





});


</script>
 
</body>
</html>









