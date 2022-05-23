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
              <img src="{{ asset('storage/' . $cocktail->image) }}" style="width: 100%; height: 225px; object-fit: cover; border-bottom: 1px solid;">
              @endif
              <div class="card-body">
                <p class="card-text">{{ $cocktail->name }}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick=location.href='admin/cocktail/edit/{{ $cocktail->id }}'>編集</button>
                    <div>
                      <form action="{{ route('admin.cocktail.delete', $cocktail) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-secondary" onclick='return confirm("削除しますか？");'><span class="material-icons">delete</span></button>
                      </form>
                    </div>  
                  </div>
                  <div class="btn-group2">
                    <div>
                      <small class="text-muted">更新日：{{ $cocktail->updated_at->format('Y/m/d H:i') }}</small>
                    </div>
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