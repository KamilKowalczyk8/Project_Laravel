@extends('layouts.app')
                             
@section('content')

<section class="page-section masthead"style="background-color:#8093ff;color:white" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 ">Kurs</h2>
                <div style="">
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                
                    <div class="kd" style="justify-content:center;display:flex;">
                        <img src="assets/img/bg-01.jpg" style="align-items:center;display:flex;">
                    </div>    
                 <br>
                        <div style="justify-content:center;display:flex;">
                                <div class="kurs" style="background-color:#8093ff;height:950px;width:950px;align-items:center;display:flex;flex-direction:column;border: 5px solid #4b66ff;border-radius:10px">
                                    <div class="tit" style="background-color:#8093ff;height:100px;width:900px;align-items:center;justify-content:center;display:flex;border: 5px solid #4b66ff;border-radius:10px;margin:20px">
                                    <h1>Tytuł: {{$kursy->title}}</h1>
                                    </div>
                                    <br>
                                    <div class="tit" style="background-color:#8093ff;height:100px;width:900px;align-items:center;justify-content:center;display:flex;border: 5px solid #4b66ff;border-radius:10px">
                                    <h4>Cena: $ {{$kursy->price}}</h4>
                                    </div>
                                    <br>
                                    <div class="tit" style="background-color:#8093ff;height:100px;width:900px;align-items:center;justify-content:center;display:flex;border: 5px solid #4b66ff;border-radius:10px">
                                    <h4>Kurs Wykonał: {{$kursy->creator}}</h4>
                                    </div>
                                    <br>
                                    <div class="tit" style="background-color:#8093ff;height:500px;width:900px;padding:10px;display:flex;border: 5px solid #4b66ff;border-radius:10px">
                                    <h4>Opis: {{$kursy->link}}</h4>
                                    </div>
                                </div>
                        </div>
                <!-- <div class="row" style="width:70vw;display:flex;flex-direction:column;margin-left:10px;" >
                
                               
                             
                <h2>Tytuł:  <span class="badge badge-secondary">{{$kursy->title}}</span></h2>
                                
                                 <h4>Cena: <span class="badge badge-secondary">{{$kursy->price}}€</span></h4>
                               
                                  <h4>Poziom: <span class="badge badge-secondary">{{$kursy->level}}</span></h4>
                                
                                <h4>Kurs Wykonał: <span class="badge badge-secondary">{{$kursy->creator}}</span></h4>

                               <h4>Opis: </h4><h6> {{$kursy->link}}</h6>
                              
                               
                                
                    
                </div> -->
                    
               </div>
            </div>
        </section>
       
               
@endsection        