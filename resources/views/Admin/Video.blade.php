
@extends('Admin/LayoutAdmin')


@section('content')

<div class="row">
    <div class="col-md-12 ">
        <div class="row">
            <div class="col-md-6">
                <div class="text-center">
                    <h3>Add new Video to {{$cat->Name}} </h3>

                <button  type="button" class="btn btn-info"   data-toggle="modal" data-target="#AddnewRecipe" >
                   Add</button></div>
            </div>
            <div class="col-md-6">
                @if (session('VidAdded'))
                    <div class="alert alert-success">
                        {{ session('VidAdded') }}
                    </div>
                @endif
                @if (session('VidDelete'))
                    <div class="alert alert-danger">
                        {{ session('VidDelete') }}
                    </div>
                @endif
            </div>
        </div>
        <br><br>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>

                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Country</th>
                    <th scope="col">Video</th>
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($RC as $rc)
                <tr>
                    <td>{{$rc->Title }}</td>
                    <td>{{$rc->description }}</td>
                    <td>{{$rc->Country }}</td>
                    <td>
                      <video width="320" height="240" controls>
                        <source src="/uploads/Video/{{$rc->video }}" type="video/mp4">
                        <source src="/uploads/Video/{{$rc->video }}" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    </td>

                    {{-- <td><img style="width:10vw;height:20vh;" src="/uploads/Recipe/{{$res->Image2 }}" /> </td> --}}
                    <td> <button id="reject" type="button" class="btn btn-danger"  onclick= "SendId('{{ $rc->id  }}')" data-toggle="modal" data-target="#DeleteRes" >
                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
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
            <form action="deleteVid" method="POST">
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
                    <p>Are you sure you want to delete this Video?</p>
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
            <form  action="AddNewVid" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Add new Video to {{$cat->Name}} </h4>
                    <br>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Title :</strong>
                                <input type="text" name="Title" class="form-control" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Country :</strong>
                                <input type="text" name="Country" class="form-control" placeholder="Country">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Video :</strong>
                                <input type="file" name="video" class="form-control" placeholder="video" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Descripton :</strong>
                                <textarea  type="text" name="description" class="form-control" cols="40" rows="4" placeholder="description"></textarea>
                            </div>
                        </div>

                        <input type="hidden" value="{{$cat->id}} " name="RecipesId" class="form-control" placeholder="RecipesId">



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
