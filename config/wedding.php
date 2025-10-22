<?php

return [
    'social' => [
        'facebook' => env('WEDDING_FACEBOOK', '#'),
        'twitter' => env('WEDDING_TWITTER', '#'),
        'instagram' => env('WEDDING_INSTAGRAM', '#'),
    ],

    'events' => [
        'ceremony' => [
            'title' => 'Engagement',
            'date' => 'Saturday, 1 Nov. 2025',
            'time' => '9:30 AM – 1:00 PM',
            'address' => 'JOBAMED EVENT CENTER, Along Robiyan Ibaragun Road, Abule Ijoko, Ogun State.',
            'phone' => '08167297386',
            'image' => 'assets/images/event/1.png',
            'google_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.1234567890123!2d3.2975512!3d6.7481757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bbdee15f3382f%3A0xd1b98e477d665c22!2sJOBAMED%20EVENT%20CENTER!5e0!3m2!1sen!2sng!4v1503742051881',
        ],
        'party' => [
            'title' => 'Live Band',
            'date' => 'Saturday, 1 Nov. 2025',
            'time' => '1:00 PM – 3:00 PM',
            'address' => 'JOBAMED EVENT CENTER, Along Robiyan Ibaragun Road, Abule Ijoko, Ogun State.',
            'phone' => '08167297386',
            'image' => 'assets/images/event/2.png',
            'google_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.1234567890123!2d3.2975512!3d6.7481757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bbdee15f3382f%3A0xd1b98e477d665c22!2sJOBAMED%20EVENT%20CENTER!5e0!3m2!1sen!2sng!4v1503742051881',
        ],
    ],

    'story' => [
        [
            'date' => 'July 10, 2019',
            'title' => 'How We Met',
            'description' => 'I met Esther on July 10, 2019, during the SEA001 field trip. While scrambling for a seat on the bus, I saw her from behind, and something just struck me. I didn\'t know what it was, but I knew I wanted to know her. I even left my friend behind just to get in, only to find all the seats were already taken.

That\'s when I noticed him. He looked stranded, so I shifted over, squeezed into my friend\'s seat, and made space for him beside me. Little did I know that small act of kindness would lead to… this 👀💍.

We became friends after that trip, and a few months later, Joseph finally asked me out (apparently that was the plan all along 😂). From field trip strangers to soulmates and now we are here, counting down to forever.',
            'image' => 'assets/images/story/story-1.png',
        ],
        [
            'date' => '6th July, 2025',
            'title' => 'He Proposed, I Said Yes 💍',
            'description' => 'If you are reading this, you have probably seen our proposal video (and maybe even replayed it a few times 😅). But if you haven\'t, here\'s a little recap.

What started as a simple act of kindness on a bus years ago led to countless memories and friendship that blossomed into love. A few months into dating, Joseph made his intentions clear: "I\'m asking you to be my girlfriend because I want to marry you."

Fast forward to July 6, 2025, after we both got back from an art exhibition in Lekki titled Echoes of Innocence, Joseph got down on one knee, and I said YES! 💕 That moment wasn\'t just a proposal, it was the fulfillment of a promise. And today, that promise is becoming our forever.',
            'image' => 'assets/images/story/story-2.png',
        ],
        [
            'date' => 'Coming Soon',
            'title' => 'The Big Day 🎉',
            'description' => 'And just because we are Nigerians, you already know we are having an engagement ceremony to kick off this beautiful love story! 💍✨',
            'image' => 'assets/images/story/story-3.png',
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

    'gifts' => [
        'bank_details' => [
            'account_name' => env('WEDDING_BANK_ACCOUNT_NAME', 'JOSEPH AJIBODU'),
            'account_number' => env('WEDDING_BANK_ACCOUNT_NUMBER', '5514929976'),
            'bank_name' => env('WEDDING_BANK_NAME', 'Moniepoint MFB'),
        ],
        'online_payment_options' => [
            [
                'title' => 'I Believe in Their Love',
                'description' => 'Show your faith in their beautiful journey together',
                'amount' => '₦25,000',
                'link' => 'https://selar.com/showlove/kairos1925?amount=25000&currency=NGN',
                'icon' => 'ti-heart',
                'col_class' => 'col-lg-4 col-md-6 col-12',
            ],
            [
                'title' => 'I Want Them to Shine',
                'description' => 'Help create the magical atmosphere they deserve',
                'amount' => '₦50,000',
                'link' => 'https://selar.com/showlove/kairos1925?amount=50000&currency=NGN',
                'icon' => 'ti-palette',
                'col_class' => 'col-lg-4 col-md-6 col-12',
            ],
            [
                'title' => 'I Want to Remember This Forever',
                'description' => 'Help preserve these precious moments for generations',
                'amount' => '₦100,000',
                'link' => 'https://selar.com/showlove/kairos1925?amount=100000&currency=NGN',
                'icon' => 'ti-camera',
                'col_class' => 'col-lg-4 col-md-6 col-12',
            ],
            [
                'title' => 'I Care About Their Happiness',
                'description' => 'Contribute to the perfect setting for their special day',
                'amount' => '₦200,000',
                'link' => 'https://selar.com/showlove/kairos1925?amount=200000&currency=NGN',
                'icon' => 'ti-home',
                'col_class' => 'col-lg-4 col-md-6 col-12',
            ],
            [
                'title' => 'I Want to Celebrate With Them',
                'description' => 'Help create the joyful atmosphere we all want to share',
                'amount' => '₦300,000',
                'link' => 'https://selar.com/showlove/kairos1925?amount=300000&currency=NGN',
                'icon' => 'ti-music',
                'col_class' => 'col-lg-4 col-md-6 col-12',
            ],
            [
                'title' => 'I Want to Bless Their Union',
                'description' => 'Support the sacred symbols of their eternal commitment',
                'amount' => '₦500,000',
                'link' => 'https://selar.com/showlove/kairos1925?amount=500000&currency=NGN',
                'icon' => 'ti-diamond',
                'col_class' => 'col-lg-4 col-md-6 col-12',
            ],
            [
                'title' => 'I Have My Own Way to Show Love',
                'description' => 'Express your unique support for their special day',
                'amount' => 'Custom',
                'link' => 'https://selar.com/showlove/kairos1925',
                'icon' => 'ti-gift',
                'col_class' => 'col-12',
            ],
        ],
    ],
];