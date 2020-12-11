@extends('layouts.main')

@section('content')

<style>
.cart-page-product-header{

    -moz-box-align: center;
    align-items: center;
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.05);
    overflow: hidden;
    border-radius: 3px;
    height: 5.5rem;
    font-size: 1.4rem;
    background: #fff;
    text-transform: capitalize;
    margin: 20px 0 12px;
    color: #888;
    padding: 0 20px;

}
.cart-page-product{

-moz-box-align: center;
align-items: center;
box-shadow: 0 1px 1px 0 rgba(0,0,0,.05);
overflow: hidden;
border-radius: 3px;
height: 15.5rem;
font-size: 1.4rem;
background: #fff;
text-transform: capitalize;
margin: 20px 0 12px;
color: #888;
padding: 0 20px;
}

.cart-page-total{

-moz-box-align: center;
align-items: center;
box-shadow: 0 1px 1px 0 rgba(0,0,0,.05);
overflow: hidden;
border-radius: 3px;
height: 9.5rem;
font-size: 1.4rem;
background: #fff;
text-transform: capitalize;
margin: 20px 0 12px;
color: #888;
padding: 0 20px;
}

</style>
<div class="container">
	<div class="cart-page-product-header">
	<div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-4 col-sm-6 col-xs-8 tile_stats_count">
              <span class="count_top"><i class="fa fa-package"></i> Package</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Date</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-money"></i> Price</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"> Total</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"> Action</span>
            </div>
          </div>
	</div>
	</div>
		
		<div class="cart-page-product">
			<div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <img src="{{ asset ('theme/img/wedding.jpg')}}" width="150" height="150">
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
			<a class="shoppe-search-user" href="#">
			  <div class="shopee-search-user-item__nickname" >Emeralda</div>
			  
			</a>
            </div>
			
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top">03-05-2018</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top">Rp 50000</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top">Rp 50000</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
			<span class="count_top"> 
			  <i class="fa fa-trash"></i> 
			  	<a class="shoppe-search-user" href="#">
			  		Hapus
				</a>
			</span>
            </div>
          </div>
	</div>
	</div>

	<div class="cart-page-total">
			<div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-4 col-sm-6 col-xs-8 tile_stats_count">
              <span class="count_top"></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"></span>
            </div>
           
            <div class="cart-page-footer__summary">  
			 <div class="cart-page-footer__first-summary">
				<div class="cart-page-footer-summary__subtotal cart-page-footer-summary__subtotal--opc" style="display: flex;">
					<div class="cart-page-footer-summary__subtotal-text">Subtotal untuk Produk :</div>
						<div class="cart-page-footer-summary__subtotal-amount" style="color: #ff5722; font-size: 3rem; line-height: 3rem; margin-left: .5rem;">Rp 50000</div>
					</div>
				</div>
			</div>
			<div class="cart-page-footer__checkout">
				<button class="btn btn-danger" style="padding: 1.3rem 3.6rem;margin: 0 2.2rem 0 1.5rem;">
					<span class="cart-page-footer__checkout-text">checkout</span>
				</button>
			</div>
		  </div>
	</div>
	</div>
		
</div>

 
@endsection