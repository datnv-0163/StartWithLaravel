<a href="{{route('user')}}">user</a>
<a href="product">product</a>
<a href="/news/1">new 1</a>
<a href="{{ route ('details',['id'=>12,'cate'=>2] ) }}">new 12 cate 2</a>
<br>
<h2>route group<h2>
<ul>
    <li><a href="{{route('user.manage')}}">user manage</a></li>
    <li><a href="{{route('admin.manage')}}">admin manage</a></li>
    <li><a href="{{route('product.manage')}}">product manage</a></li>
</ul>