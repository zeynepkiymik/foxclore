@extends ('master')
@section('baslik' ,'zeynep')
@section('icerik')
  <section id="navwrapper" class="hoc clear">
    <!-- ################################################################################################ -->
    <nav id="mainav">
      <ul class="clear">
        <li class="active"><a href="{{ route('homepage')}}">Home</a></li>
        <li><a class="drop" href="#">Pages</a>
          <ul>
            <li><a href="pages/gallery.html">Gallery</a></li>
            <li><a href="pages/full-width.html">Full Width</a></li>
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            <li><a href="{{ route('homepage')}}">Font Icons</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Dropdown</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
            <li><a href="#">Level 2</a></li>
          </ul>
        </li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Long Link Text</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
    <div id="searchform">
      <div>
        <form action="#" method="post">
          <fieldset>
            <legend>Quick Search:</legend>
            <input type="text" placeholder="Enter search term&hellip;">
            <button type="submit"><i class="fas fa-search"></i></button>
          </fieldset>
        </form>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </section>
@endsection

<@section ('article')>
  <article>
    <p>Aliquam sapien</p>
    <h3 class="heading">Magna feugiat pulvinar</h3>
    <p>At dapibus ac velit cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus maecenas ut</p>
    <footer><a class="btn" href="#">Laoreet pharetra</a></footer>
  </article>
<@endsection>

@section('section2')

  <section id="introblocks">
    <ul class="nospace group">
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/demo/348x220.png" alt=""></a>
          <figcaption>
            <h6 class="heading">Aliquam faucibus</h6>
            <p>Ipsum eu ipsum donec ac orci sed lectus elementum fringilla nullam dictum nisi nec mauris phasellus ut lacus.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/demo/348x220.png" alt=""></a>
          <figcaption>
            <h6 class="heading">Volutpat sed quis</h6>
            <p>Vel nisi semper adipiscing maecenas sodales elit cras porttitor diam aliquam turpis quisque rhoncus tincidunt.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/demo/348x220.png" alt=""></a>
          <figcaption>
            <h6 class="heading">Leo phasellus sit</h6>
            <p>Arcu ut auctor nunc ac mi vivamus aliquam maecenas in lorem vel tellus porttitor placerat quisque tellus nulla.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/demo/348x220.png" alt=""></a>
          <figcaption>
            <h6 class="heading">Amet lorem odio</h6>
            <p>Facilisis et mattis id consectetuer vel nunc donec sagittis purus sit amet est pellentesque elit dolor mattis.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/demo/348x220.png" alt=""></a>
          <figcaption>
            <h6 class="heading">Semper aliquam duis</h6>
            <p>Ac lobortis sed cursus at magna vivamus laoreet orci vel tortor in nisi in porttitor vulputate arcu integer.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/demo/348x220.png" alt=""></a>
          <figcaption>
            <h6 class="heading">Tempus mauris morbi</h6>
            <p>Pretium curabitur lacinia aenean eu lectus maecenas at urna morbi porta est a mi duis felis nunc lobortis ut.</p>
          </figcaption>
        </figure>
      </li>
    </ul>
  </section>
@endsection

@section ('section3')
<div class="wrapper row2">
  <section class="hoc container clear">
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="nospace font-xs">Mollis eu commodo eu dui quisque</p>
      <h6 class="heading">Ut ipsum vivamus tincidunt</h6>
    </div>
    <ul class="nospace group center">
      <li class="one_third first">
        <article><a href="#"><i class="fas fa-eraser fa-5x fa-spin btmspace-50"></i></a>
          <h6 class="heading">Tincidunt enim etiam</h6>
          <p class="btmspace-30">Tellus lacus tempor in pharetra id imperdiet sit amet enim suspendisse potenti fusce ornare [&hellip;]</p>
          <footer><a class="btn" href="#">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-chess-bishop fa-5x btmspace-50"></i></a>
          <h6 class="heading">Congue nulla facilisi</h6>
          <p class="btmspace-30">Laoreet ligula phasellus pede phasellus faucibus enim quis lacus praesent ipsum vulputate [&hellip;]</p>
          <footer><a class="btn" href="#">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-coins fa-5x btmspace-50"></i></a>
          <h6 class="heading">Nunc congue curabitur</h6>
          <p class="btmspace-30">Vitae lacinia eu interdum tempus massa in sodales purus non nisi cras porta lacinia ut [&hellip;]</p>
          <footer><a class="btn" href="#">Read More</a></footer>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
