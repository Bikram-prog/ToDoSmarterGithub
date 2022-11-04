@include('admin.tds_sidebar')


    {{-- https://www.globallove.online/images/www-media-world-logo.png --}}

        <div class="col-md-8">

          <h1 class="text-center mb-4">{{ Crypt::decryptString($_COOKIE['UsersCompanyToDoSmarter']) }}</h1>

          <div style="border-left: 3px solid rgb(11, 102, 238);background: #eee; padding: 20px;">
            <div class="w-100 justify-content-between">
              <h5 class="mb-1">{{ $data[0]->to_do_list_title }} </h5>

              <?php
                $exp= explode('|',$data[0]->to_do_list_reciepent);
                $expnew= explode(',',$exp[1]);

                foreach($expnew as $exp){
                  if($exp == Crypt::decryptString($_COOKIE['UserIdToDoSmarter'])){
                    $rec_cntrl = 'true';
                  }else{
                    $rec_cntrl = 'false';
                  }
                }
              ?>

             <small style="font-size: 20px;" class="text-black-50 fs-6"> {{ date('F j, Y',strtotime($data[0]->to_do_list_datetime)) }}&nbsp;&nbsp;

              <div style="float: right;">
                @if($data[0]->to_do_list_status == '0' && $rec_cntrl == 'true')
                <a href="/u/in-prog-todo-smarter/{{ $data[0]->to_do_list_id }}"><i data-bs-toggle="tooltip" data-bs-placement="top" title="In Progress" class="fas fa-spinner" style="color: #ff9f1a; font-size: 20px;"></i></a> &nbsp;&nbsp;
                @endif

                @if($data[0]->to_do_list_status == 'In Progress' && $rec_cntrl == 'true')
                <a href="/u/delay-todo-smarter/{{ $data[0]->to_do_list_id }}"><i data-bs-toggle="tooltip" data-bs-placement="top" title="Delay" class="far fa-clock" style="color: #eb4d4b;font-size: 20px;"></i></a> &nbsp;&nbsp;
                <a href="/u/complete-todo-smarter/{{ $data[0]->to_do_list_id }}"> <i data-bs-toggle="tooltip" data-bs-placement="top" title="Completed" class="far fa-check-circle" style="color: #6ab04c;font-size: 20px;"></i></a>
                @endif

                @if($data[0]->to_do_list_status == 'Delay' && $rec_cntrl == 'true')
                <a href="/u/complete-todo-smarter/{{ $data[0]->to_do_list_id }}"> <i data-bs-toggle="tooltip" data-bs-placement="top" title="Completed" class="far fa-check-circle" style="color: #6ab04c;font-size: 20px;"></i></a>
                @endif
                
                @if(Crypt::decryptString($_COOKIE['UserStatusToDoSmarter']) == '1')
                &nbsp;&nbsp; <a href="/u/edit-to-do-list-smarter/{{ $data[0]->to_do_list_id }}"><i data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"  class="far fa-edit" style="color: #ff9f1a;font-size: 20px;"></i></a> &nbsp;&nbsp;
                <a href="/u/del-todo-smarter/{{ $data[0]->to_do_list_id }}" onclick="return confirm('Are you sure?')"><i data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" class="fas fa-trash" style="font-size: 20px;"></i></a>
                @endif
              </small>

              </div>

            </div>


            @if($data[0]->to_do_list_priority == 'Low')
                  <div class="text-center mt-2 mb-2" style="color: rgb(79, 147, 248);font-weight: 700;">
                      <div style="width: 100px;
                      padding: 5px;
                      background-color: #FF8A80;
                      color: #fff;
                      font-weight: bold;
                      font-size: 14px;">Low</div>
                  </div>
                  @elseif($data[0]->to_do_list_priority == 'Medium')
                  <div class="text-center mt-2 mb-2" style="color: #111;font-weight: 700;">
                    <div style="    width: 100px;
                    padding: 5px;
                    background-color: #FF5252;
                    color: #fff;
                    font-weight: bold;
                    font-size: 14px;">Medium</div>
                  </div>
                  @elseif($data[0]->to_do_list_priority == 'High')
                  <div class="text-center mt-2 mb-2" style="color: rgba(190, 35, 14, 0.884);font-weight: 700;">
                    <div style="    width: 100px;
                    padding: 5px;
                    background-color: #FF1744;
                    color: #fff;
                    font-weight: bold;
                    font-size: 14px;">High</div>
                  </div>
                  @elseif($data[0]->to_do_list_priority == 'Critical')
                  <div class="text-center mt-2 mb-2" style="color: rgb(13, 128, 28);font-weight: 700;">
                    <div style="    width: 100px;
                    padding: 5px;
                    background-color: #D50000;
                    color: #fff;
                    font-weight: bold;
                    font-size: 14px;">Critical</div></div>
                    @else
                    <div class="text-center mt-2 mb-2" style="color: rgb(79, 147, 248);font-weight: 700;">
                      <div style="width: 100px;
                      padding: 5px;
                      background-color: #FF8A80;
                      color: #fff;
                      font-weight: bold;
                      font-size: 14px;">Low</div>
                  </div>
                  @endif

            <p class="mb-1">{!! $data[0]->to_do_list_desc !!} </p>
            @if($data[0]->to_do_list_notes != '')
            <p style="font-weight: 700;">Notes: {{ $data[0]->to_do_list_notes }}</p>
            @endif
            @if($data[0]->to_do_list_image != '')
            @php
              $exp= explode(',', $data[0]->to_do_list_image);
            @endphp
            @foreach($exp as $ex)
            <p style="color: #f53b57;font-weight: 600;text-align:center;"><a href="https://todosmarter.com//images/to_do_smarter_img/{{ $ex }}" target="_blank">View Attachment</a></p>
            @endforeach
            @endif
            @php
            $attach = DB::table('to_do_list_new_attachment')
                        ->where('attach_job_id', '=', $data[0]->to_do_list_id)
                        ->get();
            @endphp
            @if(count($attach) > 0)
            @foreach($attach as $atch)
            <p style="color: #f53b57;font-weight: 600;text-align:center;"><a href="https://todosmarter.com/images/to_do_smarter_img/{{ $atch->attach_path }}" target="_blank">View Attachment</a></p>
            @endforeach
            @endif
            <p style="color: #f53b57;font-weight: 600;">Deadline: {{ date('F j, Y',strtotime($data[0]->to_do_list_target_days)) }}</p>

            <?php
            $exp= explode('|',$data[0]->to_do_list_reciepent);
            $expnew= explode(',',$exp[0]);

            ?>
            @foreach($expnew as $ex)
            <span class="badge bg-secondary" style="border-radius: 25px;">{{ $ex }}</span>
            @endforeach
          </div>


    @if($rate != 0)
        @include('admin.tds_rating')
    @endif


        </div>

      </div>
    </div>



@include('admin.tds_footer')


