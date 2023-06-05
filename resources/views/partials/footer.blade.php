<footer>

    <div class="footerTop">
        <div class="container">
            <div class="menus-side">

             <div>
              <ul>
                <h4>DC COMICS</h4>
                <li>
                  <a href="#">
                    Link
                  </a>
                </li>
              </ul>

              <ul>
                <h4>SHOP</h4>
                <li>
                  <a href="#">
                    Link
                  </a>
                </li>
              </ul>
             </div>

              <ul>
                <h4>DC</h4>
                <li>
                  <a href="#">
                    Link
                  </a>
                </li>
              </ul>

              <ul>
                <h4>SITES</h4>
                <li>
                  <a href="#">
                    Link
                  </a>
                </li>
              </ul>

            </div>
            <div class="logoSide">
              <img src="/img/dc-logo-bg.png" alt="">
            </div>
        </div>
      </div>

      <div class="footerBottom">
        <div class="container">

          <div>

            <div class="signUpBtn">
              <h4>SIGN-UP NOW!</h4>
            </div>

          </div>

          <div class="mediaLinks">

            <h3>FOLLOW US</h3>
            <ul>

              <li v-for="(link, index) in mediaLinks" :key="index">
                <a :href="link.href">
                  <img src="{{ Vite::asset('/resources/img/footer-facebook.png') }}" alt="ICON">
                </a>
              </li>

              <li v-for="(link, index) in mediaLinks" :key="index">
                <a :href="link.href">
                  <img src="{{ Vite::asset('/resources/img/footer-facebook.png') }}" alt="ICON">
                </a>
              </li>

              <li v-for="(link, index) in mediaLinks" :key="index">
                <a :href="link.href">
                  <img src="{{ Vite::asset('/resources/img/footer-facebook.png') }}" alt="ICON">
                </a>
              </li>

              <li v-for="(link, index) in mediaLinks" :key="index">
                <a :href="link.href">
                  <img src="{{ Vite::asset('/resources/img/footer-facebook.png') }}" alt="ICON">
                </a>
              </li>

              <li v-for="(link, index) in mediaLinks" :key="index">
                <a :href="link.href">
                  <img src="{{ Vite::asset('/resources/img/footer-facebook.png') }}" alt="ICON">
                </a>
              </li>
            </ul>

          </div>

        </div>


      </div>

</footer>

