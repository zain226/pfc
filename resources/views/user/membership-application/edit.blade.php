@extends('admin.layouts.app')
@section('title','Edit Cat Events')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Cat Events' =>
        route('admin.event_management.index'), 'Edit Cat Events' => '']])

        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Edit Cat Events</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="event_title" class="form-label">Event Title</label>
                    <input class="form-control" type="input" id="event_title">
                </div>
                <div class="mb-3">
                    <label for="event_note" class="form-label">Event Note</label>
                    <input class="form-control" type="input" id="event_note">
                </div>
                <div class="mb-3">
                    <label for="event_venue" class="form-label">Event Venue</label>
                    <input class="form-control" type="input" id="event_venue">
                </div>
                <div class="mb-3">
                    <label for="judge_1" class="form-label">Judge 1</label>
                    <input class="form-control" type="input" id="judge_1">
                </div>
                <div class="mb-3">
                    <label for="judge_2" class="form-label">Judge 2</label>
                    <input class="form-control" type="input" id="judge_2">
                </div>
                <div class="mb-3">
                    <label for="judge_3" class="form-label">Judge 3</label>
                    <input class="form-control" type="input" id="judge_3">
                </div>
                <div class="mb-3">
                    <label for="steward" class="form-label">Steward</label>
                    <input class="form-control" type="input" id="steward">
                </div>
                <div class="mb-3">
                    <label for="lock_class" class="form-label">Lock class</label>
                    <input class="form-control" type="input" id="lock_class">
                </div>
                <div class="mb-3">
                    <label for="event_date" class="form-label">Event Date</label>
                    <input type="date" class="form-control" id="event_date">
                </div>
            </div>
            <!-- Bottom Button -->

            <div class="row">
                <div class="col-2">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-grid">

                        <button type="submit" class="btn btn-primary">Save Changes and Go Back to List</button>

                    </div>
                </div>
                <div class="col-2">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </div>
            <!-- End Bottom Button -->

        </div>
    </div>
</div>
@endsection
