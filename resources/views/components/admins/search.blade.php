<div class="collapse " id="navbarHeader">
  <div class="container">
    <div class="row py-5">
      
      <div class="col-4">
        <form method="GET" action="{{ route('admin.index') }}">
          <div class="input-group">
            <input type="text" class="form-control input-group-prepend" placeholder="カクテル名、材料で検索" name="text" value="@if (isset($text)) {{ $text }} @endif">
            <button class="btn btn-primary" type="submit">
              <span class="material-icons">search</span>  
            </button>
          </div>
        </form>
      </div>


      <div class="col-8">
        <form action="{{ route('admin.index') }}">
          ベース　　　：
          @foreach($bases as $base)
          <div class="form-check-inline">
            <input class="form-check-input" name="base[]" type="checkbox" value="{{ $base->id }}" id="{{ $base->name }}" >
            <label class="form-check-label" for="{{ $base->name }}">
              {{$base->name}}
            </label>
          </div>
          @endforeach

          <br>
          テイスト　　：
          @foreach($tastes as $taste)
          <div class="form-check-inline">
            <input class="form-check-input" name="taste[]" type="checkbox" value="{{ $taste->id }}" id="{{ $taste->name }}">
            <label class="form-check-label" for="{{ $taste->name }}">
              {{$taste->name}}
            </label>
          </div>
          @endforeach

          <br>

          アルコール度数：
          @foreach($strengths as $strength)
          <div class="form-check-inline">
            <input class="form-check-input" name="strength[]" type="checkbox" value="{{ $strength->id }}" id="{{ $strength->name }}">
            <label class="form-check-label" for="{{ $strength->name }}">
              {{$strength->name}}
            </label>
          </div>
          @endforeach

          <br>

        製法　　　：
          @foreach($techniques as $technique)
          <div class="form-check-inline">
            <input class="form-check-input" name="technique[]" type="checkbox" value="{{ $technique->id }}" id="{{ $technique->name }}">
            <label class="form-check-label" for="{{ $technique->name }}">
              {{$technique->name}}
            </label>
          </div>
          @endforeach
        
          <br>

        グラスタイプ　 ：
          @foreach($glasses as $glass)
          <div class="form-check-inline">
            <input class="form-check-input" name="glass[]" type="checkbox" value="{{ $glass->id }}" id="{{ $glass->name }}">
            <label class="form-check-label" for="{{ $glass->name }}">
              {{$glass->name}}
            </label>
          </div>
          @endforeach

          <button class="btn btn-primary" type="submit">検索</button> 
        </form>
      </div>
    </div>
  </div>
</div>