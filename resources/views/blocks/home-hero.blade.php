@php
  $classes = [];
   for ($i = 0; $i < count($cards); $i++) {
     if ($i == 0) {
       $classes[$i] = 'current';
     }
     else if ($i == 1) {
       $classes[$i] = 'right';
     }
     else if ($i == count($cards) - 1) {
       $classes[$i] = 'left';
     }
     else {
       $classes[$i] = 'back';
     }
   } 
@endphp
<div  class="block home-hero-block">
  <div class="hero-spacer d-flex align-items-center">
    <video playsinline autoplay muted loop class="hero-video">
      <source src="{{ asset('/dist/media/video/hero.mp4') }}" type="video/mp4">
      <source src="{{ asset('/dist/media/video/hero.webm') }}" type="video/webm">
    </video>
    <hero-carousel>
      <div class="carousel-container">
        <div class="cards-slider">
          <div class="back-div"></div>
          @foreach($cards as $key => $card)
            <div class="carousel-card card-{{$key}} {{$classes[$key]}}" data-index={{$key}}>
              <div class="card-image">
                <img src={{$card->image}} alt="Card Image" />
              </div>
              <div class="cc-title">
                {{$card->title}}
              </div>
              <div class="cc-content">{{$card->content}}</div>
              <a href={{$card->link}} class="cc-description text-info btn btn-info">{{$card->description}}</a>
            </div>
          @endforeach
          @for ($i = 0; $i < count($cards); $i++)
            <div class="control-dot dot-{{$i}}" data-index={{$i}}></div>
            <div class="control-tri tri-{{$i}}" data-index={{$i}}></div>
          @endfor
        </div>
      </div>
    </hero-carousel>
  </div>
  <div class="down-arrow">
    <a href="#projects" class="arrow-link">
      Or keep exploring
      <br />
      <i class="icon icon-arrow-down-info icon-md"></i>
    </a>
  </div>
</div>