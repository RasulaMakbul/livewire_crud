<?php

namespace App\Http\Livewire;

use App\Models\Students;
use Livewire\Component;
use Livewire\WithPagination;

class StudentShow extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public $student_id,  $name, $email, $course;

    protected function rules()
    {
        return [
            'name' => 'required|string|min:6',
            'email' => ['required', 'email'],
            'course' => 'required|string',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveStudent()
    {
        $validateData = $this->validate();

        Students::create($validateData);
        session()->flash('success_message', 'Student Added Successfully!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editStudent(int $id)
    {
        $student = Students::find($id);
        if ($student) {
            $this->student_id = $student->id;
            $this->name = $student->name;
            $this->email = $student->email;
            $this->course = $student->course;
        } else {
            return redirect()->to('/students');
        }
    }


    public function updateStudent()
    {
        $validateData = $this->validate();

        Students::where('id', $this->student_id)->update([
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'course' => $validateData['course'],
        ]);
        session()->flash('success_message', 'Student updated Successfully!');
        $this->resetInput();
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
        $students = Students::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.student-show', ['students' => $students]);
    }
}
