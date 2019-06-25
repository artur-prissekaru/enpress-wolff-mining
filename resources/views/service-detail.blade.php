@extends('layouts.app')
@section ('content')
  @include('blocks.other-hero', [
    'data' => (object)[
      'menu_image' => asset('/dist/media/menus/menu1.png'),
      'menu_title' => 'Our Services',
      'menu_subtitle' => 'Automative and Innovative Solutions'
    ]
  ])
  @foreach($galleries as $key => $gallery)
    @if ($key % 2 == 1)
      @include('blocks.two-column-carousel', [
        'data' => (object)[
          'background_type' => 'white',
          'galleries' => [
            $gallery
          ]
        ],
        'options' => (object)[
          'reverse' => true
        ]
      ])
    @else
      @include('blocks.two-column-carousel', [
        'data' => (object)[
          'background_type' => 'white',
          'galleries' => [
            $gallery
          ]
        ]
      ])
    @endif
  @endforeach
@endsection