<div class="block column-services-block bg-bitmap" id="services">
  <div class="container">
    <div class="row justify-content-center">
      @if (isset($data->services))
        @foreach($data->services as $item)
          <div class="col-lg-3 col-md-6">
            @include('components.project', [
              'data' => (object)[
                'featured_image' => $item->featured_image,
                'image_link' => $item->image_link,
                'title' => $item->title,
                'content' => $item->content
              ]
            ])
          </div>
        @endforeach
      @endif
    </div>
  </div>
</div>