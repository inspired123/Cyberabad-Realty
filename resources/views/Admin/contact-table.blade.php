  @include('Admin.header')

            
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Contact</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin-panel')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Contact

            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                         
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                        	<th>phone</th>
                        	<th>subject</th>
                        	<th>Message</th>
                        </tr>
						
                    </thead>
                    <tbody>
                          @foreach($contact as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
							<td>{{ $value->phone }}</td>
							<td>{{ $value->subject }}</td>
							<td>{{ $value->message }}</td>
                        </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

   @include('Admin.footer')
