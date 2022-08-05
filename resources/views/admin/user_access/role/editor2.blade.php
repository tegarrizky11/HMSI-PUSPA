@extends('templates.admin.master')

@section('content')
    <div class="card">
        <div class="card-header d-md-flex flex-row justify-content-between">
            <h3 class="card-title">{{ $page_attr['title'] }}</h3>
            <a type="button" class="btn btn-rounded btn-success" href="{{ route($prefix_parent) }}">
                <i class="fe fe-arrow-left"></i> Back
            </a>
        </div>
        <div class="card-body">
            <form action="javascript:void(0)" id="MainForm" name="MainForm" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter Name" required="" value="{{ $model->name }}" />
                            <input type="hidden" id="id" name="id" value="{{ $model->id }}" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="guard_name">Guard <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="guard_name" name="guard_name"
                                placeholder="Enter Guard" required="" value="{{ $model->guard_name }}" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="guard_name">Permission <span class="text-danger">*</span></label>
                    <select name="permissions[]" id="permissions" multiple class="form-control">
                        @foreach ($permissions as $p)
                            <option value="{{ $p->name }}" {{ in_array($p->name, $roles) ? 'selected' : '' }}>
                                {{ $p->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>
        <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary" id="btn-save" form="MainForm">
                <li class="fa fa-save mr-1"></li> Save changes
            </button>
        </div>
    </div>
@endsection
@section('javascript')
    {{-- sweetalert --}}
    <script src="{{ asset('assets/templates/admin/plugins/sweet-alert/sweetalert2.all.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap4-duallistbox/4.0.1/jquery.bootstrap-duallistbox.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $('#permissions').bootstrapDualListbox();
            setTimeout(() => {
                $('.btn-group').next().addClass('p-2').height('250px');;
            }, 500);
            $('#MainForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                setBtnLoading('#btn-save', 'Save Changes');
                $.ajax({
                    type: "POST",
                    url: $('#id').val() == '' ? `{{ route("$prefix_parent.store") }}` :
                        `{{ route("$prefix_parent.update") }}`,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data saved successfully',
                            showConfirmButton: false,
                            timer: 1500
                        })

                        setTimeout(() => {
                            window.location.href = `{{ route($prefix_parent) }}`;
                        }, 1500);
                    },
                    error: function(data) {
                        const res = data.responseJSON ?? {};
                        errorAfterInput = [];
                        for (const property in res.errors) {
                            errorAfterInput.push(property);
                            setErrorAfterInput(res.errors[property], `#${property}`);
                        }
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: res.message ?? 'Something went wrong',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    complete: function() {
                        setBtnLoading('#btn-save',
                            '<li class="fa fa-save mr-1"></li> Save changes',
                            false);
                    }
                });
            });
        });
    </script>
@endsection

@section('stylesheet')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap4-duallistbox/4.0.1/bootstrap-duallistbox.min.css">
@endsection
