@extends('layouts.master')
@section('content')
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear"> 
    <!-- Slider -->
   
    <!-- main content -->
    <div id="homepage"> 
      <!-- Introduction -->
      <!-- / Introduction --> 
      <!-- ########################################################################################## --> 
      <!-- Services -->
      <section class="container">
   
       @foreach($budaya as $data)
       <div class="col-md-12">
        <div class="jumbotron top-space">
        <article class="one_fifth">
          <img src="{{asset('img/'.$data->cover)}}" style="width: 190px; height: 120px;" alt="">
          <br><br>
            <face="Trebuchet MS">{{$data->judul}}
            <center>
              <footer class="st--button"><a href="{{url('/selengkapnya',$data->id)}}">Read More >><i class="zmdi zmdi-long-arrow-right"></i></a></footer>
            </center>
        </article>
      </div>
    </div>
        @endforeach
      </section> 
      
 <!-- <section id="services" class="last clear">
       @foreach($budaya as $data)
       <div class="col-md-4">
        <div class="jumbotron top-space">
      <article class="one_fifth">
          <figure><img src="{{asset('img/'.$data->cover)}}" style="width: 300px; height: 150px;" alt="">
            <figcaption>
              <h2><b><font face="Trebuchet MS">{{$data->judul}}</font></b></h2>
              <center>
              <footer class="st--button"><a href="{{url('/selengkapnya',$data->id)}}">Read More >><i class="zmdi zmdi-long-arrow-right"></i></a></footer>
            </center>
                        

            </figcaption>
          </figure>
        </article>
        </div>
      
        @endforeach
    </section>
  </div> -->
  </div>
  </div>
</div>
@endsection
