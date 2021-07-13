@extends('dashboard.layout2')

@section('content')
<section class="settings content-wrapper">
    <div class="back-btn">
        <a href="dashboard.html"><img src="img/Arrow 1.svg" alt="" class="mr-3">Back to Dashboard</a>
    </div>
    <div class="upload">
        <h4>Settings</h4>
       <div class="user-profile-upload">
           <div class="user-pic">
               <img src="img/c-1.png" alt="">
               <div class="trash-icon">
                <i class="fa fa-trash-o"></i>
               </div>
           </div>
        <form class="upload-form">
            <div class="form-group">
                <label for="img">
                    <span class="btn btn-outline-warning upload-btn"><i class="fa fa-camera mr-2"></i>UPLOAD IMAGE</span>
                </label>
                <input type="file" id="img" class="d-none">
            </div>
        </form>
       </div>
    </div>
    <form class="user-details-form">
        <div class="form-card">
         <div class="form-group">
             <label for="name">Full Name</label>
             <input type="text" id="name" class="form-control">
         </div>
         <div class="form-group">
          <label for="email">Email</label>
          <input type="text" id="email" class="form-control">
      </div>
     </div>
     <div class="form-card">
         <div class="form-group">
             <label for="oldPasswor">Old Password</label>
             <input type="password" id="oldPassword" class="form-control">
         </div>
         <div class="form-group">
          <label for="newPassword">New Password</label>
          <input type="password" id="newPassword" class="form-control">
      </div>
     </div>
     <div class="form-group">
         <input type="submit" value="Save" class="btn btn-warning px-5">
     </div>
    </form>
</section>
@endsection