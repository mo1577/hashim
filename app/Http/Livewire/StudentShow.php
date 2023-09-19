<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Student;
use Livewire\Component;

class StudentShow extends Component
{
    use WithPagination;
    public $query = '';
    protected $paginationTheme = 'bootstrap';
    public $name, $email, $course, $student_id, $search;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email',
        'course' => 'required|string|max:255',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveStudents()
    {
        $validatedData = $this->validate();
        Student::create($validatedData);
        session()->flash('message', 'Student Added Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function updateStudent()
    {
        $validatedData = $this->validate();

        Student::where('id', $this->student_id)->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'course' => $validatedData['course']
        ]);

        session()->flash('message', 'Student Updated Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editStudent(int $student_id)
    {
        $student = Student::find($student_id);
        if ($student) {
            $this->student_id = $student->id;
            $this->name = $student->name;
            $this->email = $student->email;
            $this->course = $student->course;
        } else {
            return redirect()->to('/students');
        }
    }

    public function deleteStudent(int $student_id)
    {
        $this->student_id = $student_id;
    }

    public function destroyStudent()
    {
        Student::find($this->student_id)->delete();
        session()->flash('message', 'Student Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name = '';
        $this->email = '';
        $this->course = '';
    }

    public function render()
    {
        $students = Student::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orWhere('course', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'DESC')
            ->paginate(3);
        return view('livewire.student-show', ['students' => $students]);
    }
}
