<div class="collapse " id="navbarHeader">
  <div class="container">
    <div class="row py-3">
      <form method="GET" action="{{ route('home') }}">

        <div style="margin-bottom: 10px; width:300px;">
          <div class="input-group">
            <input type="text" class="form-control input-group-prepend" placeholder="カクテル名、ベース名、材料を入力" name="text" value="@if (isset($text)) {{ $text }} @endif">
          </div>
        </div>

        <table class="table table-borderless py-5" style="font-size: 15px">
          <tbody>
            <tr>
              <td style="white-space: nowrap;">ベース</td>
              <td>
                @foreach($bases as $base)
                <div class="form-check-inline">
                  <input class="form-check-input" name="base[]" type="checkbox" value="{{ $base->id }}" id="{{ $base->name }}" >
                  <label class="form-check-label" for="{{ $base->name }}">
                    {{$base->name}}
                  </label>
                </div>
                @endforeach
              </td>
            </tr>
      
            <tr>
              <td style="white-space: nowrap;">テイスト</td>
              <td>
                @foreach($tastes as $taste)
                <div class="form-check-inline">
                  <input class="form-check-input" name="taste[]" type="checkbox" value="{{ $taste->id }}" id="{{ $taste->name }}">
                  <label class="form-check-label" for="{{ $taste->name }}">
                    {{$taste->name}}
                  </label>
                </div>
                @endforeach  
              </td>
            </tr>
      
            <tr>
              <td style="white-space: nowrap;">アルコール度数</td>
              <td>
                @foreach($strengths as $strength)
                <div class="form-check-inline">
                  <input class="form-check-input" name="strength[]" type="checkbox" value="{{ $strength->id }}" id="{{ $strength->name }}">
                  <label class="form-check-label" for="{{ $strength->name }}">
                    {{$strength->name}}
                  </label>
                </div>
                @endforeach  
              </td>
            </tr>
      
            <tr>
              <td style="white-space: nowrap;">技法</td>
              <td>
                @foreach($techniques as $technique)
                <div class="form-check-inline">
                  <input class="form-check-input" name="technique[]" type="checkbox" value="{{ $technique->id }}" id="{{ $technique->name }}">
                  <label class="form-check-label" for="{{ $technique->name }}">
                    {{$technique->name}}
                  </label>
                </div>
                @endforeach  
              </td>
            </tr>
      
            <tr>
              <td style="white-space: nowrap;">グラスタイプ</td>
              <td>
                @foreach($glasses as $glass)
                <div class="form-check-inline">
                  <input class="form-check-input" name="glass[]" type="checkbox" value="{{ $glass->id }}" id="{{ $glass->name }}">
                  <label class="form-check-label" for="{{ $glass->name }}">
                    {{$glass->name}}
                  </label>
                </div>
                @endforeach  
              </td>
            </tr>
      
          </tbody>
        </table>
      
        <div style="text-align: center">
          <button type="submit" class="btn btn-outline-dark">検索</button> 
        </div>

      </form>
    </div>
  </div>
</div>