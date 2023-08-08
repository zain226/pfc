@extends('admin.layouts.app')
@section('title','Latest Updates')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Latest Updates</h6>
                </div>
                <div class="card-body">
            
                    <form method="POST" action="{{route('admin.cms.setting')}}" enctype="multipart/form-data">
                                @csrf
                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Latest News 1</label>
                                            <input class="form-control" name="latest_news1" type="text"
                                                value="{{$setting['latest_news1'] ?? ''}}" />
                                        </div>
                    </div>
                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Latest News 2</label>
                                            <input class="form-control" name="latest_news2" type="text"
                                                value="{{$setting['latest_news2'] ?? ''}}" />
                                        </div>
                    </div>
                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Latest News 3</label>
                                            <input class="form-control" name="latest_news3" type="text"
                                                value="{{$setting['latest_news3'] ?? ''}}" />
                                        </div>
                    </div>
                                       <button class="btn btn-success">Submit</button>
                    </div>
                      
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
