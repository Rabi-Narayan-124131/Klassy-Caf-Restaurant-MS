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
                                    <th style="color: #00d9ff"> User Name </th>
                                    <th style="color: #00d9ff"> User Email </th>
                                    <th style="color: #00d9ff"> User Phone </th>
                                    <th style="color: #00d9ff"> User City </th>
                                    <th style="color: #00d9ff"> User State </th>
                                    <th style="color: #00d9ff"> User Address </th>
                                    <th style="color: #00d9ff"> Food Name </th>
                                    <th style="color: #00d9ff"> Food Price </th>
                                    <th style="color: #00d9ff"> Food Quantity </th>
                                    <th style="color: #00d9ff"> Total Price </th>
                                    <th style="color: #00d9ff"> Actions </th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $order_details)

                                    <tr>
                                      <td>{{ $order_details->id }}</td>
                                      <td>{{ $order_details->user_name }}</td>
                                      <td>{{ $order_details->user_email }}</td>
                                      <td>{{ $order_details->user_phone }}</td>
                                      <td>{{ $order_details->user_city }}</td>
                                      <td>{{ $order_details->user_state }}</td>
                                      <td>{{ $order_details->user_address }}</td>
                                      <td>{{ $order_details->food_name }}</td>
                                      <td>${{ $order_details->food_price }}</td>
                                      <td>{{ $order_details->food_quantity }}</td>
                                      <td>${{ $order_details->food_price * $order_details->food_quantity }}</td>
                                      <td>

                                        <a href="{{ url('/delete_order',$order_details->id) }}">
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
