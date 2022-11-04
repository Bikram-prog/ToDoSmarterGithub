<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UsersMeta;
use App\Models\UserPhotos;
use App\Models\Connectionsfinal;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use Google\Cloud\Translate\V2\TranslateClient;
use DateTime;
use Mail;
use Twilio\Rest\Client;

class MessagesController extends Controller
{
    public $contacts = [];
	
    public function viewMessages(){

        // if(!$this->isUserLoginExist()){
        //     $this->logout();
        //     return redirect('/login')->with(['msg' => 'You have to login to view your account']);

        // } 

        $chatUsers = DB::Select("SELECT t1.*,t2.* FROM users_chat_todo_rooms t1 LEFT JOIN users t2 ON (t1.room_to_id=t2.id) WHERE t1.room_from_id = 0 ORDER BY t1.timedate DESC");
        foreach($chatUsers as $cu) {
            //$usersLastMsg = DB::Select("SELECT chat_msg FROM users_chat_todo WHERE (chat_from_id = '".$cu->room_from_id."' AND chat_to_id = '".$cu->room_to_id."') OR (chat_from_id = '".$cu->room_to_id."' AND chat_to_id = '".$cu->room_from_id."') ORDER BY chat_date_time DESC LIMIT 1");



            $this->contacts[] = array(
                'propic' => $cu->prfl_photo_path,
                'name' => $cu->name,
                'email' => $cu->email,
                //'lmsg' => $usersLastMsg[0]->chat_msg,
                'user_id' => $cu->room_to_id,
                
            );

        }
        return view('users.message')->with(['users' => $this->contacts]);
    	
    }

    public function viewLeftMenuMessages(){
        $chatUsers = DB::Select("SELECT t1.*,t2.* FROM users_chat_todo_rooms t1 LEFT JOIN users t2 ON (t1.room_to_id=t2.id) WHERE t1.room_from_id = 0 ORDER BY t1.timedate DESC");
        foreach($chatUsers as $cu) {
            //$usersLastMsg = DB::Select("SELECT chat_msg FROM users_chat_todo WHERE (chat_from_id = '".$cu->room_from_id."' AND chat_to_id = '".$cu->room_to_id."') OR (chat_from_id = '".$cu->room_to_id."' AND chat_to_id = '".$cu->room_from_id."') ORDER BY chat_date_time DESC LIMIT 1");



            if($cu->prfl_approve_status == '0'){
                $propic = 'https://www.globallove.online/images/male-user-placeholder.png';
            } else{
                $propic = $cu->prfl_photo_path;
            }

            $this->contacts[] = array(
                'propic' => $propic,
                'name' => $cu->name,
                'email' => $cu->email,
                //'lmsg' => $usersLastMsg[0]->chat_msg,
                'user_id' => $cu->room_to_id,
                
            );

        }




        $returnHtml = view('users.message_userlist')->with(['users' => $this->contacts])->render();
        return response()->json( array('success' => true, 'html'=>$returnHtml) );
        
    }

    public function viewMobLeftMenuMessages(){
        $chatUsers = DB::Select("SELECT t1.*,t2.* FROM users_chat_todo_rooms t1 LEFT JOIN users t2 ON (t1.room_to_id=t2.id) WHERE t1.room_from_id = ".Crypt::decryptString($_COOKIE['UserIdToDoSmarter']). " ORDER BY t1.timedate DESC");
        foreach($chatUsers as $cu) {
            $usersLastMsg = DB::Select("SELECT chat_msg FROM users_chat_todo WHERE (chat_from_id = '".$cu->room_from_id."' AND chat_to_id = '".$cu->room_to_id."') OR (chat_from_id = '".$cu->room_to_id."' AND chat_to_id = '".$cu->room_from_id."') ORDER BY chat_date_time DESC LIMIT 1");



            if($cu->prfl_approve_status == '0'){
                $propic = 'https://www.globallove.online/images/male-user-placeholder.png';
            } else{
                $propic = $cu->prfl_photo_path;
            }

            $this->contacts[] = array(
                'propic' => $propic,
                'name' => $cu->name,
                'email' => $cu->email,
                'lmsg' => $usersLastMsg[0]->chat_msg,
                'user_id' => $cu->room_to_id,
                
            );

        }

        


        //$returnHtml = view('users.mob_message_userlist')->with(['users' => $this->contacts])->render();
        return view('users.mob_message_userlist')->with(['users'=> $this->contacts]);
        //return response()->json( array('success' => true, 'html'=>$returnHtml) );
        
    }

