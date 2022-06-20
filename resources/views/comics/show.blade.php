@extends('layouts.app')


@section('content')

<div class="hero">

    <div class="hero_top">

        <div class="jumbotron">

        </div>
        <!-- /.jumbotron -->

    </div>
    <!-- /.hero_top -->

    <div class="hero_bottom">

        <div class="container_sm">

            <div class="thumb">
                <img class="card-img-top" src="{{$comic['thumb']}}" alt="{{$comic['series']}}">   
            </div>
            <!-- /.thumb -->
            
        </div>
        <!-- /.container.sm -->


    </div>
    <!-- /hero_bottom -->

</div>
<!-- /.hero -->

<div class="comic_info ">

    <div class="container_sm">
        <div class="row py_4">
            <div class="col-8">

                <h1 class="comic_title text-left text-uppercase">
                    {{$comic['title']}}
                </h1>

                <div class="sale_box d-flex align-items-center justify-content-between my-4 py-4 bt_black bb_black">

                    <div class="sale_info d-flex justify-content-between align-items-center w-75 p-4">

                        <div class="price">
                            <span class="title_info">U.S. Price: </span> <span class="text-white">{{$comic['price']}}</span> 
                        </div>
                        <!-- /.price -->

                        <div class="availability text-uppercase title_info">
                            available
                        </div>
                        <!-- /.availability -->

                    </div>
                    <!-- /.sale_info -->

                    <div class="check d-flex justify-content-center align-items-center  w-25 text-white"> 
                        <a href="#" class="text-white text-decoration-none w-100"> Check Availability <i class="fa-solid fa-caret-down text-primary text-white px-1"></i> </a>
                    </div>
                    <!-- /.check -->


                </div>
                <!-- /.sale_box -->

                <p class="description"> 
                    {{$comic['description']}}
                </p>
                
            </div>
            <!-- /.col -->

            <div class="col-4">

                <div class="text-uppercase d-flex justify-content-end">
                    <div class="text-adv">
                        advertisement
                    </div> 
                </div>

                <div class="img_adv">
                    <img src="{{asset('img/adv.jpg')}}" alt="adv">
                </div>
                <!-- /.img_adv -->
                
            </div>
            <!-- /.col -->


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container_sm -->

</div>
<!-- /comic_info -->

<div class="comic_details bg_gray pb_4 pt-4">

    <div class="container_sm">

        <div class="row row-cols-2 g-5">

            <div class="col">

                <div class="talent">
                    <h3 class="comic_details_title pb-4">
                        Talent
                    </h3>
                    <!-- /.comic_details_title -->

                    <div class="artist row py-2 bt_grey bb_grey ">

                        <div class="col-4">

                            <h5 class="title_talent">
                                Art by:
                            </h5>
                            <!-- /.title_talent -->

                        </div>

                        <div class="col-8">

                            @forelse ($comic['artists'] as $artist)

                            <span class="artist_list px-1">
                                <a href="#" class="text-decoration-none">{{$artist}}</a>
                            </span>
                            <!-- /.artist_list -->

                            @empty
                            <p>Non ci sono artisti</p>

                            @endforelse

                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.artist -->

                    <div class="writer row py-2 bb_grey">
                        <div class="col-4">

                            <h5 class="title_talent">
                                Written by:
                            </h5>
                            <!-- /.title_talent -->

                        </div>
                        <!-- /.col -->

                        <div class="col-8">

                            @forelse ($comic['writers'] as $writer)

                            <span class="writer_list px-1">
                                <a href="#"class=" text-decoration-none">{{$writer}}</a>
                            </span>
                            <!-- /.writer_list -->

                            @empty
                            <p>Non risultano scrittori</p>

                            @endforelse

                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.writer -->

                </div>
                <!-- /.talent -->

            </div>
            <!-- /.col -->

            <div class="col">

                <div class="specs">
                    <h3 class="comic_details_title pb-4">Specs</h3>

                    <div class="series row row py-2 bb_grey bt_grey">
                        <div class="col-4">

                            <h5 class="title_specs">
                                Series:
                            </h5>

                        </div>
                        <!-- /.col -->

                        <div class="col-8">

                           
                            <span class="content_specs">
                                <a href="#" class="text-decoration-none text-uppercase">{{$comic['series']}}</a>
                            </span>
                            


                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.series -->

                    <div class="us_price row row py-2 bb_grey">
                        <div class="col-4">
                            <h5 class="title_specs">
                                U.S. Price:
                            </h5>

                        </div>
                        <!-- /.col -->
                        <div class="col-8">
                            <span class="content_specs">
                                {{$comic['price']}}
                            </span>
                            
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.us_price -->

                    <div class="on_sale_date row row py-2 bb_grey">

                        <div class="col-4">
                            <h5 class="title_specs">
                                On Sale Date:
                            </h5>
                            
                        </div>
                        <!-- /.col -->

                        <div class="col-8">

                            <span class="content_specs">
                                a{{$comic['sale_date']}}
                            </span>
                            
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.on_sale_date -->

                </div>
                <!-- /.specs -->

            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container_sm -->

</div>
<!-- /.comic_details -->



@endsection
