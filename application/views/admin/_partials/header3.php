<header class="header header-sticky mb-4">
      <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
       <svg class="icon icon-lg">
              <use xlink:href="<?php echo base_url('assets/@coreui/icons/svg/free.svg#cil-menu')?>"></use>
        </svg>
        </button><a class="header-brand d-md-none" href="#">
            <ul class="header-nav ms-3">
                <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  </a>
                  <script type="text/javascript">
      document.write("<b>");
      var day = new Date();
      var hr = day.getHours();
      if (hr >= 4 && hr < 12) {
          document.write("Good Morning");
      } else if (hr >= 12 && hr <= 16) {
          document.write("Good Afternoon");
      } else if (hr >= 16 && hr <= 23) {
          document.write("Good Evening");
      } else {
          document.write("Good Night");
      }
      document.write("</b>");
  </script> <br> <span id="clock"></span>
                        </li>
                    </ul>
              </div>
              <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><a href="#">Sales</a>
              </li>
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><a href="stok">Stok</a>
              </li>
              <li class="breadcrumb-item active"><span>Need Supply</span></li>
            </ol>
          </nav>
        </div>
            </header>
<script type="text/javascript">
    var clockElement = document.getElementById('clock');

    function clock() {
        clockElement.textContent = new Date().toString().slice(0, 24);
    }

    setInterval(clock, 1000);
</script>