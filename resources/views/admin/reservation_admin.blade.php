<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.header_admin');
</head>

<body>
    <div class="container-scroller">

        @include('admin.navbar');

        <div class="container-fluid page-body-wrapper">
            @include('admin.topnavbar');

            <div class="main-panel">
                <div class="content-wrapper">
                  <div class="page-header">
                    <h3 class="page-title"> Basic Tables </h3>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                      </ol>
                    </nav>
                  </div>
                  <div class="row">

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Bordered table</h4>
                            <p class="card-description"> Add class <code>.table-bordered</code>
                            </p>
                            <div class="table-responsive">
                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th style="color: #00d9ff"> # </th>
                                    <th style="color: #00d9ff"> Guest Name </th>
                                    <th style="color: #00d9ff"> Guest Email </th>
                                    <th style="color: #00d9ff"> Guest Phone </th>
                                    <th style="color: #00d9ff"> Number Of Guests </th>
                                    <th style="color: #00d9ff"> Date </th>
                                    <th style="color: #00d9ff"> Time </th>
                                    <th style="color: #00d9ff"> Guest Message </th>
                                    <th style="color: #00d9ff"> Actions </th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $reservation)

                                    <tr>
                                      <td>{{ $reservation->id }}</td>
                                      <td>{{ $reservation->guest_name }}</td>
                                      <td>{{ $reservation->guest_email }}</td>
                                      <td>{{ $reservation->guest_phone }}</td>
                                      <td>{{ $reservation->number_of_guests }}</td>
                                      <td>{{ $reservation->date }}</td>
                                      <td>{{ $reservation->time }}</td>
                                      <td>{{ $reservation->guest_message }}</td>
                                      <td>

                                        <a href="{{ url('/delete_reservation',$reservation->id) }}">
                                            <button type="button" class="btn btn-inverse-danger btn-sm">Delete</button>
                                        </a>
                                      </td>

                                    </tr>

                                    @endforeach
                                  </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                    </div>

                  </div>
                </div>
                <!-- content-wrapper ends -->

            </div>
              <!-- main-panel ends -->

        </div>
        <!-- page-body-wrapper ends -->

    </div>
    <!-- container-scroller -->

    @include('admin.footer_admin');

</body>

</html>
