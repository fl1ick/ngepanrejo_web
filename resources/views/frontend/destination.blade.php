@extends('frontend.layout')

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Destinasi</h3>
                        <p>Eksplorasi duniamu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="popular_places_area">
        <div class="container">
            <div class="row">
            @foreach($destinations as $destination)
          <div class="col-lg-4 col-md-6">
            <div class="single_place">
              <div class="thumb">
                <img src="{{ Storage::url($destination->image)}}" alt="" />
                <a href="{{ route('destination.show', $destination->city) }}"></a>
              </div>
              <div class="place_info">
                <a href="{{ route('destination.show', $destination->city) }}"><h3>{{ $destination->city}}</h3></a>
                <p>{{ $destination->province}}</p>
                <div class="rating_days d-flex justify-content-between">
                  <div class="days">
                    <i class="fa fa-clock-o"></i>
                    <a href="{{ route('destination.show', $destination->city) }}">{{ $destination->duration}}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
            </div>
        </div>
    </div>
@endsection