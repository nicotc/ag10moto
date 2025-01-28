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
                <h3>Editar cuentas de email </h3>

              </div>
              <form id="" class="row g-3" onsubmit="return false">

                <div class="col-12">
                    <label class="form-label" for="mail_host">Host</label>
                    <input
                      type="text"
                      id="mail_host"
                      wire:model="mail_host"
                      name="mail_host"
                      class="form-control"
                      placeholder="" />
                      <span class="text-danger">@error('mail_host') {{ $message }} @enderror</span>
                </div>
                <div class="col-12">
                    <label class="form-label" for="mail_port">Port</label>
                    <input
                      type="text"
                      id="mail_port"
                      wire:model="mail_port"
                      name="mail_port"
                      class="form-control"
                      placeholder="" />
                      <span class="text-danger">@error('mail_port') {{ $message }} @enderror</span>
                </div>
                <div class="col-12">
                    <label class="form-label" for="mail_username">Username</label>
                    <input
                      type="text"
                      id="mail_username"
                      wire:model="mail_username"
                      name="mail_username"
                      class="form-control"
                      placeholder="" />
                      <span class="text-danger">@error('mail_username') {{ $message }} @enderror</span>
                </div>
                <div class="col-12">
                    <label class="form-label" for="mail_password">Password</label>
                    <input
                      type="text"
                      id="mail_password"
                      wire:model="mail_password"
                      name="mail_password"
                      class="form-control"
                      placeholder="" />
                      <span class="text-danger">@error('mail_password') {{ $message }} @enderror</span>
                </div>
                <div class="col-12">
                    <label class="form-label" for="mail_encryption">Encryption</label>
                    <input
                      type="text"
                      id="mail_encryption"
                      wire:model="mail_encryption"
                      name="mail_encryption"
                      class="form-control"
                      placeholder="" />
                      <span class="text-danger">@error('mail_encryption') {{ $message }} @enderror</span>
                </div>
                <div class="col-12">
                    <label class="form-label" for="mail_from_address">From Address</label>
                    <input
                      type="text"
                      id="mail_from_address"
                      wire:model="mail_from_address"
                      name="mail_from_address"
                      class="form-control"
                      placeholder="" />
                      <span class="text-danger">@error('mail_from_address') {{ $message }} @enderror</span>
                </div>
                <div class="col-12">
                    <label class="form-label" for="mail_from_name">From Name</label>
                    <input
                      type="text"
                      id="mail_from_name"
                      wire:model="mail_from_name"
                      name="mail_from_name"
                      class="form-control"
                      placeholder="" />
                      <span class="text-danger">@error('mail_from_name') {{ $message }} @enderror</span>
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
