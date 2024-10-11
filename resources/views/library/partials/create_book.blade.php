<div class="modal fade" id="book" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Book</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form enctype="multipart/form-data" action="{{ route('book.store') }}" method="post">

                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Book Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                            placeholder="Insert a valid Product name" aria-describedby="emailHelp">

                    </div>



                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Book Cover</label>
                        <input name="cover" type="file" accept="image/*" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>


                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Book Gallery</label>
                        <input multiple name="gallery[]" type="file" accept="image/*" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>


                    <div class="mb-3">

                        <label for="exampleInputEmail1" class="form-label">Author    Name</label>

                        <select name="author_id" class="form-control" id="exampleInputEmail1"
                            placeholder="Insert a Valid Product name" aria-describedby="emailHelp">
                            <option selected disabled value="">Select Author</option>
                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                            @endforeach

                        </select>



                    </div>


                    <div class="mb-3">

                        <label for="exampleInputEmail1" class="form-label">Category Name</label>

                        <select name="category_id" class="form-control" id="exampleInputEmail1"
                            placeholder="Insert a Valid Product name" aria-describedby="emailHelp">
                            <option selected disabled value="">Select Book Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                        </select>



                    </div>


                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">UPLOAD BOOK</label>
                        <input name="book" type="file" accept="application/pdf" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>

     


                    <div class="modal-footer">
                        <button class="px-5 rounded-lg py-2 bg-alpha" type="submit" class="bg-alpha">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
