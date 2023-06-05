<footer>
    <div class="top">
    <div class="colonne">
        <div class="col-column">
        <div class="col">
        <h3>dc comics</h3>
        <nav>
        <ul>
            <li v-for = "(link, index) in mainMenu"
            :key="index">
            <a href="link-href"> link item </a>
            </li>
        </ul>
        </nav>
    </div>
    <div class="col"><h3>shop</h3>
    <ul>
    <li><a href="#">Shop DC</a></li>
    <li><a href="#">Shop DC Collectibles</a></li>
    </ul></div>
    </div>
    <div class="col">
    <h3> dc </h3>
    <nav>
        <ul>
        <li v-for = "(link, index) in footerDc"
            :key="index">
            <a href="link-href"> link item </a>
            </li>
        </ul>
      </nav>
    </div>
    <div class="col">
      <h3>sites</h3>
      <nav>
        <ul>
          <li v-for = "(link, index) in footerSites"
            :key="index">
            <a href="link-href"> link item </a>
            </li>
        </ul>
      </nav>
    </div>
    </div>
    <div class="logo">
      <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="logo-dc">
    </div>
  </div>
  <div class="bottom">
    <div class="container">
      <div class="button">
        <button>SIGN-UP NOW!</button>
      </div>
      <div class="icons">
        <span><h3>FOLLOW US</h3></span>
        <nav>
          <ul>
            <li><a href="#"><img src="/img/footer-facebook.png" alt="logo facebook"></a></li>
            <li><a href="#"><img src="footer-twitter.png" alt="logo twitter"> </a></li>
            <li><a href="#"><img src="footer-youtube.png" alt="logo youtube"></a></li>
            <li><a href="#"><img src="footer-pinterest.png" alt="logo pinterest"></a></li>
            <li><a href="#"><img src="footer-periscope.png" alt="logo periscope"></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</footer>