    public function messangerr($id) {
        return view('users.messanger');
    }
    
    public function deleteChat(request $request){

        $update=DB::Select("UPDATE users_chat_todo SET chat_from_id= '0', chat_to_id='0' WHERE (chat_from_id = ".Crypt::decryptString($_COOKIE['UserIdToDoSmarter'])." AND chat_to_id = ".$request->chat_to_id.") OR (chat_from_id = ".$request->chat_to_id." AND chat_to_id = ".Crypt::decryptString($_COOKIE['UserIdToDoSmarter']).") ORDER BY chat_date_time ASC");

	if($update){
		return response()->json(['success'=> 'done']);
	}
	return response()->json(['error'=> 'error in deleting']);
    }    

    public function loadMsgs(request $request) {

        if($request->id == '0') {
            //for admin
            $date= date('Y-m-d H:i:s');
            DB::Select("UPDATE users_chat_todo_rooms SET room_status= '0', timedate= '".$date."' WHERE room_to_id= '".Crypt::decryptString($_COOKIE['UserIdToDoSmarter'])."' AND room_from_id= '0'");
        }
        
        //for all users
        $update=DB::Select("UPDATE users_chat_todo_rooms SET room_status= '0' WHERE room_to_id= '".$request->id."' AND room_from_id= '".Crypt::decryptString($_COOKIE['UserIdToDoSmarter'])."'");

        $msgs = DB::Select("SELECT * FROM users_chat_todo WHERE (chat_from_id = ".Crypt::decryptString($_COOKIE['UserIdToDoSmarter'])." AND chat_to_id = ".$request->id.") OR (chat_from_id = ".$request->id." AND chat_to_id = ".Crypt::decryptString($_COOKIE['UserIdToDoSmarter']).") ORDER BY chat_date_time ASC");
        $block = DB::Select("SELECT b_who_id from block_users where b_whom_id = '".Crypt::decryptString($_COOKIE['UserIdToDoSmarter'])."' OR b_whom_id = '".$request->id."'");

        if(count($block) > 0) {
        	foreach($block as $b) {
            	$blockIDs[] = $b->b_who_id;
        	}
        } else {
        	$blockIDs[] = array('');
        }
        
        
        
        return response()->json([$msgs, $blockIDs]);
    }

    public function admin_loadMsgs(request $request) {

        $update=DB::Select("UPDATE users_chat_todo_rooms SET room_status= '0' WHERE room_to_id= '".$request->id."' AND room_from_id= '0'");

        $msgs = DB::Select("SELECT * FROM users_chat_todo WHERE (chat_from_id = 0 AND chat_to_id = $request->id) OR (chat_from_id = $request->id AND chat_to_id = 0) ORDER BY chat_date_time ASC");
        $block = DB::Select("SELECT b_who_id from block_users where b_whom_id = '0' OR b_whom_id = '".$request->id."'");

        if(count($block) > 0) {
        	foreach($block as $b) {
            	$blockIDs[] = $b->b_who_id;
        	}
        } else {
        	$blockIDs[] = array('');
        }
        
        
        
        return response()->json([$msgs, $blockIDs]);
    }

