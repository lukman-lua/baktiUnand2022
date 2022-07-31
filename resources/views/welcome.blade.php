@extends('layouts.main')

@section('landing-page')
{{-- Landing Page --}}
<section id="landing-page">
  <div class="main-img">
    <div class="back-container">
      <div class="container text-center">
        <div class="col-sm-12">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6"></div>

              <div class="col-sm-6">
                <div class="welcome-info">
                  <div class="text-center">
                    <h1>
                      BAKTI
                    </h1>
                    <h2>
                      UNIVERSITAS ANDALAS
                    </h2>
                    <h4>
                      2022
                    </h4>
{{--                    <a href="#" class="uk-button absen-btn">Absen QR</a>--}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- End Of landing Page --}}


<section id="countdown">

  <div id="modal-center" class="uk-flex-top" uk-modal width="800" show>
    <div class="uk-modal-dialog uk-modal-body uk-auto-vertical" uk-overflow-auto align="center">

      <button class="uk-modal-close-default" type="button" uk-close></button>

      <div class="container">
        <div class="col-sm-12">
          <h3 style="color:#54744F;font-weight:800">COMING SOON</h3>
          <h3 style="color:#FF6A3B;font-weight:800">BAKTI UNAND 2022</h3>
          <h6 style="color:#54744F">15 Agustus 2022</h6>
        </div>
      </div>

      <div class="container">
        <div class="col-sm-12">
          <div class="uk-grid-small uk-child-width-auto d-flex justify-content-center" uk-grid uk-countdown="date: 2022-08-15T02:42:08+00:00">
            <div class="label" style="background-color:#54744F;padding:18px 8px 18px 8px;border-radius:10px">
              <p>Days</p>
              <div class="uk-countdown-number uk-countdown-days"></div>
              <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">DAYS</div>
            </div>
            <div class="uk-countdown-separator" style="margin-right:10px">:</div>
            <div class="label" style="background-color:#54744F;padding:18px 8px 18px 8px;border-radius:10px">
              <p>Hours</p>
              <div class="uk-countdown-number uk-countdown-hours"></div>
              <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">HOURS</div>
            </div>
            <div class="uk-countdown-separator" style="margin-right:10px">:</div>
            <div class="label" style="background-color:#54744F;padding:18px 8px 18px 8px;border-radius:10px">
              <p>Minutes</p>
              <div class="uk-countdown-number uk-countdown-minutes"></div>
              <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">MINUTES</div>
            </div>
            <div class="uk-countdown-separator" style="margin-right:10px">:</div>
            <div class="label" style="background-color:#54744F;padding:18px 8px 18px 8px;border-radius:10px">
              <p>Seconds</p>
              <div class="uk-countdown-number uk-countdown-seconds"></div>
              <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">SECONDS</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<script>
  UIkit.util.ready(function() {
    setTimeout(function() {
      UIkit.modal('#modal-center').show();
    }, 1000);
  });
</script>

@endsection



@section('about')
<section id="About">
  <div class="col-sm-12">
    <div id="test-target" class="uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: 20">
      <div class="col-sm-12">
        <div class="second-img container-fluid">
          <div uk-parallax="target: #test-target; y: -10,200">
            <img class="aboutImg uk-position-right" src="{{ url("image/about-label.png") }}" alt="">
            <div class="col-sm-12">
              <h2 id="test-target" class=" text-center uk-flex-center@m about-content uk-height-large uk-background-cover uk-light uk-flex " uk-parallax="target: #test-target; y: 100,40">
                BAKTI (Bimbingan Aktivitas Kemahasiswaan dalam Tradisi Ilmiah) adalah<br> kegiatan pengenalan terhadap program pendidikan, tradisi ilmiah dan <br> pembinaan kegiatan kemahasiswaan di perguruan tinggi bagi mahasiswa <br> baru Universitas Andalas
              </h2>
            </div>

            <div class="col-sm-12">
              <div class="container">
                <div class="">
                  <div class="uk-position-bottom uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                    <ul class="uk-slider-items uk-child-width-1-3@m" uk-grid uk-height-match="target: > div > div > div > .uk-card-small; row: false">
                      <li>
                        <div class="uk-panel">
                          <div class="uk-card uk-card-small uk-height-medium uk-card-hover uk-card-body">
                            <div class="container">
                              <div class="row">
                                <div class="col-sm-2">
                                  <h1>1</h1>
                                </div>
                                <div class="col">
                                  <p>Setiap mahasiswa atau mahasiswi baru Universitas Andalas wajib mengikuti rangkaian kegiatan ini.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="uk-panel">
                          <div class="uk-card uk-card-small uk-height-medium uk-card-hover uk-card-body">
                            <div class="container">
                              <div class="row">
                                <div class="col-sm-2">
                                  <h1>2</h1>
                                </div>
                                <div class="col">
                                  <p>Mahasiswa atau mahasiswi baru Universitas Andalas akan didampingi oleh uda dan uni mentor yang siap membantu serta mendampingi dalam rangkaian kegiatan BAKTI berlangsung.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="uk-panel">
                          <div class="uk-card uk-card-small uk-height-medium uk-card-hover uk-card-body">
                            <div class="container">
                              <div class="row">
                                <div class="col-sm-2">
                                  <h1>3</h1>
                                </div>
                                <div class="col">
                                  <p>Setiap mahasiswa baru Universitas Andalas akan diberikan penugasan selama rangkaian kegiatan BAKTI Universitas Andalas tahun 2021.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="uk-panel">
                          <div class="uk-card uk-card-small uk-height-medium uk-card-hover uk-card-body">
                            <div class="container">
                              <div class="row">
                                <div class="col-sm-2">
                                  <h1>4</h1>
                                </div>
                                <div class="col">
                                  <p>Menanamkan nilai-nilai Andalasian Character kepada mahasiswa baru.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection


