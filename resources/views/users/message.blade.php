<!DOCTYPE html><html class=''>
<head>
    <title>Customer Service Chat - Globallove</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset='UTF-8'><meta name="robots" content="noindex">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->
<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>

<script src="https://use.typekit.net/hoy3lrg.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>

<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.1.1/socket.io.js" integrity="sha512-oFOCo2/3DtjrJG4N27BjSLQWoiBv171sK6a+JiWjp/7agxC2nCUP358AqzxkBUb5jX8g6CYLPdSKQTbC0weCwA==" crossorigin="anonymous"></script>
<input type="hidden" id="hd_t">

<style class="cp-pen-styles">body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: #f15052;
  font-family: "proxima-nova", "Source Sans Pro", sans-serif;
  font-size: 1em;
  letter-spacing: 0.1px;
  color: #32465a;
  text-rendering: optimizeLegibility;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
  -webkit-font-smoothing: antialiased;
}

img {
	    width: 30px !important;
    height: 30px !important;
    object-fit: cover !important;
    overflow: hidden !important;
}

#frame{
    border-radius: 8px;
}

.content {
    border-top-left-radius: 0px;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
    border-bottom-left-radius: 0px;
}

#sidepanel {
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 8px;
}

#frame {
  width: 95%;
  min-width: 360px;
  max-width: 1000px;
  height: 92vh;
  min-height: 300px;
  max-height: 720px;
  background: #E6EAEA;
}
@media screen and (max-width: 360px) {
  #frame {
    width: 100%;
    height: 100vh;
  }
}
#frame #sidepanel {
  float: left;
  min-width: 280px;
  max-width: 340px;
  width: 40%;
  height: 100%;
  background: #000;
  color: #f5f5f5;
  overflow: hidden;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel {
    width: 58px;
    min-width: 58px;
  }
}
#frame #sidepanel #profile {
  width: 80%;
  margin: 25px auto;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile {
    width: 100%;
    margin: 0 auto;
    padding: 5px 0 0 0;
    background: #32465a;
  }
}
#frame #sidepanel #profile.expanded .wrap {
  height: 210px;
  line-height: initial;
}
#frame #sidepanel #profile.expanded .wrap p {
  margin-top: 20px;
}
#frame #sidepanel #profile.expanded .wrap i.expand-button {
  -moz-transform: scaleY(-1);
  -o-transform: scaleY(-1);
  -webkit-transform: scaleY(-1);
  transform: scaleY(-1);
  filter: FlipH;
  -ms-filter: "FlipH";
}
#frame #sidepanel #profile .wrap {
  height: 60px;
  line-height: 60px;
  overflow: hidden;
  -moz-transition: 0.3s height ease;
  -o-transition: 0.3s height ease;
  -webkit-transition: 0.3s height ease;
  transition: 0.3s height ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap {
    height: 55px;
  }
}
#frame #sidepanel #profile .wrap img {
  width: 50px;
  border-radius: 50%;
  padding: 3px;
  border: 2px solid #e74c3c;
  height: auto;
  float: left;
  cursor: pointer;
  -moz-transition: 0.3s border ease;
  -o-transition: 0.3s border ease;
  -webkit-transition: 0.3s border ease;
  transition: 0.3s border ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap img {
    width: 40px;
    margin-left: 4px;
  }
}
#frame #sidepanel #profile .wrap img.online {
  border: 2px solid #2ecc71;
}
#frame #sidepanel #profile .wrap img.away {
  border: 2px solid #f1c40f;
}
#frame #sidepanel #profile .wrap img.busy {
  border: 2px solid #e74c3c;
}
#frame #sidepanel #profile .wrap img.offline {
  border: 2px solid #95a5a6;
}
#frame #sidepanel #profile .wrap p {
  float: left;
  margin-left: 15px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap p {
    display: none;
  }
}
#frame #sidepanel #profile .wrap i.expand-button {
  float: right;
  margin-top: 23px;
  font-size: 0.8em;
  cursor: pointer;
  color: #435f7a;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap i.expand-button {
    display: none;
  }
}
#frame #sidepanel #profile .wrap #status-options {
  position: absolute;
  opacity: 0;
  visibility: hidden;
  width: 150px;
  margin: 70px 0 0 0;
  border-radius: 6px;
  z-index: 99;
  line-height: initial;
  background: #435f7a;
  -moz-transition: 0.3s all ease;
  -o-transition: 0.3s all ease;
  -webkit-transition: 0.3s all ease;
  transition: 0.3s all ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options {
    width: 58px;
    margin-top: 57px;
  }
}
#frame #sidepanel #profile .wrap #status-options.active {
  opacity: 1;
  visibility: visible;
  margin: 75px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options.active {
    margin-top: 62px;
  }
}
#frame #sidepanel #profile .wrap #status-options:before {
  content: '';
  position: absolute;
  width: 0;
  height: 0;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 8px solid #435f7a;
  margin: -8px 0 0 24px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options:before {
    margin-left: 23px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul {
  overflow: hidden;
  border-radius: 6px;
}
#frame #sidepanel #profile .wrap #status-options ul li {
  padding: 15px 0 30px 18px;
  display: block;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li {
    padding: 15px 0 35px 22px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li:hover {
  background: #496886;
}
#frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
  position: absolute;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  margin: 5px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
    width: 14px;
    height: 14px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
  content: '';
  position: absolute;
  width: 14px;
  height: 14px;
  margin: -3px 0 0 -3px;
  background: transparent;
  border-radius: 50%;
  z-index: 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
    height: 18px;
    width: 18px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li p {
  padding-left: 12px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li p {
    display: none;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li#status-online span.status-circle {
  background: #2ecc71;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-online.active span.status-circle:before {
  border: 1px solid #2ecc71;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-away span.status-circle {
  background: #f1c40f;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-away.active span.status-circle:before {
  border: 1px solid #f1c40f;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-busy span.status-circle {
  background: #e74c3c;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-busy.active span.status-circle:before {
  border: 1px solid #e74c3c;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-offline span.status-circle {
  background: #95a5a6;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-offline.active span.status-circle:before {
  border: 1px solid #95a5a6;
}
#frame #sidepanel #profile .wrap #expanded {
  padding: 100px 0 0 0;
  display: block;
  line-height: initial !important;
}
#frame #sidepanel #profile .wrap #expanded label {
  float: left;
  clear: both;
  margin: 0 8px 5px 0;
  padding: 5px 0;
}
#frame #sidepanel #profile .wrap #expanded input {
  border: none;
  margin-bottom: 6px;
  background: #32465a;
  border-radius: 3px;
  color: #f5f5f5;
  padding: 7px;
  width: calc(100% - 43px);
}
#frame #sidepanel #profile .wrap #expanded input:focus {
  outline: none;
  background: #435f7a;
}
#frame #sidepanel #search {
  border-top: 1px solid #32465a;
  border-bottom: 1px solid #32465a;
  font-weight: 300;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #search {
    display: none;
  }
}
#frame #sidepanel #search label {
  position: absolute;
  margin: 10px 0 0 20px;
}
#frame #sidepanel #search input {
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
  padding: 10px 0 10px 46px;
  width: calc(100% - 25px);
  border: none;
  background: #32465a;
  color: #f5f5f5;
}
#frame #sidepanel #search input:focus {
  outline: none;
  background: #435f7a;
}
#frame #sidepanel #search input::-webkit-input-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input::-moz-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input:-ms-input-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input:-moz-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #contacts {
  height: calc(100% - 177px);
  overflow-y: scroll;
  overflow-x: hidden;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts {
    height: calc(100% - 149px);
    overflow-y: scroll;
    overflow-x: hidden;
  }
  #frame #sidepanel #contacts::-webkit-scrollbar {
    display: none;
  }
}
#frame #sidepanel #contacts.expanded {
  height: calc(100% - 334px);
}
#frame #sidepanel #contacts::-webkit-scrollbar {
  width: 8px;
  background: #2c3e50;
}
#frame #sidepanel #contacts::-webkit-scrollbar-thumb {
  background-color: #243140;
}
#frame #sidepanel #contacts ul li.contact {
  position: relative;
  padding: 10px 0 15px 0;
  font-size: 0.9em;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact {
    padding: 6px 0 46px 8px;
  }
}
#frame #sidepanel #contacts ul li.contact:hover {
  background: #32465a;
}
#frame #sidepanel #contacts ul li.contact.active {
  background: #fff;
  color: #000;
  border-right: 5px solid #435f7a;
}
#frame #sidepanel #contacts ul li.contact.active span.contact-status {
  border: 2px solid #32465a !important;
}
#frame #sidepanel #contacts ul li.contact .wrap {
  width: 88%;
  margin: 0 auto;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact .wrap {
    width: 100%;
  }
}
#frame #sidepanel #contacts ul li.contact .wrap span {
  /*position: absolute;
  left: 0;
  margin: -2px 0 0 -2px;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  border: 2px solid #2c3e50;
  background: #95a5a6;*/
}
#frame #sidepanel #contacts ul li.contact .wrap span.online {
  background: #2ecc71;
}
#frame #sidepanel #contacts ul li.contact .wrap span.away {
  background: #f1c40f;
}
#frame #sidepanel #contacts ul li.contact .wrap span.busy {
  background: #e74c3c;
}
#frame #sidepanel #contacts ul li.contact .wrap img {
  width: 40px;
  border-radius: 50%;
  float: left;
  margin-right: 10px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact .wrap img {
    margin-right: 0px;
  }
}
#frame #sidepanel #contacts ul li.contact .wrap .meta {
  padding: 5px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact .wrap .meta {
    display: none;
  }
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .name {
  font-weight: 600;
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .preview {
  margin: 5px 0 0 0;
  padding: 0 0 1px;
  font-weight: 400;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  -moz-transition: 1s all ease;
  -o-transition: 1s all ease;
  -webkit-transition: 1s all ease;
  transition: 1s all ease;
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .preview span {
  position: initial;
  border-radius: initial;
  background: none;
  border: none;
  padding: 0 2px 0 0;
  margin: 0 0 0 1px;
  opacity: .5;
}
#frame #sidepanel #bottom-bar {
  position: absolute;
  width: 100%;
  bottom: 0;
}
#frame #sidepanel #bottom-bar button {
  float: left;
  border: none;
  width: 50%;
  padding: 10px 0;
  background: #32465a;
  color: #f5f5f5;
  cursor: pointer;
  font-size: 0.85em;
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button {
    float: none;
    width: 100%;
    padding: 15px 0;
  }
}
#frame #sidepanel #bottom-bar button:focus {
  outline: none;
}
#frame #sidepanel #bottom-bar button:nth-child(1) {
  border-right: 1px solid #2c3e50;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button:nth-child(1) {
    border-right: none;
    border-bottom: 1px solid #2c3e50;
  }
}
#frame #sidepanel #bottom-bar button:hover {
  background: #435f7a;
}
#frame #sidepanel #bottom-bar button i {
  margin-right: 3px;
  font-size: 1em;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button i {
    font-size: 1.3em;
  }
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button span {
    display: none;
  }
}
#frame .content {
  float: right;
  width: 60%;
  height: 100%;
  overflow: hidden;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame .content {
    width: calc(100% - 58px);
    min-width: 300px !important;
  }
}
@media screen and (min-width: 900px) {
  #frame .content {
    width: calc(100% - 340px);
  }
}
#frame .content .contact-profile {
  width: 100%;
  height: 60px;
  line-height: 60px;
  background: #f5f5f5;
}
#frame .content .contact-profile img {
  width: 40px;
  border-radius: 50%;
  float: left;
  margin: 9px 12px 0 9px;
}
#frame .content .contact-profile p {
  float: left;
}
#frame .content .contact-profile .social-media {
  float: right;
}
#frame .content .contact-profile .social-media i {
  margin-left: 14px;
  cursor: pointer;
}
#frame .content .contact-profile .social-media i:nth-last-child(1) {
  margin-right: 20px;
}
#frame .content .contact-profile .social-media i:hover {
  color: #435f7a;
}
#frame .content .messages {
  height: auto;
  min-height: calc(100% - 93px);
  max-height: calc(100% - 93px);
  overflow-y: scroll;
  overflow-x: hidden;
}
@media screen and (max-width: 735px) {
  #frame .content .messages {
    max-height: calc(100% - 105px);
  }
}
#frame .content .messages::-webkit-scrollbar {
  width: 8px;
  background: transparent;
}
#frame .content .messages::-webkit-scrollbar-thumb {
  background-color: rgba(0, 0, 0, 0.3);
}
#frame .content .messages ul li {
  display: inline-block;
  clear: both;
  float: left;
  margin: 15px 15px 5px 15px;
  width: calc(100% - 25px);
  font-size: 0.9em;
  padding-bottom: 10px;
}
#frame .content .messages ul li:nth-last-child(1) {
  margin-bottom: 20px;
}
#frame .content .messages ul li.sent img {
  margin: 6px 8px 0 0;
}
#frame .content .messages ul li.sent p {
  background: #435f7a;
  color: #f5f5f5;
}
#frame .content .messages ul li.replies img {
  float: right;
  margin: 6px 0 0 8px;
}
#frame .content .messages ul li.replies p {
  background: #f5f5f5;
  float: right;
}
#frame .content .messages ul li img {
  width: 22px;
  border-radius: 50%;
  float: left;
}
#frame .content .messages ul li p {
  display: inline-block;
  padding: 10px 15px;
  border-radius: 20px;
  max-width: 205px;
  line-height: 130%;
}
@media screen and (min-width: 735px) {
  #frame .content .messages ul li p {
    max-width: 300px;
  }
}
#frame .content .message-input {
  position: absolute;
  bottom: 0;
  width: 100%;
  z-index: 99;
}
#frame .content .message-input .wrap {
  position: relative;
}
#frame .content .message-input .wrap input {
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
  float: left;
  border: none;
  width: calc(100% - 90px);
  padding: 11px 32px 10px 8px;
  font-size: 0.8em;
  color: #32465a;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap input {
    padding: 15px 32px 16px 8px;
  }
}
#frame .content .message-input .wrap input:focus {
  outline: none;
}
#frame .content .message-input .wrap .attachment {
  position: absolute;
  right: 60px;
  z-index: 4;
  margin-top: 10px;
  font-size: 1.1em;
  color: #435f7a;
  opacity: .5;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap .attachment {
    margin-top: 17px;
    right: 65px;
  }
}
#frame .content .message-input .wrap .attachment:hover {
  opacity: 1;
}
#frame .content .message-input .wrap button {
  float: right;
  border: none;
  width: 50px;
  padding: 12px 0;
  cursor: pointer;
  background: #32465a;
  color: #f5f5f5;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap button {
    padding: 16px 0;
  }
}
#frame .content .message-input .wrap button:hover {
  background: #435f7a;
}
#frame .content .message-input .wrap button:focus {
  outline: none;
}
</style></head><body>


