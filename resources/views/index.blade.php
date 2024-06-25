@extends('mastar.layout')

@section('content')
  <style>
    .jumbotron {
      background-color: #f8f9fa;
      padding: 2rem 1rem;
      text-align: center;
    }
    .section-title {
      margin-top: 2rem;
      padding: 1rem;
      background-color: #e9ecef;
      border-radius: 0.3rem;
    }
    .section-content {
      padding: 1rem;
      background-color: #f1f1f1;
      border-radius: 0.3rem;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="jumbotron">
      <h1 class="display-4">Welcome to the Dashboard!</h1>
      <p class="lead">Use this dashboard to manage various aspects of your application including Attractions, Flights, Stays, Cars, and Customers.</p>
      <p class="info-note">This dashboard uses REST API to send information to the application.</p>
    </div>

    <section id="attractions">
      <div class="section-title">
        <h2>Attractions</h2>
      </div>
      <div class="section-content">
        <p>Manage the attractions here.</p>
      </div>
    </section>

    <section id="flights">
      <div class="section-title">
        <h2>Flights</h2>
      </div>
      <div class="section-content">
        <p>Manage the flights here.</p>
      </div>
    </section>

    <section id="stays">
      <div class="section-title">
        <h2>Stays</h2>
      </div>
      <div class="section-content">
        <p>Manage the stays here.</p>
      </div>
    </section>

    <section id="cars">
      <div class="section-title">
        <h2>Cars</h2>
      </div>
      <div class="section-content">
        <p>Manage the cars here.</p>
      </div>
    </section>

    <section id="customers">
      <div class="section-title">
        <h2>Customers</h2>
      </div>
      <div class="section-content">
        <p>Manage the customers here.</p>
      </div>
    </section>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection