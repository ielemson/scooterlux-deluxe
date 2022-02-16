<ul>
    <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}" >Home</a>
    </li>

    <li class="{{ request()->is('user/profile') ? 'active' : '' }}" >
        <a href="{{ route('user.profile') }}" >Profile Update</a>
    </li>
    
<li class="{{ request()->is('user/password/change') ? 'active' : '' }}">
    <a href="{{ route('user.change.password') }}" >Change Password</a>
 </li>

   <li class="{{ request()->is('user/orders/history') ? 'active' : '' }}"> 
       <a href="{{ route('user.orders') }}" >Order History</a> 
    </li>

    <li class="{{ request()->is('user/orders/history') ? 'active' : '' }}">
        <a href="{{ route('user.return-orders') }}" >Return Orders</a> 
    </li>

    <li class="{{ request()->is('user/cancel/orders/list') ? 'active' : '' }}">
        <a href="{{ route('user.cancel-orders') }}" >Cancel Orders</a>
     </li>
   <li> <a href="{{ route('user.logout') }}" >Logout</a> </li>
</ul>