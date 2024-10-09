<div class="modal fade" id="author" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Insert Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form enctype="multipart/form-data" action="{{ route("authors.store") }}" method="post">

                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Author name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                            placeholder="Insert a valid Product name" aria-describedby="emailHelp">
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Author Image</label>
                        <input name="image" accept="image/*" type="file" class="form-control"
                            id="exampleInputEmail1" placeholder="Insert a Valid Product name"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="modal-footer">
                        <button class="px-5 rounded-lg py-2 bg-alpha" type="submit" class="bg-alpha">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
