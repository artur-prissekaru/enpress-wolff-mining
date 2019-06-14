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
      'galleries' => [
        (object)[
          'featured_image' => asset('dist/media/galleries/gallery-04.png'),
          'before_type' => 'warning',
          'logo' => asset('dist/media/logos/logo-02.png'),
          'title' => '<h4 class="text-primary">Coppabella Mine</h4>',
          'content' => '<p>Originally on site 2012-13 with a workforce of 56 delivering Pre strip services and the construction of haul roads utilising a Hitachi 3600-6 excavator, D11 Dozers, dump trucks and graders.  Over 8 million BCM was moved in less than 12 months.</p>
                        <p>From April 2015 Wolff has been delivering Dozer push services with 4 crews of 3 Operators supported by management and administration based in Toowoomba.</p>
                        <p>Wolff recently acquired a 3 year Blast Hole Drilling contract starting February 2016 with Peabody. For the project we chose a semi-autonomous CAT MD6420B Drill Rig 13m mast with a hole diameter of 229mm to 311mm capable of drilling up to 75m in depth. </p>
                        '
        ],
        (object)[
          'featured_image' => asset('dist/media/galleries/gallery-04.png'),
          'before_type' => 'warning',
          'logo' => asset('dist/media/logos/logo-02.png'),
          'title' => '<h4 class="text-primary">Coppabella Mine</h4>',
          'content' => '<p>Originally on site 2012-13 with a workforce of 56 delivering Pre strip services and the construction of haul roads utilising a Hitachi 3600-6 excavator, D11 Dozers, dump trucks and graders.  Over 8 million BCM was moved in less than 12 months.</p>
                        <p>From April 2015 Wolff has been delivering Dozer push services with 4 crews of 3 Operators supported by management and administration based in Toowoomba.</p>
                        <p>Wolff recently acquired a 3 year Blast Hole Drilling contract starting February 2016 with Peabody. For the project we chose a semi-autonomous CAT MD6420B Drill Rig 13m mast with a hole diameter of 229mm to 311mm capable of drilling up to 75m in depth. </p>
                        '
        ],
        (object)[
          'featured_image' => asset('dist/media/galleries/gallery-04.png'),
          'before_type' => 'warning',
          'logo' => asset('dist/media/logos/logo-02.png'),
          'title' => '<h4 class="text-primary">Coppabella Mine</h4>',
          'content' => '<p>Originally on site 2012-13 with a workforce of 56 delivering Pre strip services and the construction of haul roads utilising a Hitachi 3600-6 excavator, D11 Dozers, dump trucks and graders.  Over 8 million BCM was moved in less than 12 months.</p>
                        <p>From April 2015 Wolff has been delivering Dozer push services with 4 crews of 3 Operators supported by management and administration based in Toowoomba.</p>
                        <p>Wolff recently acquired a 3 year Blast Hole Drilling contract starting February 2016 with Peabody. For the project we chose a semi-autonomous CAT MD6420B Drill Rig 13m mast with a hole diameter of 229mm to 311mm capable of drilling up to 75m in depth. </p>
                        '
        ]
      ]
    ]
  ])
  @include('blocks.two-column-projects', [
    'data' => (object)[
      'projects' => [
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'image_link' => url('/project-detail'),
          'sub_title' => 'BMA',
          'title' => 'Saraji mine'
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'image_link' => url('/project-detail'),
          'sub_title' => 'Yancol Australia',
          'title' => 'Yarrabee Mine'
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'image_link' => url('/project-detail'),
          'sub_title' => 'New Hope',
          'title' => 'Acland Mine'
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'image_link' => url('/project-detail'),
          'sub_title' => 'BMA',
          'title' => 'Blackwater Mine'
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'image_link' => url('/project-detail'),
          'sub_title' => 'Glencore',
          'title' => 'Bulga Mine'
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'image_link' => url('/project-detail'),
          'sub_title' => 'Peabody Energy',
          'title' => 'Coppabella Mine'
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'image_link' => url('/project-detail'),
          'sub_title' => 'Coronado',
          'title' => 'Curragh Mine'
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'image_link' => url('/project-detail'),
          'sub_title' => 'Ensham Resources',
          'title' => 'Ensham Mine'
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'image_link' => url('/project-detail'),
          'sub_title' => 'Peabody Energy',
          'title' => 'Moorvale Mine'
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