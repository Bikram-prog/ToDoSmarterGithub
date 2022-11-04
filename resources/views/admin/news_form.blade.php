@include('admin.tds_sidebar')


        <div class="col-md-8">
        <h1 class="text-center mb-4">{{ Crypt::decryptString($_COOKIE['UsersCompanyToDoSmarter']) }}</h1>
         <h1>Write a Post</h1>
         <p style="color: #c0392b;font-size: 20px;">(*this post will be published on thedailyplanet.app)</p>
         
         @if($errors->any())
            {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
        @endif
        
        
        @if (Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        

          <form action="/newsupdatepost" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
              <label>Upload Image (Optional|max: 2mb)</label>
              <input type="file" class="form-control" name="image">
            </div>

            <div class="form-group">
              <label>Title (max: 1000 characters)</label>
              <input type="text" class="form-control" name="news_title">
            </div>

            <div class="form-group mb-2">
              <label>Description (max: 5000 characters)</label>
              <textarea class="form-control" rows="6" name="news_desc" placeholder="Write the text..."></textarea>
            </div>
            <div class="text-center mt-4">
            <hr />
            <button type="submit" class="btn btn-primary btn-block">Post Now</button>
</div>
          </form>
        </div>
        <div class="col-md-3"></div>
      </div>

      
  </div>

  @include('admin.tds_footer')

  <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

  <script>
    CKEDITOR.replace( 'news_desc' );
  </script>




