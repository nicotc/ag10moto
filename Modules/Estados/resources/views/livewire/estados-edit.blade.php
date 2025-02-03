<div>
    <div wire:ignore.self
        class="modal fade"
        id="editModal"
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
                <h3>Edit </h3>
                <p>Updating user details will receive a privacy audit.</p>
              </div>
              <form id="EditPermisionForm" class="row g-3" onsubmit="return false">

                <div class="col-12">
                    <label class="form-label" for="modalCrateUserName">Name</label>
                    <input
                      type="text"
                      id="UserName"
                      wire:model="name"
                      name="name"
                      class="form-control"
                      placeholder="" />
                      <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                </div>
                <div class="col-12">
                    <label class="form-label " for="modalCrateUserName">Color</label>
                    <input
                      type="text"
                      id="UserName"
                      wire:model="color"
                      name="color"
                      class="form-control"
                      placeholder="" />
                      <span class="text-danger">@error('color') {{ $message }} @enderror</span>
                </div>

                <div class="col-12">
                    <label class="form-label " for="modalCrateUserName">Email</label>
                    <select wire:model="email" class="form-select">
                        <option value="">Select</option>
                        {{-- @foreach ($emails as $emailvalue)
                            <option value="{{ $emailvalue}}">{{ $emailvalue }}</option>
                        @endforeach --}}
                    </select>
                      <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                </div>







                <div class="mt-4 text-center col-12">
                  <button type="submit"
                   class="btn btn-primary me-sm-3 me-1"
                   wire:click="update"
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
