@extends('layouts.app')
@section ('content')
  @include('blocks.other-hero', [
    'data' => (object)[
      'menu_image' => asset('dist/media/menus/menu2.png'),
      'menu_title' => 'Projects',
      'menu_subtitle' => 'ALWAYS EXCEEDING EXPECTATIONS'
    ]
  ])
  @include('blocks.two-column-carousel', [
    'data' => (object)[
      'background_type' => 'white',
      'down_link' => 'projects',
      'down_link_title' => 'See more Projects',
      'galleries' => $galleries
    ]
  ])

  @include('blocks.two-column-projects', [
    'data' => (object)[
      'projects' => [
        (object)[
          'featured_image' => asset('/dist/media/projects/saraji/project-saraji-01.jpg'),
          'image_link' => url('http://www.wolffgroup.com.au/projects/projects/saraji-mine/'),
          'sub_title' => 'BMA',
          'title' => 'Saraji mine',
          'target' => '_blank'
        ],
        (object)[
          'featured_image' => asset('/dist/media/projects/yarrabee/project-yarrabee-01.jpg'),
          'image_link' => url('http://www.wolffgroup.com.au/projects/projects/yarrabee-mine/'),
          'sub_title' => 'Yancol Australia',
          'title' => 'Yarrabee Mine',
          'target' => '_blank'
        ],
        (object)[
          'featured_image' => asset('/dist/media/projects/acland/project-acland-01.jpg'),
          'image_link' => url('http://www.wolffgroup.com.au/projects/projects/acland-mine/'),
          'sub_title' => 'New Hope',
          'title' => 'Acland Mine',
          'target' => '_blank'
        ],
        (object)[
          'featured_image' => asset('/dist/media/projects/blackwater/project-bma-01.jpg'),
          'image_link' => url('http://www.wolffgroup.com.au/projects/projects/blackwater-mine/'),
          'sub_title' => 'BMA',
          'title' => 'Blackwater Mine',
          'target' => '_blank'
        ],
        (object)[
          'featured_image' => asset('/dist/media/projects/bulga/project-bulga-01.jpg'),
          'image_link' => url('http://www.wolffgroup.com.au/projects/projects/bulga-mine/'),
          'sub_title' => 'Glencore',
          'title' => 'Bulga Mine',
          'target' => '_blank'
        ],
        (object)[
          'featured_image' => asset('/dist/media/projects/coppabella/project-coppabella-01.jpg'),
          'image_link' => url('http://www.wolffgroup.com.au/projects/projects/coppabella-mine/'),
          'sub_title' => 'Peabody Energy',
          'title' => 'Coppabella Mine',
          'target' => '_blank'
        ],
        (object)[
          'featured_image' => asset('/dist/media/projects/curragh/project-curragh-01.jpg'),
          'image_link' => url('http://www.wolffgroup.com.au/projects/projects/curragh-mine/'),
          'sub_title' => 'Coronado',
          'title' => 'Curragh Mine',
          'target' => '_blank'
        ],
        (object)[
          'featured_image' => asset('/dist/media/projects/ensham/project-ensham01.jpg'),
          'image_link' => url('http://www.wolffgroup.com.au/projects/projects/ensham-mine/'),
          'sub_title' => 'Ensham Resources',
          'title' => 'Ensham Mine',
          'target' => '_blank'
        ],
        (object)[
          'featured_image' => asset('/dist/media/projects/moorvale/project-moorvale-01.jpg'),
          'image_link' => url('http://www.wolffgroup.com.au/projects/projects/moorvale-mine/'),
          'sub_title' => 'Peabody Energy',
          'title' => 'Moorvale Mine',
          'target' => '_blank'
        ]
      ],
      'title' => '<h4 class="text-primary">Projects</h4>',
      'before_type' => 'warning',
      'content' => '<p>Wolff Mining has been awarded numerous contracts throughout Queensland and Northern New South Wales.</p>
                    <p>Wolff’s capacity to ramp up and down according to market fluctuations and other factors is invaluable when meeting clients specific requirements.</p>',
      'action_link' => url('/projects'),
      'action_title' => 'See all Projects',
      'action_type' => 'warning',
      'action_target' => '_self'
    ],
    'options' => (object)[
      'before_image' => true,
      'sub_content_show' => true
    ]
  ])
@endsection