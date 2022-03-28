@extends('layouts.layout')

@section('content')
<div class="container">

<div class="row">
    @foreach($data as $contact)
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-body py-5">
                    <div class="row">
                    <div class="col-lg-3 text-center">
                            <img src="{{ getAvatar( isset(($contact['email']))?$contact['email']:'' ) }}" class="img-fluid mb-3 lozad" alt="user" />
                        </div>
                        <div class="col-lg-9">
                            <h4>{{  isset(($contact['title']))?$contact['title']:'' }}  {{ isset(($contact['firstName']))?$contact['firstName']:'' }}  {{ isset(($contact['lastName']))?$contact['lastName']:'' }}</h4>


                            <p>{{ isset(($contact['address']))?$contact['address']:'' }}</p>

                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="p-1">Phone #</th>
                                            <td class="p-1"><a href="tel:{{ isset(($contact['phoneNumber']))?$contact['phoneNumber']:'' }}">{{ isset(($contact['phoneNumber']))?$contact['phoneNumber']:'' }}</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-1">Email ID :</th>
                                            <td class="p-1"><a href="mailto:{{ isset(($contact['email']))?$contact['email']:'' }}">{{ isset(($contact['email']))?$contact['email']:'' }}</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-1">Marketing :</th>
                                            <td class="p-1">
                                                @if(isset($contact['marketing']))
                                                    @if($contact['marketing']==1)

                                                    <span class="badge badge-success">Yes</span>
                                                    @else
                                                    <span class="badge badge-danger">No</span>
                                                    @endif
                                                @endif

                                                </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-1">Created At :</th>
                                            <td class="p-1">{{ isset(($contact['createdAt'])) ? date('Y-m-d h:m a', $contact['createdAt']):'' }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="p-1">Updated At :</th>
                                            <td class="p-1">{{ isset(($contact['updatedAt'])) ? date('Y-m-d h:m a', $contact['updatedAt']) :'' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        @endforeach
    </div>
    
</div>
@endsection
