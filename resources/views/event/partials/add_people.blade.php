<div class="modal fade" id="people" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add People</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('people.store') }}" method="post">

                    @csrf

                    <div class="mb-3">
                        <label  class="form-label">Name</label>
                        <input name="name" type="text" class="form-control"
                            placeholder="Insert a valid  name">

                    </div>
                    <br>

                    <div class="mb-3 flex items-center gap-x-6">

                        <label for="exampleInputEmail1" class="form-label mb-0">Mark as Organier</label>

                        <input value="organizer" name="role" class="w-4 h-4" type="checkbox">

                    </div>





                    <div class="modal-footer">
                        <button class="px-5 rounded-lg py-2 bg-alpha" type="submit" class="bg-alpha">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
