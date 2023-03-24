<div>
    @include('livewire.partials.student_modal')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if (session()->has('success_message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success_message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Student Crud Application
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#creatStudentModal">
                                Add New Student
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @forelse ($students as $item)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->course}}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning" wire:click="editStudent({{$item->id}})" data-bs-toggle="modal" data-bs-target="#updateStudentModal">
                                            Edit
                                        </button>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>

                                @empty
                                <tr>
                                    <td colspan=" 5" class="table-active">No Available Data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>{{$students->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>