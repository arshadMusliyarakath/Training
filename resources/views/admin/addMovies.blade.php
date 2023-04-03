@extends("admin.admin_theme")
@section("admin_content")
    
    <div class="container">
        <div class="row">

            <div class="form-area mt-5">
                <h1 class="mb-4">Add Movie</h1>
                <form method="POST" action="{{ route('addMovie.submited') }}">
                    @csrf
                    <div class="mb-3">
                      <input type="text" class="form-control @error('movie_name') is-invalid @enderror" name='movie_name' placeholder="Movie Name">
                    </div>
                    <div class="mb-3">
                        <input type="url" class="form-control @error('poster_link') is-invalid @enderror" placeholder="Poster Link" name="poster_link">
                    </div>
                    <div class="mb-3">
                        <select class="form-select @error('language') is-invalid @enderror" name="language" >
                            <option>Select Language</option>
                            <option value="MALAYALAM">Malayalam</option>
                            <option value="TAMIL">Tamil</option>
                            <option value="TELUGU">Telugu</option>
                            <option value="ENGLISH">English</option>
                          </select>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Description" name="description" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Description</label>
                          </div>
                    </div>
                    <div class="mb-3">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="Drama" value="Drama">
                            <label class="form-check-label" for="inlineCheckbox1">Drama</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name='Action' value="Action">
                            <label class="form-check-label" for="inlineCheckbox2">Action</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="Adventure" value="Adventure">
                            <label class="form-check-label" for="inlineCheckbox1">Adventure</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="Horror" value="Horror">
                            <label class="form-check-label" for="inlineCheckbox2">Horror</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="Fantasy" value="Fantasy">
                            <label class="form-check-label" for="inlineCheckbox1">Fantasy</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="Comedy" value="Comedy">
                            <label class="form-check-label" for="inlineCheckbox2">Comedy</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="Romance" value="Romance">
                            <label class="form-check-label" for="inlineCheckbox1">Romance</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="Crime" value="Crime">
                            <label class="form-check-label" for="inlineCheckbox2">Crime</label>
                          </div>
                          
                    </div>
                    <button type="submit" class="btn btn-primary">Add Movies</button>
                  </form>
            </div>

        </div>
    </div>


    
@endsection