<div>
    <div class="row">
        <div class="col-md-12">
          <ul class="mb-3 nav nav-pills flex-column flex-md-row">
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('account-settings') }}"><i class="bx bx-user me-1"></i> Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{ route('account-security') }}"
                ><i class="bx bx-lock-alt me-1"></i> Security</a
              >
            </li>
          </ul>
          <div class="mb-4 card">
            <h5 class="card-header">Profile Details</h5>
            <!-- Account -->
            <div class="card-body">
              <div class="gap-4 d-flex align-items-start align-items-sm-center">

                <img
                @if(($photo_path != null ) or ($photo_path != ''))
                    src="{{ asset("storage/".$photo_path) }}"
                @else
                    src="{{ asset('assets/img/avatars/1.png') }}"
                @endif

                  alt="user-avatar"
                  class="rounded d-block"
                  height="100"
                  width="100"
                  id="uploadedAvatar" />
                <div class="button-wrapper">
                  <label for="upload" class="mb-4 btn btn-primary me-2" tabindex="0">
                    <span class="d-none d-sm-block">Upload new photo</span>
                    <i class="bx bx-upload d-block d-sm-none"></i>
                    <input
                      type="file"
                      id="upload"
                      class="account-file-input"
                      hidden
                      wire:model='photo'
                      accept="image/png, image/jpeg" />
                  </label>


                    @error('photo') <span class="error">{{ $message }}</span> @enderror

                  <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                </div>
              </div>
            </div>
            <hr class="my-0" />
            <div class="card-body">
              <form id="formAccountSettings" method="GET" onsubmit="return false">

                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="first_name">First Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="first_name"
                      name="first_name"
                      wire:model="first_name"
                      placeholder="First Name"
                     />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label class="form-label " for="last_name">Last Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="last_name"
                            name="last_name"
                            placeholder="Last Name"
                            wire:model="last_name"
                             />
                    </div>
                </div>
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="user_name">Username</label>
                    <input
                      type="text"
                      class="form-control"
                      id="user_name"
                      name="user_name"
                      placeholder="Username"
                      wire:model="user_name"
                      />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="email">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            placeholder="Email"
                            wire:model="email"
                            />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="phone_number">Phone Number</label>
                        <input
                            type="text"
                            class="form-control"
                            id="phone_number"
                            name="phone_number"
                            placeholder="Phone Number"
                            wire:model="phone_number"
                             />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="organization">Organization</label>
                        <input
                            type="text"
                            class="form-control"
                            id="organization"
                            name="organization"
                            placeholder="Organization"
                            wire:model="organization"
                            />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="address">Address</label>
                        <input
                            type="text"
                            class="form-control"
                            id="address"
                            name="address"
                            placeholder="Address"
                            wire:model="address"
                            />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="state">State</label>
                        <input
                            type="text"
                            class="form-control"
                            id="state"
                            name="state"
                            placeholder="State"
                            wire:model="state"
                             />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="country">Country</label>
                        <input
                            type="text"
                            class="form-control"
                            id="country"
                            name="country"
                            placeholder="Country"
                            wire:model="country"
                             />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="language">Language</label>
                        <input
                            type="text"
                            class="form-control"
                            id="language"
                            name="language"
                            placeholder="Language"
                            wire:model="language"
                            />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="timezone">Timezone</label>
                        <input
                            type="text"
                            class="form-control"
                            id="timezone"
                            name="timezone"
                            placeholder="Timezone"
                            wire:model="timezone"
                             />
                    </div>
                </div>
                <hr class="my-4" />

                <div class="mt-2">
                  <button type="submit" wire:click='save' class="btn btn-primary me-2">Save changes</button>
                  <button type="reset" class="btn btn-label-secondary">Cancel</button>
                </div>
              </form>
            </div>
            <!-- /Account -->
          </div>
          <div class="card">
            <h5 class="card-header">Delete Account</h5>
            <div class="card-body">
              <div class="mb-0 mb-3 col-12">
                <div class="alert alert-warning">
                  <h6 class="mb-1 alert-heading">Are you sure you want to delete your account?</h6>
                  <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                </div>
              </div>


                <div class="mt-2">
                    <button wire:click="$dispatch('delete')" class="btn btn-danger me-2">Delete Account</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
