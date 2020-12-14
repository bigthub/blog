@extends('app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New Status Post</div>

                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label class="font-weight-bold">Upload Image</label>
                                <input type="file" class="form-control-file">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Caption</label>
                                <input type="text" class="form-control" placeholder="add a caption">
                            </div>
                            <button type="submit" class="btn btn-primary"> Submit </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection