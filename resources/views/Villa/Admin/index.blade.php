@extends ('Villa.Admin.inc.main')
@section('container')
<div class="container">
@if(session('message'))
{{-- <div class="alert alert-success" id="alert"> --}}
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('message') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@elseif(session('delete'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session('delete') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
</div>
<div class="content-wrapper">

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Visit/</span>Schedule</h4>
        <!-- Basic with Icons -->
        <div class="col-xxl">
            <div class="card">
                <h5 class="card-header">List of Visit Request</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Visit Date</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedule as $visit)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $visit->FirstName }}</td>
                                <td>{{ $visit->LastName }}</td>
                                <td>{{ $visit->Phone }}</td>
                                <td>{{ $visit->Email }}</td>
                                <td>{{ $visit->VisitDate }}</td>
                                <td>{{ $visit->Message }}</td>
                                <td>Actions</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="bg-light   mt-3 mb-3 mx-5 px-4 text-end ">
                        <div class="px-5 mx-4">
                            <div class="px-4 mx-3">
                            </div>
                        </div>
                    </div>
                    {{$schedule->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
