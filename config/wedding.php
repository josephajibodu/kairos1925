<?php

return [
    'site_name' => env('WEDDING_SITE_NAME', 'Habibi'),
    'title' => env('WEDDING_TITLE', 'Habibi - Wedding & Wedding Planner HTML5 Template'),

    'couple' => [
        'bride_name' => env('WEDDING_BRIDE_NAME', 'Esther Alade'),
        'groom_name' => env('WEDDING_GROOM_NAME', 'Joseph Ajibodu'),
        'display_names' => env('WEDDING_DISPLAY_NAMES', 'Esther & Joseph'),
        'wedding_date' => env('WEDDING_DATE', 'November 1, 2025'),
        'wedding_date_raw' => env('WEDDING_DATE_RAW', '2025-11-01'),
        'announcement_text' => env('WEDDING_ANNOUNCEMENT', 'We Are Getting Married November 1, 2025'),
    ],

    'contact' => [
        'email' => env('WEDDING_CONTACT_EMAIL', 'habibi@example.com'),
        'phone' => env('WEDDING_CONTACT_PHONE', '08167297386'),
        'address' => env('WEDDING_ADDRESS', 'JOBAMED EVENT CENTER, Along Robiyan Ibaragun Road, Abule Ijoko, Ogun State.'),
    ],

    'social' => [
        'facebook' => env('WEDDING_FACEBOOK', '#'),
        'twitter' => env('WEDDING_TWITTER', '#'),
        'instagram' => env('WEDDING_INSTAGRAM', '#'),
    ],

    'footer_description' => env('WEDDING_FOOTER_DESCRIPTION', 'We can\'t wait to see all of our beloved friends and relatives at our wedding on November 1, 2025.'),

    'events' => [
        'ceremony' => [
            'title' => 'The Ceremony',
            'date' => 'Saturday, 1 Nov. 2025',
            'time' => '2:00 PM – 4:00 PM',
            'address' => 'JOBAMED EVENT CENTER, Along Robiyan Ibaragun Road, Abule Ijoko, Ogun State.',
            'phone' => '08167297386',
            'image' => 'assets/images/event/2.jpg',
            'google_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881',
        ],
        'reception' => [
            'title' => 'The Reception',
            'date' => 'Saturday, 1 Nov. 2025',
            'time' => '6:00 PM – 12:00 AM',
            'address' => 'JOBAMED EVENT CENTER, Along Robiyan Ibaragun Road, Abule Ijoko, Ogun State.',
            'phone' => '08167297386',
            'image' => 'assets/images/event/1.jpg',
            'google_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881',
        ],
        'party' => [
            'title' => 'The Party',
            'date' => 'Saturday, 1 Nov. 2025',
            'time' => '7:00 PM – 11:00 PM',
            'address' => 'JOBAMED EVENT CENTER, Along Robiyan Ibaragun Road, Abule Ijoko, Ogun State.',
            'phone' => '08167297386',
            'image' => 'assets/images/event/3.jpg',
            'google_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881',
        ],
    ],

    'story' => [
        [
            'date' => '15 June, 2014',
            'title' => 'How we meet',
            'description' => 'Consectetur adipiscing elit. Fringilla at risus orci, tempus facilisi sed. Enim tortor, faucibus netus orci donec volutpat adipiscing. Sit condimentum elit convallis libero. Nunc in eu tellus ipsum placerat.',
            'image' => 'assets/images/story/1.jpg',
        ],
        [
            'date' => '02 Nov, 2020',
            'title' => 'He proposed, I said yes',
            'description' => 'Consectetur adipiscing elit. Fringilla at risus orci, tempus facilisi sed. Enim tortor, faucibus netus orci donec volutpat adipiscing. Sit condimentum elit convallis libero. Nunc in eu tellus ipsum placerat.',
            'image' => 'assets/images/story/2.jpg',
        ],
        [
            'date' => '15 Apr, 2021',
            'title' => 'Our Engagement Day',
            'description' => 'Consectetur adipiscing elit. Fringilla at risus orci, tempus facilisi sed. Enim tortor, faucibus netus orci donec volutpat adipiscing. Sit condimentum elit convallis libero. Nunc in eu tellus ipsum placerat.',
            'image' => 'assets/images/story/3.jpg',
        ],
    ],

    'team' => [
        [
            'name' => 'Jenny Wilson',
            'role' => 'Bridesmaid',
            'image' => 'assets/images/team/img-1.jpg',
            'mask' => 'assets/images/team/mask-1.svg',
        ],
        [
            'name' => 'Robert Fox',
            'role' => 'Groomsmen',
            'image' => 'assets/images/team/img-2.jpg',
            'mask' => 'assets/images/team/mask-2.svg',
        ],
        [
            'name' => 'Annette Black',
            'role' => 'Bridesmaids',
            'image' => 'assets/images/team/img-3.jpg',
            'mask' => 'assets/images/team/mask-3.svg',
        ],
        [
            'name' => 'Jenefer Abram',
            'role' => 'Groomsmen',
            'image' => 'assets/images/team/img-4.jpg',
            'mask' => 'assets/images/team/mask-4.svg',
        ],
    ],
];