    public function chatinsert(request $request) {

        $today = date('Y-m-d H:i:s');

        

        //check if new message or now
        $chk_duplicate = DB::Select("select room_id from users_chat_todo_rooms where (room_from_id = '".Crypt::decryptString($_COOKIE['UserIdToDoSmarter'])."' and room_to_id = '".$request->to_id."') or (room_from_id = '".$request->to_id."' and room_to_id = '".Crypt::decryptString($_COOKIE['UserIdToDoSmarter'])."')");

        // --------------------------------  translation -------------------------
        
        $get_to_lang = DB::Select("select users_lang from users where id = '".$request->to_id."'");

        $translate = new TranslateClient([
            'key' => 'AIzaSyBwmspSz56AoAju0gGPPOcP3NqFjaLJryo'
        ]);

        // Translate text from english to french.

       // if($request->to_id > 0){
            $result_trans = $translate->translate($request->msg, [
                'target' => ($request->to_id > 0 ? $get_to_lang[0]->users_lang : 'en')
            ]);
        //}
        

       
        // -------------------------------- end translation ----------------------

        if(count($chk_duplicate) > 0) {
            $insert = DB::Select("INSERT INTO users_chat_todo (chat_from_id,chat_to_id,chat_msg,chat_msg_trans) VALUES ('".$request->from_id."','".$request->to_id."','".addslashes($request->msg)."', '".addslashes($result_trans['text'])."')");

            $date= date('Y-m-d H:i:s');

            $update = DB::Select("UPDATE users_chat_todo_rooms SET room_status= '1', timedate= '".$date."' WHERE room_to_id= '".$request->from_id."' AND room_from_id= '".$request->to_id."'");

            $update2 = DB::Select("UPDATE users_chat_todo_rooms SET timedate= '".$date."' WHERE room_to_id= '".$request->to_id."' AND room_from_id= '".$request->from_id."'");
        } else {

            DB::table('users_chat_todo')->insert([
                'chat_from_id' => Crypt::decryptString($_COOKIE['UserIdToDoSmarter']), 
                'chat_to_id' => $request->to_id,
                'chat_msg' => addslashes($request->msg)
            ]);
    
            DB::table('users_chat_todo_rooms')->insert([
                'room_from_id' => Crypt::decryptString($_COOKIE['UserIdToDoSmarter']), 
                'room_to_id' => $request->to_id
                  
            ]);
    
            DB::table('users_chat_todo_rooms')->insert([
                'room_from_id' => $request->to_id, 
                'room_to_id' => Crypt::decryptString($_COOKIE['UserIdToDoSmarter'])
                  
            ]);

        }

        //send sms notify to admin customer support
        if($request->to_id == 0) {
            // send sms
            $message = "You have a new customer support message on TodoSmarter.";
            
            // Your Account SID and Auth Token from twilio.com/console
            $sid = env('TWILIO_ACCOUNT_SID');
            $token = env('TWILIO_API_KEY_SECRET');
            $client = new Client($sid, $token);

            // Use the client to do fun stuff like send text messages!
            $client->messages->create(
                // the number you'd like to send the message to
                '+61481817663',
                [
                    // A Twilio phone number you purchased at twilio.com/console
                    'from' => '+61488852385',
                    // the body of the text message you'd like to send
                    'body' => $message
                ]
            );
        }

        return response()->json([$result_trans['text']]);

        
                    

        
        
        

        
    }

    public function admin_chatinsert(request $request) {

        //check if new message or now
        $chk_duplicate = DB::Select("select room_id from users_chat_todo_rooms where (room_from_id = '0' and room_to_id = '".$request->to_id."') or (room_from_id = '".$request->to_id."' and room_to_id = '0')");

        if(count($chk_duplicate) > 0) {
            $insert = DB::Select("INSERT INTO users_chat_todo (chat_from_id,chat_to_id,chat_msg) VALUES ('".$request->from_id."','".$request->to_id."','".addslashes($request->msg)."')");

            $date= date('Y-m-d H:i:s');

            $update = DB::Select("UPDATE users_chat_todo_rooms SET room_status= '1', timedate= '".$date."' WHERE room_to_id= '".$request->from_id."' AND room_from_id= '".$request->to_id."'");

            $update2 = DB::Select("UPDATE users_chat_todo_rooms SET timedate= '".$date."' WHERE room_to_id= '".$request->to_id."' AND room_from_id= '".$request->from_id."'");
        } else {

            DB::table('users_chat_todo')->insert([
                'chat_from_id' => 0, 
                'chat_to_id' => $request->to_id,
                'chat_msg' => addslashes($request->msg)
            ]);
    
            DB::table('users_chat_todo_rooms')->insert([
                'room_from_id' => 0, 
                'room_to_id' => $request->to_id
                  
            ]);
    
            DB::table('users_chat_todo_rooms')->insert([
                'room_from_id' => $request->to_id, 
                'room_to_id' => 0
                  
            ]);

        }
        
        

        return response()->json([$insert]);
    }

