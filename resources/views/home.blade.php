@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Ticketing System Dashboard</div>

                <div class="card-body">
                 
                    <div class="content">
                        <div class="title m-b-md">
                            <bold><font color="red">In</font><font color="green">&</font><font color="red">Out</font></bold>
                        </div>
        
                        <div class="links">
                            <a href="{{ url('logs/create') }}"><h4>Create New Ticket (عمل تيكت جديدة)</h4></a>
                            <a href="{{ url('find') }}"><h4>Search For Existing Ticket (بحث عن تكت)</h4></a>
                        </div>
                    </div>
                    
                </div>

                <div class="card-footer">
                 <div class="text-right"><h3>أهلا بيك يا {{ Auth::user()->name }}! </h3></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
