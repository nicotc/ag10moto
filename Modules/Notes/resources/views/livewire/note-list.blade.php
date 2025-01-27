<div>
    <div class="mb-4 card">
        <div class="card-header">
           {{-- titulo a la izquierda  boton a la derecha  misma linea FLEX--}}
            <div class="d-flex justify-content-between">
                <h5 class="card-title ">Notas Internas</h5>
                <button class="btn btn-primary" wire:click="$dispatch('openCreateNoteModal')">
                    <i class="bx bx-plus"></i>
                    Agregar Nota
                </button>
            </div>
        </div>

        @forelse ($notes as $note )
        <div class="card-body">
            <div class="py-1 app-email-view-content ps ps--active-y">
                <div class="mx-2 border shadow-none card email-card-prev mx-sm-4 border-warning" style="display: block;">
                    <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                        <div class="mb-3 d-flex align-items-center mb-sm-0">
                            <div class="flex-grow-1 ms-1">
                                <span class="badge bg-primary">
                                    {{ getUser($note->created_by) }}
                                </span><br>
                                <small class="text-muted">
                                    {{ $note->created_at->diffForHumans() }}
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>
                            {{ $note->note }}
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <div class="d-flex">
                            <button class="mx-2 btn btn-sm btn-outline-primary" wire:click="editNoteModal('{{ $note->id }}')">Edit</button>
                            <button class="mx-2 btn btn-sm btn-outline-danger" wire:click="$dispatch('deleteNote',{{ $note->id }})">Delete</button>

                            {{-- <button class="btn btn-sm btn-outline-danger" wire:click="deleteNote('{{ $note->id }}')">Delete</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <div class="card-body">
                <p>No hay notas</p>
            </div>

        @endforelse

    </div>

</div>
