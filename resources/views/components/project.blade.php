<div class="card-project">
  <div class="card-image" style="background: url('{{ $data->featured_image }}')">
    @if(isset($data->image_link) && $data->image_link !== '')
      <a class="action-link" href="{{ $data->image_link }}">
        <i class="icon icon-arrow-right icon-ts"></i>
      </a>
    @endif
  </div>
  <div class="card-body @if(isset($data->action_link) && $data->action_link !== '')has-action @endif">
    <div class="header">
      <div>
        @if(isset($data->sub_title))
          <div class="sub-title">
            {{ $data->sub_title }}
          </div>
        @endif
        <div class="title">
          {{ $data->title }}
        </div>
      </div>
      @if(isset($data->featured_logo))
        <div class="logo">
          <img src="{{ $data->featured_logo }}" />
        </div>
      @endif
    </div>
    @if(isset($data->content))
      {!! $data->content !!}
    @endif
    @if(isset($data->action_link) && $data->action_link !=='')
      <a href="{{ $data->action_link }}" class="action-link">
        <i class="icon icon-arrow-right icon-ts"></i>
      </a>
    @endif
  </div>
</div>