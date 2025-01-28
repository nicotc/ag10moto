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
                <h3>Crewar Template</h3>

              </div>
              <form id="CrateUserForm" class="row g-3" onsubmit="return false">



                <div class="col-12">
                    <label class="form-label" for="language">Language</label>
                  <select
                    id="language"
                    wire:model="language"
                    name="language"
                    class="form-select"
                    >
                    <option value="">Select</option>
                    <option value="en">English</option>
                    <option value="es">Spanish</option>
                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label " for="name">Name</label>
                    <input
                      type="text"
                      id="name"
                      wire:model="name"
                      name="name"
                      class="form-control"
                      placeholder="" />
                      <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                </div>
                <div class="col-12">
                    <label class="form-label" for="subject">Subject</label>
                    <input
                      type="text"
                      id="subject"
                      wire:model="subject"
                      name="subject"
                      class="form-control"
                      placeholder="" />
                      <span class="text-danger">@error('subject') {{ $message }} @enderror</span>
                </div>
                <div class="col-12">
                    <label class="form-label " for="body">Body</label>
                    <textarea
                      id="body"
                      wire:model="body"
                      name="body"
                      class="form-control"
                      placeholder=""
                      rows="5"
                      ></textarea>
                      <span class="text-danger">@error('body') {{ $message }} @enderror</span>
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