@endsection

@section('section4')
  <div class="wrapper row3">
    <section class="hoc container clear">
      <!-- ################################################################################################ -->
      <div class="sectiontitle">
        <p class="nospace font-xs">Id erat duis nibh diam at</p>
        <h6 class="heading">Vulputate quis lacus nullam</h6>
      </div>
      <ul id="stats" class="nospace group">
        <li><i class="fas fa-id-badge"></i>
          <p><a href="#">123</a></p>
          <p>Augue dui convallis</p>
        </li>
        <li><i class="fas fa-skull"></i>
          <p><a href="#">1234</a></p>
          <p>Id ullamcorper</p>
        </li>
        <li><i class="fas fa-umbrella"></i>
          <p><a href="#">12345</a></p>
          <p>Malesuada interdum</p>
        </li>
        <li><i class="fas fa-store-alt"></i>
          <p><a href="#">6789</a></p>
          <p>Tristique viverra</p>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </section>
  </div>
@endsection
@section('section5')
  <div class="wrapper coloured">
    <section id="testimonials" class="hoc container clear">
      <!-- ################################################################################################ -->
      <div class="sectiontitle">
        <p class="nospace font-xs">At ante morbi consequat lobortis</p>
        <h6 class="heading">Eros suspendisse scelerisque</h6>
      </div>
      <article class="one_half first"><img src="images/demo/100x100.png" alt="">
        <blockquote>Proin sed sapien ut convallis lectus ac magna nulla mattis purus phasellus consectetuer fermentum augue integer vulputate lectus vitae lorem suspendisse potenti donec suscipit.</blockquote>
        <h6 class="heading">J. Doe</h6>
        <em>Nulla mauris hendrerit</em></article>
      <article class="one_half"><img src="images/demo/100x100.png" alt="">
        <blockquote>Pellentesque et ipsum mattis ipsum pellentesque pretium proin rutrum turpis non accumsan aliquet odio magna luctus neque in adipiscing mi odio ac felis sed mattis enim quis ipsum.</blockquote>
        <h6 class="heading">G. Doe</h6>
        <em>Aenean vestibulum mattis</em></article>
      <!-- ################################################################################################ -->
    </section>
  </div>
@endsection
@section('section6')
  <div class="wrapper row3">
    <section class="hoc container clear">
      <!-- ################################################################################################ -->
      <div class="sectiontitle">
        <p class="nospace font-xs">Nisl sed blandit iaculis lectus</p>
        <h6 class="heading">Nam et erat nec eros elementum</h6>
      </div>
      <ul class="nospace group latest">
        <li class="one_half first">
          <article>
            <div class="excerpt">
              <ul class="nospace meta">
                <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                <li><i class="fas fa-tag"></i> <a href="#">Category Name</a></li>
              </ul>
              <h6 class="heading">Gravida integer tristique</h6>
              <p>Dui vel odio proin magna ligula pellentesque eu tincidunt sed ornare tempor nisl in id dui vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec [<a href="#">&hellip;</a>]</p>
              <footer><a href="#">Read More</a></footer>
            </div>
            <time datetime="2045-04-06T08:15+00:00"><strong>06</strong> <em>Apr</em></time>
          </article>
        </li>
        <li class="one_half">
          <article>
            <div class="excerpt">
              <ul class="nospace meta">
                <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                <li><i class="fas fa-tag"></i> <a href="#">Category Name</a></li>
              </ul>
              <h6 class="heading">Eleifend semper nisl sed</h6>
              <p>Eget lorem in in felis in metus mollis blandit ut eu justo suspendisse semper sem sit amet ligula quisque eget felis eu tortor tristique pharetra praesent turpis pede varius sed [<a href="#">&hellip;</a>]</p>
              <footer><a href="#">Read More</a></footer>
            </div>
            <time datetime="2045-04-05T08:15+00:00"><strong>05</strong> <em>Apr</em></time>
          </article>
        </li>
      </ul>
      <footer class="center"><a class="btn" href="#">View More</a></footer>
      <!-- ################################################################################################ -->
    </section>
  </div>
@endsection
