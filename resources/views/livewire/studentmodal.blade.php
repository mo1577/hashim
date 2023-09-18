<!-- Modal -->
<div wire:ignore.self class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-5" id="studentModalLabel">Create student</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form>
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
            
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary"  wire:click.prevent="saveStudents">Save</button>
        </div>
      </form>
  </div>


  <!-- updated Modal -->
<div wire:ignore.self class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="updatestudentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="updatestudentModalLabel">Create student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form>
        <div wire:submit.prevent="saveStudent"> 
        
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
          
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  wire:click.prevent="saveStudents">Save</button>
      </div>
    </form>
</div>


