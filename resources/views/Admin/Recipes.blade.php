
@extends('Admin/LayoutAdmin')


@section('content')

<div class="row">
    <div class="col-md-12 ">
        <div class="row">
            <div class="col-md-6">

                <button  type="button" class="btn btn-info"   data-toggle="modal" data-target="#AddnewRecipe" >
                   Add new Recipe </button>
            </div>
            <div class="col-md-6">
                @if (session('RecAdded'))
                    <div class="alert alert-success">
                        {{ session('RecAdded') }}
                    </div>
                @endif
                @if (session('RecDelete'))
                    <div class="alert alert-danger">
                        {{ session('RecDelete') }}
                    </div>
                @endif
            </div>
        </div>
        <br><br>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Country</th>
                    <th scope="col">Coocking Time</th>
                    <th scope="col">Preparation Time</th>
                    <th scope="col">Number Of Serving</th>
                    <th scope="col">Category</th>
                    <th scope="col">Thumbnail</th>
                    <th scope="col">Image 1</th>
                    {{-- <th scope="col">Image 2</th> --}}
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Recipe as $res)
                <tr>
                    <td>{{$res->Name }}</td>
                    <td>{{$res->description }}</td>
                    <td>{{$res->Country }}</td>
                    <td>{{$res->CoockingTime }}</td>
                    <td>{{$res->PrepTime }}</td>
                    <td>{{$res->NumberOfServing }}</td>
                    <td>{{$res->CategoryName }}</td>
                    <td><img style="width:10vw;height:20vh;" src="/uploads/Recipe/{{$res->Thumbnail }}" /> </td>
                    @if($res->Image != null)
                    <td><img style="width:10vw;height:20vh;" src="/uploads/Recipe/{{$res->Image }}" /> </td>
                    @else
                    <td>No Image </td>
                    @endif
                    {{-- <td><img style="width:10vw;height:20vh;" src="/uploads/Recipe/{{$res->Image2 }}" /> </td> --}}
                    <td> <button id="reject" type="button" class="btn btn-danger"  onclick= "SendId('{{ $res->id  }}')" data-toggle="modal" data-target="#DeleteRes" >
                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                        <a class="btn btn-primary" href="/Admin/Recipe/Ingredient/{{ $res->id  }}" >Ingredients</a>
                        <a class="btn btn-primary" href="/Admin/Recipe/Video/{{ $res->id  }}" >Videos</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    function SendId(id) {
        document.getElementById("inputt").value = id;
    }
</script>
<!-- Modal -->
<div id="DeleteRes" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="deleteRes" method="POST">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Delete</h4>
                    <br>
                    <input type="hidden" class="form-control" id="inputt" aria-describedby="text" name="Id"
                        readonly>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this Recipe?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="submit" name="Delete" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="AddnewRecipe" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  action="AddNewRes" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Add New Recipe</h4>
                    <br>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="Name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Country:</strong>
                                <input type="text" name="Country" class="form-control" placeholder="Country">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Descripton :</strong>
                                <textarea  type="text" name="description" class="form-control" cols="40" rows="4" placeholder="description"> </textarea>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Number Of Serving:</strong>
                                <input type="text" name="NumberOfServing" class="form-control" placeholder="NumberOfServing">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Coocking Time:</strong>
                                <input type="text" name="CoockingTime" class="form-control" placeholder="CoockingTime">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Preparation Time:</strong>
                                <input type="text" name="PrepTime" class="form-control" placeholder="PrepTime">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Thumbnail:</strong>
                                <input type="file" name="Thumbnail"   class="form-control" placeholder="Thumbnail">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Image:</strong>
                                <input type="file" name="Image"  class="form-control" placeholder="image">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Image2:</strong>
                                <input type="file" name="Image2"   class="form-control" placeholder="image2">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Image3:</strong>
                                <input type="file" name="Image3"   class="form-control" placeholder="image2">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Category :</strong>
                                <select class="form-control" name="CatId" >
                                    @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}" >{{ $cat->CategoryName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                </div>
                <div class="modal-footer">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop
