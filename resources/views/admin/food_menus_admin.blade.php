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
                    <h3 class="page-title"> Form elements </h3>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                      </ol>
                    </nav>
                  </div>
                  <div class="row">

                    <div class="col-md-8 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Horizontal Form</h4>
                          <p class="card-description"> Horizontal form layout </p>
                          <form class="forms-sample" action="{{ url('/upload_food_menu') }}" method="post" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group row">
                                <label for="exampleInputImage" class="col-sm-3 col-form-label">Food Image</label>
                                <div class="input-group col-xs-12">
                                  <input type="file" style="color: white" name="food_image" class="form-control file-upload-info" required>
                                  {{-- <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                  </span> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                              <label for="exampleInputFoodName" class="col-sm-3 col-form-label">Food Name</label>
                              <div class="col-sm-9">
                                <input type="text" style="color: black" class="form-control" id="exampleInputUsername2" name ="food_name" placeholder="Food Name" required>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="exampleInputFoodPrice" class="col-sm-3 col-form-label">Food Price</label>
                              <div class="col-sm-9">
                                <input type="text" style="color: black" class="form-control" name="food_price" id="exampleInputFoodPrice" placeholder="Food Price" required>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="exampleInputFoodDescription" class="col-sm-3 col-form-label">Food Description</label>
                              <div class="col-sm-9">
                                <textarea class="form-control" name="food_description" id="exampleInputFoodDescription" rows="4" placeholder="Food Description" required></textarea>
                              </div>

                            </div>

                            <div class="form-check form-check-flat form-check-primary">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input"> Remember me <i class="input-helper"></i></label>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-dark">Cancel</button>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Basic Table</h4>
                            <p class="card-description"> Add class <code>.table</code>
                            </p>
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th style="color: cyan"> Food Image </th>
                                    <th style="color: cyan"> Food Name </th>
                                    <th style="color: cyan"> Food Price </th>
                                    <th style="color: cyan"> Food Description </th>
                                    <th style="color: cyan"> Actions </th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $food_menu)

                                    <tr>

                                      <td><img height="75" width="75" src="/food_menu-images/{{ $food_menu->food_image }}"></td>
                                      <td>{{ $food_menu->food_name }}</td>
                                      <td>${{ $food_menu->food_price }}</td>
                                       <td>{{ $food_menu->food_description }}</td>
                                      <td>
                                        <a href="{{ url('/edit_food_menu',$food_menu->id) }}">
                                            <button type="button" class="btn btn-inverse-info btn-sm">Edit</button>
                                        </a>
                                        <a href="{{ url('/delete_food_menu',$food_menu->id) }}">
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

                <!-- partial -->
            </div>
              <!-- main-panel ends -->

        </div>
        <!-- page-body-wrapper ends -->

    </div>
    <!-- container-scroller -->

    @include('admin.footer_admin');

</body>

</html>
