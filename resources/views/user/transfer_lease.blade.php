@extends('user.layouts.app')
@section('title','Transfer Lease')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('user.components.breadcrumb',['breadcrumbs'=> ['Transfer Lease' =>
        route('user.transfer_lease'), 'Ownership Transfer' =>
        '']])
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Ownership Transfer Lease</h6>
                <div class="mb-3"></div>
                <p>By filling out this online ownership transfer form, I hereby declare that the ownership of the said
                    cat has been transferred from myself to the new owner.
                </p>
            </div>
            <div class="card-body">

            </div>
            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <div class="mb-3">
                            <form action="">
                                <label for="nod" class="form-label">Name of Cat</label>
                                <select class="form-select mb-3" aria-label="" id="nod">
                                    <option selected="">Select One</option>
                                    <option value="1">Achilles Glory at Supreme Labrador</option>
                                    <option value="2">Aqua of Supreme Labradors</option>
                                    <option value="3">Audi of Supreme Labrador</option>
                                </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nod" class="form-label">New Owner</label>
                            <select class="form-select mb-3" aria-label="" id="nod">
                                <option selected="">Select One</option>
                                <option value="1">M Faizan Tahir</option>
                                <option value="2">Nouman Tariq</option>
                                <option value="3">Sohail Abbasi</option>
                            </select>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="card-header">
                <div class="col-2">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                <div class="mb-3"></div>
                <div class="card-body">
                    <h6 class="text-center mb-3">Cat Ownership Transfer Fee is waived in case of a breeder transferring
                        ownership of a puppy.</h6>
                    <p>Once you click Submit, the ownership of the cat will be transferred to the new owner. If you
                        already have a positive balance in your account, that balance will be used for payment. If
                        payment is required, you will be alerted of the amount payable. All payments are only acceptable
                        in the form of a Bank Draft or Pay Order, drawn on a local bank and made out in favour of “PKC“.
                        No payments made via any other method are acceptable.
                    </p>
                </div>
                <h6 class="mb-3">Cat Lease</h6>
                <p>By filling out this online lease form, I hereby declare that I, being the owner of the cat/bitch have
                    leased it to said PKCmember. I also certify that I have made a formal agreement with the lessee. I
                    also acknowledge and understand that this lease form does not constitute a formal agreement between
                    myself and the lessee.
                </p>
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <div class="mb-3">
                                <form action="">
                                    <label for="nod" class="form-label">Name of Cat</label>
                                    <select class="form-select mb-3" aria-label="" id="nod">
                                        <option selected="">Select One</option>
                                        <option value="1">Achilles Glory at Supreme Labrador</option>
                                        <option value="2">Aqua of Supreme Labradors</option>
                                        <option value="3">Audi of Supreme Labrador</option>
                                    </select>
                            </div>
                            <div class="mb-3">
                                <form action="">
                                    <label for="from" class="form-label">From</label>
                                    <input type="text" class="form-control" id="from">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nod" class="form-label">Name of Lessee</label>
                                <select class="form-select mb-3" aria-label="" id="nod">
                                    <option selected="">Select One</option>
                                    <option value="1">M Faizan Tahir</option>
                                    <option value="2">Nouman Tariq</option>
                                    <option value="3">Sohail Abbasi</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <form action="">
                                    <label for="to" class="form-label">To</label>
                                    <input type="text" class="form-control" id="to">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p>I understand that this lease will end on</p>
                        <div class="col-2">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
            <div class="mb-3"></div>
            <div class="card-body">
                <p>Once you click Submit, the the cat will be marked as leased to the new owner. If you already have a
                    positive balance in your account, that balance will be used for payment. If payment is required, you
                    will be alerted of the amount payable. All payments are only acceptable in the form of a Bank Draft
                    or Pay Order, drawn on a local bank and made out in favour of “PKC“. No payments made via any other
                    method are acceptable.</p>
                <div class="mb-3"></div>
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xl-4 d-flex">
                            <div class="card radius-10 bg-transparent shadow-none w-100">
                                <div class="card-body p-0">
                                    <div class="card radius-10">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                            </div>
                                            <h5 class="my-3">Cat Ownership Transfer Fee</h5>
                                            <h2>Rs 1,000</h2>
                                            <p class="mb-0 mt-2">Transfer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 col-xl-4 d-flex">
                            <div class="card radius-10 bg-transparent shadow-none w-100">
                                <div class="card-body p-0">
                                    <div class="card radius-10">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                            </div>
                                            <h5 class="my-3">Cat Lease Fee</h5>
                                            <h2>Rs 1,000</h2>
                                            <p class="mb-0 mt-2">Lease</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 @endsection
