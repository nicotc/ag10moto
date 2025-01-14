<div>
    <div wire:ignore.self
        class="modal fade"
        id="editRolesModal"
        tabindex="-1"
        aria-hidden="true"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        >
        <div class="modal-dialog modal-lg modal-simple modal-Crate-Role">
          <div class="p-3 modal-content p-md-5">
            <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="mb-4 text-center">
                <h3>edit Roles</h3>
                <p>Updating Role details will receive a privacy audit.</p>
              </div>
              <form id="CrateRoleForm" class="row g-3" onsubmit="return false">
                <div class="col-12">
                  <label class="form-label" for="modalCrateRoleName">Roles</label>
                  <input
                    type="text"
                    id="RoleName"
                    wire:model="name"
                    name="name"
                    class="form-control"
                    placeholder="" />
                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                </div>

                <div class="col-6">
                  <label class="form-label" for="modalCrateRolePermission">Permission</label>
                    @forelse ($permissions as $module => $permission)
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"></h4>{{ $module }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($permission as $perm)
                                <div class="col-12">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value="{{ $perm->id }}"
                                            wire:model="perm.{{ $perm->name }}"
                                            id="{{ $perm->name }}"
                                            name="{{ $perm->name }}"
                                            />
                                        <label class="form-check" for="{{ $perm->name }}">{{ $perm->name }}</label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    @empty



                    @endforelse




                <div class="mt-4 text-center col-12">
                  <button type="submit"
                   class="btn btn-primary me-sm-3 me-1"
                   wire:click="updateRole"
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
