<div>
<div wire:ignore.self
    class="modal fade"
    id="editUserModal"
    tabindex="-1"
    aria-hidden="true"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    >
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
      <div class="p-3 modal-content p-md-5">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="mb-4 text-center">
            <h3>Edit User Information</h3>
            <p>Updating user details will receive a privacy audit.</p>
          </div>
          <form id="editUserForm" class="row g-3" onsubmit="return false">

            <div class="col-6">
                <label class="form-label" for="modalCrateUserName">Nombre</label>
                <input
                  type="text"
                  id="UserName"
                  wire:model="firstName"
                  name="name"
                  class="form-control"
                  placeholder="" />
                  <span class="text-danger">@error('firstName') {{ $message }} @enderror</span>

              </div>
              <div class="col-6">
                <label class="form-label" for="modalCrateUserLastName">Apellido</label>
                  <input
                      type="text"
                      id="modalCrateUserLastName"
                      wire:model="lastName"
                      name="lastName"
                      class="form-control"
                      placeholder="" />
                      <span class="text-danger">@error('lastName') {{ $message }} @enderror</span>
              </div>

            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserEmail">Email</label>
              <input
                type="text"
                  wire:model="email"
                id="modalEditUserEmail"
                name="modalEditUserEmail"
                class="form-control"
                placeholder="example@domain.com" />
                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserStatus">Role</label>
              <select
                id="modalEditUserStatus"
                name="modalEditUserStatus"
                class="form-select"
                wire:model="role"
                aria-label="Default select example">
                <option value="">Selecciona el rol</option>
                @foreach ($roleslist as $lRole)

                <option value="{{ $lRole }}">{{ $lRole }}</option>
                @endforeach
              </select>
            </div>


            <div class="col-12 col-md-6">
                <label class="form-label">Idioma</label>
                  <select
                      id="modalCrateUserLanguage"
                      name="modalCrateUserLanguage"
                      class="form-select"
                      wire:model.live="lang"
                      aria-label="Default select example">
                      <option value="">Selecciona el idioma</option>
                      @foreach ($langlist as $key => $language)
                      <option value="{{ $key }}">{{ $language }}</option>
                      @endforeach
                  </select>
              </div>


            <div class="mt-4 text-center col-12">
              <button type="submit"
               class="btn btn-primary me-sm-3 me-1"
               wire:click="updateUser"
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
