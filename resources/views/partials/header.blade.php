<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="nav-c">
        <a class="navbar-brand" href="#"><img src="https://www.boolean.careers/images/misc/logo.png" alt="Boolean"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ (url()->current() == route('StaticPage.home')) ? 'active' : ''}}">
            <a id="nav-font1" class="nav-link" href="{{route('StaticPage.home')}}">Home</a>
          </li>
          <li class="nav-item {{ (url()->current() == route('StaticPage.chisiamo')) ? 'active' : ''}}">
            <a id="nav-font2" class="nav-link" href="{{route('StaticPage.chisiamo')}}">Chi siamo</a>
          </li>
          <li class="nav-item {{ (url()->current() == route('Students.studenti')) ? 'active' : ''}}">
            <a id="nav-font3" class="nav-link" href="{{route('Students.studenti')}}">Studenti</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
