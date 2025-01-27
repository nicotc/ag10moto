<div>
    <div wire:ignore.self
        class="modal fade"
        id="editNoteModal"
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
                <h3>Editar Nota</h3>
              </div>
              <form id="CrateNote" class="row g-3" onsubmit="return false">
                <div class="col-md-12">
                    <label for="note">Nota</label>
                    <textarea
                        wire:model="note"
                        class="form-control"
                        id="note"
                        name="note"
                        rows="3"
                        required
                    ></textarea>

                    @error('note')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>

                <div class="col-md-12">
                    <button
                        wire:click="update"
                        class="btn btn-primary"
                        type="submit"
                    >
                        Guardar
                    </button>


              </form>
            </div>
          </div>
        </div>
    </div>
    </div>
