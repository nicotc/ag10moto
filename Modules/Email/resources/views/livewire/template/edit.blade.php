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
              <form id="CrateUserForm" class="row g-3" onsubmit="return false">



                <div class="col-12">
                    <label class="form-label" for="lang">Language</label>
                    <select id="lang" wire:model.change="lang" name="lang" class="form-select">
                        <option value="">Select</option>
                        @foreach ($langs as $key => $value)
                            <option
                            @if($lang == $key)
                                selected
                            @endif
                            value="{{ $key }}">{{ $value }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="col-12">
                    <label class="form-label" for="subject">Subject</label>
                    <input type="text" id="subject" wire:model="subject" name="subject"
                        class="form-control" placeholder="" />
                    <span class="text-danger">
                        @error('subject')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-12 form-group">

                    <label class="form-label " for="body">Body</label>
                    {{-- <livewire:quill-text-editor wire:model.live="body" theme="snow" /> --}}
                    <livewire:quill-edit  wire:model.live="content"/>
                    <div class="mt-4 text-center col-12">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1"
                            wire:click="save">Submit</button>

                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
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
