@extends('layouts.main')

@section('peta')
<section class="eleventh-img" id="peta" style="background-color: #d6e7cf;">

  <div class="col-sm-12">
    <div class="container-fluid">
      <img class="peta-label uk-position-left" src="image/map-label.png" alt="">
    </div>
  </div>

  <div class="container">
    <div class="col-sm-12">
      <div class="uk-child-width-1-3@m" uk-grid>
        <div>
          <div class="uk-card uk-position-large uk-position-center">
            <div class="uk-media-bottom" uk-toggle="target: #modal-close-default">
              <img src="image/map.png" width="500" height="480" alt="">
            </div>
          </div>
        </div>

        <div id="modal-close-default" uk-modal>
          <div class="uk-modal-dialog uk-modal-body">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <img src="image/map.png" width="1200" height="600" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection