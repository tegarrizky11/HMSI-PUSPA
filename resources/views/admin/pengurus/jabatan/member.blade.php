@extends('templates.admin.master')
@section('content')
    @php
    $can_insert = auth_can(h_prefix('save', 1));
    @endphp
    <div class="card">
        <div class="card-header bg-info">
            <h3 class="card-title text-light">Member bidang</h3>
        </div>
        <div class="card-body">
            <form id="MainForm">
                <div class="form-group">
                    <label for="members">Member/Anggota</label>
                    <select class="form-control select2" id="members" multiple name="members[]" style="width: 100%">
                        @foreach ($members as $member)
                            <option value="{{ $member->id }}" selected>
                                {{ $member->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>
        @if ($can_insert)
            <div class="card-footer">
                <div class="form-group">
                    <button type="submit" class="btn btn-success" form="MainForm">
                        <li class="fas fa-save mr-1"></li> Save
                    </button>
                </div>
            </div>
        @endif
    </div>
@endsection
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('assets/templates/admin/plugins/select2/css/select2.min.css') }}">
@endsection
@section('javascript')
    {{-- sweetalert --}}
    <script src="{{ asset('assets/templates/admin/plugins/sweet-alert/sweetalert2.all.js') }}"></script>
    <script src="{{ asset('assets/templates/admin/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#members').select2({
                ajax: {
                    url: "{{ route(h_prefix('select2', 1)) }}",
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: function(params) {
                        var query = {
                            search: params.term,
                        }
                        return query;
                    }
                }
            });

            // insertForm ===================================================================================
            $('#MainForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                formData.append('periode_id', {{ $model->periode_id }});
                formData.append('jabatan_id', {{ $model->id }});
                setBtnLoading('#btn-save', 'Save Changes');
                $.ajax({
                    type: "POST",
                    url: "{{ route(h_prefix('save', 1)) }}",
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

                    },
                    error: function(data) {
                        const res = data.responseJSON ?? {};
                        errorAfterInput = [];
                        for (const property in res.errors) {
                            errorAfterInput.push(property);
                            setErrorAfterInput(res.errors[property], `#${property}`);
                        }
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: res.message ?? 'Something went wrong',
                            showConfirmButton: true,
                            timer: 10000
                        })
                    },
                    complete: function() {
                        setBtnLoading('#btn-save',
                            '<li class="fas fa-save mr-1"></li> Save changes',
                            false);
                    }
                });
            });
        });
    </script>
@endsection
