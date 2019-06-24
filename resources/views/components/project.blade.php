<?php
  $string = '';
  $link = '';
  if (isset($data->content) && isset($data->image_link)) :
    $link = $data->image_link;
    $string = $data->content;
    $content = substr($data->content, 0, 165);
    $string = $content.' <a href="'.$link.'" class="text-info font-weight-bold"> Read More...</a>';
  else :
    if (isset($data->content)) :
      $string = $data->content;
      $content = substr($data->content, 0, 165);
      if(substr_compare($data->content, $content, 0)) :
        $string = $content.'...';
      endif;
    else :
      $string = '';
    endif;
  endif;
?>
<div class="card-project w-100">
  <div class="card-image" style="background: url('{{ $data->featured_image }}')">
    @if(isset($data->image_link) && $data->image_link !== '')
      <a class="action-link" href="{{ $data->image_link }}" target="{{ $data->target }}">
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
    <div class="content">
      @if($string)
        {!! $string !!}
      @endif
    </div>
    @if(isset($data->action_link) && $data->action_link !=='')
      <a href="{{ $data->action_link }}" class="action-link" target="{{ $data->target }}">
      </a>
    @endif
  </div>
</div>