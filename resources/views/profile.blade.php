@extends("master")
@section("content")
<div class="container">
    <br>
    <div class="main-body">
    
    
          <div class="row gutters-sm">
            
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Нэр</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$user->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$user->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Утас</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$user->Phone}}
                    </div>
                  </div>
                  <hr>
            
                </div>
              </div>
              <div class="row gutters-sm">
                  <br>
                <h3 class='text-center'>Захиалсан кинонууд</h3>
                <br>
                <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">Киноны дугаар</th>
                        <th scope="col">Зохиолч </th>
                        <th scope="col">Түрээслэсэн огноо</th>
                        <th scope="col">Үнэ</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($videos as $video)
                      <tr>
                        <th scope="row">{{$video->video_id}}</th>
                        <td>{{$video->director}}</td>
                        <td>{{$video->rentedDate}}</td>
                        <td>{{$video->price}}</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection