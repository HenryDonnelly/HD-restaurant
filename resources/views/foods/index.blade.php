<div>

    <div class="container">
    <h1>All foods</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($foods as $food)
            <tr>
                <td>{{$food->name}}</td>
                <td>{{$food->description}}</td>
                <td>
                    @if ($food->picture)
                    <img src="{{$food->picture}}"
                    alt="{{$food->name}}" width="100">
                    @else
                    No Image
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    </div>

</div>
