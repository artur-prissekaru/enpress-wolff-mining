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
      'background_type' => 'secondary',
      'sub_image' => asset('dist/media/galleries/gallery-sub-01.png'),
      'down_link' => 'projects',
      'down_link_title' => 'See our Projects',
      'galleries' => [
        (object)[
          'featured_image' => asset('dist/media/galleries/gallery-03.png'),
          'before_type' => 'gray',
          'title' => '<h5 class="text-white">Wolff’s capacity to ramp up and down according to market fluctuations and other factors is <span class="text-warning">invaluable when meeting clients’ specific requirements.</span></h5>',
          'content' => '<p>With long standing relationships with its bankers National Australia Bank and other lending institutions such as Westpac and Bank of Queensland, and flexible arrangements in place with equipment manufacturers and suppliers such as Caterpillar, Hastings Deering, Hitachi and Orionstone, Wolff is able to act quickly to offer a number of options to deliver the desired outcome.</p>
                        <p>At inception in 2003 Wolff had a staff of 3 and a fleet of 6, by 2009 staff numbers had increased to 22 with a fleet of 16, by 2013 staff numbered 210 and fleet 59.  As of September 2015 Wolff has 102 employees and a fleet of 66.</p>
                        <p>Wolff continues to flex its workforce and equipment to meet schedules and production requirements.  At the same time Wolff maintains an outstanding Safety record (zero LTIs since 2012) and has had no environmental incidents.  This is due to a focus on operational management and supervision and maintaining an effective quality management system tailored to its business to ensure ongoing client satisfaction.</p>
                        ',
          'action_link' => url('/contact'),
          'action_type' => 'info',
          'action_title' => 'Get in touch',
          'action_target' => '_self'
        ]
      ]
    ],
    'options' => (object)[
      'reverse' => true
    ]
  ])
  @include('blocks.column-projects', [
    'data' => (object)[
      'projects' => [
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'featured_logo' => asset('dist/media/logos/logo-01.png'),
          'title' => 'Saraji mine',
          'sub_title' => 'BMA',
          'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris facilisis pulvinar leo eu pellentesque sed purus enim.',
          'action_link' => url('/project-detail')
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'featured_logo' => asset('dist/media/logos/logo-01.png'),
          'title' => 'Saraji mine',
          'sub_title' => 'BMA',
          'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris facilisis pulvinar leo eu pellentesque sed purus enim.',
          'action_link' => url('/project-detail')
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'featured_logo' => asset('dist/media/logos/logo-01.png'),
          'title' => 'Saraji mine',
          'sub_title' => 'BMA',
          'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris facilisis pulvinar leo eu pellentesque sed purus enim.',
          'action_link' => url('/project-detail')
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'featured_logo' => asset('dist/media/logos/logo-01.png'),
          'title' => 'Saraji mine',
          'sub_title' => 'BMA',
          'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris facilisis pulvinar leo eu pellentesque sed purus enim.',
          'action_link' => url('/project-detail')
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'featured_logo' => asset('dist/media/logos/logo-01.png'),
          'title' => 'Saraji mine',
          'sub_title' => 'BMA',
          'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris facilisis pulvinar leo eu pellentesque sed purus enim.',
          'action_link' => url('/project-detail')
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'featured_logo' => asset('dist/media/logos/logo-01.png'),
          'title' => 'Saraji mine',
          'sub_title' => 'BMA',
          'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris facilisis pulvinar leo eu pellentesque sed purus enim.',
          'action_link' => url('/project-detail')
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'featured_logo' => asset('dist/media/logos/logo-01.png'),
          'title' => 'Saraji mine',
          'sub_title' => 'BMA',
          'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris facilisis pulvinar leo eu pellentesque sed purus enim.',
          'action_link' => url('/project-detail')
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'featured_logo' => asset('dist/media/logos/logo-01.png'),
          'title' => 'Saraji mine',
          'sub_title' => 'BMA',
          'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris facilisis pulvinar leo eu pellentesque sed purus enim.',
          'action_link' => url('/project-detail')
        ],
        (object)[
          'featured_image' => asset('dist/media/projects/project-01.png'),
          'featured_logo' => asset('dist/media/logos/logo-01.png'),
          'title' => 'Saraji mine',
          'sub_title' => 'BMA',
          'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris facilisis pulvinar leo eu pellentesque sed purus enim.',
          'action_link' => url('/project-detail')
        ]
      ]
    ],
    'options' => (object)[
      'before_image' => true
    ]
  ])
@endsection