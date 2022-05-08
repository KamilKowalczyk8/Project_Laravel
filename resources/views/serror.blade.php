@extends('layouts.app')
                             
@section('content')
       
<section class="page-section masthead"style="background-color:#8093ff;color:black;min-height:calc(91.7vh - 20px)" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 ">Zgłoszenia</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <center>
                <!-- Contact Section Form-->
                <div class="row" style="width:82vw;margin-left:-230px;" >
                    
                        @foreach($serror as $error)
                        <table class="table">
                              <thead>
                                    <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nazwa zgłaszającego</th>
                                    <th scope="col">Kategoria</th>
                                    <th scope="col">Treść błędu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">{{$error->id}}</th>
                                    <td>{{$error->creator}}</td>
                                    <td>{{$error->category}}</td>
                                    <td>{{$error->error}}</td>
                                    </tr>
                
                                  
                                </tbody>
                                </table>
                        
                      
                        @endforeach
                        </div>
                    </div>
                </div>
                </center>
            </div>
        </section>
       
               
@endsection        