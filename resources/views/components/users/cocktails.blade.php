@if($cocktails->isEmpty())
  <h4 class="text-muted" style="text-align: center">表示できるカクテルはありません</h4>
@else
  <div class="bg-light">
    <div class="container py-1">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 py-3">
        @foreach($cocktails as $cocktail)
          <div class="col">
            <div class="card shadow-sm">
              @if(empty($cocktail->image))
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">no image</text></svg>
              @else
              <img src="{{ asset('storage/' . $cocktail->image) }}" style="width: 100%; height: 225px; object-fit: cover;">
              @endif
              <div class="card-body">
                <p class="card-text">{{ $cocktail->name }}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick=location.href='home/show/{{ $cocktail->id }}'>view</button>
                    @if($cocktail->users()->where('user_id', Auth::id())->exists())
                    <form action="{{ route('unfavorites', $cocktail) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-secondary" onclick><span class="material-icons">favorite</span></button>
                    </form>
                    @else
                    <form action="{{ route('isfavorites', $cocktail) }}" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-sm btn-outline-secondary" onclick><span class="material-icons">favorite_border</span></button>
                    </form>
                    @endif
                  </div>     
                  <div class="btn-group2">
                    @if($cocktail['authority'] === 1)
                    <div>
                      <small class="text-muted">おいしいよね：{{ $cocktail->users()->count() }}</small>
                    </div>
                    @else
                    <div>
                        <button type="submit" class="btn btn-sm btn-outline-secondary" onclick=location.href='original/edit/{{ $cocktail->id }}'><span class="material-icons">edit</span></button>
                    </div>
                    <div>
                      <form action="{{ route('original.delete', $cocktail) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-secondary" onclick='return confirm("削除しますか？");'><span class="material-icons">delete</span></button>
                      </form>
                    </div>  
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center">
    {{ $cocktails->links() }}
  </div>
@endif