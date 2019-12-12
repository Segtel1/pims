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
                                                    <h6 class="txt-dark">Order No: 0023AF</h6>
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
                                                            <table class="table table-hover" id="sum_table">
                                                                <thead>
                                                                    <tr class="titlerow">
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
                                                                        <td class="price">{{$price1->price * $qty1}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>{{$product2}}</td>
                                                                        @if(!empty($product2))
                                                                        <td>{{$price2->price}}</td>
                                                                        @elseif(empty($product2))
                                                                        <td>-</td>
                                                                        @endif
                                                                        <td>{{$qty2}}</td>
                                                                        @if(!empty($product2))
                                                                        <td class="price">{{$price2->price * $qty2}}</td>
                                                                        @elseif(empty($product2))
                                                                        <td>-</td>
                                                                        @endif
                                                                     </tr>
                                                                    <tr>
                                                                        <td>{{$product3}}</td>
                                                                        @if(!empty($product3))
                                                                        <td>{{$price3->price}}</td>
                                                                        @elseif(empty($product3))
                                                                        <td>-</td>
                                                                        @endif
                                                                        <td>{{$qty3}}</td>
                                                                        @if(!empty($product3))
                                                                        <td class="price">{{$price3->price * $qty3}}</td>
                                                                        @elseif(empty($product3))
                                                                        <td>-</td>
                                                                        @endif
                                                                    </tr>
                                                                    <tr>
                                                                        <td>{{$product4}}</td>
                                                                        @if(!empty($product4))
                                                                        <td>{{$price4->price}}</td>
                                                                        @elseif(empty($product4))
                                                                        <td>-</td>
                                                                        @endif
                                                                        <td>{{$qty4}}</td>
                                                                        @if(!empty($product4))
                                                                        <td class="price">{{$price4->price * $qty4}}</td>
                                                                        @elseif(empty($product4))
                                                                        <td>-</td>
                                                                        @endif
                                                                    </tr>
                                                                    <tr>
                                                                      <td>{{$product5}}</td>
                                                                      @if(!empty($product5))
                                                                      <td>{{$price5->price}}</td>
                                                                      @elseif(empty($product5))
                                                                      <td>-</td>
                                                                      @endif
                                                                      <td>{{$qty5}}</td>
                                                                      @if(!empty($product5))
                                                                      <td class="price">{{$price5->price * $qty5}}</td>
                                                                      @elseif(empty($product5))
                                                                      <td>-</td>
                                                                      @endif
                                                                    </tr>
                                                                    <tr>
                                                                       <td>{{$product6}}</td>
                                                                        @if(!empty($product6))
                                                                       <td>{{$price6->price}}</td>
                                                                       @elseif(empty($product6))
                                                                       <td>-</td>
                                                                       @endif
                                                                       <td>{{$qty6}}</td>
                                                                       @if(!empty($product6))
                                                                       <td class="price">{{$price6->price * $qty6}}</td>
                                                                       @elseif(empty($product6))
                                                                       <td>-</td>
                                                                       @endif
                                                                    </tr>
                                                                    <tr class="totalColumn">
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><strong>Total &#8358;</strong></td>
                                                                        <td class="totalCol"></td>
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