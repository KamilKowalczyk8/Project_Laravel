@extends('layouts.app')
                             
@section('content')
       
<section class="page-section masthead"style="background-color:#8093ff;color:black" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 ">Zgłoś błąd</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto" style="color:black;">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form action="{{ route('saveerror') }}" method="POST" id="contactForm" name="sentMessage" novalidate="novalidate">
                         {{ csrf_field() }}
                         <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2" >
                                    <label >Tytuł</label>
                                    <input class="form-control" style="color:black;" name="creator" value="{{ Auth::user()->name }}"type="text" placeholder="creator" required="required" data-validation-required-message="Wprowadź tytuł" readonly/>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Kategoria błędu</label>
                                    <input class="form-control" style="color:black;" name="category" placeholder="Kategoria błędu" required="required" data-validation-required-message="Wprowadź tytuł" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Opis</label>
                                    <textarea class="form-control" name="error" rows="5" placeholder="Treść błędu" required="required" data-validation-required-message="Wprowadź opis błędu"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit" style="background-color:#4b66ff; border-color:#4b66ff">Wyślij zgłoszenie</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection        