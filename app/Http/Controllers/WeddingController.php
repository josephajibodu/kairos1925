<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WeddingController extends Controller
{
    /**
     * Display the home page
     */
    public function home()
    {
        return view('wedding.home');
    }

    /**
     * Display the about page
     */
    public function about()
    {
        return view('wedding.about');
    }

    /**
     * Display the story page
     */
    public function story()
    {
        return view('wedding.story');
    }

    /**
     * Display the gallery page
     */
    public function gallery()
    {
        return view('wedding.gallery');
    }

    /**
     * Display the RSVP page
     */
    public function rsvp()
    {
        return view('wedding.rsvp');
    }

    /**
     * Store RSVP response
     */
    public function storeRsvp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'attending' => 'required|boolean',
            'guests' => 'required|integer|min:1|max:10',
            'events' => 'nullable|string',
            'meal_preference' => 'nullable|string',
            'message' => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->route('rsvp')
                ->withErrors($validator)
                ->withInput();
        }

        // Here you can store the RSVP in database or send email
        // For now, we'll just return a success message

        return redirect()->route('rsvp')
            ->with('success', 'Thank you for your RSVP! We look forward to celebrating with you.');
    }

    /**
     * Display the contact page
     */
    public function contact()
    {
        return view('wedding.contact');
    }

    /**
     * Store contact message
     */
    public function storeContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return redirect()->route('contact')
                ->withErrors($validator)
                ->withInput();
        }

        // Here you can store the contact message or send email
        // For now, we'll just return a success message

        return redirect()->route('contact')
            ->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    /**
     * Display the accommodation page
     */
    public function accommodation()
    {
        return view('wedding.placeholder', ['title' => 'Accommodation', 'content' => 'Find information about nearby accommodations for our wedding guests.']);
    }

    /**
     * Display the planners page
     */
    public function planners()
    {
        return view('wedding.placeholder', ['title' => 'Wedding Planners', 'content' => 'Meet our talented wedding planning team.']);
    }

    /**
     * Display the team single page
     */
    public function teamSingle()
    {
        return view('wedding.placeholder', ['title' => 'Team Member', 'content' => 'Learn more about our team member.']);
    }

    /**
     * Display the groom bride page
     */
    public function groomBride()
    {
        return view('wedding.placeholder', ['title' => 'Brides & Grooms', 'content' => 'Meet the brides and grooms in our wedding party.']);
    }

    /**
     * Display the services page
     */
    public function services()
    {
        return view('wedding.placeholder', ['title' => 'Services', 'content' => 'Explore our wedding services and packages.']);
    }

    /**
     * Display the service single page
     */
    public function serviceSingle()
    {
        return view('wedding.placeholder', ['title' => 'Service Details', 'content' => 'Detailed information about our service.']);
    }

    /**
     * Display the pricing page
     */
    public function pricing()
    {
        return view('wedding.placeholder', ['title' => 'Pricing', 'content' => 'View our wedding service pricing packages.']);
    }

    /**
     * Display the portfolio page
     */
    public function portfolio()
    {
        return view('wedding.placeholder', ['title' => 'Portfolio', 'content' => 'Browse our wedding portfolio and past events.']);
    }

    /**
     * Display the portfolio masonry page
     */
    public function portfolioMasonry()
    {
        return view('wedding.placeholder', ['title' => 'Portfolio Masonry', 'content' => 'Our wedding portfolio in masonry layout.']);
    }

    /**
     * Display the portfolio masonry s2 page
     */
    public function portfolioMasonryS2()
    {
        return view('wedding.placeholder', ['title' => 'Portfolio Masonry Style 2', 'content' => 'Alternative portfolio layout style.']);
    }

    /**
     * Display the portfolio masonry s3 page
     */
    public function portfolioMasonryS3()
    {
        return view('wedding.placeholder', ['title' => 'Portfolio Masonry Style 3', 'content' => 'Another portfolio layout variation.']);
    }

    /**
     * Display the portfolio single page
     */
    public function portfolioSingle()
    {
        return view('wedding.placeholder', ['title' => 'Portfolio Item', 'content' => 'Detailed view of a portfolio item.']);
    }

    /**
     * Display the shop page
     */
    public function shop()
    {
        return view('wedding.placeholder', ['title' => 'Wedding Shop', 'content' => 'Browse our wedding shop for accessories and gifts.']);
    }

    /**
     * Display the shop single page
     */
    public function shopSingle()
    {
        return view('wedding.placeholder', ['title' => 'Product Details', 'content' => 'View product details and purchase options.']);
    }

    /**
     * Display the cart page
     */
    public function cart()
    {
        return view('wedding.placeholder', ['title' => 'Shopping Cart', 'content' => 'Review your selected items before checkout.']);
    }

    /**
     * Display the wishlist page
     */
    public function wishlist()
    {
        return view('wedding.placeholder', ['title' => 'Wishlist', 'content' => 'Your saved items for later purchase.']);
    }

    /**
     * Display the checkout page
     */
    public function checkout()
    {
        return view('wedding.placeholder', ['title' => 'Checkout', 'content' => 'Complete your purchase securely.']);
    }

    /**
     * Display the blog page
     */
    public function blog()
    {
        return view('wedding.placeholder', ['title' => 'Wedding Blog', 'content' => 'Read our latest wedding tips and stories.']);
    }

    /**
     * Display the blog left sidebar page
     */
    public function blogLeftSidebar()
    {
        return view('wedding.placeholder', ['title' => 'Blog with Left Sidebar', 'content' => 'Blog posts with left sidebar navigation.']);
    }

    /**
     * Display the blog fullwidth page
     */
    public function blogFullwidth()
    {
        return view('wedding.placeholder', ['title' => 'Blog Fullwidth', 'content' => 'Blog posts in fullwidth layout.']);
    }

    /**
     * Display the blog single page
     */
    public function blogSingle()
    {
        return view('wedding.placeholder', ['title' => 'Blog Post', 'content' => 'Read the full blog post article.']);
    }

    /**
     * Display the blog single left sidebar page
     */
    public function blogSingleLeftSidebar()
    {
        return view('wedding.placeholder', ['title' => 'Blog Post with Sidebar', 'content' => 'Blog post with left sidebar.']);
    }

    /**
     * Display the blog single fullwidth page
     */
    public function blogSingleFullwidth()
    {
        return view('wedding.placeholder', ['title' => 'Blog Post Fullwidth', 'content' => 'Fullwidth blog post layout.']);
    }

    /**
     * Display the coming soon page
     */
    public function comingSoon()
    {
        return view('wedding.placeholder', ['title' => 'Coming Soon', 'content' => 'Something exciting is coming soon!']);
    }

    /**
     * Display the 404 error page
     */
    public function error404()
    {
        return view('wedding.404');
    }

    /**
     * Display the invitation page
     */
    public function invitation()
    {
        return view('wedding.placeholder', ['title' => 'Wedding Invitation', 'content' => 'Your official wedding invitation.']);
    }

    /**
     * Handle search
     */
    public function search(Request $request)
    {
        $query = $request->get('q');

        // Here you can implement search functionality
        // For now, we'll just redirect back with the query

        return redirect()->route('home')->with('search_query', $query);
    }
}
