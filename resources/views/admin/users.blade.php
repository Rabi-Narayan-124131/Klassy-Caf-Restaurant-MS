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

                    <div class="col-lg-12 stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Table with contextual classes</h4>
                          <p class="card-description"> Add class <code>.table-{color}</code>
                          </p>
                          <div class="table-responsive">
                            <table class="table table-bordered table-contextual">
                              <thead>
                                <tr>
                                  <th> # </th>
                                  <th> Name </th>
                                  <th> Email </th>
                                  <th> Action </th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($data as $user)

                                <tr>
                                  <td>{{ $user->id }}</td>
                                  <td>{{ $user->name }}</td>
                                  <td>{{ $user->email }}</td>
                                  @if ($user->user_type == '0')
                                  <td>
                                    <a href="{{ url('/edit_user') }}">
                                        <button type="button" class="btn btn-inverse-info btn-sm">Edit</button>
                                    </a>
                                    <a href="{{ url('/delete_user',$user->id) }}">
                                        <button type="button" class="btn btn-inverse-danger btn-sm">Delete</button>
                                    </a>
                                  </td>
                                  @else
                                  <td>

                                        <button type="button" class="btn btn-inverse-warning btn-sm">Not Allowed</button>

                                  </td>
                                  @endif


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
