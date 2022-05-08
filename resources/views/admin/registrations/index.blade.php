@extends('admin.backend.layouts.master')
@section('title','New Registrations')

@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.registration.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive ">
            <table class=" table table-bordered table-striped table-hover datatable datatable-registration">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.p_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.c_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.contact') }}
                        </th>
                        <th>
                            {{ trans('cruds.registration.fields.previous_school') }}
                        </th>

                        <!-- <th>
                            &nbsp;
                        </th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($registrations as $key => $registration)
                        <tr data-entry-id="{{ $registration->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $registration->id ?? '' }}
                            </td>
                            <td>
                                {{ $registration->name ?? '' }}
                            </td>
                            <td>
                                {{ $registration->email ?? '' }}
                            </td>
                            <td>
                                {{ $registration->address ?? '' }}
                            </td>
                            <td>
                                {{ $registration->current_address ?? '' }}
                            </td>
                            <td>
                                {{ $registration->contact ?? '' }}
                            </td>
                            <td>
                                {{ $registration->previous_school ?? '' }}
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection


@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('user-delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.users.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': $('meta[name="csrf-token"]').attr('content')},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })

      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-registration:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
