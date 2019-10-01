@extends('admin.layout.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">{{$page_name}}</strong>
            </div>
            <div class="card-body">
              <!-- Credit Card -->
              <div id="pay-invoice">
                  <div class="card-body">
                      <div class="card-title">
                          <h3 class="text-center">{{$page_name}}</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <ul>
                            <li>{{$error}}</li>
                        </ul>
                    @endforeach
                </div>
            @endif
                      </div>
                      <hr>

    {!! Form::model($role,['route' => ['role-update', $role->id ], 'method'=>'put']) !!}


        <div class="form-group">
            {!! Form::label('name', 'Name', ['class'=>'control-label mb-1']) !!}
            {!!Form::text('name', null, ['class'=>'form-control' , 'id'=>'name']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('display_name', 'Display Name', ['class'=>'control-label mb-1']) !!}
            {!!Form::text('display_name', null, ['class'=>'form-control' , 'id'=>'display_name']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Payment Option', ['class'=>'control-label mb-1']) !!}
            {!!Form::textarea('description', null,  ['class'=>'form-control' , 'id'=>'description']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('permission', 'Select Permission', ['class'=>'control-label mb-1']) !!}
            {!!Form::select('permission[]',$permission,$selectedPermission,['class'=>'form-control myselect', 'data-placeholder'=>'Select Permission(s)', 'multiple' ]) !!}
        </div>

        <div>
            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">

                <span id="payment-button-amount">Update Role</span>
                <span id="payment-button-sending" style="display:none;">Sending…</span>
            </button>
        </div>
    {!! Form::close() !!}

                  </div>
              </div>

            </div>
        </div> <!-- .card -->

    </div>

</div>

@push('script')
<script>
        jQuery(document).ready(function() {
            jQuery(".myselect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Opps Nothing Found !",
            width : "100% "
            });
        });
</script>
@endpush

@endsection
