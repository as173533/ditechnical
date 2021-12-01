@extends('layouts.main') 
@section('css')
<style>

</style>
@endsection
@section('content')
<!--------------------breadcrumb ---------------------->
<section class="breadcrumb about-us-b">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-title-div">
                    <div class="bread-left-side">
                        <h2>Wishlist</h2>
                    </div>
                    <div class="breadcrumb-ul right-side">
                        <ul>
                            <li><a href="{{route('/')}}">HOME</a>/</li>
                            <li><span>Wishlist</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------- //breadcrumb ------------------->

<!---------------------wishlist----------------------->
<section class="wishlist">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-10 offset-sm-1 offset-md-1">
              <div style="overflow-x:auto;">
                  <table class="table my-wishlist-table">
                     <thead>
                        <tr class="my-wish-head">
                            <th>My Wishlist <span>(35)</span></th>
                            <th></th>
                            <th></th>
                        </tr> 
                         
                     </thead>
                     <tbody>
                         <tr class="my-wish-body">
                            <td><img src="/public/frontend/images/cart-1.jpg" alt="image" class="course-image" width="60px"></td> 
                            <td class="courses-name">
                                <p>Advance Diploma In Computer Application</p>
                                <p class="price">₹16,999</p>
                            </td> 
                            <td class="remove-product"><i class="icofont-ui-delete"></i></td> 
                         </tr>
                         
                         <tr class="my-wish-body">
                            <td><img src="/public/frontend/images/cart-1.jpg" alt="image" class="course-image" width="60px"></td> 
                            <td class="courses-name">
                                <p>Advance Diploma In Computer Application</p>
                                <p class="price">₹16,999</p>
                            </td> 
                            <td class="remove-product"><i class="icofont-ui-delete"></i></td> 
                         </tr>
                     </tbody>
                  </table>
              </div>    
            </div>
        </div>
    </div>
</section>
<!-------------------//wishlist----------------------->
@stop
@section('js')

@endsection