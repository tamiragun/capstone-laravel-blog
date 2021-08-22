<!-- The footer must show up on each page, so is created as a component -->

<div class="parent" style="display: flex; place-content: stretch space-evenly; 
    padding: 20px 0px; background-color: #F5F5F5">
    <div class="child"><a href="{{ url('/search')}}">Search</a></div>
    <div class="child"><a href="{{ url('/legal/tos')}}">Terms of service</a></div>
    <div class="child"><a href="{{ url('/legal/privacy')}}">Privacy policy</a></div>
    <div class="child">Copyright 2011-{{now()->year}} Laravel LLC.</div>
</div>