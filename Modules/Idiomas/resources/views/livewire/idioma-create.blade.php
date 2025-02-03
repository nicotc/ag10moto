<div>
    <div wire:ignore.self
        class="modal fade"
        id="createModal"
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
                <h3>Create </h3>
                <p>Updating user details will receive a privacy audit.</p>
              </div>
              <form id="CrateUserForm" class="row g-3" onsubmit="return false">
                <div class="col-12">
                    <label class="form-label" for="modalCrateUserName">Language</label>
                    <input
                      type="text"
                      id="UserName"
                      wire:model="lang"
                      name="lang"
                      class="form-control"
                      placeholder="" />
                      <span class="text-danger">@error('lang') {{ $message }} @enderror</span>
                </div>
                <div class="col-12">
                    <label class="form-label" for="modalCrateUserName">ISO</label>
                    <input
                      type="text"
                      id="UserName"
                      wire:model="iso"
                      name="iso"
                      class="form-control"
                      placeholder="" />
                      <span class="text-danger">@error('iso') {{ $message }} @enderror</span>
                </div>



                <div class="mt-4 text-center col-12">
                  <button type="submit"
                   class="btn btn-primary me-sm-3 me-1"
                   wire:click="create"
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
