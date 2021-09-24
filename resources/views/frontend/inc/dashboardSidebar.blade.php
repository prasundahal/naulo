<div class="ps-shop--sidebar">
    <div class="sidebar__category">
        <div class="sidebar__title">My Account Setting</div>
        <ul class="menu--mobile">
            <li class="category-item {{ (request()->is('customer/dashboard')) ? 'active' : '' }}"> <a href="{{route('dashboard')}}" >Dashboard</a>
            </li>
            <li class="category-item {{ (request()->is('customer/profile')) ? 'active' : '' }}"> <a href="{{ route('profile') }}">My Profile</a>
            </li>
            <li class="category-item {{ (request()->is('customer/address')) ? 'active' : '' }}"> <a href="{{route('profile')}}">My Address Book</a>
            </li>
            <li class="category-item {{ (request()->is('customer/order')) ? 'active' : '' }}"> <a href="{{route('order')}}">My Order</a>
            </li>
            <li class="category-item"> <a href="{{route('return')}}">My Returns</a>
            </li>
            <li class="category-item"> <a href="{{route('cancel')}}">My Cancellations</a>
            </li>
            <li class="category-item {{ (request()->is('customer/wishlist')) ? 'active' : '' }}"> <a href="{{route('wishlists.index')}}">My Wishlist</a>
            </li>
            <li class="category-item"> <a href="#">My Payment Options</a>
            </li>
            <li class="category-item"> <a href="#">Vouchers</a>
            </li>
            <li class="category-item {{ (request()->is('customer/review')) ? 'active' : '' }}"> <a href="{{route('review')}}">My Reviews</a>
            </li>
            <li class="category-item {{ (request()->is('customer/change/password')) ? 'active' : '' }}"> <a href="">Change Password</a>
            </li>
           
            <li class="category-item"> <a href="{{route('logout')}}">Log Out</a>
            </li>
        </ul>
    </div>
</div>