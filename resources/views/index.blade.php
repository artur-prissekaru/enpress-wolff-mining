@extends('layouts.app')
@section ('content')
  @include('blocks.home-hero', [
    'cards' => [
      (Object)[
        'image' => url('/dist/media/menus/menu1.png'),
        'title' => 'Innovation',
        'content' => 'The future of mining automation',
        'description' => 'DISCOVER HOW IT WORKS',
        'link' => '/innovation'
      ],
      (Object)[
        'image' => url('/dist/media/menus/menu2.png'),
        'title' => 'Projects',
        'content' => 'Always exceeding expectations',
        'description' => 'SEE OUR PROJECTS',
        'link' => '/projects'
      ],
      (Object)[
        'image' => url('/dist/media/menus/menu3.png'),
        'title' => 'Our people',
        'content' => 'Talented and diverse workforce',
        'description' => 'MEET THE WOLFF TEAM',
        'link' => '/our-people'
      ],
      (Object)[
        'image' => url('/dist/media/menus/menu4.png'),
        'title' => 'Contact',
        'content' => 'WE’D LOVE TO WORK WITH YOU',
        'description' => 'GET IN TOUCH',
        'link' => '/contact'
      ]
    ]
  ])
  @include('blocks.two-column-carousel', [
    'data' => (object)[
      'background_type' => 'secondary',
      'sub_image' => asset('dist/media/galleries/gallery-sub-01.png'),
      'galleries' => [
        (object)[
          'featured_image' => asset('dist/media/galleries/gallery-01.png'),
          'before_type' => 'gray',
          'title' => '<h4 class="text-white">We’re pioneering <span class="text-warning">automation</span> in mining.</h4>',
          'content' => '<p>Wolff Mining (Wolff) provides a range of automated and innovative solutions such as large scale satellite bulk dozer push, contract mining services, excavator pre-strip fleets, civil earthworks, blast hole drilling, site clearing and rehabilitation works. </p>
                        <p>We offer a wide variety of heavy equipment that includes 80-800 tonne Excavators, CAT D11T Bulldozers, drills and a range of ancillary equipment. </p>
                        <p>Wolff Mining is well-known in the industry for our ability to implement and optimise semi-autonomous tractor system (SATS) technology, in a world’s-first application into a mining production environment. We pride ourselves on innovation and technology and have been recognised for our efforts by winning multiple awards, including Contract Miner of the Year at the 2018 Australian Mining Prospect Awards.</p>
                        <p>Wolff also has long standing relationships and arrangements in place with manufacturers and suppliers such as Caterpillar, Hastings Deering and Komatsu, as well as long-term contracts with major mining companies including BMA Mitsubishi Alliance, Wesfarmers and Peabody Energy. </p>
                        ',
          'action_link' => url('/'),
          'action_title' => 'learn more',
          'action_type' => 'info'
        ]
      ]
    ],
    'options' => (object)[
      'reverse' => true
    ]
  ])
  @include('blocks.two-column-rect', [
    'data' => (object)[
      'featured_image' => asset('dist/media/features/feature-1.png'),
      'title' => '<h4 class="text-primary">Blast Hole Drilling</h4>',
      'before_type' => 'warning',
      'content' => '<p>Wolff Mining can provide semi-autonomous CAT MD6420B Blast Hole Drilling Rigs and facilitate drilling services and continuing extend the automated features on our expansive range of drills.</p>',
      'action_link' => url('/'),
      'action_title' => 'Learn more',
      'action_type' => 'warning'
    ],
    'options' => (object)[
      'reverse' => false,
      'before_image' => true
    ]
  ])
  @include('blocks.two-column-rect', [
    'data' => (object)[
      'featured_image' => asset('dist/media/features/feature-2.png'),
      'title' => '<h4 class="text-primary">Satellite bulk dozer push</h4>',
      'before_type' => 'warning',
      'content' => '<p>Wolff Mining has continued to lead the industry in large scale satellite bulk dozer push and continues to further refine and develop technology and methodology. </p>',
      'action_link' => url('/'),
      'action_title' => 'Learn more',
      'action_type' => 'warning'
    ],
    'options' => (object)[
      'reverse' => true,
      'before_image' => false
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
          'image_link' => '',
          'sub_title' => 'Yancol Australia',
          'title' => 'Yarrabee Mine'
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'image_link' => '',
          'sub_title' => 'New Hope',
          'title' => 'Acland Mine'
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'image_link' => '',
          'sub_title' => 'BMA',
          'title' => 'Blackwater Mine'
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'image_link' => '',
          'sub_title' => 'Glencore',
          'title' => 'Bulga Mine'
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'image_link' => '',
          'sub_title' => 'Peabody Energy',
          'title' => 'Coppabella Mine'
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'image_link' => '',
          'sub_title' => 'Coronado',
          'title' => 'Curragh Mine'
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'image_link' => '',
          'sub_title' => 'Ensham Resources',
          'title' => 'Ensham Mine'
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'image_link' => '',
          'sub_title' => 'Peabody Energy',
          'title' => 'Moorvale Mine'
        ]
      ],
      'title' => '<h4 class="text-primary">Projects</h4>',
      'before_type' => 'warning',
      'content' => '<p>Wolff Mining has been awarded numerous long-term contracts throughout Queensland and Northern NSW. As part of the wider National Group, Wolff is now expanding throughout Australia and Internationally.</p>
                    <p>Our capacity to ramp up and down production according to market fluctuations and other factors has proven invaluable when meeting client specific requirements.</p>',
      'action_link' => url('/projects'),
      'action_title' => 'See all Projects',
      'action_type' => 'warning',
      'sub_title' => '<h6 class="text-primary">THE WOLFF GROUP STORY</h6>',
      'sub_content' => '<p>We’re proud of how far we’ve come since 2003 - find out how we’ve gotten to where we are today.</p>',
      'sub_action_link' => url('/'),
      'sub_action_title' => 'See our stroy',
      'sub_action_type' => 'warning'
    ]
  ])
  @include('blocks.two-column-container', [
    'data' => (object)[
      'featured_image' => asset('dist/media/features/logos.png'),
      'title' => '<h4 class="text-primary">Part of the <span class="text-warning">National Group.</span></h4>',
      'before_type' => 'warning',
      'content' => '<p>Wolff Mining is proudly part of the National Group. The National Group comprises of leading companies from the mining, resource, logistics and personnel supply industries.</p>',
      'action_link' => url('/'),
      'action_title' => 'Find out more',
      'action_type' => 'warning'
    ],
    'options' => (object)[
      'reverse' => true
    ]
  ])
@endsection