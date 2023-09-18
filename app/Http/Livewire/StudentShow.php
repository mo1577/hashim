<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\student;
use Livewire\Component;

class StudentShow extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    // public $students;
    public $name, $email, $course;

protected $rules = [
    'name' => 'required|string|max:255',
    'email' => 'required|email|unique:students,email',
    'course' => 'required|string|max:255',
];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveStudents(){
        $validatedData = $this->validate();
        Student::create($validatedData);
        session()->flash('message', 'Student Added Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function resetinput(){
        $this->name = '';
        $this->email = '';
        $this->course = '';
    }
    public function render()
    {
        $students = Student::orderBY('id','DESC')->paginate(3);
        return view('livewire.student-show', ['students' => $students]);
    }
}
