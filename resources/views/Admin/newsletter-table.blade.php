 @include('Admin.header')
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Newsletter</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Newsletter</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Newsletter

            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
						
                            <th>Email</th>
                            <th>Status</th>
                            <th>created_at</th>
							<th>updated_at</th>
                            

                        </tr>
                    </thead>
                    <tbody>
					@foreach($subscribe as $sub)
                        <tr>
                            <td>{{$sub->subscribe_email}}</td>
						<td>@if($sub->status == '1') <span class="badge bg-success">Subscriber</span> @else <span class="badge bg-danger ">Un Subscriber</span> @endif</td>
                            
                            <td>{{$sub->created_at}}</td>
							<td>{{$sub->updated_at}}</td>
                        
                           
                        </tr>
                    @endforeach       
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

           @include('Admin.footer')