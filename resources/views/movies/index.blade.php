<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">No</th>
            <th scope="col">Title Type</th>
            <th scope="col">Primary Title</th>
            <th scope="col">Original Title</th>
            <th scope="col">Adutl</th>
            <th scope="col">Start Year</th>
            <th scope="col">End Year</th>
            <th scope="col">Run Time Minutes</th>
            <th scope="col">Genres</th>
    </tr>
    </thead>
    <tbody>
        @forelse ($movie as $key=>$value)
            <tr>
                <td>{{$key + 1}}</th>
                    <td>{{$value->titleType}}</td>
                    <td>{{$value->primaryTitle}}</td>
                    <td>{{$value->originalTitle}}</td>
                    <td>{{$value->isAdult}}</td>
                    <td>{{$value->startYear}}</td>
                    <td>{{$value->endYear}}</td>
                    <td>{{$value->runtimeMinutes}}</td>
                    <td>{{$value->genres}}</td>d>
                <td>
                    <a href="/posts/{{$value->id}}" class="btn btn-info">Show</a>
                    <a href="/posts/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="/posts/{{$value->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger my-1" value="Delete">
                    </form>
                </td>
            </tr>
        @empty
            <tr colspan="3">
                <td>No data</td>
            </tr>  
        @endforelse              
    </tbody>
</table>    