    public function viewAddNewMessage($id){


        if(!$this->isUserLoginExist()){
            $this->logout();
            return redirect('/login')->with(['msg' => 'You have to login to view your account']);

        } 
        $payment= DB::Select("SELECT pt_u_id,pt_end_date,pt_start_date FROM payment_transactions WHERE pt_u_id= '".$id."' AND pt_end_date > '".date('Y-m-d H:i:s')."'");
        //dd(count($payment));

        $message= DB::Select("SELECT * FROM users_chat_todo_rooms WHERE room_from_id= '".Crypt::decryptString($_COOKIE['UserIdToDoSmarter'])."' AND room_to_id= '".$id."'");

        if (count($message) == 0) {
            $user = DB::table('users')
                ->leftJoin('users_metas', 'users_metas.user_id', '=', 'users.id')
                ->where('users.id', '=', $id)
                ->get();

                return view('users.addnewmessage')->with(['message'=> $user, 'to'=> $id, 'member'=> $payment]);
        }else {

            return redirect('/messages');
        }

    }

    public function addNewMessageAction(request $request) {

        



        DB::table('users_chat_todo')->insert([
            'chat_from_id' => Crypt::decryptString($_COOKIE['UserIdToDoSmarter']), 
            'chat_to_id' => $request->input('djsgdsg'),
            'chat_msg' => $request->input('msg')
        ]);

        DB::table('users_chat_todo_rooms')->insert([
            'room_from_id' => Crypt::decryptString($_COOKIE['UserIdToDoSmarter']), 
            'room_to_id' => $request->input('djsgdsg')
              
        ]);

        DB::table('users_chat_todo_rooms')->insert([
            'room_from_id' => $request->input('djsgdsg'), 
            'room_to_id' => Crypt::decryptString($_COOKIE['UserIdToDoSmarter'])
              
        ]);

        return redirect('/messages');
    }


    public function isUserLoginExist() {
    

        if (!isset($_COOKIE['UserIdToDoSmarter']) ||  !isset($_COOKIE['LookingFor']) ) {
           return false;
        }
        $usercount =   User::where('id',Crypt::decryptString($_COOKIE['UserIdToDoSmarter']))->count();
        if($usercount <= 0){
         return false;
        }
 
        return true;
 
       }
 
 
     public function logout() {
       setcookie("UserIds", "", time() - 3600);
       setcookie("UserEmail", "", time() - 3600);
       setcookie("UserFullName", "", time() - 3600);
       setcookie("UserSex", "", time() - 3600);
       setcookie("_gooDal", "", time() - 3600);
         return redirect('/login');
     }

     public function online(request $request) {
        foreach($request->email as $email) {
            DB::Select("update users set onln_status = 'online' where email = '".$email."'");
        }
        return response()->json(['done']);
     }

     public function offline(request $request) {
        foreach($request->email as $email) {
            DB::Select("update users set onln_status = 'offline' where email = '".$email."'");
        }
        return response()->json(['done']);
     }

      public function sendFile(Request $request) {
        $arr = [];
        foreach($request->file('file') as $image)
         {
              $new_name = rand() . time() . '.' . $image->getClientOriginalExtension();
              $image->move(public_path('chat_img'), $new_name);

              DB::table('users_chat_todo')->insert([
                    'chat_from_id' => Crypt::decryptString($_COOKIE['UserIdToDoSmarter']),
                    'chat_to_id' => request('to'),
                    'chat_files' => 'https://todosmarter.com/chat_img/' . $new_name
              
        ]);
              $arr[] = 'https://todosmarter.com/chat_img/' . $new_name;
         }
 
 
        return response()->json($arr);
    }

