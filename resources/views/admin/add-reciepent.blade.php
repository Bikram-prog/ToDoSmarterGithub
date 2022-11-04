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
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Recipient</h5>
                
              </div>
              <div class="modal-body">

                <form action="/u/addreciepentpost" method="POST">
                    @csrf

                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">  {{ $error }}</div>
                    @endforeach

                    <div class="form-group mb-2">
                        <label>Name*</label>
                        <input class="form-control" type="text" name="title" placeholder="Full name" autocomplete="off" required>
                      </div>
              
                      <div class="form-group mb-2">
                        <label>Email*</label>
                        <input class="form-control" type="email" name="email" placeholder="Email ID" autocomplete="off" required>
                      </div>
              
                      <div class="form-group mb-2">
                        <label>Set Password*</label>
                        <input class="form-control" type="text" name="password" placeholder="Set Password" autocomplete="off" required>
                      </div>
              
                      <div class="form-group mb-2">
                        <label>Choose Option*</label>
                        <select name="opt_rec" class="form-control">
                        <option value="0">Without Admin Access</option>
                        <option value="1">With Admin Access</option>
                        </select>
                        </div>

                        <hr style="color: #111;height: 3px">

                        <h5>More Information(*Optional)</h5>

                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group mb-2">
                            <label>Gender</label>
                            <select name="rec_gender" class="form-control">
                            <option value="">Select Recipient Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group mb-2">
                          <label>Date Of Birth</label>
                          <input class="form-control" type="text" id="datepicker" name="dob" placeholder="Date Of Birth" autocomplete="off" >
                        </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group mb-2">
                            <label>Position Title</label>
                            <input class="form-control" type="text" name="pstn_title" placeholder="Position Title" autocomplete="off">
                            </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group mb-2">
                            <label>Department</label>
                            <input class="form-control" type="text" name="deprtment" placeholder="Department" autocomplete="off">
                          </div>
                          </div>
                        </div>
    
                          <div class="form-group mb-2">
                            <label>Address</label>
                            <input class="form-control" type="text" name="address" placeholder="Address" autocomplete="off">
                          </div>
    
                          <div class="row">
                            <div class="col-md-4">
                            <div class="form-group mb-2">
                            <label>Suburb</label>
                            <input class="form-control" type="text" name="suburb" placeholder="Suburb" autocomplete="off">
                            </div>
                            </div>
    
                            <div class="col-md-4">
                            <div class="form-group mb-2">
                            <label>State</label>
                            <input class="form-control" type="text" name="state" placeholder="State" autocomplete="off">
                            </div>
                            </div>
    
                            <div class="col-md-4">
                            <div class="form-group mb-2">
                            <label>Postcode</label>
                            <input class="form-control" type="number" name="pst_code" placeholder="Postcode" autocomplete="off">
                            </div>
                            </div>
                          </div>
    
                          <div class="row">
                            <div class="col-md-6">
                            <div class="form-group mb-2">
                            <label>Home Phone Number</label>
                            <input class="form-control" type="number" name="home_num" placeholder="Home Phone Number" autocomplete="off">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group mb-2">
                            <label>Mobile Phone Number</label>
                            <input class="form-control" type="number" name="mob_num" placeholder="Mobile Phone Number" autocomplete="off">
                            </div>
                            </div>
                          </div>
    
                          <div class="row">
                            <div class="col-md-6">
                            <div class="form-group mb-2">
                            <label>Email Address(Company)</label>
                            <input class="form-control" type="email" name="email_company" placeholder="Email Address(Company)" autocomplete="off">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group mb-2">
                            <label>Email Address(Personal)</label>
                            <input class="form-control" type="email" name="email_prsnl" placeholder="Email Address(Personal)" autocomplete="off">
                            </div>
                            </div>
                          </div>
              
                      
                      <!-- <div class="alert alert-primary text-center" id="add_reciepent_msg" style="display: none;"></div> -->
              
              
                    </div>

                    
                      
                    
                    <div class="modal-footer">
                      
                      
                      <button type="submit" class="btn btn-primary">Add Recipient</button>
                    </div>
                </form>
                
                
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
        
      </div>
    </div>


   


    


    
  


    <!-- Add todo list modal -->

    
    
@include('admin.tds_footer')

<script>
  $( function() {
    $( "#datepicker" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd',
                maxDate: '-16y',
                yearRange: '1960:2006'
    });
  } );
  </script>


