@php
  $defaultOptions = [
    'reverse' => false
  ];
  if (isset($options)) {
    $options = (object)array_merge($defaultOptions, (array)$options);
  } else {
    $options = (object)$defaultOptions;
  }
@endphp
<div class="block two-column-container-block @if($options->reverse){{ 'column-reverse-block' }}@endif">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        @if (isset($data->featured_image))
          <div class="featured-image">
            <img src="{{ $data->featured_image }}" />
          </div>
        @endif
      </div>
      <div class="col-lg-6">
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
      </div>
    </div>
  </div>
</div>