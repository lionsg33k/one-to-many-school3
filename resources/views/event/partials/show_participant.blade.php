<div class="modal fade" id="participant{{ $event->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Participants List for {{ $event->name }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                @forelse ($event->peoples as $people)
                    <h1 class="text-lg py-3">{{ $people->name }}</h1>
                @empty
                    <h1>there is no participant in this event</h1>
                @endforelse

            </div>
        </div>
    </div>
