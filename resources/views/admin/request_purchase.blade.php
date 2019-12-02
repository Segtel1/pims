@include('admin.includes.nav')
        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">		
				<!-- Row -->
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-8 col-xs-12">
							<div class="panel panel-default card-view">
									<div class="panel-heading">
										<div class="pull-left">
											<h6 class="panel-title txt-dark">Request Purchase</h6>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="panel-wrapper collapse in">
										<div class="panel-body">
											<div class="form-wrap">
                                                <form action="{{route('update_purchase',$item->id)}}" method="POST">
                                                    @method("PATCH")
													<div class="col-md-6 col-sm-12 col-xs-12 form-group">
														@csrf	
														<label class="control-label mb-10" for="email_de">Item Name</label>
															<input type="text" class="form-control" name="item_name" id="email_de" value="{{$item->item_name}}">
													</div>
													<div class="col-md-6 col-sm-12 col-xs-12 form-group">
														@csrf	
														<label class="control-label mb-10" for="email_de">Price Per Unit</label>
															<input type="text" class="form-control" name="price" id="email_de" value="{{$item->price}}">
													</div>
													<div class="col-md-6 col-sm-12 col-xs-12 form-group">
														@csrf	
														<label class="control-label mb-10" for="email_de">Quantity</label>
															<input type="text" class="form-control" name="quantity" id="email_de" placeholder="Enter Quantity">
													</div>
													<div class="col-md-6 col-sm-12 col-xs-12 form-group">
														<button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">submit</span></button>
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
