@extends('layout.master')

<style>
    body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}
</style>

@section('content')
<div class="row profile">
    <div class="col-md-3">
        <div class="profile-sidebar">
            <!-- SIDEBAR USER TITLE -->
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                    {{ $cateraar->naam }}
                </div>
                <div class="profile-usertitle-job">
                    {{ $cateraar->regio }}
                </div>
            </div>
            <!-- END SIDEBAR USER TITLE -->
            <!-- SIDEBAR MENU -->
            <div class="profile-usermenu">
                <ul class="nav">
                    <li class="active">
                        <a href="#">
                        <i class="glyphicon glyphicon-home"></i>
                        Werklijst </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="glyphicon glyphicon-user"></i>
                        Facturen </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="glyphicon glyphicon-ok"></i>
                        Kosten </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="glyphicon glyphicon-ok"></i>
                        lorem </a>
                    </li>
                </ul>
            </div>
            <!-- END MENU -->
        </div>
    </div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#opdrachtCreate">
  Nieuwe Opdracht
</button>

    <div class="col-md-9">
        <div class="profile-content">
            <table class="table table-striped table-dark">
                <thead>

                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Naam</th>
                    <th scope="col">Omschrijving</th>
                    <th scope="col">Oplever datum</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($cateraar->opdrachten as $opdracht)
                    <tr>
                      <th scope="row">{{ $opdracht->id }}</th>
                      <td>{{ $opdracht->naam }}</td>
                      <td>{{ $opdracht->omschrijving }}</td>
                      <td>{{ $opdracht->oplever_datum }}</td>
                      <td>
                        <form method="POST" action="{{ route('opdrachten.destroy', $opdracht->id) }}">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                  
                          <div class="form-group">
                              <input type="submit" class="btn btn-sm btn-danger" value="X">
                          </div>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('modals.opdrachten')
@endsection
