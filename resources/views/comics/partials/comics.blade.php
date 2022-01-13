<h1 class="py-4 text-center text-primary">DC COMICS</h1>
<div class="text-center pb-3">
    <a href="{{route('comics.create')}}">
        <i style="font-size: 2rem" class="fas fa-plus-circle">Add comics</i>
    </a>
</div>
<div class="container">
    @if(session("added"))
    <div class="alert alert-success">{{session("added")}}</div>
    @endif
</div>
<div class="container">
    @if(session("edited"))
    <div class="alert alert-success">{{session("edited")}}</div>
    @endif
</div>
<div class="container">
    @if(session("deleted"))
    <div class="alert alert-success">{{session("deleted")}}</div>
    @endif
</div>
<table class="table container">
    <thead>
        <tr>
            <th>#</th>
            <th>THUMB</th>
            <th>TITLE</th>
            <th>DESCRIPTION</th>
            <th>SERIES</th>
            <th>SALE-DATE</th>
            <th>TYPE</th>
            <th>PRICE</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <td>{{$comic->id}}</td>
            <td><a href="{{route('comics.show',$comic->id)}}"><img width="100" src="{{$comic->thumb}}" alt="{{$comic->title}}"></a></td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
            <td>&euro;&nbsp;{{$comic->price}}</td>
            <td class="action">
                <a class="px-2" href="{{route('comics.edit',$comic->id)}}">EDIT</a>
                <form action="{{route('comics.destroy',$comic->id)}}" method="POST" class="form-delete">
                    @csrf
                    @method('DELETE')

                    <input type="hidden" name="comicTitle" value="{{$comic->title}}">

                    <button id="delete" type="submit">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>