@section('timeline')
{{-- Timeline --}}

<section id="Timeline" class="third-img">
  <div id="test-target" class="uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: 20">
    <div class="col-sm-12">
      <div class="third-img container-fluid">
        <div uk-parallax="target: #test-target; y: -10,200">
          <img class="timelineImg uk-position-left" src="{{ url("image/timeline-label.png") }}" alt="">

          <div class="col-sm-12">
            <div class="container d-flex justify-content-center">
              <img uk-parallax="opacity: 0,1; scale: 1.5,1; end: 50vh + 50%;" class="timeline-tree" src="{{ url("image/tree.png") }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- End Timeline --}}
@endsection


@section('tugas')
<section id="tugas" class="twelfth-img">
  <div id="test-target" class="uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: 20">
    <div class="col-sm-12">
      <div class="twelfth-img container-fluid">
        <div uk-parallax="target: #test-target; y: -10,200">
          <img class="tugas-label uk-position-right" src="{{ url("image/tugas-label.png") }}" alt="">

          <div class="container ">
            <div class="row">
              <div class="col-sm-6">
                <div class="text-center tugas-pos">
                  <div class="uk-inline-clip uk-transition-toggle " tabindex="0">
                    <img src="{{ url("image/pra-bakti.png") }}">
                    <div class="uk-transition-fade uk-position-cover uk-position-large uk-overlay uk-overlay-default">
                      <a href="/tugas1pra" class="uk-h6 uk-position-center">
                        Video Kreatif
                        <hr>
                        Twibbon Contest
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="text-center tugas-pos">
                  <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                    <img src="{{ url("image/pasca-bakti.png") }}">
                    <div class="uk-transition-fade uk-position-cover uk-position-large uk-overlay uk-overlay-default">
                      <a href="/tugas1pasca" class="uk-h6 uk-position-center ">
                        PPT Life Plan
                        <hr>
                        Tugas Besar Maba
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('footer')
<footer>
  <div class="container text-center" style="margin-top:-100px;">
    <div>
      <a target="_blank" href="{{ url("https://www.instagram.com/bakti_unand/") }}" style="text-decoration:none;" class="fa-brands fa-instagram"></a>
      <a target="_blank" href="{{ url("https://www.facebook.com/baktiunand2021") }}" style="text-decoration:none;" class="fa-brands fa-facebook-f"></a>
      <a target="_blank" href="#" style="text-decoration:none;" class="fa-brands fa-twitter"></a>
      <a target="_blank" href="{{ url("https://www.youtube.com/channel/UCa2DLgH6PmtSWbdoik4XLVQ/featured") }}" style="text-decoration:none;" class="fa-brands fa-youtube"></a>
      <a target="_blank" href="{{ url("https://www.tiktok.com/@bakti_unand?is_from_webapp=1&sender_device=pc") }}" style="text-decoration:none;" class="fa-brands fa-tiktok"></a>
    </div>
  </div>
</footer>
@endsection