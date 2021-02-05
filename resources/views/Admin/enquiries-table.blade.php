  @include('Admin.header')

            
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Enquiries</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin-panel')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Enquiries</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        
                        <tr>
							<th>Property Id</th>
                            <th>Name</th>
                            <th>Email</th>
							<th>Mobile no</th>
							<th>PropertyLocation</th>
							<th>PropertyType</th>
							<th>PropertyPurpose</th>
        	                <th>Agent</th>                    
	                        <th>MinBeds</th>
                            <th>MinBathrooms</th>
							<th>MinPrice</th>
							<th>MaxPrice</th>
							<th>MinArea</th>
        	                <th>MaxArea</th>                    
	                        <th>PropertyID</th>	                        
	                          <th>AdditionalDetails</th>	       
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($enquiry as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                           <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->mobile }}</td>
                            <td>{{ $value->PropertyLocation }}</td>
                            <td>{{ $value->PropertyType }}</td>
                            <td>{{ $value->PropertyPurpose }}</td>
                            <td>{{ $value->Agent }}</td>
                            <td>{{ $value->MinBeds }}</td>
                            <td>{{ $value->MinBathrooms }}</td>
                            <td>{{ $value->MinPrice }}</td>
                            <td>{{ $value->MaxPrice }}</td>
                            <td>{{ $value->MinArea }}</td>
                            <td>{{ $value->MaxArea }}</td>
                            <td>{{ $value->PropertyID }}</td>
                            <td>{{ $value->AdditionalDetails }}</td>
                           



                        </tr>
                        @endforeach
                         
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                        <p>2020 &copy; Cyberabad</p>
                    </div>
                    
                </div>
            </footer>
        </div>
    </div>
  @include('Admin.footer')
