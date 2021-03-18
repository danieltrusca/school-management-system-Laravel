@extends('admin.admin_master')

@section('main_admin')


<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title"> Assign Subject Details</h3>
                            <a href="{{ route('assign.subject.add') }}"  class="btn btn-rounded btn-success mb-5 float-right" > Add Assign Subject</a>
                        </div>
                        <div class="box-body">
                            <h4><strong>Assign Subject : </strong>{{ $detailsData['0']->classes->name }} </h4>
					        <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th width="5%">SL</th>
                                            <th width="20%">Subject</th>
                                            <th width="20%">Full Mark</th>
                                            <th width="20%">Pass Mark</th>
                                            <th width="20%">Subjective Mark</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($detailsData as $key => $detail )
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td> {{ $detail->subjects->name }}</td>
                                            <td> {{ $detail->full_mark }}</td>
                                            <td> {{ $detail->pass_mark }}</td>
                                            <td> {{ $detail->subjective_mark }}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th width="5%">SL</th>
                                            <th width="20%">Subject</th>
                                            <th width="20%">Full Mark</th>
                                            <th width="20%">Pass Mark</th>
                                            <th width="20%">Subjective Mark</th>
                                        </tr>
                                    </tfoot>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
