@extends('backend.layouts.master')
@section('title','Profile')
@section('content')
<div id="content" class="content content-full-width">
    <div class="profile">
        <div class="profile-header">

            <div class="profile-header-cover"></div>


            <div class="profile-header-content">

                <div class="profile-header-img">
                    <img src="{{asset('backend')}}/assets/img/user/user-13.jpg" alt="">
                </div>


                <div class="profile-header-info">
                    <h4 class="mt-0 mb-1">Sean Ngu</h4>
                    <p class="mb-2">UXUI + Frontend Developer</p>
                    <a href="#" class="btn btn-xs btn-yellow google-drive-opener">Edit Profile</a>
                </div>

            </div>


            <ul class="profile-header-tab">
                <li class="nav-item"><a href="#" class="nav-link active">ABOUT</a></li>
                <li class="nav-item"><a href="#" class="nav-link">EDIT PROFILE</a></li>
                <li class="nav-item"><a href="#" class="nav-link">CHANGE PASSWORD</a></li>
            </ul>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                <table class="table table-striped table-bordered table-td-valign-middle">
                <tr>
                    <th>Name</th>
                    <td>Imran Ahmed</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>imranahmed.developer@gmail.com</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>Baliadangi, Thakurgaon</td>
                </tr>
            </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection