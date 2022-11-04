@include('admin.tds_sidebar')
        
        
        <div class="col-md-8">
            
          @if(Crypt::decryptString($_COOKIE['UsersCompanyLogoToDoSmarter']) != '')
          <h1 class="text-center mb-2"><img class="img-fluid" style="align-content: center;align-items: center;align-self: center;width: 200px;
          height: 200px;" src="https://todosmarter.com/images/{{ Crypt::decryptString($_COOKIE['UsersCompanyLogoToDoSmarter']) }}" alt="ToDoSmarter">
          </h1>
          <h1 class="text-center mb-4">{{ Crypt::decryptString($_COOKIE['UsersCompanyToDoSmarter']) }} </h1>
          @else
          <h1 class="text-center mb-4">{{ Crypt::decryptString($_COOKIE['UsersCompanyToDoSmarter']) }}</h1>
          @endif
              
                <h5 class="modal-title text-center">All Recipients</h5>
                
              
              <div class="modal-body">

              @foreach($data as $da )

              @php 
                if($da->reciepent_color_pref != ''){
                  $color = $da->reciepent_color_pref;
                }else{
                  $color = '#ccc';
                }
              @endphp
              <div class="row" style="border: 1px solid #eee; padding: 8px;">

              <div class="col-md-2 text-center">
              @if($da->reciepent_pro_pic_path != '')
              <img style="width: 60px; height: 60px; border-radius: 50px;border: 5px solid {{ $color }};" src="{{ $da->reciepent_pro_pic_path }}" class="img-fluid">
              @else
              <img style="width: 60px; height: 60px; border-radius: 50px;border: 5px solid {{ $color }};" src="https://todosmarter.com/images/male-user-placeholder.png" class="img-fluid">
              @endif
              </div>

              <div class="col-md-10">
              @if($da->reciepent_status == '1')
              <h5 class="mb-1">{{ $da->reciepent_name }} &nbsp;<span class="btn btn-outline-success btn-sm">Admin</span></h5>
              @else
              <h5 class="mb-1">{{ $da->reciepent_name }}</h5>
              @endif
              <!-- <small style="font-size: 18px;">Edit</small> -->
              

              @if(Crypt::decryptString($_COOKIE['UserStatusToDoSmarter']) == '1')
              <small style="font-size: 18px;font-weight: 700;"> 
                        <a href="/u/del-reciepent-smarter/{{ $da->reciepent_id }}" style="text-decoration: none;color: #111;float:right;" onclick="return confirm('Are you sure?')"><i data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" class="fas fa-trash"></i> </a>
              </small>   
              @endif

              @if(Crypt::decryptString($_COOKIE['UserStatusToDoSmarter']) == '1' || $da->reciepent_id == Crypt::decryptString($_COOKIE['UserIdToDoSmarter']))
              <small style="font-size: 18px;font-weight: 700;"> 
              <a href="/u/edit-reciepent-smarter/{{ $da->reciepent_id }}" style="text-decoration: none;color: #111;float:right;margin-right:50px;">Edit </a> 
              </small>
              @endif
              
              @if($da->reciepent_id == Crypt::decryptString($_COOKIE['UserIdToDoSmarter']))
              <small style="font-size: 18px;font-weight: 700;"> 
                        <a href="#" data-bs-toggle="modal" data-bs-target="#color_picker" class="btn btn-primary btn-sm fw-bold" style="float:right;margin-right:50px;color: #fff;">Choose Color</a> 
              </small>
              @endif

              @if($da->reciepent_status == '0' && Crypt::decryptString($_COOKIE['UserStatusToDoSmarter']) == '1')
              <small style="font-size: 18px;font-weight: 700;"> 
                        <a href="/u/make-admin/{{ $da->reciepent_id }}" class="btn btn-success btn-sm fw-bold" style="float:right;margin-right:50px;">Make Admin </a> 
              </small>
              @endif

              <p class="mb-1">{{ $da->reciepent_email }} </p>
              
              </div>
              

              </div>

              @endforeach;

                
              @if(Crypt::decryptString($_COOKIE['UserStatusToDoSmarter']) == '1')
                <div class="text-center">
                  <a href="/u/add-receiepent" class="btn btn-primary mt-4" style="width: 30%">Add Reciepent</a>
                </div>
              @endif 
            </div>
          
        </div>
        
        
      </div>
    </div>


   


    


    
  


    @include('admin.tds_footer')
<!-- Modal -->
<div class="modal fade" id="color_picker" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Choose Color</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/makecolorpost" method="POST">
          {{ csrf_field() }}
          <input type="color" name="color" class="form-control">
          <div class="d-grid mx-auto col-6 gap-2 mt-3">
          <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>