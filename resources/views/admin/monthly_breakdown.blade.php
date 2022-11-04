@include('admin.tds_sidebar')
        <div class="col-md-7">
          @if(Crypt::decryptString($_COOKIE['UsersCompanyLogoToDoSmarter']) != '')
          <h1 class="text-center mb-2"><img class="img-fluid" style="align-content: center;align-items: center;align-self: center;width: 200px;
          height: 200px;" src="https://todosmarter.com/images/{{ Crypt::decryptString($_COOKIE['UsersCompanyLogoToDoSmarter']) }}" alt="ToDoSmarter">
          </h1>
          <h1 class="text-center mb-4">{{ Crypt::decryptString($_COOKIE['UsersCompanyToDoSmarter']) }} </h1>
          @else
          <h1 class="text-center mb-4">{{ Crypt::decryptString($_COOKIE['UsersCompanyToDoSmarter']) }}</h1>
          @endif

      




        
        
          
          
          

          
          

  
          <!-- <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-cog"></i> 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/u/all_reciepent">All Recipients</a>
                        <a class="dropdown-item" href="/u/adminviewuser">Add add-receiepent</a>
                        <a class="dropdown-item" href="/u/to_do_smarter_logout">Logout</a>
                        @if(Crypt::decryptString($_COOKIE['UserStatusToDoSmarter']) == '1')
                        <a class="dropdown-item" href="/u/del-company/{{ Crypt::decryptString($_COOKIE['UsersCompanyToDoSmarter']) }}" onclick="return confirm('Are you sure?')">Delete Company Data</a>
                        @endif
            </li>
            </ul> -->

          


          <!-- <a class="btn btn-danger completedbtn complt" style="font-weight: 700; border: 1px solid #ccc;float: right;" href="/u/to_do_smarter_logout"> Logout</a> -->
          @foreach($data as $mo)
          <table class="mt-4">
          
            <tr>
            
            
            @php
            $dateObj   = DateTime::createFromFormat('!m', $mo['month']);
            $monthName = $dateObj->format('F'); // March
            @endphp
              <td colspan="5" class="text-center" style="padding: 8px !important; background-color: #3498db;color: #fff;font-weight: 700;font-size: 16px;">{{ $monthName }}&nbsp; {{ $mo['year'] }}</td>
            
            </tr>

            <table class="table table-hover table-borderless" style="border-collapse: separate;border-spacing: 0.4em;">
              <thead>
                <tr>
                  <th class="text-left">Start</th>
                  <th class="text-left">End</th>
                  <th class="text-left">Project</th>
                  <th class="text-left">Priority</th>
                  <th class="text-left">Reciepents</th>
                  <th class="text-left">Status</th>
                  <!-- <th class="text-left">Action</th> -->
                </tr>
              </thead>
                <tbody>
                  @foreach($mo[0][0] as $key=>$da)

