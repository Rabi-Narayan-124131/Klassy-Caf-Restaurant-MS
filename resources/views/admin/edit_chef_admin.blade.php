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
                          <form class="forms-sample" action="{{ url('/update_chef',$data->id) }}" method="post" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group row">
                                <label for="exampleInputImage" class="col-sm-3 col-form-label">Old Chef Image</label>
                                <div class="input-group col-xs-4">
                                    <img height="100" width="100" src="/chef-images/{{ $data->chef_image }}">

                                </div>
                                <label for="exampleInputChefImage" class="col-sm-3 col-form-label">Chef Image</label>
                                <div class="input-group col-xs-12">
                                  <input type="file" style="color: white" name="chef_image" class="form-control file-upload-info" >

                                </div>
                            </div>

                            <div class="form-group row">
                              <label for="exampleInputChefName" class="col-sm-3 col-form-label">Chef Name</label>
                              <div class="col-sm-9">
                                <input type="text" style="color: black" class="form-control" id="exampleInputChefName" name ="chef_name" placeholder="Chef Name" value="{{ $data->chef_name }}" required>
                              </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputChefSpeciality" class="col-sm-3 col-form-label">Chef Speciality</label>
                                <div class="col-sm-9">
                                  <input type="text" style="color: black" class="form-control" id="exampleInputChefSpeciality" name ="chef_speciality" placeholder="Chef Speciality" value="{{ $data->chef_speciality }}" required>
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
