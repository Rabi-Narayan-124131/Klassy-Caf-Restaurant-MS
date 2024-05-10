<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">

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
                          <form class="forms-sample" action="{{ url('/update_food_menu',$data->id) }}" method="post" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group row">
                                <label for="exampleInputImage" class="col-sm-3 col-form-label">Old Food Image</label>
                                <div class="input-group col-xs-4">
                                    <img height="100" width="100" src="/food_menu-images/{{ $data->food_image }}">

                                </div>
                                <label for="exampleInputImage" class="col-sm-3 col-form-label">New Food Image</label>
                                <div class="input-group col-xs-4">
                                    <input type="file" style="color: white" name="food_image" class="form-control file-upload-info">

                                  </div>
                            </div>
                            <div class="form-group row">
                              <label for="exampleInputFoodName" class="col-sm-3 col-form-label">Food Name</label>
                              <div class="col-sm-9">
                                <input type="text" style="color: black" class="form-control" id="exampleInputUsername2" name ="food_name" value="{{ $data->food_name }}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="exampleInputFoodPrice" class="col-sm-3 col-form-label">Food Price</label>
                              <div class="col-sm-9">
                                <input type="text" style="color: black" class="form-control" name="food_price" id="exampleInputFoodPrice" value="{{ $data->food_price }}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="exampleInputFoodDescription" class="col-sm-3 col-form-label">Food Description</label>
                              <div class="col-sm-9">
                                <textarea class="form-control" name="food_description" id="exampleInputFoodDescription" rows="4">{{ $data->food_description }}</textarea>
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
