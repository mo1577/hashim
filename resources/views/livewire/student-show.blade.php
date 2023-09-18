<div>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="position: fixed; top: 20px; right: 20px; z-index: 9999;">
                <strong>Success!</strong> {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
            <div class="card">
                <div class="card-header">
                    <h4>Student Crud Model</h4>
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#studentModal">
                    Add new Student
                    </button>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>Actions</th>
                    </tr>
                    <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->course}}</td>
                                <td><a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-primary">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No Record Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </thead>

                    </table>
                    {{ $students->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@include('livewire.studentmodal')
</div>