@php
    $profilepic= DB::Select("SELECT prfl_photo_path,prfl_approve_status FROM users WHERE id = '0'");
  @endphp

  

<div id="frame">
    <div id="sidepanel">
        <div id="profile">
            <div class="wrap">
            <img style="width: 30px !important; height: 30px !important;" id="profile-img" src={{url('/images/customer-service.png')}} class="online" alt="" /> <span style="position: absolute;
    top: 11px;
    left: 74px;">Customer Service</span>
                
                <!-- <i class="fa fa-chevron-down expand-button" aria-hidden="true"></i> -->
                <div id="status-options">
                    <!-- <ul>
                        <li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>
                        <li id="status-away"><span class="status-circle"></span> <p>Away</p></li>
                        <li id="status-busy"><span class="status-circle"></span> <p>Busy</p></li>
                        <li id="status-offline"><span class="status-circle"></span> <p>Offline</p></li>
                    </ul> -->
                </div>
                <!-- <div id="expanded">
                    <label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
                    <input name="twitter" type="text" value="mikeross" />
                    <label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
                    <input name="twitter" type="text" value="ross81" />
                    <label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
                    <input name="twitter" type="text" value="mike.ross" />
                </div> -->
            </div>
        </div>
        <div id="search">
            <!-- <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
            <input type="text" placeholder="Search contacts..." /> -->
        </div>
        <div id="contacts">
            
        <ul>
                @foreach($users as $user) 

                @php
                  $msg= DB::Select("SELECT room_status FROM users_chat_rooms WHERE room_from_id = '0' AND room_to_id= '".$user['user_id']."' AND room_status= '1'");
                @endphp
                <li onClick="loadChat('<?php echo $user['user_id']; ?>', '<?php echo $user['name']; ?>', '<?php echo $user['email']; ?>')" id="idd_<?php echo $user['user_id']; ?>" class="contact "> <!-- active -->
                    <div class="wrap">
                        <!-- <span class="contact-status online"></span> -->
                        <img src="{{ $user['propic'] }}" alt="" />
                        <div class="meta">
                            <p class="name">{{ $user['name'] }} <span class="badge badge-success badge-pill" style="background-color: #28A745; float: right;"><?php echo (count($msg) == 1 ? '<i class="fa fa-circle" aria-hidden="true"></i>' : ''); ?></span></p>
                            
                            <p class="preview_typing" style="font-style: italic; font-weight: 700; color: #44bd32;"></p>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
            
        </div>
        <!-- <div id="bottom-bar">
            <button id="addcontact" onclick="gotomatches()"><i class="fa fa-user fa-fw" aria-hidden="true"></i> <span>Matches</span></button>
            <button onclick="gotobrowse()" id="settings"><i class="fa fa-search fa-fw" aria-hidden="true"></i> <span>Browse</span></button>
        </div> -->
    </div>
    <input type="hidden" id="emchat">
    <div class="content">

        <div class="contact-profile">
            <!-- <img src="https://st3.depositphotos.com/6672868/13701/v/600/depositphotos_137014128-stock-illustration-user-profile-icon.jpg" alt="" /> -->
            <p id="namechat" style="margin-left: 20px; font-weight: 700;"></p>
            <!-- <div class="social-media">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                 <i class="fa fa-instagram" aria-hidden="true"></i>
            </div> -->
        </div>
        <div class="messages">

            <div style="display: none;" class="lds-heart"><div></div></div>
            <ul id="lol">
                <!-- <li class="sent">
                    <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                    <p>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!</p>
                </li>
                <li class="replies">
                    <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                    <p>When you're backed against the wall, break the god damn thing down.</p>
                </li> -->
                
            </ul>
            <div class="typing" style="width: 100%; color: #44bd32; font-style: italic; font-weight: 700; position: absolute;
    bottom: 50px;
    left: 13px; text-align: center;"></div>
        </div>
        <div class="message-input">
            <div id="blocktxt" class="wrap">

              <div id="block_user"></div>

            <input id="msgtxt" type="text" placeholder="Write your message..." oninput="typing_alert(this.value)" />
            <!-- <i class="fa fa-paperclip attachment" aria-hidden="true" id="attach"></i> -->
            <button class="submit" id="send"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</div>

