@extends('admin.admin_master')
@section('admin')  

<div class="page-content">
    <div class="container-fluid">
        <div class="col-lg-4">
            <div class="card"> <br> 
               <center>
                <img class="rounded-circle avatar-xl" src="{{ asset('backend/assets/images/small/img-5.jpg') }}" alt="Card image">
               </center>
                <div class="card-body">
                    <h4 class="card-title">Name: {{ $adminData->name }}</h4>
                    <h4 class="card-title">User Email: {{ $adminData->email }}</h4>
                    <h4 class="card-title">Username: {{ $adminData->username }}</h4>
                    <p class="card-text">
                        <small class="text-muted">Joined: {{ $adminData->created_at }}</small>
                    </p>
                    <hr>
                    <a href="{{ route('edit.profile') }}" class="btn btn-info btn-rounded waves-effect waves-light">Edit Profile</a>
                 </div>
            </div>
        </div>
    </div>
</div>

@endsection