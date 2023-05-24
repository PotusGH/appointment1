<div class="page-section">
  <div class="container">
    @if(session('message'))
      <div class="alert alert-success mt-3">
        {{ session('message') }}
      </div>
    @endif

    <link rel="stylesheet" href="styles.css">

    <h1 class="text-center">Make an Appointment</h1>

    <form class="main-form" action="{{ 'appointment' }}" method="POST">
      @csrf

      <div class="row mt-5">
        <div class="col-12 col-sm-6 py-2">
          <input type="text" name="name" class="form-control" placeholder="Full name">
        </div>
        <div class="col-12 col-sm-6 py-2">
          <input type="text" name="email" class="form-control" placeholder="Email address..">
        </div>
        <div class="col-12 col-sm-6 py-2">
          <input type="date" name="date" class="form-control">
        </div>
        <div class="col-12 col-sm-6 py-2">
          <select name="doctor" id="doctor_id" class="custom-select">
            @foreach($doctor as $doctors)
              <option value="{{ $doctors->name }}">{{ $doctors->name }} - {{ $doctors->specialty }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-12 py-2">
          <input type="text" name="number" class="form-control" placeholder="Number..">
        </div>
        
        <div class="col-12 py-2">
          <select name="timeslot" class="custom-select">
            @php
              $startTime = strtotime('9:00 AM');
              $endTime = strtotime('5:00 PM');
              $interval = 10 * 60; // 10 minutes interval

              while ($startTime <= $endTime) {
                $time = date('h:i A', $startTime);
                echo "<option value=\"$time\">$time</option>";
                $startTime += $interval;
              }
            @endphp
          </select>
        </div>
        
        <div class="col-12 py-2">
          <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
        </div>
        <div class="col-12 py-2">
          <button type="submit" style="background-color:green; color: white" class="btn btn-primary mt-3">Submit Request</button>
        </div>
      </div>
    </form>
  </div>
</div>

<footer class="page-footer">
  <div class="container">
    <!-- Footer content -->
  </div>
</footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script>
</body>
</html>

