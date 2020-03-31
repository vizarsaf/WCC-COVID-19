<div class="d-sm-flex align-items-center justify-content-between my-4">
  <h3 class="h3">DKI Jakarta</h3>
  <h5 class="h5">(Last Update: 2020 Maret 28 10:00)<a href="https://corona.jakarta.go.id/">corona.jakarta.go.id</a></h5>
</div>

<div class="row">

  <div class="col-md-9">

    <div class="row">

      <div class="col-md-4 mb-4">
        <div class="card text-gray-100 shadow h-100 py-2" style="background:#57C4ED;">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Positif COVID-19</div>
                <div class="h5 mb-0 font-weight-bold">566</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-head-side-cough fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card text-gray-100 shadow h-100 py-2" style="background:#79CAC5;">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Sembuh</div>
                <div class="h5 mb-0 font-weight-bold">31</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-notes-medical fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card text-gray-100 shadow h-100 py-2" style="background:#4A4A4A;">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Meninggal</div>
                <div class="h5 mb-0 font-weight-bold">57</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-skull-crossbones fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-4">
        <div class="card text-gray-100 shadow h-100 py-2" style="background:#2060A7;">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">On construction</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End col timeline -->

      <!-- Peta disini -->
      <div class="col-md-9 mb-4">
        <div class="card text-gray-100 shadow h-100 p-0" style="background:#2060A7;">

          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqEEJqD-6CS1FMneeEsgVRViLE8i0Tmgw&callback=initMap&libraries=drawing&pb=!1m18!1m12!1m3!1d7933.03325458806!2d106.7975101741862!3d-6.19535793205976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6965c21cf89%3A0xb4e9aae2a244be30!2sSlipi%2C+Palmerah%2C+West+Jakarta+City%2C+Jakarta!5e0!3m2!1sen!2sid!4v1560134937615!5m2!1sen!2sid"></script>
          <div class="rounded" id="peta" style="width: 100%; height: 400px;"></div>
          <?php include "module/wilayah-jakarta.php"; ?>

        </div>
      </div>
      <!-- End col peta -->

    </div>
    <!-- End row -->

  </div>
  <!-- End parent col 9 -->

  <div class="col-md-3">
    <div class="row">
      <div class="col-md-12">

        <div class="card text-gray-100 shadow p-5" style="background:#2060A7;">
          <canvas style="height:400px;" id="piechart"></canvas>
        </div>

      </div>
    </div>
  </div>
  <!-- End parent col 3 -->

</div>
<!-- End row -->
