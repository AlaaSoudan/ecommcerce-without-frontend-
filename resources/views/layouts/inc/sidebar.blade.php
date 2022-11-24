
<aside class="column is-2 is-narrow-mobile is-fullheight section is-hidden-mobile">

 <ul class="menu-list">
        <li>
            <a class='{{ Request::is('dashboard') ? 'is-active':''}}' href='{{url('dashboard') }}'>Dashboard</a>
            </li>


    </ul>

    <ul class="menu-list">
        <li>
            <a class='{{ Request::is('Categories') ? 'is-active':''}}' href='{{url('Categories') }}'>category</a>
        </li>
   <li>
            <a class='{{ Request::is('add_Categories') ? 'is-active':''}}' href='{{url('add_Categories') }}'>add Categories</a>
        </li>

    </ul>




 <ul class="menu-list">
    <li>
        <a class='{{ Request::is('Products') ? 'is-active':''}}' href='{{url('Products') }}'>products</a>
    </li>




    <li>
        <a class='{{ Request::is('add_Products') ? 'is-active':''}}' href='{{url('add_Products') }}'>add Product</a>
    </li>
</ul>
</aside>


