<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/boje2508/public_html/yoursafety.training/blog/user/blueprints/admin/pages/new_standard_page.yaml',
    'modified' => 1559406893,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'Add Standard Page'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'Page Title',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'text' => [
                    'type' => 'display',
                    'size' => 'large',
                    'label' => NULL,
                    'content' => 'This top-level page will also be added to your site menu.'
                ],
                'folder' => [
                    'type' => 'hidden',
                    'default' => '@slugify-title'
                ],
                'route' => [
                    'type' => 'hidden',
                    'default' => '/'
                ],
                'name' => [
                    'type' => 'hidden',
                    'default' => 'default'
                ],
                'visible' => [
                    'type' => 'hidden',
                    'default' => ''
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];
