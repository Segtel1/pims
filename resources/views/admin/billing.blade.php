@include('admin.includes.nav')
<style>
    #show-onclick{
        display:none;
    }
</style>
        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">		
				<!-- Row -->
				<div class="row">
					
					<div class="col-lg-12 col-xs-12">
							<div class="panel panel-default card-view">
									<div class="panel-heading">
										<div class="pull-left">
											<h5 class="panel-title txt-dark">Create Invoice</h5>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="panel-wrapper collapse in">
										<div class="panel-body">
											<div class="form-wrap">
												<form action="{{route('invoice')}}" method="GET">
                                                    @method("GET")
                                                    <div class="row">
                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
														@csrf	
														<label class="control-label mb-10" for="email_de">Choose Customer</label>
															<select name="customer_name" id="" class="form-control">
                                                                @foreach($customers as $customer)
                                                                <option value="{{$customer->firstname}}">{{$customer->firstname}}</option>
                                                                @endforeach
                                                            </select>
													</div>
													<div class="col-md-4 col-sm-12 col-xs-12 form-group">
														@csrf	
														<label class="control-label mb-10" for="email_de">Choose Payment Method</label>
															<select name="payment_method" id="" class="form-control">
                                                                <option value="Credit Transfer">Credit Transfer</option>
                                                                <option value="Cash">Cash</option>
                                                                <option value="P.O.S">P.O.S</option>
                                                                <option value="Cheque">Cheque</option>
                                                            </select>
													</div>
													<div class="col-md-4 col-sm-12 col-xs-12 form-group">
														@csrf	
														<label class="control-label mb-10" for="email_de">Order Date</label>
															<input type="date" class="form-control" name="date" id="email_de">
                                                    </div>
                                                </div>
                                                    <div class="row">
                                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
														@csrf	
														<label class="control-label mb-10" for="email_de">Select Product</label>
															<select name="product1" id="" class="form-control">
                                                                <option value="">--- Choose Product ---</option>
                                                                @foreach($items as $item)
                                                                <option value="{{$item->item_name}}">{{$item->item_name}}</option>
                                                                @endforeach 
                                                            </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
														<label class="control-label mb-10">Quantity : </label>
														<div class="input-group bootstrap-touchspin">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default bootstrap-touchspin-down" type="button">-</button></span>
                                                                <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                                                <input id="tch3_22" type="text" name="qty1" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default" class="form-control" style="display: block;">
                                                                <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span></div>
                                                    </div>
                                                    
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
														@csrf	
														<label class="control-label mb-10" for="email_de">Select Product</label>
                                                        <select name="product2" id="" class="form-control">
                                                                <option value="">--- Choose Product ---</option>
                                                                @foreach($items as $item)
                                                                <option value="{{$item->item_name}}">{{$item->item_name}}</option>
                                                                @endforeach 
                                                            </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
														<label class="control-label mb-10">Available Quantity : </label>
														<div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input id="tch3_22" type="text" value="" name="qty2" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default" class="form-control" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
														@csrf	
														<label class="control-label mb-10" for="email_de">Select Product</label>
                                                        <select name="product3" id="" class="form-control">
                                                                <option value="">--- Choose Product ---</option>
                                                                @foreach($items as $item)
                                                                <option value="{{$item->item_name}}">{{$item->item_name}}</option>
                                                                @endforeach 
                                                            </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
														<label class="control-label mb-10">Available Quantity : </label>
														<div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input id="tch3_22" type="text" value="" name="qty3" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default" class="form-control" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                                        @csrf	
                                                        <label class="control-label mb-10" for="email_de">Select Product</label>
                                                        <select name="product4" id="" class="form-control">
                                                                <option value="">--- Choose Product ---</option>
                                                                @foreach($items as $item)
                                                                <option value="{{$item->item_name}}">{{$item->item_name}}</option>
                                                                @endforeach 
                                                            </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
														<label class="control-label mb-10">Available Quantity : </label>
														<div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input id="tch3_22" type="text" value="" name="qty4" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default" class="form-control" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span></div>
                                                    </div>
                                                </div>
                                             <!--Hidden product form-->
                                              <div class="row" id="show-onclick">
                                                    <div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
														@csrf	
														<label class="control-label mb-10" for="email_de">Select Product</label>
                                                        <select name="product5" id="" class="form-control">
                                                                <option value="">--- Choose Product ---</option>
                                                                @foreach($items as $item)
                                                                <option value="{{$item->item_name}}">{{$item->item_name}}</option>
                                                                @endforeach 
                                                            </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
														<label class="control-label mb-10">Available Quantity : </label>
														<div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input id="tch3_22" type="text" value="" name="qty5" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default" class="form-control" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span></div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
														@csrf	
														<label class="control-label mb-10" for="email_de">Select Product</label>
                                                        <select name="product6" id="" class="form-control">
                                                                <option value="">--- Choose Product ---</option>
                                                                @foreach($items as $item)
                                                                <option value="{{$item->item_name}}">{{$item->item_name}}</option>
                                                                @endforeach 
                                                            </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
														<label class="control-label mb-10">Available Quantity : </label>
														<div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input id="tch3_22" type="text" value="" name="qty6" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default" class="form-control" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span></div>
                                                    </div>
                                                </div>

                                                </div>
                                                <!--Hidden form-->

                                                <!--Hidden button-->
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <button type="button" class="btn btn-default btn-icon left-icon" id="additional-form"> <i class="fa fa-plus"></i>
                                                             <span>Add More Products</span></button>
                                                        </div>
                                                    <!--Hidden button-->  
                                                    <br> <br> <br>
													<div class="col-md-12 col-sm-12 col-xs-12 form-group">
														<button type="submit" class="btn btn-success btn-anim"><i class="fa fa-shopping-cart"></i><span class="btn-text">Generate Invoice</span></button>
													</div>	
												</form>
											</div>
										</div>
									</div>
								</div>
							
					</div>
				</div>
				<!-- /Row -->
            </div>

            @include('admin.includes.footer')
