@extends('layouts.app')
                             
@section('content')
       
<section class="page-section masthead"style="background-color:#8093ff;color:white;min-height:calc(91.7vh - 20px)" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 ">Zatwierdz kursy</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row" style="width:85vw;margin-left:-270px;color:white;" >
                <table class="table">
  <thead>
    <tr>
      <th scope="col"style="color:white;">Nazwa</th>
      <th scope="col" style="color:white;">Tytuł kursu</th>
      <th scope="col"style="color:white;">Cena</th>
      <th scope="col"style="color:white;">Poziom</th>
      <th scope="col"style="color:white;">Opis</th>
      <th scope="col"style="color:white;"></th>
      <th scope="col"style="color:white;"></th>
               <tbody>
                <tr>
                
                @foreach($kursy as $kurs)
                <form action="{{ route('save') }}" method="POST" id="contactForm" name="sentMessage" novalidate="novalidate">
                         {{ csrf_field() }}
                                                     
                         <td> <input class="form-control" style="color:black;font-size:16px;" name="creator" value="{{$kurs->creator}}"type="text" placeholder="creator" required="required" data-validation-required-message="Wprowadź tytuł" readonly/></td>
                                     
                        <input type="hidden" name="id" value="{{$kurs->id}}">
                                  
                        <td>  <input class="form-control" style="color:black;" name="title" type="text" placeholder="Tytuł" value="{{$kurs->title}}" required="required" data-validation-required-message="Wprowadź tytuł" /></td>
                                    
                          
                        <td> <input class="form-control" name="price" type="text" placeholder="Cena" value="{{$kurs->price}}" required="required" data-validation-required-message="Wprowadź cene" /></td>
                                    
                               
                        <td>  <div class="obr"><input class="form-control" name="level" type="text" placeholder="Poziom" value="{{$kurs->level}}" required="required" data-validation-required-message="Podaj poziom" /></div></td>
                                                  
                        <td>  <textarea class="form-control" name="link" rows="5" placeholder="Opis" value="{{$kurs->link}}" required="required" data-validation-required-message="Wprowadź opis">{{$kurs->link}}</textarea></td>  
                            <div id="success"></div>
                            <td>   <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit" style="background-color:green; border-color:white">Zatwierdz</button></div>
                            </form>
                            <div class="btn btn-danger btn-xl" style="border-color:white;width:150px" ><a href="{{route('delete', ['id' => $kurs->id])}}">Usuń</a></div></td>
                            
                        
                        </tr>
                        </tbody>
                        @endforeach
                        </tr>
                        </thead>
                        
                        </table>
                       
                        
                                <br>
                                <br>
                                <br>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
@endsection        
