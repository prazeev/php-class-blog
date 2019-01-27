@extends('../layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{isset($category) ? "Edit Category - ".$category->title : "Create Category"}}</div>
                <div class="card-body">
                    <form action="{{isset($category) ? route('categories.update', [$category->id]) : route('categories.store')}}" method="post">
                        @csrf
                        @if(isset($category))
                            @method('PATCH')
                        @endif
                        <div class="form-group">
                            <label for="title">Title *</label>
                            <input type="text" class="form-control" required="required" placeholder="Enter title.." id="title" name="title" value="{{isset($category) ? $category->title : ''}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" placeholder="Description..." class="form-control" name="description">{{isset($category) ? $category->description : ''}}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
