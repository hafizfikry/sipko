        <ul class="nav">
          <li <?php if($page == "dashboard") echo "class='active'"?>>
            <a href="/index">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          @if (auth()->user()->level=="admin")
          <li <?php if($page == "datauser") echo "class='active'"?>>
            <a href="/datauser">
              <i class="nc-icon nc-tile-56"></i>
              <p>Data User</p>
            </a>
          </li>
          <li <?php if($page == "datakandidat") echo "class='active'"?>>
            <a href="/datakandidat">
              <i class="nc-icon nc-single-02"></i>
              <p>Data Kandidat</p>
            </a>
          </li>
          @endif
          <li <?php if($page == "kandidat") echo "class='active'"?>>
            <a href="/kandidat">
              <i class="nc-icon nc-single-02"></i>
              <p>Kandidat</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="/logout">
              <i class="nc-icon nc-button-power"></i>
              <p>Log out</p>
            </a>
          </li>
        </ul>
