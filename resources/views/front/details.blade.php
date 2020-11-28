@extends('front.layouts.master')

@section('content')
               <section id="entity_section" class="entity_section">
                  <div class="container">
                     <div class="row">
                     	<!-- Content -->
                        <div class="col-md-8">

                        	<!-- Content -->
                           <div class="entity_wrapper">

                           	<!-- Main Content -->
               					@include('front.layouts.components.details.content')

                           </div>

                           <!-- Related news -->
               				@include('front.layouts.components.details.related-news')

                           <!--Advertisement-->
                           <div class="widget_advertisement">
                              <img class="img-responsive" src="{{ asset('front/img/category_advertisement.jpg') }}" alt="feature-top">
                           </div>

                           <!--Readers Comment-->
               				@include('front.layouts.components.details.readers-comment')
                           
									<!--Advertisement-->
                           <div class="widget_advertisement">
                              <img class="img-responsive" src="{{ asset('front/img/category_advertisement.jpg') }}" alt="feature-top">
                           </div>
                           
                           <!--Entity Comments -->
               				@include('front.layouts.components.details.add-comments')
                           
                        </div>
                        <!-- End Content -->

                     <!-- Side Content -->
                     <div class="col-md-4">

                        <!-- Popular News -->
               			@include('front.layouts.shared.side-popular-news')

                        <!-- Advertisement -->
                        <div class="widget hidden-xs m30">
                           <img class="img-responsive adv_img" src="{{ asset('front/img/right_add1.jpg') }}" alt="add_one">
                           <img class="img-responsive adv_img" src="{{ asset('front/img/right_add2.jpg') }}" alt="add_one">
                           <img class="img-responsive adv_img" src="{{ asset('front/img/right_add3.jpg') }}" alt="add_one">
                           <img class="img-responsive adv_img" src="{{ asset('front/img/right_add4.jpg') }}" alt="add_one">
                        </div>

                        <div class="widget hidden-xs m30">
                           <img class="img-responsive widget_img" src="{{ asset('front/img/right_add5.jpg') }}" alt="add_one">
                        </div>

                        <!-- Reviews -->
               			@include('front.layouts.shared.side-reviews')

                        <!-- Advertisement -->
                        <div class="widget hidden-xs m30">
                           <img class="img-responsive widget_img" src="{{ asset('front/img/right_add6.jpg') }}" alt="add_one">
                        </div>

                        <!-- Most Commented -->
               			@include('front.layouts.shared.side-most-commented')

                        <!-- Editor Corner -->
               			@include('front.layouts.shared.side-editor-corner')

                        <!-- Advertisement -->
                        <div class="widget hidden-xs m30">
                           <img class="img-responsive add_img" src="{{ asset('front/img/right_add7.jpg') }}" alt="add_one">
                           <img class="img-responsive add_img" src="{{ asset('front/img/right_add7.jpg') }}" alt="add_one">
                           <img class="img-responsive add_img" src="{{ asset('front/img/right_add7.jpg') }}" alt="add_one">
                           <img class="img-responsive add_img" src="{{ asset('front/img/right_add7.jpg') }}" alt="add_one">
                        </div>

                        <!-- Readers Corner -->
               			@include('front.layouts.shared.side-reders-corner')

                        <!-- Podcast -->
                        <div class="widget hidden-xs m30">
                           <img class="img-responsive widget_img" src="{{ asset('front/img/podcast.jpg') }}" alt="add_one">
                        </div>
                        
                     </div>
                     <!-- End Side Content -->
                     </div>
                     <!-- row -->
                  </div>
                  <!-- container -->
               </section>@endsection