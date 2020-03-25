<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h2 mb-0">Dashboard</h1>
</div>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h3 class="h3">Jakarta [<a href="https://corona.jakarta.go.id/">corona.jakarta.go.id</a>]</h3>
</div>

<div class="row">

  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card bg-danger text-gray-100 shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-uppercase mb-1">Positif COVID-19</div>
            <div class="h5 mb-0 font-weight-bold">686</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-head-side-cough fa-2x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card bg-gray-900 text-gray-100 shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-uppercase mb-1">Meninggal</div>
            <div class="h5 mb-0 font-weight-bold">55</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-skull-crossbones fa-2x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card bg-success text-gray-100 shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-uppercase mb-1">Sembuh</div>
            <div class="h5 mb-0 font-weight-bold">30</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-notes-medical fa-2x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- End row -->

<div class="row">

  <div class="col">

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqEEJqD-6CS1FMneeEsgVRViLE8i0Tmgw&callback=initMap&libraries=drawing&pb=!1m18!1m12!1m3!1d7933.03325458806!2d106.7975101741862!3d-6.19535793205976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6965c21cf89%3A0xb4e9aae2a244be30!2sSlipi%2C+Palmerah%2C+West+Jakarta+City%2C+Jakarta!5e0!3m2!1sen!2sid!4v1560134937615!5m2!1sen!2sid"></script>

    <div>
      <div id="peta" style="width: 100%; height: 300px;"></div>
    </div>
    <?php include "module/wilayah-jakarta.php"; ?>

  </div>
  <!-- End col -->

</div>
<!-- End row -->
