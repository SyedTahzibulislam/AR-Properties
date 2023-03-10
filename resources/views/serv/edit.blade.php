@extends('Latest_properties.layout')
@section('sidebar')
    @parent
@endsection 
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ URL::previous() }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
	

  
    <form action="{{ route('serv.update', $serv->id) }}" method="POST" enctype="multipart/form-data">   
        @csrf
        @method('PUT')
   
           <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Service Name :</strong>
                <input type="text" name="service_name" value="{{$serv->service_name}}"  class="form-control" placeholder="Name">       
            </div>
			

					
            <div class="form-group">
                <strong>Description 1st para :</strong>
                <textarea style="height:150px" name="description_1st" class="form-control" placeholder=" paragraph">{{$serv->description_1st}}</textarea>
            </div>
			
			            <div class="form-group">
                <strong>Description 2nd para :</strong>
                <textarea style="height:150px" name="description_2nd"   class="form-control" placeholder=" paragraph">{{$serv->description_2nd}}</textarea>
            </div>
			
			            <div class="form-group">
                <strong>Description 3rd para :</strong>
                <textarea style="height:150px" name="description_3rd" class="form-control" placeholder=" paragraph">{{$serv->description_3rd}}</textarea>
            </div>
			
			            <div class="form-group"> 
                <strong>Description 4th para :</strong>
                <textarea style="height:150px" name="description_4th"   class="form-control" placeholder=" paragraph">{{$serv->description_4th}}</textarea>
            </div>
			
			
			            <div class="form-group">
                <strong>Description 5th para :</strong>
                <textarea style="height:150px" name="description_5th"   class="form-control" placeholder=" paragraph">{{$serv->description_5th}}</textarea>
            </div>
			
			            <div class="form-group">
                <strong>Slogan 1 :</strong>
                <input type="text" name="slogan_1" value="{{$serv->slogan_1}}"  class="form-control" placeholder="Name">
            </div>
			
						            <div class="form-group">
                <strong>Slogan 2 :</strong>
                <input type="text" name="slogan_2" value="{{$serv->slogan_2}}" class="form-control" placeholder="Name">
            </div>
			
								            <div class="form-group">
                <strong>Business starting date  :</strong>
                <input type="text" name="starting_date"  value="{{$serv->starting_date}}" class="form-control" placeholder="Name">
            </div>
			
											            <div class="form-group">
                <strong>????????????????????? ?????? ?????????   :</strong>
                <input type="text" name="bnservice_name" value="{{$serv->bnservice_name}}"   class="form-control" placeholder="Name">
            </div>
			
			
			 <div class="form-group">
                <strong>??????????????? ?????? ?????????????????? :</strong>
                <textarea style="height:150px" name="bndescription_1st" class="form-control" placeholder=" paragraph">  {{$serv->bndescription_1st}}  </textarea>
            </div>
			
			            <div class="form-group">
                <strong>??????????????? ?????? ?????????????????? :</strong>
                <textarea style="height:150px" name="bndescription_2nd"   class="form-control" placeholder=" paragraph"> {{$serv->bndescription_2nd}}    </textarea>
            </div>
			
			            <div class="form-group">
                <strong>??????????????? ??????  ?????????????????? :</strong>
                <textarea style="height:150px" name="bndescription_3rd" class="form-control"  placeholder=" paragraph"> {{$serv->bndescription_3rd}}   </textarea>
            </div>
			
			            <div class="form-group">
                <strong>??????????????? ??????????????????  ?????????????????? :</strong>
                <textarea style="height:150px" name="bndescription_4th" class="form-control"  placeholder=" paragraph"> {{$serv->bndescription_4th}}  </textarea>
            </div>
			
			
			            <div class="form-group">
                <strong>??????????????? ?????? ?????????????????? :</strong>   
                <textarea style="height:150px" name="bndescription_5th" class="form-control" placeholder=" paragraph"> {{$serv->bndescription_5th }} </textarea>
            </div>
			
						            <div class="form-group">
                <strong>????????????????????? ???:</strong>
                <input type="text" name="bnslogan_1" class="form-control" value="{{$serv->bnslogan_1}}" placeholder="Name">
            </div>
			
						            <div class="form-group">
                <strong> ????????????????????? ??? :</strong>
                <input type="text" name="bnslogan_2" class="form-control"  value="{{$serv->bnslogan_2}}" placeholder="Name">
            </div>
			
								            <div class="form-group">  
                <strong> ????????????????????? ??????????????? ?????????   :</strong>
                <input type="text" name="bnstarting_date" class="form-control" value="{{$serv->bnstarting_date}}" placeholder="Name">
            </div>
   
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image"  value="/image/{{ $serv->image }}" class="form-control" placeholder="image">   
                    <img src="/image/{{ $serv->image }}" width="300px">
                </div>
			
			 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
    </form>
	
@endsection