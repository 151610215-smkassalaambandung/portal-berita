<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="/">Kabar Berita</a></h1>
      <h2>infomasi berita terupdate</h2>
    </div>
    <form action="#" method="post">
      
    </form>
    <nav class="clear">
      <ul>
        <li class="active"><a href="/">Home</a></li>
        @php
          $kategori = App\Kategori::all();
          @endphp
          @foreach($kategori as $data)
          <li><a href="{{url('/berita',$data->id)}}">{{$data->name}}</a></li>    
        @endforeach
      </ul>
    </nav>
  </header>
</div>