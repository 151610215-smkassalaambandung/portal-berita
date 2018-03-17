@extends('layouts.master')
@section('content')
<div class="wrapper row2">
  <div id="container" class="clear"> 
    <!-- Slider -->

   
    <!-- main content -->
    <div id="homepage"> 
      <!-- Introduction -->
      <!-- / Introduction --> 
      <!-- ########################################################################################## --> 
      <!-- Services -->
      <section id="services" class="last clear">
        @php
        $beritas= App\Berita::paginate(6)
        @endphp
       @foreach($berita as $data)        
        <div class="col-md-8">
        <article class="one_third">
          <div class="last box"></div>
          
          <figure><img src="{{asset('img/'.$data->cover)}}" width="300" height="180" alt="">
            <figcaption>
              <h2>{{$data->judul}}</h2>
              
              <footer class="more"><a href="{{url('/selengkapnya',$data->id)}}">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        @endforeach
      </section>
      {!!$berita->links()!!}
    </div>
      <!-- / Services --> 
    </div>
@endsection