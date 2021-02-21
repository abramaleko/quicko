<?php

namespace App\Http\Livewire\Procedures;

use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $attachment;

    //provides real-time validation for the upload
    public function updatedAttachment()
    {
        $this->validate([
            'attachment' => 'required|mimes:pdf', //uploaded file must be of pdf file
        ]);
    }


    public function render()
    {
        return view('livewire.procedures.upload');
    }
}