@if($da->to_do_list_status == '0')
<tr style="padding: 15px !important; background-color: #f1c40f;">
@elseif($da->to_do_list_status == 'In Progress')
<tr style="padding: 15px !important; background-color: #3498db;">
@elseif($da->to_do_list_status == 'Delay')
<tr style="padding: 15px !important; background-color: #e74c3c;">
@elseif($da->to_do_list_status == '1')
<tr style="padding: 15px !important; background-color: #2ecc71;">
@endif
                




    <td style="border-left: 3px solid rgb(11, 102, 238);">{{ date('F j, Y',strtotime($da->to_do_list_datetime)) }}</td>
    <td>{{ date('F j, Y',strtotime($da->to_do_list_target_days)) }}</td>
                  <td><a href="/u/job-details/{{ $da->to_do_list_id }}" style="color:#000;text-decoration: none;">{{ $da->to_do_list_title }}</a> 
                  @if(Crypt::decryptString($_COOKIE['UserStatusToDoSmarter']) == '1')
                  <a href="/u/del-todo-smarter/{{ $da->to_do_list_id }}" onclick="return confirm('Are you sure?')"><i data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" class="fas fa-trash" style="color: #111;font-size: 18px;float: right;"></i></a> <a href="/u/edit-to-do-list-smarter/{{ $da->to_do_list_id }}"><i data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"  class="far fa-edit" style="color: #111;font-size: 18px;float: right;margin-right: 5px;"></i></a>
                  @endif 
                  @if($da->to_do_list_image != '')
                  <a href="/u/job-details/{{ $da->to_do_list_id }}" style="color:#000;text-decoration: none;"><i data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment" class="fas fa-paperclip" style="color: #111;font-size: 18px;float: right;margin-right: 7px;"></i></a>
                  @endif
                  @php 
                  $attach = DB::table('to_do_list_new_attachment')
                        ->where('attach_job_id', '=', $da->to_do_list_id)
                        ->get();
                  @endphp
                  @if(count($attach) > 0)
                  <a href="/u/job-details/{{ $da->to_do_list_id }}" style="color:#000;text-decoration: none;"><i data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment" class="fas fa-paperclip" style="color: #111;font-size: 18px;float: right;margin-right: 7px;"></i></a>
                  @endif
                </td>
                  @if($da->to_do_list_priority == 'Low')
                  <td class="text-center" style="color: rgb(79, 147, 248);font-weight: 700;">
                      <div style="width: 100%;
                      padding: 5px;
                      background-color: #FF8A80;
                      color: #fff;
                      font-weight: bold;
                      font-size: 14px;">Low</div>
                  </td>
                  @elseif($da->to_do_list_priority == 'Medium')
                  <td class="text-center" style="color: #111;font-weight: 700;">
                    <div style="    width: 100%;
                    padding: 5px;
                    background-color: #FF5252;
                    color: #fff;
                    font-weight: bold;
                    font-size: 14px;">Medium</div>
                  </td>
                  @elseif($da->to_do_list_priority == 'High')
                  <td class="text-center" style="color: rgba(190, 35, 14, 0.884);font-weight: 700;">
                    <div style="    width: 100%;
                    padding: 5px;
                    background-color: #FF1744;
                    color: #fff;
                    font-weight: bold;
                    font-size: 14px;">High</div>
                  </td>
                  @elseif($da->to_do_list_priority == 'Critical')
                  <td class="text-center" style="color: rgb(13, 128, 28);font-weight: 700;">
                    <div style="    width: 100%;
                    padding: 5px;
                    background-color: #D50000;
                    color: #fff;
                    font-weight: bold;
                    font-size: 14px;">Critical</div></td>
                    @else
                    <td class="text-center" style="color: rgb(79, 147, 248);font-weight: 700;">
                      <div style="width: 100%;
                      padding: 5px;
                      background-color: #FF8A80;
                      color: #fff;
                      font-weight: bold;
                      font-size: 14px;">Low</div>
                  </td>
                  @endif



                  <td>
                  
                
                


                @php 
                $name_exp= explode('|', $da->to_do_list_reciepent);
                $exp_comma = explode(',', $name_exp[1]);
                
                @endphp

                <div style="    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;">

                <?php foreach($exp_comma as $comma) {
                  //echo $comma;
                  $xyz= DB::table('to_do_list_reciepent')
                  ->where('reciepent_id', $comma)->first();

                  if($xyz->reciepent_pro_pic_path != '') {

                    $seen= DB::table('to_do_list_new_seen')
                  ->leftJoin('to_do_list_reciepent', 'to_do_list_reciepent.reciepent_id', '=', 'to_do_list_new_seen.user_id')
                  ->where('to_do_list_new_seen.job_id', $da->to_do_list_id)->where('to_do_list_new_seen.user_id', $comma)->get();

                  ?>

                  

<div title="" style="width: 20px;
    height: 20px;
    font-size: 12px;
    border-radius: 100px;
<?php if($seen[0]->status == 1){ ?>
      background-color: #2ecc71 !important;
    <?php } else { ?> 
      background-color: #ccc !important;
    <?php } ?>
    
    
    font-weight: bold;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    cursor: pointer;"><img style="
    
    border-radius: 50px;
    <?php if($seen[0]->status == 1){ ?>
      border: 2px solid #2ecc71 !important;
    <?php } else { ?> 
      border: 2px solid #ccc !important;
    <?php } ?>
    
    " class="img-fluid" src="{{ $xyz->reciepent_pro_pic_path }}"></div>

                <?php 
                } else { 
                  // if($xyz->reciepent_pro_pic_path == '') { 
                    ?>

                  <?php 
                  $seen= DB::table('to_do_list_new_seen')
                  ->leftJoin('to_do_list_reciepent', 'to_do_list_reciepent.reciepent_id', '=', 'to_do_list_new_seen.user_id')
                  ->where('to_do_list_new_seen.job_id', $da->to_do_list_id)->where('to_do_list_new_seen.user_id', $comma)->get();
                  foreach ($seen as $exp){
                    if($exp->reciepent_pro_pic_path == '' || $exp->reciepent_pro_pic_path == null) {
                    
                    $cap= ucfirst(substr($exp->reciepent_name, 0, 1));

                   // echo $exp->reciepent_name;
                 
                ?>
                <div title="{{$exp->reciepent_name}}" style="width: 20px;
    height: 20px;
    font-size: 12px;
    border-radius: 100px;
    <?php if($exp->status == 1){ ?>
      background-color: #2ecc71 !important;
    <?php } else { ?> 
      background-color: #ccc !important;
    <?php } ?>
    
    font-weight: bold;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    cursor: pointer;">{{ $cap }}</div>



    <?php } } ?>

                  <?php } } ?>

    </div>

                  </td>




                  @if($da->to_do_list_status == '0')
                  <td class="text-left" style="font-weight: 700;font-size: 14px;">
                   Open
                  </td>
                  @elseif($da->to_do_list_status == 'In Progress')
                  <td class="text-left" style="font-weight: 700;font-size: 14px;">In Progress</td>
                  @elseif($da->to_do_list_status == 'Delay')
                  <td class="text-left" style="font-weight: 700;font-size: 14px;">Delayed</td>
                  @elseif($da->to_do_list_status == '1')
                  <td class="text-left" style="font-weight: 700;font-size: 14px;">Completed</td>
                  @endif
                  <!-- <td class="text-center"><a href="/u/job-details/{{ $da->to_do_list_id }}" class="btn btn-primary">View Details</a></td> -->
                </tr>
                
                @endforeach
                
                
                
                </tbody>
                
            </table>
            
            
    </table>
    
    @endforeach

            
              
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
      



    @include('admin.tds_footer')
