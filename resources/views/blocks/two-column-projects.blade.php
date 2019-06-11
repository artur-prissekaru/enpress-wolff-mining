@php
  $defaultOptions = [
    'before_image' => false,
    'sub_content_show' => false
  ];
  if (isset($options)) {
    $options = (object)array_merge($defaultOptions, (array)$options);
  } else {
    $options = (object)$defaultOptions;
  }
@endphp
<div class="block two-column-projects-block bg-bitmap @if($options->before_image){{ 'background-before' }}@endif @if($options->sub_content_show)sub-always-show @endif" id="projects">
  <div class="container">
    <div class="row flex-wrap-reverse">
      <div class="col-lg-8">
        <div class="row">
          @if (isset($data->projects))
            @foreach($data->projects as $item)
              <div class="col-md-4">
                @include('components.project', [
                  'data' => (object)[
                    'featured_image' => $item->featured_image,
                    'image_link' => $item->image_link,
                    'sub_title' => $item->sub_title,
                    'title' => $item->title
                  ]
                ])
              </div>
            @endforeach
          @endif
        </div>
        @if(!$options->sub_content_show)
          <div class="sub-content d-block d-lg-none">
            @include('components.column-content', [
              'data' => (object)[
                'title' => $data->sub_title,
                'content' => $data->sub_content,
                'action_link' => $data->sub_action_link,
                'action_title' => $data->sub_action_title,
                'action_type' => $data->sub_action_type
              ]
            ])
          </div>
        @endif
      </div>
      <div class="col-lg-4 d-flex justify-content-between flex-wrap">
        @include('components.column-content', [
          'data' => (object)[
            'title' => $data->title,
            'before_type' => $data->before_type,
            'content' => $data->content,
            'action_link' => $data->action_link,
            'action_title' => $data->action_title,
            'action_type' => $data->action_type
          ]
        ])
        @if($options->sub_content_show)
          <div class="sub-content sub-content-show">
            @include('components.column-content', [
              'data' => (object)[
                'title' => $data->sub_title,
                'content' => $data->sub_content,
                'action_link' => $data->sub_action_link,
                'action_title' => $data->sub_action_title,
                'action_type' => $data->sub_action_type
              ]
            ])
          </div>
        @endif
      </div>
    </div>
  </div>
</div>