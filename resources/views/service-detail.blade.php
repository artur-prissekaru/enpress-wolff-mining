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
    @if($loop->last)
      @include('blocks.two-column-carousel', [
        'data' => (object)[
          'background_type' => 'white',
          'galleries' => [
            $gallery
          ],
          'down_link' => 'services',
          'down_link_title' => 'see more services'
        ]
      ]) 
    @else
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
    @endif
  @endforeach
  @include('blocks.column-services', [
    'data' => (object)[
      'services' => [
        (object)[
          'featured_image' => asset('dist/media/services/blast/blast-01.jpg'),
          'image_link' => url('/services/blast-hone-drilling'),
          'title' => 'Blast hole drilling',
          'content' => '<p>Wolff Mining can provide semi-autonomous CAT MD6420B Blast Hole Drilling Rigs and facilitate drilling services. </p>',
          'target' => '_self'
        ],
        (object)[
          'featured_image' => asset('dist/media/services/automated/automated-01.jpg'),
          'image_link' => url('/services/automated-equipment'),
          'title' => 'Automated equipment',
          'content' => '<p>Wolff Mining has an established partnership with Caterpillar and Hastings Deering to implement and optimise Semi-Autonomous Tractor System (SATS) technology, in a world’s-first application into a production mining environment.</p>',
          'target' => '_self'
        ],
        (object)[
          'featured_image' => asset('dist/media/services/bulk/bulk-01.jpg'),
          'image_link' => url('/services/satellite-bulk-dozer-push'),
          'title' => 'Satellite bulk dozer push',
          'content' => '<p>Wolff Mining is recognised as the leading satellite bulk dozer push operator,  with operations currently being expanded throughout Australia and internationally. </p>',
          'target' => '_self'
        ],
        (object)[
          'featured_image' => asset('dist/media/services/clearing/clearing-01.jpg'),
          'image_link' => url('/services/rehabilitation-works'),
          'title' => 'Rehabilitation works',
          'content' => '<p>Wolff Mining’s site clearing and rehabilitation capabilities include, but are not limited to:</p>',
          'target' => '_self'
        ],
        (object)[
          'featured_image' => asset('dist/media/services/fleets/fleets-01.jpg'),
          'image_link' => url('/services/pre-strip-fleets'),
          'title' => 'Pre strip fleets',
          'content' => '<p>Wolff Mining’s extensive experience in the Black Coal industry enables the company to provide innovative and cost-effective contract mining solutions.</p>',
          'target' => '_self'
        ],
        (object)[
          'featured_image' => asset('dist/media/services/civil/civil-01.jpg'),
          'image_link' => url('/services/civil-earthworks'),
          'title' => 'Civil earthworks',
          'content' => '<p>Wolff Mining has extensive experience in mine site civil earthworks and provides a range of services including, but not limited to:</p>',
          'target' => '_self'
        ],
        
      ]
    ]
  ])
@endsection