<?php

return [
    'site_name' => env('WEDDING_SITE_NAME', 'Kairos1925'),
    'title' => env('WEDDING_TITLE', 'Habibi - Wedding & Wedding Planner HTML5 Template'),

    'couple' => [
        'bride_name' => env('WEDDING_BRIDE_NAME', 'Esther Alade'),
        'groom_name' => env('WEDDING_GROOM_NAME', 'Joseph Ajibodu'),
        'display_names' => env('WEDDING_DISPLAY_NAMES', 'Esther & Joseph'),
        'wedding_date' => env('WEDDING_DATE', 'November 1, 2025'),
        'wedding_date_raw' => env('WEDDING_DATE_RAW', '2025-11-01'),
        'announcement_text' => env('WEDDING_ANNOUNCEMENT', 'We Are Getting Married November 1, 2025'),
        'bride_bio' => env('WEDDING_BRIDE_BIO', 'A beautiful soul with a heart full of love and laughter. Esther brings joy to everyone around her and has been the light of my life since we met on that fateful SEA001 field trip.'),
        'groom_bio' => env('WEDDING_GROOM_BIO', 'A dedicated and loving man who knew from the moment he saw Esther that she was the one. Joseph is passionate about life, family, and keeping the promises he makes - especially the one he made on our first date.'),
    ],

    'contact' => [
        'email' => env('WEDDING_CONTACT_EMAIL', 'kairos1925@gmail.com'),
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
            'time' => '10:00 AM – 1:00 PM',
            'address' => 'JOBAMED EVENT CENTER, Along Robiyan Ibaragun Road, Abule Ijoko, Ogun State.',
            'phone' => '08167297386',
            'image' => 'assets/images/event/2.jpg',
            'google_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.1234567890123!2d3.2975512!3d6.7481757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bbdee15f3382f%3A0xd1b98e477d665c22!2sJOBAMED%20EVENT%20CENTER!5e0!3m2!1sen!2sng!4v1503742051881',
        ],
        'party' => [
            'title' => 'The Party',
            'date' => 'Saturday, 1 Nov. 2025',
            'time' => '1:00 PM – 3:00 PM',
            'address' => 'JOBAMED EVENT CENTER, Along Robiyan Ibaragun Road, Abule Ijoko, Ogun State.',
            'phone' => '08167297386',
            'image' => 'assets/images/event/3.jpg',
            'google_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.1234567890123!2d3.2975512!3d6.7481757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bbdee15f3382f%3A0xd1b98e477d665c22!2sJOBAMED%20EVENT%20CENTER!5e0!3m2!1sen!2sng!4v1503742051881',
        ],
    ],

    'story' => [
        [
            'date' => 'July 10, 2019',
            'title' => 'How We Met',
            'description' => 'I met Esther on July 10, 2019 at the most unlikely event, the SEA001 field trip. While scrambling for a space in the bus among many other students, I sighted her from behind. Something struck within me; I didn\'t know what it was, but I knew I wanted to know her. I pushed harder to get on the bus, even leaving my friend behind because I had seen "the lady." By the time I entered, all the seats were gone, and I had to stand. Unexpectedly, Esther and her friends adjusted and offered me a seat beside her.',
            'image' => 'assets/images/story/1.jpg',
        ],
        [
            'date' => '6th July, 2025',
            'title' => 'He Proposed, I Said Yes',
            'description' => 'That simple act opened the door to our first conversation. We became friends, and a few months later, Joseph asked me to be his girlfriend. On that very day, he told me, "I\'m asking you to be my girlfriend because I want to marry you." Joseph proposed to me on the 6th of July 2025 in Lekki, Lagos State after we went on a romantic date to an art exhibition titled echoes of innocence. The rest, as they say, is history, and today, that promise becomes reality.',
            'image' => 'assets/images/story/2.jpg',
        ],
        [
            'date' => 'Coming Soon',
            'title' => 'Our Engagement Day',
            'description' => 'Our Engagement day is going to be the day our families come together under the Yoruba culture to pay the bride price with the groom family coming bearing gifts for the bride and her family and a letter of proposal to the family. After accepting proposal the family blesses the union of their children as they start a new family. It promises to be a really fun event.',
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
