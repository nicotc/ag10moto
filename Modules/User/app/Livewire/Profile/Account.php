<?php

namespace Modules\User\Livewire\Profile;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use phpDocumentor\Reflection\Types\This;
use PhpParser\Node\Scalar\MagicConst\Namespace_;

class Account extends Component
{

    use WithFileUploads;

    public $first_name;
    public $last_name;
    public $user_name;
    public $email;
    public $phone_number;
    public $organization;
    public $address;
    public $state;
    public $country;
    public $language;
    public $timezone;

    public $photo;
    public $photo_path;

    protected $listeners = ['deleteUser'];

    public function mount()
    {
        $this->photo = auth()->user()->profile_photo_path;

        $this->first_name = auth()->user()->first_name;
        $this->last_name = auth()->user()->last_name;
        $this->user_name = auth()->user()->user_name;
        $this->email = auth()->user()->email;
        $this->phone_number = auth()->user()->phone_number;
        $this->organization = auth()->user()->organization;
        $this->address = auth()->user()->address;
        $this->state = auth()->user()->state;
        $this->country = auth()->user()->country;
        $this->language = auth()->user()->language;
        $this->timezone = auth()->user()->timezone;
        $this->photo_path = auth()->user()->profile_photo_path;
    }

    public function render()
    {
        return view('user::livewire.profile.account');
    }

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $name = $this->photo->getClientOriginalName();
        $path = $this->photo->storeAs('images/'.auth()->id(), $name, 'public');

        User::find(auth()->id())->update([
            'profile_photo_path' => $path
        ]);

        $this->photo_path = $path;


        $this->dispatch('refresh-user', [
            'type' => 'success',
            'message' => 'Profile photo updated successfully.'
        ]);






    }


    public function save(){
        // validate
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required|alpha_dash|unique:users,user_name,'.auth()->id(),
            'email' => 'required|email|unique:users,email,'.auth()->id(),
            'phone_number' => 'required',
            'organization' => 'required',
            'address' => 'required',
            'state' => 'required',
            'country' => 'required',
            'language' => 'required',
            'timezone' => 'required',
        ]);

        // save
        User::find(auth()->id())->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'user_name' => $this->user_name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'organization' => $this->organization,
            'address' => $this->address,
            'state' => $this->state,
            'country' => $this->country,
            'language' => $this->language,
            'timezone' => $this->timezone,
        ]);


        $this->dispatch('refresh-user', [
            'type' => 'success',
            'message' => 'Profile updated successfully.'
        ]);



    }

    public function deleteUser()
    {
        User::find(auth()->id())->delete();

        $this->dispatch('refresh-user', [
            'type' => 'success',
            'message' => 'Profile deleted successfully.'
        ]);

        return redirect()->route('login');
    }
}
