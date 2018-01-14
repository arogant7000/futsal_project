@extends('layouts.master')

@section('title')
  About
@endsection

@section('content')
<section class="maps">
        <div class="container">
            <div class="row text-center">
                <h2>Look Our Location</h2>
                <hr>    
            </div>

            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div id="map"></div>
                </div>
            </div>        
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="row text-center">
                <h2>Contact Us</h2>
                <hr>
            </div>
            
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <h3>Monas Futsal</h3>
                    <ul>
                        <li>Jln. Medan - Banda Aceh</li>
                        <li>Desa Ketapang, Lhoksukon Aceh Utara</li>
                        <li>Aceh, Indonesia 24382</li>
                        <br>
                        <li>Telpon  : 082360602080</li>
                        <li>Email   : ichsan.mulya@outlook.com</li>
                        <li>Website : monas-futsal.io</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <form action="">
                        <div class="form-group">
                            <label for="nama">Name : </label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email : </label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone : </label>
                            <input type="tel" name="phone" id="phone" placeholder="Enter Phone Number" class="form-control">
                        </div>
                    
                        <div class="form-group">
                            <label for="message">Message : </label>
                            <textarea name="message" id="message" placeholder="Enter Your Message" class="form-control" rows="10"></textarea>
                        </div>
                    
                        <button type="submit" class="btn btn-success">Send Message!</button>
                    
                    </form>
                </div>
            </div>
       </div>
    </section>
@endsection

@section('script')

<script>
        function initMap() {
            var uluru = { lat: -25.363, lng: 131.044 };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>

@endsection