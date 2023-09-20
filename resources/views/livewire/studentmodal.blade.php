<!-- Create Student Modal -->
<div wire:ignore.self class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title fs-5" id="studentModalLabel">Create student</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
          </div>
          <form wire:submit.prevent="saveStudents">
              <div class="modal-body">
                  <div class="mb-3">
                      <label>Student Name</label>
                      <input type="text" wire:model.defer="name" class="form-control">
                      @error('name')<span class="text-danger">{{ $message }}</span> @enderror
                  </div>

                  <div class="mb-3">
                      <label>Student Email</label>
                      <input type="text" wire:model.defer="email" class="form-control">
                      @error('email')<span class="text-danger">{{ $message }}</span> @enderror
                  </div>

                  <div class="mb-3">
                      <label>Student Course</label>
                      <input type="text" wire:model.defer="course" class="form-control">
                      @error('course')<span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                  <div class="mb-3">
                    <label>Student Class</label>
                    <input type="text" wire:model.defer="class" class="form-control">
                    @error('class')<span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Student Roll_number</label>
                    <input type="integer" wire:model.defer="roll_number" class="form-control">
                    @error('roll_number')<span class="text-danger">{{ $message }}</span> @enderror
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
              </div>
          </form>
      </div>
  </div>
</div>

<!-- Update Student Modal -->
<div wire:ignore.self class="modal fade" id="updateStudentModal" tabindex="-1" aria-labelledby="updateStudentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title fs-5" id="updateStudentModalLabel">Update student</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
          </div>
          <form wire:submit.prevent="updateStudent">
              <div class="modal-body">
                  <div class="mb-3">
                      <label>Student Name</label>
                      <input type="text" wire:model.defer="name" class="form-control">
                      @error('name')<span class="text-danger">{{ $message }}</span> @enderror
                  </div>

                  <div class="mb-3">
                      <label>Student Email</label>
                      <input type="email" wire:model.defer="email" class="form-control">
                      @error('email')<span class="text-danger">{{ $message }}</span> @enderror
                  </div>

                  <div class="mb-3">
                      <label>Student Course</label>
                      <input type="text" wire:model.defer="course" class="form-control">
                      @error('course')<span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                  <div class="mb-3">
                    <label>Student Class</label>
                    <input type="text" wire:model.defer="class" class="form-control">
                    @error('class')<span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Student Roll_number</label>
                    <input type="integer" wire:model.defer="roll_number" class="form-control">
                    @error('roll_number')<span class="text-danger">{{ $message }}</span> @enderror
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Update</button>
              </div>
          </form>
      </div>
  </div>
</div>
{{-- Deleted model    --}}
<div wire:ignore.self class="modal fade" id="deleteStudentModal" tabindex="-1" aria-labelledby="deleteStudentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title fs-5" id="deleteStudentModalLabel">Delete student</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
          </div>
               <form wire:submit.prevent="destroyStudent">
              <div class="modal-body">
                  <h4>
                      Are you sure you want to delete this data?
                  </h4>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Yes! Delete</button>
              </div>
          </form>
      </div>
  </div>
</div>
