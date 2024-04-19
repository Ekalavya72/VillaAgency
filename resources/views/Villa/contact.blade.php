@extends ('layouts.main')
@section('container')

  

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a>  /  Contact Us</span>
          <h3>Contact Us</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>| Contact Us</h6>
            <h2>Get In Touch With Our Agents</h2>
          </div>
          <p>When you really need to download free CSS templates, please remember our website TemplateMo. Also, tell your friends about our website. Thank you for visiting. There is a variety of Bootstrap HTML CSS templates on our website. If you need more information, please contact us.</p>
          <div class="row">
            <div class="col-lg-12">
              <div class="item phone">

              @foreach ($siteconfig as $site )
              @if ($site->site_key == 'phone')
              <img src="{{asset ('frontend/assets/images/phone-icon.png')}}" alt="" style="max-width: 52px;">
              <h6>{{ $site->site_value}}<br><span>Phone Number</span></h6>
              @endif
              @endforeach
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item email">
                @foreach ($siteconfig  as $site)
                @if ($site->site_key == 'email')
                <img src="{{asset ('frontend/assets/images/email-icon.png')}}" alt="" style="max-width: 52px;">
                <h6>{{$site->site_value}}<br><span>Business Email</span></h6>
                @endif
                  
                @endforeach
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <form id="contact-form" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">Full Name</label>
                  <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Email Address</label>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Subject</label>
                  <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="message">Message</label>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-12">
        @foreach ($siteconfig  as $site)
        @if ($site->site_key == 'map')
          <div id="map">
            <iframe src="{{$site->site_value}}" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
          </div>
        @endif
        @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection
 