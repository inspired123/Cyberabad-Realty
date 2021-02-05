  @include('Admin.header')

            
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Location</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin-panel')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">location</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
              <div class="card-header">
               location
			<a href="{{url('/')}}/add-location"><span class="btn btn-success float-right" style="padding:8px; border-radius: 10px !important;"><i class="fa fa-plus"></i><b>Add location</b></span></a>
<p id="success"></p>
            </div>

            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                         
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Image</th>
                        	 
                        </tr>
						
                    </thead>
                    <tbody>
                          @foreach($locations as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                          
							<td><img src="{{url('/')}}/{{$value->image}}" style="width:50px; height:50px;"></td>
								<td>
                                <a href="{{url('/')}}/edit-location/{{ $value->id}}"><span class="btn btn-primary">Edit</span>	</a>	
								
							
								<span href="#"class="btn btn-danger deleteRecord " id="{{ $value->id }}" >Delete</span>
								@if($value->status == '1')
                    <i class="fa fa-toggle-on status{{ $value->id }}" style="font-size:23px;color:green" onclick="javascript:status({{ $value->id }},{{ $value->status }})"></i>

  @elseif($value->status == '0')
                    <i class="fa fa-toggle-off status{{ $value->id }}" style="font-size:23px;color:black" onclick="javascript:status({{ $value->id }},{{ $value->status }})"></i>
@endif
							</td>
							
                        </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
$(".deleteRecord").click(function(){
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");
   
    $.ajax(
    {
        url: "location/"+id,
        type: 'DELETE',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (){
            console.log("it Works");
        }
    });
   
});
	</script>


   @include('Admin.footer')