<!-------------------------------- chat script ------------------------------------------>
<script src="{{asset('content')}}/assets/30603563/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.1.1/socket.io.js" integrity="sha512-oFOCo2/3DtjrJG4N27BjSLQWoiBv171sK6a+JiWjp/7agxC2nCUP358AqzxkBUb5jX8g6CYLPdSKQTbC0weCwA==" crossorigin="anonymous"></script>


<script>
// $("#profile-img").click(function() {
//     $("#status-options").toggleClass("active");
// });

// $(".expand-button").click(function() {
//   $("#profile").toggleClass("expanded");
//     $("#contacts").toggleClass("expanded");
// });

// $("#status-options ul li").click(function() {
//     $("#profile-img").removeClass();
//     $("#status-online").removeClass("active");
//     $("#status-away").removeClass("active");
//     $("#status-busy").removeClass("active");
//     $("#status-offline").removeClass("active");
//     $(this).addClass("active");
    
//     if($("#status-online").hasClass("active")) {
//         $("#profile-img").addClass("online");
//     } else if ($("#status-away").hasClass("active")) {
//         $("#profile-img").addClass("away");
//     } else if ($("#status-busy").hasClass("active")) {
//         $("#profile-img").addClass("busy");
//     } else if ($("#status-offline").hasClass("active")) {
//         $("#profile-img").addClass("offline");
//     } else {
//         $("#profile-img").removeClass();
//     };
    
