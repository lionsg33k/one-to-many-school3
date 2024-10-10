<div class="modal fade" id="blog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Insert Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form enctype="multipart/form-data" action="{{ route("blogs.store") }}" method="post">

                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Blog</label>
                        <textarea name="blog" type="text" class="form-control" id="exampleInputEmail1"
                            placeholder="Insert a valid Product name" aria-describedby="emailHelp">

                        </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Images</label>
                        <input multiple name="images[]" type="file" accept="image/*" class="form-control" id="exampleInputEmail1"
                            placeholder="Insert a valid Product name" aria-describedby="emailHelp">

                    </div>


                    <div class="mb-3">

                        <label for="exampleInputEmail1" class="form-label">Product Category</label>

                        <select name="author_id" class="form-control" id="exampleInputEmail1"
                            placeholder="Insert a Valid Product name" aria-describedby="emailHelp">
                            <option selected disabled value="">Assign Blog to Author</option>
                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                            @endforeach

                        </select>



                    </div>


                    <div class="modal-footer">
                        <button class="px-5 rounded-lg py-2 bg-alpha" type="submit" class="bg-alpha">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
