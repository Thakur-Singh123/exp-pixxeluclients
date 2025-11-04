@extends('admin.layouts.master')
@section('content')
<div class="container">
  <div class="page-inner">
    <!-- Dashboard Summary Boxes -->
    <div class="dashboard-summary">
      <div class="summary-card" style="background-image: url('{{ asset('public/admin/images/bg.png') }}');">
        <div class="summary-icon">
          <img src="{{ asset('public/admin/images/Group.png') }}" alt="Visitors Icon">
        </div>
        <div class="summary-text">
          <h2>1,245</h2>
          <h5>Total Visitors</h5>
        </div>
      </div>

      <div class="summary-card" style="background-image: url('{{ asset('public/admin/images/bg.png') }}');">
        <div class="summary-icon">
          <img src="{{ asset('public/admin/images/Group 34455.png') }}" alt="Tasks Icon">
        </div>
        <div class="summary-text">
          <h2>320</h2>
          <h5>Tasks Completed</h5>
        </div>
      </div>

      <div class="summary-card" style="background-image: url('{{ asset('public/admin/images/bg.png') }}');">
        <div class="summary-icon">
          <img src="{{ asset('public/admin/images/attendance 1.png') }}" alt="Attendance Icon">
        </div>
        <div class="summary-text">
          <h2>92%</h2>
          <h5>Attendance</h5>
        </div>
      </div>

      <div class="summary-card" style="background-image: url('{{ asset('public/admin/images/bg.png') }}');">
        <div class="summary-icon">
          <img src="{{ asset('public/admin/images/sales 1.png') }}" alt="Sales Icon">
        </div>
        <div class="summary-text">
          <h2>580</h2>
          <h5>Sales</h5>
        </div>
      </div>
    </div>

    <!-- Reports -->
    <div class="row dashboard-row">
      <div class="col-lg-6 col-md-12 mb-3">
        <div class="dashboard-card">
          <div class="card-header">Visitors (Monthly)</div>
          <canvas id="chartBar" class="chart-glow"></canvas>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 mb-3">
        <div class="dashboard-card">
          <div class="card-header">Reports (Weekly)</div>
          <canvas id="chartLine" class="chart-glow"></canvas>
        </div>
      </div>
    </div>

    <!-- Clients and TA/DA -->
    <div class="row dashboard-row">
      <div class="col-md-6 mb-3">
        <div class="dashboard-card">
          <div class="card-header">Clients (Status)</div>
          <canvas id="chartClients" class="chart-glow"></canvas>
        </div>
      </div>

      <div class="col-md-6 mb-3">
        <div class="dashboard-card">
          <div class="card-header">TA / DA (Travel)</div>
          <canvas id="chartTADA" class="chart-glow"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="{{ asset('pubilc/assets/js/chart.js') }}"></script>
<script>
  // Monthly Visitors
  const barCtx = document.getElementById('chartBar').getContext('2d');
  const barGradient = barCtx.createLinearGradient(0, 0, 0, 400);
  barGradient.addColorStop(0, 'rgba(75, 192, 192, 0.9)');
  barGradient.addColorStop(1, 'rgba(75, 192, 192, 0.3)');
  new Chart(barCtx, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
      datasets: [{
        label: 'Visits',
        data: [120, 150, 180, 200, 160, 220, 240, 230, 210, 260],
        backgroundColor: barGradient,
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: { legend: { display: false } },
      scales: {
        y: {
          beginAtZero: true,
          title: { display: true, text: 'Visitors Count' }
        }
      }
    }
  });

  // Weekly Reports
  const lineCtx = document.getElementById('chartLine').getContext('2d');
  const lineGradient = lineCtx.createLinearGradient(0, 0, 0, 400);
  lineGradient.addColorStop(0, 'rgba(255, 99, 132, 0.5)');
  lineGradient.addColorStop(1, 'rgba(255, 99, 132, 0)');
  new Chart(lineCtx, {
    type: 'line',
    data: {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      datasets: [{
        label: 'Reports',
        data: [20, 25, 30, 28, 35, 40, 38],
        backgroundColor: lineGradient,
        borderColor: 'rgba(255,99,132,0.8)',
        fill: true,
        tension: 0.4
      }]
    },
    options: {
      responsive: true,
      plugins: { legend: { display: false } },
      scales: {
        y: {
          beginAtZero: true,
          title: { display: true, text: 'Reports Count' }
        }
      }
    }
  });

  // Clients Status
  const clientsCtx = document.getElementById('chartClients').getContext('2d');
  new Chart(clientsCtx, {
    type: 'bar',
    data: {
      labels: ['Approved', 'Pending', 'Rejected'],
      datasets: [{
        label: 'Clients',
        data: [40, 15, 5],
        backgroundColor: [
          'rgba(75, 192, 75, 0.8)',
          'rgba(255, 205, 86, 0.8)',
          'rgba(255, 99, 132, 0.8)'
        ],
        borderColor: '#fff',
        borderWidth: 2
      }]
    },
    options: {
      responsive: true,
      plugins: { legend: { display: false } },
      scales: {
        y: {
          beginAtZero: true,
          title: { display: true, text: 'Number of Clients' }
        }
      }
    }
  });

  // TA/DA Chart
  const tadaCtx = document.getElementById('chartTADA').getContext('2d');
  const tadaGradient = tadaCtx.createLinearGradient(0, 0, 0, 400);
  tadaGradient.addColorStop(0, 'rgba(255, 159, 64, 0.9)');
  tadaGradient.addColorStop(1, 'rgba(255, 159, 64, 0.3)');
  new Chart(tadaCtx, {
    type: 'bar',
    data: {
      labels: ['Bus', 'Train', 'Flight', 'Car', 'Bike'],
      datasets: [{
        label: 'Travel Expenses',
        data: [10, 7, 3, 5, 8],
        backgroundColor: tadaGradient,
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: { legend: { display: false } },
      scales: {
        y: {
          beginAtZero: true,
          title: { display: true, text: 'TA/DA Counts' }
        }
      }
    }
  });
</script>
@endsection
