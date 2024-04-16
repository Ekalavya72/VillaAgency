@extends ('layouts.main')
@section('container')

 

 

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a> / Properties</span>
          <h3>Properties</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">
      <ul class="properties-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter="{{$properties->type="Appartment"}}">Apartment</a>
        </li>
        <li>
          <a href="#!" data-filter="{{$properties->type="Villa House"}}">Villa House</a>
        </li>
        <li>
          <a href="#!" data-filter="{{$properties->type="Penthouse"}}">Penthouse</a>
        </li>
      </ul>
      <div class="row properties-box">
      @foreach ($properties as $property )
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
        
          <div class="item">
            
            <a href="{{ route('property-details',$property->id)}}"><img src="{{asset ('uploads/'.$property->img)}}" alt=""></a>
            <span class="category">{{$property->type}}</span>
            <h6>${{$property->price}}</h6>
            <h4><a href="property-details">{{$property->address}}</a></h4>
            <ul>
              <li>Bedrooms: <span>{{$property->bedrooms}}</span></li>
              <li>Bathrooms: <span>{{$property->bathrooms}}</span></li>
              <li>Area: <span>{{$property->area}}m2</span></li>
              <li>Floor: <span>{{$property->floor}}</span></li>
              <li>Parking: <span>{{$property->parking}}</span></li>
            </ul>
            <div class="main-button">
            <a href="{{ route('property-details',$property->id)}}">Schedule a visit</a>
            </div>
              
           
            
          </div>
          
        </div>
        @endforeach
        
      </div>
      
    </div>
   
  </div>
  {{$properties->links()}}

 @endsection