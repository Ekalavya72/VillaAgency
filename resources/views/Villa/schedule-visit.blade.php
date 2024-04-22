
@extends ('layouts.main')
@section('container')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 border p-4 shadow bg-light">
                <div class="col-12">
                @if(session('message'))
                {{-- <div class="alert alert-success" id="alert"> --}}
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('message') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    
                {{-- </div> --}}
                @endif
                    <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Schedule-visit form</h3>
                </div>
                <form action="{{url('/schedule-visit')}}" class="row g-3 p-5 shadow m-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" name="FirstName" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="LastName"class="form-control" placeholder="Last Name">
                        </div>
                        <div class="col-md-6">
                            <input type="tel" name="Phone" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="Email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="col-md-6">
                            <input type="date" name="VisitDate"class="form-control" placeholder="Enter Date">
                        </div>
                        
                        <div class="col-12">
                            <select name="PurposeofVisit" class="form-select">
                                <option selected>Purpose Of visit </option>
                                <option value="1">Apartments</option>
                                <option value="2">House</option>
                                <option value="3">Rent</option>
                                <option value="3">Cooperation</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <textarea name="Message" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12 mt-5">                        
                            <button type="submit" class="btn btn-primary float-end">Schedule a visit </button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection