@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span>Ticketing System Dashboard</span>
                    <span><a href="{{ url('/home') }}">الرئيسية</a></span>
                </div>

                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="label label-primary">
                                    اسم العميل:
                                </span>
                                <div class="form-group">
                                    <input id="account" type="text" name="name" required>
                                </div>
                                <span class="label label-primary">
                                    رقم الموبايل:
                                </span>
                                <div class="form-group">
                                    <input id="account" type="number" name="account" required>
                                </div>
                                <div class="form-group">
                                    <span class="label label-primary">
                                        حالة التيكت:
                                    </span>
                                    <select name="status" id="tkt_status" required>
                                        <option value="">من فضلك أختار</option>
                                        <option value="0">Closed</option>
                                        <option value="1">Opened</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span class="label label-primary">
                                    ما تم بالمكالمة:
                                    </span>
                                <div class="form-group">
                                    <textarea name="" id="" cols="50" rows="10" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <input type="submit">
                        </div>
                    </form>
                </div>


                <div class="card-footer">
                    <div class="text-right"><h3>أحنا هنا بنضيف تيكت جديدة لو البحث مطلعش تيكت قديمة</h3></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