//     $("#status-options").removeClass("active");
// });


//# sourceURL=pen.js

$.ajax({
    type: "GET",
    url: '/messageuserlist', // This is what I have updated
    }).done(function( msg ) {
      console.log(msg)
      $("#contacts").html(msg.html)
    });

//ajax chat messages with socket------------------------------------------------------------------------
var socket = io('https://worldwidemedia.online', {transports: ['websocket']});
socket.emit('join', {email: '<?php echo 'customer@support.globallove'; ?>', id: '<?php echo '0'; ?>'});

//get message from server
socket.on("new_msg", function(data) {
	$(".typing").html('');
	$(".preview_typing").html('');

	//loading users list
  setTimeout(function() {
    $.ajax({
    type: "GET",
    url: '/messageuserlist', // This is what I have updated
    }).done(function( msg ) {
      console.log(msg.html)
      $("#contacts").html(msg.html)
    });
  }, 2000);
	


	
  var toid = $("#hd_t").val();
  $("#idd_"+data.to+" .preview").html('<span> </span>' + data.msg)
    if(toid == data.to) {
      $("#lol").append("<li class='sent'><p>"+data.msg+"</p></li><br><br>");
      $("#idd_"+toid+".active .preview").html('<span> </span>' + data.msg);
      $(".messages").stop().animate({ scrollTop: $(".messages")[0].scrollHeight}, 1000);
    }
});

