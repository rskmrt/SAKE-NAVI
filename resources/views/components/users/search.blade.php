<div class="collapse " id="navbarHeader">
  <div class="container">
    <div class="row py-3">
      <form method="GET" action="{{ route('home') }}">

        <div style="margin-bottom: 10px; width:300px;">
          <div class="input-group">
            <input type="text" class="form-control input-group-prepend" placeholder="カクテル名、ベース名、材料を入力" name="text" value="@if (isset($text)) {{ $text }} @endif">
          </div>
        </div>
        
        <div class="row">
          <div class="col-2">
            ベース
          </div>
          <div class="col-10">
            @foreach($bases as $base)
            <div class="form-check-inline">
              <input class="form-check-input" name="base[]" type="checkbox" value="{{ $base->id }}" id="{{ $base->name }}" >
              <label class="form-check-label" for="{{ $base->name }}">
                {{$base->name}}
              </label>
            </div>
            @endforeach
          </div>
        </div>

        <div class="row">
          <div class="col-2">
            材料
          </div>
          <div class="col-10">
            @foreach($splits as $split)
            <div class="form-check-inline">
              <input class="form-check-input" name="split[]" type="checkbox" value="{{ $split->id }}" id="{{ $split->name }}" >
              <label class="form-check-label" for="{{ $split->name }}">
                {{$split->name}}
              </label>
            </div>
            @endforeach
          </div>
        </div>

        <div class="row">
          <div class="col-2">
            テイスト
          </div>
          <div class="col-10">
            @foreach($tastes as $taste)
            <div class="form-check-inline">
              <input class="form-check-input" name="taste[]" type="checkbox" value="{{ $taste->id }}" id="{{ $taste->name }}">
              <label class="form-check-label" for="{{ $taste->name }}">
                {{$taste->name}}
              </label>
            </div>
            @endforeach
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            アルコール度数
          </div>
          <div class="col-8">
            @foreach($strengths as $strength)
            <div class="form-check-inline">
              <input class="form-check-input" name="strength[]" type="checkbox" value="{{ $strength->id }}" id="{{ $strength->name }}">
              <label class="form-check-label" for="{{ $strength->name }}">
                {{$strength->name}}
              </label>
            </div>
            @endforeach
          </div>
        </div>

        <div class="row">
          <div class="col-2">
            製法
          </div>
          <div class="col-10">
            @foreach($techniques as $technique)
            <div class="form-check-inline">
              <input class="form-check-input" name="technique[]" type="checkbox" value="{{ $technique->id }}" id="{{ $technique->name }}">
              <label class="form-check-label" for="{{ $technique->name }}">
                {{$technique->name}}
              </label>
            </div>
            @endforeach
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            グラスタイプ
          </div>
          <div class="col-8">
            @foreach($glasses as $glass)
            <div class="form-check-inline">
              <input class="form-check-input" name="glass[]" type="checkbox" value="{{ $glass->id }}" id="{{ $glass->name }}">
              <label class="form-check-label" for="{{ $glass->name }}">
                {{$glass->name}}
              </label>
            </div>
            @endforeach
          </div>
        </div>
        <div style="text-align: center">
          <button type="submit" class="btn btn-outline-dark">検索</button> 
        </div>

      </form>
    </div>
  </div>
</div>