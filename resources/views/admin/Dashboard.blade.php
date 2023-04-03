@extends("admin.admin_theme")
@section("admin_content")
    
    <div class="container">
        <div class="row">
            <table class="table mt-5" >
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Movie Poster</th>
                    <th scope="col">Movie Name</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Users Counts</th>
                    <th scope="col">Movie Genre</th>
                    <th scope="col">Language</th>
                    <th scope="col">Year</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="thumb">
                                <a href="{{ route('single.movie', $movie->permalink) }}">
                                    <img  src="{{ $movie->movie_poster }}" alt="">
                                </a>
                            </td>
                            <td>{{ $movie->movie_name }}</td>
                            <td>{{ $movie->movie_rating }}</td>
                            <td>{{ $movie->movie_name }}</td>
                            <td>{{ $movie->movie_genre }}</td>
                            <td>{{ $movie->movie_year }}</td>
                            <td>{{ $movie->language }}</td>
                            <td>
                                <a href="{{ route('edit.movie', encrypt($movie->movie_id) ) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#myModel_{{ $loop->iteration }}"><i class="fa-solid fa-trash"></i></a>
                            </td>
                            
                        </tr>
                            
                            
                            <!-- Modal -->
                            <div class="modal fade" id="myModel_{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Do you want to delete <b>{{ $movie->movie_name }}</b> ?
                                    </div>
                                    <div class="modal-footer">
                                        <a class="btn btn-secondary" data-bs-dismiss="modal">No, Thanks</a>
                                        <a href="{{ route('delete.submited', encrypt($movie->movie_id) ) }}" class="btn btn-danger" >Yes, Delete</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                    @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>




<style>
.thumb {
    width: 9%;
}
.thumb img{
    width: 100%;
}
table i {
    font-size: 22px;
    margin-right: 10px;
    margin-top: 8px;
}
i.fa-solid.fa-trash {
    color: #dc3545;
}
</style>

@endsection