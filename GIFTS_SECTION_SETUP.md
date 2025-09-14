# Wedding Gifts Section Setup

## Overview
The blog section has been converted to a gifts section that allows wedding guests to support the couple through bank transfers and online payments.

## Features

### 1. Bank Account Details
- Displays bank account information in a clean, card-style layout
- Shows account name, number, bank name, and sort code
- Responsive design that works on all devices

### 2. Online Payment Options
- Three different gift categories with different amounts
- Each option opens in a new tab when clicked
- Beautiful gradient design with icons
- Hover effects and animations

## Configuration

### Bank Details
Update the bank details in `config/wedding.php`:

```php
'gifts' => [
    'bank_details' => [
        'account_name' => env('WEDDING_BANK_ACCOUNT_NAME', 'Esther Alade & Joseph Ajibodu'),
        'account_number' => env('WEDDING_BANK_ACCOUNT_NUMBER', '1234567890'),
        'bank_name' => env('WEDDING_BANK_NAME', 'Access Bank'),
        'sort_code' => env('WEDDING_BANK_SORT_CODE', '044'),
    ],
    // ...
]
```

### Online Payment Options
Configure the payment options in `config/wedding.php`:

```php
'online_payment_options' => [
    [
        'title' => 'Support Our Wedding',
        'description' => 'Help us celebrate our special day',
        'amount' => '₦5,000',
        'link' => env('WEDDING_GIFT_LINK_1', '#'),
        'icon' => 'ti-heart',
        'col_class' => 'col-lg-4 col-md-6 col-12',
    ],
    [
        'title' => 'Other Amount',
        'description' => 'Choose your own amount to support our wedding',
        'amount' => 'Custom',
        'link' => env('WEDDING_GIFT_LINK_9', '#'),
        'icon' => 'ti-gift',
        'col_class' => 'col-12', // Full width
    ],
    // Add more options...
]
```

## Environment Variables

Add these to your `.env` file:

```env
# Bank Details
WEDDING_BANK_ACCOUNT_NAME="Esther Alade & Joseph Ajibodu"
WEDDING_BANK_ACCOUNT_NUMBER="1234567890"
WEDDING_BANK_NAME="Access Bank"
WEDDING_BANK_SORT_CODE="044"

# Online Payment Links (9 different amounts)
WEDDING_GIFT_LINK_1="https://your-payment-link-1.com"  # ₦5,000
WEDDING_GIFT_LINK_2="https://your-payment-link-2.com"  # ₦10,000
WEDDING_GIFT_LINK_3="https://your-payment-link-3.com"  # ₦15,000
WEDDING_GIFT_LINK_4="https://your-payment-link-4.com"  # ₦20,000
WEDDING_GIFT_LINK_5="https://your-payment-link-5.com"  # ₦25,000
WEDDING_GIFT_LINK_6="https://your-payment-link-6.com"  # ₦50,000
WEDDING_GIFT_LINK_7="https://your-payment-link-7.com"  # ₦75,000
WEDDING_GIFT_LINK_8="https://your-payment-link-8.com"  # ₦100,000
WEDDING_GIFT_LINK_9="https://your-payment-link-9.com"  # Custom Amount
```

## Styling

The gifts section uses custom SASS styles that:
- Maintain the existing blog section background
- Use purple gradient theme matching the site
- Include hover effects and animations
- Are fully responsive for mobile devices

## Navigation

The navigation has been updated to include a "Gifts" link that scrolls to the gifts section on the home page.

## Files Modified

1. `resources/views/wedding/sections/blog.blade.php` - Converted to gifts section
2. `config/wedding.php` - Added gifts configuration
3. `resources/sass/style.scss` - Added custom styles
4. `resources/views/layouts/partials/navigation.blade.php` - Updated navigation

## Usage

1. Update the bank details in the config file
2. Add your payment links to the environment variables
3. Compile SASS: `npm run sass:build`
4. The gifts section will appear on the home page with the same background as the blog section

## Customization

- Modify the gift options in `config/wedding.php`
- Update the styling in `resources/sass/style.scss`
- Change icons by updating the `icon` field in the config
- Adjust amounts and descriptions as needed
