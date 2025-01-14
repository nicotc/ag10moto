<div>
    <div wire:ignore.self
        class="modal fade"
        id="createUserModal"
        tabindex="-1"
        aria-hidden="true"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        >
        <div class="modal-dialog modal-lg modal-simple modal-Crate-user">
          <div class="p-3 modal-content p-md-5">
            <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="mb-4 text-center">
                <h3>Create User Information</h3>
                <p>Updating user details will receive a privacy audit.</p>
              </div>
              <form id="CrateUserForm" class="row g-3" onsubmit="return false">
                <div class="col-12">
                  <label class="form-label" for="modalCrateUserName">User name</label>
                  <input
                    type="text"
                    id="UserName"
                    wire:model="name"
                    name="name"
                    class="form-control"
                    placeholder="" />
                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>

                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="modalCrateUserEmail">Email</label>
                  <input
                    type="text"
                      wire:model="email"
                    id="email"
                    name="email"
                    class="form-control"
                    placeholder="example@domain.com" />
                    <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="modalCrateUserStatus">Role</label>
                  <select
                    id="modalCrateUserRole"
                    name="modalCrateUserStatus"
                    class="form-select"
                    wire:model="role"
                    aria-label="Default select example">
                    @foreach ($roleslist as $lRole)

                    <option value="{{ $lRole }}">{{ $lRole }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="col-12 col-md-6">
                  <label class="form-label" for="modalCrateUserPassword">Password</label>
                    <input
                        type="password"
                        id="modalCrateUserPassword"
                        wire:model="password"
                        name="modalCrateUserPassword"
                        class="form-control"
                        placeholder="Password" />
                        <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="modalCrateUserPasswordConfirmation">Password Confirmation</label>
                    <input
                        type="password"
                        id="modalCrateUserPasswordConfirmation"
                        wire:model="password_confirmation"
                        name="modalCrateUserPasswordConfirmation"
                        class="form-control"
                        placeholder="Password Confirmation" />
                        <span class="text-danger">@error('password_confirmation') {{ $message }} @enderror</span>


                </div>


                <div class="mt-4 text-center col-12">
                  <button type="submit"
                   class="btn btn-primary me-sm-3 me-1"
                   wire:click="createUser"
                   >Submit</button>

                   <button
                    type="reset"
                    class="btn btn-label-secondary"
                    data-bs-dismiss="modal"
                    aria-label="Close">
                    Cancel
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    </div>
