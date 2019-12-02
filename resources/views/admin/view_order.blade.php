@include('admin.includes.nav')
       <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
					
			<!-- Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Purchase Order</h6>
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
                                                    @if($item->status == 'Pending')
                                                    <td>
                                                        <span class="label label-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('confirm_order', $item->id)}}" class="pr-10" title="Confirm"><i class="zmdi zmdi-check"></i> Confirm</a> 
                                                     </td>
                                                    @elseif($item->status == 'Received')
                                                    <td>
                                                            <span class="label label-success">Received</span>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="pr-10" title="Confirm" style="display:none;"><i class="zmdi zmdi-check"></i> Confirm</a> 
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