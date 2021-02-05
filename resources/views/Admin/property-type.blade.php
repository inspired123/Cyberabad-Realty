  @include('Admin.header')

            
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Propertytype</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin-panel')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Propertytype</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Propertytype
			<a href="{{url('/')}}/property-type-add"><span class="badge bg-danger float-right" style="padding:12px;"><i class="fa fa-plus"></i>Add Propertytype</span></a>

            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Property Name</th>
                            <th>Image</th>
                            

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Villa</td>
                            <td>-</td>
                            
                           
                        </tr>
                         <tr>
                            <td>Independent House</td>
                            <td>-</td>
                            
                           
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

       @include('Admin.footer')

