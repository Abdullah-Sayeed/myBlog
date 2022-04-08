@extends("admin.layouts.Master")

@section("content-body")
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Category</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Category</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"> Category Form </h2>
                        </div>

                        <div class="card-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" placeholder="Ex. Electronics" name="title">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>

                            </form>
                        </div>
                    </div>    

                </div>
                <div class="col-lg-8">
                    
                <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"> All Categories</h2>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Electronics</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>    


                </div>
            </div>
        </div>
      </section>

@endsection

@section("title")
    New Category
@endsection


@section("js")
    <script>
        $(function(){
            alert("Welcome to New Category Page");
        });
    </script>
@endsection