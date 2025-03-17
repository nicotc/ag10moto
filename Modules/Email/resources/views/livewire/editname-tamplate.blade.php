<div>
    <div wire:ignore.self class="modal fade" id="editModalTemplateName" tabindex="-1" aria-hidden="true" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog modal-lg modal-simple modal-Crate-user">
            <div class="p-3 modal-content p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="mb-4 text-center">
                        <h3>Edit Template</h3>
                    </div>
                    <form id="CrateUserForm" class="row g-3" onsubmit="return false">


                            <div class="col-12">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" id="name" wire:model="name" name="name" class="form-control"
                                    placeholder="" />
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            {{-- btn --}}
                            <div class="col-12">
                                <button wire:click="save" class="btn btn-primary">Save</button>
                            </div>




                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

