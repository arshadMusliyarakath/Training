@extends("admin.admin_theme")
@section("admin_content")
    
    <div class="container">
        <div class="row">

            <div class="form-area mt-5">
                <h1 class="mb-4">Edit Movie</h1>
                <form method="POST" action="{{ route('editMovie.submited') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-9">
                            <div class="mb-3">
                                <input type="hidden" value="{{ $movie->movie_id }}" name="movID">
                                <input type="text" class="form-control @error('movie_name') is-invalid @enderror" name='movie_name' placeholder="Movie Name" value="{{ $movie->movie_name }}">
                            </div>
                            <div class="mb-3">
                                <input type="url" class="form-control @error('poster_link') is-invalid @enderror" placeholder="Poster Link" name="poster_link" value="{{ $movie->movie_poster }}">
                            </div>
                            <div class="mb-4">
                                <select class="form-select @error('language') is-invalid @enderror" name="language" >
                                    <option>Select Language</option>
                                    <option value="MALAYALAM" @if($movie->language == 'MALAYALAM') selected @endif>Malayalam</option>
                                    <option value="TAMIL" @if($movie->language == 'TAMIL') selected @endif>Tamil</option>
                                    <option value="TELUGU" @if($movie->language == 'TELUGU') selected @endif>Telugu</option>
                                    <option value="ENGLISH" @if($movie->language == 'ENGLISH') selected @endif>English</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="{{ $movie->movie_poster }}" alt="" style="width: 100%">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Description" name="description" style="height: 100px">{{ $movie->movie_description }}</textarea>
                            <label for="floatingTextarea2">Description</label>
                          </div>
                    </div>
                    <div class="mb-3">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="Drama" value="Drama" @if(Str::contains($movie->movie_genre, 'Drama')) checked @endif  >
                            <label class="form-check-label" >Drama</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name='Action' value="Action" @if(Str::contains($movie->movie_genre, 'Action')) checked @endif  >
                            <label class="form-check-label" >Action</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="Adventure" value="Adventure" @if(Str::contains($movie->movie_genre, 'Adventure')) checked @endif  >
                            <label class="form-check-label" >Adventure</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="Horror" value="Horror" @if(Str::contains($movie->movie_genre, 'Horror')) checked @endif  >
                            <label class="form-check-label" >Horror</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="Fantasy" value="Fantasy" @if(Str::contains($movie->movie_genre, 'Fantasy')) checked @endif  >
                            <label class="form-check-label" >Fantasy</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="Comedy" value="Comedy" @if(Str::contains($movie->movie_genre, 'Comedy')) checked @endif  >
                            <label class="form-check-label" >Comedy</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="Romance" value="Romance" @if(Str::contains($movie->movie_genre, 'Romance')) checked @endif  >
                            <label class="form-check-label" >Romance</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="Crime" value="Crime" @if(Str::contains($movie->movie_genre, 'Crime')) checked @endif  >
                            <label class="form-check-label" >Crime</label>
                          </div>
                          
                    </div>
                    <button type="submit" class="btn btn-warning">Update Movies</button>
                  </form>
            </div>

        </div>
    </div>

    
@endsection