//typing from server
socket.on("typing_from_server", function(data) {
  var toid = $("#hd_t").val();
  $("#idd_"+data.to+" .preview_typing").html('<span> </span>' + data.msg)
    if(toid == data.to) {
      $(".typing").html(data.msg);
      $("#idd_"+toid+" .preview_typing").html('<span> </span>' + data.msg);
      $(".messages").stop().animate({ scrollTop: $(".messages")[0].scrollHeight}, 1000);
    }
});


function loadChat(str,name,email) {
	$(".typing").html('');
	$(".preview_typing").html('');
    $("#namechat").html(name + " <span style='color: #888; font-weight: 600;'></span>")
    $("#emchat").val(email)
    $("#hd_t").val(str)
    $(".lds-heart").show();
    $(".contact").removeClass("active");
    $("#idd_"+str).addClass("active");
    $("#lol").html("");
    let _token   = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
    type: "POST",
    url: '/chatdisplayadmin', // This is what I have updated
    data:{
          id: str,
          _token: _token
        },
    }).done(function( msg ) {

      
      
      if(msg[1].length > 0) {
        if( msg[1].indexOf(Number(str)) > 0 ) {
          
          $("#msgtxt").hide();
          $("#send").hide();
          $("#attach").hide();  
          $("#block_user").show().html("<p style='text-align: center;margin-bottom: 10px;font-weight: 700; color: #444;'>You can't reply to this conversation.</p>")
        } else {
          
          $("#msgtxt").show();
          $("#send").show();
          $("#attach").show();  
          $("#block_user").hide();
        }
      }
      

        for(var i = 0; i<=msg[0].length; i++) {
            if(msg[0][i].chat_from_id == <?php echo '0'; ?>) {
                $("#lol").append("<li class='replies'><p>"+msg[0][i].chat_msg+"</p></li><br><br>");
            } else {
                $("#lol").append("<li class='sent'><p>"+msg[0][i].chat_msg+"</p></li><br><br>");
            }
                
            $(".lds-heart").hide();
            $(".messages").stop().animate({ scrollTop: $(".messages")[0].scrollHeight}, 1000);
        }

        
        
    });
}

