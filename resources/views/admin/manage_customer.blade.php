@include('admin.includes.nav')
       <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
					
			<!-- Row -->
            <div class="row">
                    <div class="pull-right">
                            <a href="{{route('add_customer')}}" class="btn btn-success">Add Customer <i class="fa fa-plus"></i></a>
                    </div>			
                        <br> <br> <br>
                        @if(session()->get('success'))
                        <div class="alert alert-success alert-dismissable col-sm-6">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <i class="zmdi zmdi-info-outline pr-15 pull-left"></i><p class="pull-left">{{ session()->get('success') }}</p> 
                                <div class="clearfix"></div>
                            </div>
                            @elseif(session()->get('updated'))
                            <div class="alert alert-success alert-dismissable col-sm-6">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <i class="zmdi zmdi-info-outline pr-15 pull-left"></i><p class="pull-left">{{ session()->get('updated') }}</p> 
                                    <div class="clearfix"></div>
                                </div>
                            @elseif(session()->get('delete'))
                            <div class="alert alert-danger alert-dismissable col-sm-6">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <i class="zmdi zmdi-info-outline pr-15 pull-left"></i><p class="pull-left">{{ session()->get('delete') }}</p> 
                                    <div class="clearfix"></div>
                                </div>
                            @endif
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Customers List</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table id="datable_1" class="table table-hover display  pb-30" >
                                            <thead>
                                                <tr>
                                                    <th>Fullname</th>
                                                    <th>Email</th>
                                                    <th>Contact</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Fullname</th>
                                                    <th>Email</th>
                                                    <th>Contact</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach($customers as $customer)
                                                <tr>
                                                    <td>{{$customer->lastname}}</td>
                                                    <td>{{$customer->email}}</td>
                                                    <td>{{$customer->contact}}</td>
                                                    <td>
                                                            <a href="{{route('edit_customer', $customer->id)}}" class="pr-10" title="Edit"><i class="zmdi zmdi-edit"></i></a> 
                                                            <a href="{{route('delete_customer', $customer->id)}}" class="text-inverse" title="Delete" type="submit"><i class="zmdi zmdi-delete"></i></a>
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
            </div>
            <!-- /Row -->
            
                <!--Row-->
                 
                <!--Row-->
            </div>
            @include('admin.includes.footer')