<!-- Create Student Modal -->
<div wire:ignore.self class="modal fade" id="creatStudentModal" tabindex="-1" aria-labelledby="creatStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="creatStudentModalLabel">Create Student</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="saveStudent">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name">Student Name</label>
                        <input type="text" class="form-control" wire:model="name" name="name" id="name">
                        @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email">Student Email</label>
                        <input type="email" class="form-control" name="email" wire:model="email" id="email">
                        @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="course">Course</label>
                        <input type="text" class="form-control" name="course" wire:model="course" id="course">
                        @error('course') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Close</button>
                    <button type="Submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- update Student Modal -->
<div wire:ignore.self class="modal fade" id="updateStudentModal" tabindex="-1" aria-labelledby="updateStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateStudentModalLabel">Update Student</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="updateStudent">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name">Student Name</label>
                        <input type="text" class="form-control" wire:model="name" name="name" id="name">
                        @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email">Student Email</label>
                        <input type="email" class="form-control" name="email" wire:model="email" id="email">
                        @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="course">Course</label>
                        <input type="text" class="form-control" name="course" wire:model="course" id="course">
                        @error('course') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Close</button>
                    <button type="Submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>