//send msg ------------------------------------------------------------------------------------

function newMessage() {
	$(".preview_typing").html('');
	$(".typing").html('');
    let _token   = $('meta[name="csrf-token"]').attr('content');
    message = $(".message-input input").val();

    too = $("#hd_t").val();
    em = $("#emchat").val()
    if(too != '') {
        socket.emit('send_msg_server', { user: em, msg: message, to: <?php echo '0'; ?>, toname: '<?php echo 'Customer service'; ?>', toemail: '<?php echo 'customer@support.globallove'; ?>'}); //socket

        if($.trim(message) == '') {
            return false;
        }
        $.ajax({
        type: "POST",
        url: '/chatinsertadmin', // This is what I have updated
        data:{
              msg: message,
              from_id: <?php echo '0'; ?>,
              to_id: too,
              _token: _token
            },
        }).done(function( msg ) {
           //loading users list
  
          $.ajax({
          type: "GET",
          url: '/messageuserlist', // This is what I have updated
          }).done(function( msg ) {
            console.log(msg.html)
            $("#contacts").html(msg.html)
          });
  
        });
        $('<li class="replies"><p>' + message + '</p></li>').appendTo($('.messages ul'));
        $('.message-input input').val(null);
        $('.contact.active .preview').html('<span>You: </span>' + message);
        //$(".messages").animate({ scrollTop: $(document).height() }, "slow");
        $(".messages").stop().animate({ scrollTop: $(".messages")[0].scrollHeight}, 1000);
    }
    
};


