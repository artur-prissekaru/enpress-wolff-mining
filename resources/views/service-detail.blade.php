@extends('layouts.app')
@section ('content')
  @include('blocks.other-hero', [
    'data' => (object)[
      'menu_image' => asset('/dist/media/menus/menu1.png'),
      'menu_title' => 'Innovation',
      'menu_subtitle' => 'The future of mining automation'
    ]
  ])
  @include('blocks.two-column-carousel', [
    'data' => (object)[
      'background_type' => 'white',
      'galleries' => $galleries
    ]
  ])
  @include('blocks.two-column-content', [
    'data' => (object)[
      'left_content' => $left_content,
      'right_content' => $right_content
    ],
    'options' => (object)[
      'before_image' => true
    ]
  ])
@endsection