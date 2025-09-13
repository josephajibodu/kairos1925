<div class="header-right">
    <div class="header-search-form-wrapper">
        <div class="cart-search-contact">
            <button class="search-toggle-btn"><i class="fi flaticon-search"></i></button>
            <div class="header-search-form">
                <form action="{{ route('search') }}" method="GET">
                    <div>
                        <input type="text" class="form-control" name="q" placeholder="Search here...">
                        <button type="submit"><i class="fi flaticon-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="mini-cart">
        <button class="cart-toggle-btn">
            <i class="fi flaticon-shopping-cart"></i>
            <span class="cart-count">2</span>
        </button>
        <div class="mini-cart-content">
            <button class="mini-cart-close"><i class="ti-close"></i></button>
            <div class="mini-cart-items">
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-item-image">
                        <a href="{{ route('shop') }}">
                            <img src="{{ asset('assets/images/shop/mini-cart/img-1.jpg') }}" alt>
                        </a>
                    </div>
                    <div class="mini-cart-item-des">
                        <a href="{{ route('shop') }}">Wedding Gown</a>
                        <span class="mini-cart-item-price">$20.15 x 1</span>
                        <span class="mini-cart-item-quantity">
                            <a href="#"><i class="ti-close"></i></a>
                        </span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-item-image">
                        <a href="{{ route('shop') }}">
                            <img src="{{ asset('assets/images/shop/mini-cart/img-2.jpg') }}" alt>
                        </a>
                    </div>
                    <div class="mini-cart-item-des">
                        <a href="{{ route('shop') }}">Bridal Flower</a>
                        <span class="mini-cart-item-price">$13.25 x 2</span>
                        <span class="mini-cart-item-quantity">
                            <a href="#"><i class="ti-close"></i></a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="mini-cart-action clearfix">
                <span class="mini-checkout-price">Subtotal: <span>$215.14</span></span>
                <div class="mini-btn">
                    <a href="{{ route('checkout') }}" class="view-cart-btn s1">Checkout</a>
                    <a href="{{ route('cart') }}" class="view-cart-btn">View Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
