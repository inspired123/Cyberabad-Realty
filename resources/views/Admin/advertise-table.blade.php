  @include('Admin.header')

            
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Advertise</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin-panel')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Advertise</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Advertise

            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                         
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                        	<th>phone</th>
                        	<th>state</th>
                        	<th>city</th>
                        	<th>country</th>
                        	<th>postal_code</th>
                        	<th>address</th>
                        	<th>full</th>
                        
                        </tr>
						
                    </thead>
                    <tbody>
                          @foreach($advertise as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
							<td>{{ $value->phone }}</td>
							<td>{{ $value->state }}</td>
							<td>{{ $value->city }}</td>
							<td>{{ $value->country }}</td>
							<td>{{ $value->postal_code }}</td>
							<td>{{ $value->address }}</td>
							<td>{{ $value->full }}</td>	
						
                        </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

   @include('Admin.footer')
