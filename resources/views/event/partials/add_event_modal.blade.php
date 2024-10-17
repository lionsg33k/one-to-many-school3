<div class="modal fade" id="event" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add People</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form enctype="multipart/form-data" action="{{ route('event.store') }}" method="post">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Insert a valid  name">

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" type="text" class="form-control" placeholder="Insert a valid  Description"></textarea>

                    </div>


                    <div class="mb-3">

                        <label for="exampleInputEmail1" class="form-label">Organizer Name</label>

                        <select name="people_id" class="form-control" id="exampleInputEmail1"
                            placeholder="Insert a Valid Product name" aria-describedby="emailHelp">
                            <option selected disabled value="">Select Organizer</option>
                            @foreach ($organizers as $organizer)
                                <option value="{{ $organizer->id }}">{{ $organizer->name }}</option>
                            @endforeach

                        </select>



                    </div>

                    <div class="mb-3">
                        <label class="form-label">Place</label>
                        <input name="place" type="text" class="form-control"
                            placeholder="Insert a valid place name">

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <input name="date" type="date" class="form-control" placeholder="Insert a valid  name">

                    </div>


                    <div class="mb-3 ">
                        <label class="form-label mb-0">Start</label>
                        <input name="start" type="time" class="form-control " placeholder="Insert a valid  name">

                    </div>


                    <div class="mb-3 ">
                        <label class="form-label mb-0">End</label>
                        <input name="end" type="time" class="form-control " placeholder="Insert a valid  name">

                    </div>



                    <div class="mb-3 ">
                        <label class="form-label mb-0">Cover</label>
                        <input name="cover" type="file" class="form-control " accept="image/*">

                    </div>







                    <div class="modal-footer">
                        <button class="px-5 rounded-lg py-2 bg-alpha" type="submit" class="bg-alpha">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
