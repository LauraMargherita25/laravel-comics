<header>
    <div class="container">
        <div class="img_wrapper">
          <img src="../assets/img/dc-logo.png" alt="">
        </div>
  
        <nav>
            <ul>
                @foreach ($nav as $navItem)
                    <li><a href="{{ route($navItem['link']) }}">{{ $navItem['text'] }}</a></li>
                @endforeach
            </ul>
        </nav>
      </div>
</header>