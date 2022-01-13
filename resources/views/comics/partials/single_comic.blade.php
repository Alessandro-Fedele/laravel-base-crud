<h1 class="text-center text-primary py-4">COMIC</h1>
<div class="text-center pb-3 px-3">
    <a href="{{route('comics.index')}}"><i style="font-size: 2.5rem" class="fas fa-arrow-circle-left"></i></a>
</div>
<div class="text-center container">
    <img class='py-3' src="{{$comic->thumb}}" alt="{{$comic->title}}">
    <div class="body">
        <h3 class="py-3">{{$comic->title}}</h3>
        <span>Series: {{$comic->series}}</span>
        <br>
        <span>Type: {{$comic->type}}</span>
        <p class="py-3">{{$comic->description}}</p>
        <h5>&euro;&nbsp;{{$comic->price}}</h5>
    </div>
</div>