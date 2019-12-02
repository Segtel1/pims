@include('admin.includes.nav')
       <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
					
							<!-- Row -->
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default card-view">
                                            <div class="panel-heading">
                                                <div class="pull-left">
                                                    <h6 class="panel-title txt-dark">Invoice</h6>
                                                </div>
                                                <div class="pull-right">
                                                    <h6 class="txt-dark">Order # 12345</h6>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <span class="txt-dark head-font inline-block capitalize-font mb-5">Billed to:</span>
                                                            <address class="mb-15">
                                                                <span class="address-head mb-5">{{$customer_name}}</span>
                                                            </address>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <address>
                                                                <span class="txt-dark head-font capitalize-font mb-5">Payment Method:</span>
                                                                <br>
                                                               {{$payment_method}}<br>
                                                           
                                                            </address>
                                                        </div>
                                                        <div class="col-xs-6 text-right">
                                                            <address>
                                                                <span class="txt-dark head-font capitalize-font mb-5">order date:</span><br>
                                                                {{$date}}<br><br>
                                                            </address>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="seprator-block"></div>
                                                    
                                                    <div class="invoice-bill-table">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Item</th>
                                                                        <th>Price (&#8358;)</th>
                                                                        <th>Quantity</th>
                                                                        <th>Totals</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>{{$product1}}</td>
                                                                        <td>{{$price1->price}}</td>
                                                                        <td>{{$qty1}}</td>
                                                                        <td>{{$price1->price * $qty1}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>{{$product2}}</td>
                                                                        <td>{{$price2->price}}</td>
                                                                        <td>{{$qty2}}</td>
                                                                        <td>{{$price2->price * $qty2}}</td>
                                                                     </tr>
                                                                    <tr>
                                                                        <td>{{$product3}}</td>
                                                                        <td>{{$price3->price}}</td>
                                                                        <td>{{$qty3}}</td>
                                                                        <td>{{$price3->price * $qty3}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>{{$product4}}</td>
                                                                        <td>{{$price4->price}}</td>
                                                                        <td>{{$qty4}}</td>
                                                                        <td>{{$price4->price * $qty4}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td>{{$product5}}</td>
                                                                      <td>{{$price5->price}}</td>
                                                                      <td>{{$qty5}}</td>
                                                                      <td>{{$price5->price * $qty5}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                       <td>{{$product6}}</td>
                                                                       <td>{{$price6->price}}</td>
                                                                       <td>{{$qty6}}</td>
                                                                     <td>{{$price6->price * $qty6}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><strong>Total &#8358;</strong></td>
                                                                        <td>$10.99</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="pull-right">
                                                            <button type="button" class="btn btn-success btn-outline btn-icon left-icon" onclick="javascript:window.print();"> 
                                                                <i class="fa fa-print"></i><span> Print</span> 
                                                            </button>
                                                        </div>
                                                        <div class="clearfix"></div>
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