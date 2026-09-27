

<nav class="nav mb-3">
    <a class="btn btn-outline-primary m-2" href="{{ route('products.index') }}"
    class="nav-link {{ request()->is('products*') ? 'active' : ''}}">
    All Products</a>
    <a class="btn btn-outline-primary m-2" href="{{ route('products.filter') }}"
    class="nav-link {{ request()->is('products/filter/*') ? 'active' : '' }}">
    Filter</a>
</nav>