@extends('layouts.app')
                             
@section('content')
       
<section class="page-section masthead"style="background-color:#8093ff;color:black; min-height:calc(91.7vh - 20px)" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 ">Kursy</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>


                <form method="GET" action="{{ route('search') }}">
                    <div class="search" style="border:1px solid white;position:absolute;margin-left:-330px;background-color:white;height:63px;width:430px;border-radius:7px;padding:10px;margin-top:10px">
                        <div class="input-groupp">
                            <div class="form-outlinee">

                                <input type="search" style="width:350px" id="form1" name="search" class="form-control" style="background-color:white;" />
                                
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary"style="position:absolute;margin-left:360px;margin-top:-63px" >
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>    



                <!-- Contact Section Form-->
                <div class="row" style="width:65vw;margin-left:175px;" >
                    
                        @foreach($kursy as $kurs)
                        <tr>
                            <div class="card" style="width: 265px; margin:10px">
                            <img src="assets/img/bg-01.jpg" class="card-img-top" alt="...">
                            <div class="card-body" >
                                <h5 class="card-title"><b style="color:grey;" >{{$kurs->title}}</b></h5>
                                <h6>$ {{$kurs->price}}</h6>
                                <p class="card-text">{{$kurs->level}}<br> Kurs Wykonał: {{$kurs->creator}} <br>

                               
                           
                            <form action="/buy" method="GET">

                            @if ( Auth::check() == true )
                            <input type="hidden" name="creator" value="{{$kurs->creator}}">
                            <input type="hidden" name="price" value="{{$kurs->price}}">
                            <input type="hidden" name="title" value="{{$kurs->title}}">
                            <input type="hidden" name="level" value="{{$kurs->level}}">
                            <input type="hidden" name="link" value="{{$kurs->link}}">
                            <input type="hidden" name="id" value="{{ Auth::user()->id}}">
                            <center>
                            <button type="submit"  class="btn btn-primary" style="width:80%;">Kup</button>
                            </center>
                            @endif
                
                            </form>
                            <br>
                            <form action="/show" method="GET">
                            <center>
                            <button type="sumbit" class="btn btn-info" style="width:80%;">Wyświetl kurs</button>
                            </center>
                            <input type="hidden" name="id" value="{{$kurs->id}}">
                            </form>
                           
                                </p>
                               
                            </div>
                            </div>
                        </tr>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
               
@endsection        