@extends('layouts.ui')
  
@section('content')

        <div class="row center">
        <h4 class="header light center blue-text text-lighten-1"><i class="large material-icons">supervisor_account</i></h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card-panel grey lighten-4">
                        {{ $encadrements[0]->intitule }}
                        <div class="row">
                            <div class="col s12">
                              <div class="row">
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">textsms</i>
                                  <input type="text" id="autocomplete-input" class="autocomplete">
                                  <label for="autocomplete-input">Autocomplete</label>
                                </div>
                              </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>


@endsection

@section('scripts')
<script>
$(document).ready(function(){
  var resJson = {{ json_encode($profs) }};
    $('input.autocomplete').autocomplete({
      data: resJson.reduce(function(obj, item){
          var key = Object.keys(item)[0];
          obj[key] = item[key];
          return obj;
      },{}),
    });
  });
</script>
@endsection