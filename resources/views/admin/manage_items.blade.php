@include('admin.includes.nav')
       <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
					
			<!-- Row -->
            <div class="row">
                    <div class="pull-right">
                            <a href="{{route('add_item')}}" class="btn btn-success">Add Item <i class="fa fa-plus"></i></a>
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
                                @elseif(session()->get('purchased'))
                                <div class="alert alert-success alert-dismissable col-sm-6">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <i class="zmdi zmdi-info-outline pr-15 pull-left"></i><p class="pull-left">{{ session()->get('purchased') }}</p> 
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
                                <h6 class="panel-title txt-dark">Items List</h6>
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
                                                    <th>Item Name</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                            <th>Item Name</th>
                                                            <th>Price</th>
                                                            <th>Quantity</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach($items as $item)
                                                <tr>
                                                    <td>{{$item->item_name}}</td>
                                                    <td>{{$item->price}}</td>
                                                    <td>{{$item->quantity}}</td>
                                                    @if($item->status == 'High Quantity')
                                                    <td>
                                                        <span class="label label-success">High Quantity</span>
                                                    </td>
                                                    <td>
                                                            <a href="#" class="btn btn-success btn-rounded" disabled="true">Request Purchase</a> 
                                                         </td>
                                                    @elseif($item->status == 'Low Quantity')
                                                    <td>
                                                            <span class="label label-warning">Low Quantity</span>
                                                        </td>
                                                        <td>
                                                           <a href="{{route('request_purchase',$item->id)}}" class="btn btn-success btn-rounded">Request Purchase</a> 
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
            </div>
            <!-- /Row -->
            
                <!--Row-->
                 
                <!--Row-->
            </div>
            @include('admin.includes.footer')