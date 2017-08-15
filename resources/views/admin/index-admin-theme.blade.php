@extends('themes.pages.layouts-theme')
@section('content')
 <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button type="button" class="btn btn-info btn-circle" data-toggle="modal" data-target="#add_type_product"><i class="fa fa-plus"></i></button>
                            Type products
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>
                                        		<button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                                        		<button type="button" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></button>
                                        		<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-edit"></i></button>
                                        		<button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
                                        	</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>
                                        		<button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                                        		<button type="button" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></button>
                                        		<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-edit"></i></button>
                                        		<button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
                                        	</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>
                                        		<button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                                        		<button type="button" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></button>
                                        		<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-edit"></i></button>
                                        		<button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
                                        	</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
</div>
	<!-- Trigger the modal with a button -->


<!-- Modal -->
<form action="{{ route('type-product.store') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div id="add_type_product" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New Type Product</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <label>Name type product</label>
                    <input class="form-control" name="name" placeholder="Enter text" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label>File input</label>
                    <input name="image" type="file">
                </div>
                <div>
                    <input type="submit" class="btn btn-outline btn-primary" value="Submit" />
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
        </div>
    </div>
</form>

@endsection