    public function inbox2() {
        $users = [];
        $chatUsers = DB::Select("SELECT t1.*,t2.* FROM users_chat_todo_rooms t1 right JOIN users t2 ON (t1.room_to_id=t2.id) WHERE t1.room_from_id = ".Crypt::decryptString($_COOKIE['UserIdToDoSmarter']). " ORDER BY t1.timedate DESC");
        foreach($chatUsers as $cu) {
            $usersLastMsg = DB::Select("SELECT chat_msg FROM users_chat_todo WHERE (chat_from_id = '".$cu->room_from_id."' AND chat_to_id = '".$cu->room_to_id."') OR (chat_from_id = '".$cu->room_to_id."' AND chat_to_id = '".$cu->room_from_id."') ORDER BY chat_date_time DESC LIMIT 1");


        $msgs = DB::Select("SELECT COUNT(*) AS msgCount FROM users_chat_todo WHERE (chat_from_id = ".Crypt::decryptString($_COOKIE['UserIdToDoSmarter'])." AND chat_to_id = ".$cu->room_to_id.") OR (chat_from_id = ".$cu->room_to_id." AND chat_to_id = ".Crypt::decryptString($_COOKIE['UserIdToDoSmarter']).") ORDER BY chat_date_time ASC");

            if($cu->prfl_approve_status == '0'){
                $propic = 'https://www.globallove.online/images/male-user-placeholder.png';
            } else{
                $propic = $cu->prfl_photo_path;
            }
	    $lmsg = isset($usersLastMsg[0]->chat_msg) ? $usersLastMsg[0]->chat_msg : '';
            $users[] = array(
                'propic' => $propic,
                'name' => $cu->name,
                'email' => $cu->email,
                'lmsg' => $lmsg,
                'user_id' => $cu->room_to_id,
                'msgCount' => $msgs[0]->msgCount
            );

        }
	//var_dump($users); die();
        return view('users.inbox2')->with(['users' => $users]);
    }

    public function inbox() {
        $users = [];
        $chatUsers = DB::Select("SELECT t1.*,t2.* FROM users_chat_todo_rooms t1 right JOIN users t2 ON (t1.room_to_id=t2.id) WHERE t1.room_from_id = ".Crypt::decryptString($_COOKIE['UserIdToDoSmarter']). " ORDER BY t1.timedate DESC");
        foreach($chatUsers as $cu) {
            $usersLastMsg = DB::Select("SELECT chat_msg FROM users_chat_todo WHERE (chat_from_id = '".$cu->room_from_id."' AND chat_to_id = '".$cu->room_to_id."') OR (chat_from_id = '".$cu->room_to_id."' AND chat_to_id = '".$cu->room_from_id."') ORDER BY chat_date_time DESC LIMIT 1");



            if($cu->prfl_approve_status == '0'){
                $propic = 'https://www.globallove.online/images/male-user-placeholder.png';
            } else{
                $propic = $cu->prfl_photo_path;
            }
	    $lmsg = isset($usersLastMsg[0]->chat_msg) ? $usersLastMsg[0]->chat_msg : '';
            $users[] = array(
                'propic' => $propic,
                'name' => $cu->name,
                'email' => $cu->email,
                'lmsg' => $lmsg,
                'user_id' => $cu->room_to_id,
                
            );

        }
        return view('users.inbox')->with(['users' => $users]);
    }

    public function sent() {
        $users = [];
        $chatUsers = DB::Select("SELECT t1.*,t2.* FROM users_chat_todo_rooms t1 right JOIN users t2 ON (t1.room_to_id=t2.id) WHERE t1.room_from_id = ".Crypt::decryptString($_COOKIE['UserIdToDoSmarter']). " ORDER BY t1.timedate DESC");
        foreach($chatUsers as $cu) {
            $usersLastMsg = DB::Select("SELECT chat_msg FROM users_chat_todo WHERE (chat_from_id = '".$cu->room_from_id."' AND chat_to_id = '".$cu->room_to_id."') ORDER BY chat_date_time DESC LIMIT 1");



            if($cu->prfl_approve_status == '0'){
                $propic = 'https://www.globallove.online/images/male-user-placeholder.png';
            } else{
                $propic = $cu->prfl_photo_path;
            }

            $users[] = array(
                'propic' => $propic,
                'name' => $cu->name,
                'email' => $cu->email,
                'lmsg' => (isset($usersLastMsg[0]) ? $usersLastMsg[0]->chat_msg : ''),
                'user_id' => $cu->room_to_id,
                
            );

        }
        return view('users.sent')->with(['users' => $users]);
    }



    public function clearChat($id) 
    {
        DB::table('users_chat_todo')->where('chat_from_id', $id)->where('chat_to_id', 0)->delete();
        DB::table('users_chat_todo')->where('chat_from_id', 0)->where('chat_to_id', $id)->delete();

        return back()->with('msg', 'Your customer support chat has been cleared.');
    }



    
}
