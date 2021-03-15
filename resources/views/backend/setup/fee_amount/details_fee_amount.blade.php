@extends('admin.admin_master')

@section('main_admin')


<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title"> Fee Amount Details</h3>
                            <a href="{{ route('fee.amount.add') }}"  class="btn btn-rounded btn-success mb-5 float-right"> Add Fee Amount</a>
                        </div>
                        <div class="box-body">
                            <h4><strong>Fee Category : </strong>{{ $detailsData['0']->fee_category->name }} </h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th width="5%">SL</th>
                                            <th>Class Name</th>
                                            <th width="25%">Amount</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($detailsData as $key => $detail )
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            {{-- <td> {{ $detail['student_class']['name'] }}</td> --}}
                                            <td> {{ $detail->student_class->name }}</td>
                                            <td> {{ $detail->amount }}</td>

                                        </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                            <th width="5%">SL</th>
                                            <th>Class Name</th>
                                            <th width="25%">Amount</th>
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
