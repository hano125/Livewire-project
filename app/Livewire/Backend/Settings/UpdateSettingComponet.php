<?php

namespace App\Livewire\Backend\Settings;

use App\Models\Setting;
use Livewire\Component;

class UpdateSettingComponet extends Component
{
    public Setting $setting;
    public $successMessage = '';

    public function mount()
    {
        $this->setting = Setting::find(1);
    }

    public function rules()
    {
        return [
            "setting.name" => 'required|string|max:255',
            'setting.phone' => 'required|string|max:20',
            'setting.email' => 'required|email|max:255',
            'setting.address' => 'required|string|max:500',
            'setting.facebook' => 'nullable|max:255',
            'setting.twitter' => 'nullable|max:255',
            'setting.linkedin' => 'nullable|max:255',
            'setting.instagram' => 'nullable|max:255',
        ];
    }

    public function submit()
    {
        $this->validate();
        $this->setting->save();
        $this->successMessage = 'Settings updated successfully.';
        $this->dispatch('message-set');
    }

    public function clearMessage()
    {
        $this->successMessage = '';
    }



    public function render()
    {
        return view('backend.settings.update-setting-componet');
    }
}
