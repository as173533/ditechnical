@extends('layouts.main')
@section('css')
<style>

</style>
@stop
@section('content')
<!--------------------banner ---------------------->
<section class="breadcrumb about-us-b">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-title-div">
                    <div class="bread-left-side">
                        <h2>Gallery</h2>
                    </div>
                    <div class="breadcrumb-ul right-side">
                        <ul>
                            <li><a href="/">HOME</a>/</li>
                            <li><span>Gallery</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //end banner -->
<!--------------------------------Main content Start--------------------------->
<section class="main-content">
    <section class="gallerys">
        <div class="container">
            <h3 class="student-placed-title">Our <span class="theme-colour">Gallery</span></h3>	
            <!--<div class="portfolio">-->
            <!--    @forelse($gallries as $gallery)-->
            <!--    <a href="#" class="card-1">-->
            <!--        <div class="image">-->
            <!--            <img src="{{asset('public/uploads/gallery/'.$gallery->image)}}" alt="" />-->
            <!--        </div>-->
            <!--    </a>-->
            <!--    @empty-->
            <!--    @endforelse-->
                
            <!--</div>-->
            
            <div class="row gallery-row">
			  <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
				<img src="https://unsplash.it/600.jpg?image=251" class="img-fluid rounded">
			  </a>
			  <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
				<img src="https://unsplash.it/600.jpg?image=252" class="img-fluid rounded">
			  </a>
			  <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
				<img src="https://unsplash.it/600.jpg?image=253" class="img-fluid rounded">
			  </a>
			  <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
				<img src="https://unsplash.it/600.jpg?image=253" class="img-fluid rounded">
			  </a>
			</div>
			<div class="row gallery-row">
			  <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
				<img src="https://unsplash.it/600.jpg?image=254" class="img-fluid rounded">
			  </a>
			  <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
				<img src="https://unsplash.it/600.jpg?image=255" class="img-fluid rounded">
			  </a>
			  <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
				<img src="https://unsplash.it/600.jpg?image=256" class="img-fluid rounded">
			  </a>
			  <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
				<img src="https://unsplash.it/600.jpg?image=256" class="img-fluid rounded">
			  </a>
			</div>
        </div>
    </section>   
</section>
<!----------------------------------Main content End--------------------------->

@stop
@section('js')

@stop