function typing_alert(str) {
	too = $("#hd_t").val();
    em = $("#emchat").val()
	if(str.length > 0) {
		socket.emit('typing', { user: em, msg: 'typing...', to: <?php echo '0'; ?>}); //socket
	} else {
		socket.emit('typing', { user: em, msg: '', to: <?php echo '0'; ?>}); //socket
	}
	
}

$('.submit').click(function() {
  newMessage();
});

$(window).on('keydown', function(e) {
  if (e.which == 13) {
    newMessage();
    return false;
  }
});


function gotobrowse() {
    window.location.href='/browse';
}

function gotomatches() {
    window.location.href='/matches';
}

</script>
</body></html>

<style type="text/css">
    .lds-heart {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  transform: rotate(45deg);
  transform-origin: 40px 40px;
  text-align: center;
}
.lds-heart div {
  top: 32px;
  left: 32px;
  position: absolute;
  width: 32px;
  height: 32px;
  background: #CA2C68;
  animation: lds-heart 1.2s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
}
.lds-heart div:after,
.lds-heart div:before {
  content: " ";
  position: absolute;
  display: block;
  width: 32px;
  height: 32px;
  background: #CA2C68;
}
.lds-heart div:before {
  left: -24px;
  border-radius: 50% 0 0 50%;
}
.lds-heart div:after {
  top: -24px;
  border-radius: 50% 50% 0 0;
}
@keyframes lds-heart {
  0% {
    transform: scale(0.95);
  }
  5% {
    transform: scale(1.1);
  }
  39% {
    transform: scale(0.85);
  }
  45% {
    transform: scale(1);
  }
  60% {
    transform: scale(0.95);
  }
  100% {
    transform: scale(0.9);
  }
}

</style>


<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.1.1/socket.io.js" integrity="sha512-oFOCo2/3DtjrJG4N27BjSLQWoiBv171sK6a+JiWjp/7agxC2nCUP358AqzxkBUb5jX8g6CYLPdSKQTbC0weCwA==" crossorigin="anonymous"></script>