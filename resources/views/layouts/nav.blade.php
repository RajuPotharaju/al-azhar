<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-green p-0">
    <div class="container">
        <button class="navbar-toggler border-0 ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">Menu <span class="navbar-toggler-icon"></span> </button>
        <div class="navbar-collapse collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown active"> 
                    <a class="nav-link dropdown-toggle" href="#" id="aboutus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                    <div class="dropdown-menu" aria-labelledby="aboutus"> 
                        <a class="dropdown-item" href="{{route('profile')}}" >Profile</a> 
                        <a class="dropdown-item" href="{{route('chairman')}}">Chairman Message</a> 
                        <a class="dropdown-item" href="{{route('ceo')}}">CEO Message</a> 
                        <a class="dropdown-item" href="{{route('gm')}}">GM Message</a> 
                        <a class="dropdown-item" href="{{route('deputy')}}">Deputy GM Message</a> 
                        <a class="dropdown-item" href="{{route('tqm-director')}}">TQM Director Message</a> 
                        <a class="dropdown-item" href="{{route('medical-director')}}">Medical Director Message</a> 
                        <a class="dropdown-item" href="{{route('management')}}">Management</a> 
                        <a class="dropdown-item" href="{{route('mission-and-vision')}}">Mission &amp; Vision</a> 
                    </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="{{route('specialities')}}">Our Specialities</a> </li>
                <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="facilities" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Facilities</a>
                   <div class="dropdown-menu" aria-labelledby="facilities"> 
                       <a class="dropdown-item" href="{{route('medical-lab')}}">Medical Lab</a> 
                       <a class="dropdown-item" href="{{route('pharmacy')}}">Pharmacy</a> 
                       <a class="dropdown-item" href="{{route('insurance-companies')}}">Insurance Companies</a> 
                       <a class="dropdown-item" href="{{route('parking')}}">Parking Facilities</a> 
                   </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="{{route('appointment')}}">Appointment</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{route('packages')}}">Packages</a> </li>
                <li class="nav-item dropdown"> 
                   <a class="nav-link dropdown-toggle" href="#" id="careers" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Careers</a>
                   <div class="dropdown-menu" aria-labelledby="careers"> 
                       <a class="dropdown-item" href="{{route('vacancies')}}">Available Vacancies</a> 
                       <a class="dropdown-item" href="{{route('vewsJobs')}}">Apply Job</a> 
                   </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="{{route('research')}}">Research</a> </li>
                <li class="nav-item dropdown"> 
                   <a class="nav-link dropdown-toggle" href="#" id="mediaCenter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media Center</a>
                   <div class="dropdown-menu" aria-labelledby="mediaCenter"> 
                       <a class="dropdown-item" href="{{route('news-details')}}">News &amp; Events</a> 
                       <a class="dropdown-item" href="{{route('photo-gallery')}}">Photo Gallery</a> 
                       <a class="dropdown-item" href="{{route('video-gallery')}}">Video Gallery</a> 
                   </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="{{route('showContactUsForm')}}">Contact Us</a> </li>
            </ul>
        </div>
    </div>
</nav>
<!-- /NavBar -->