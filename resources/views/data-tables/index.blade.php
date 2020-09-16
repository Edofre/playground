@extends('layouts.data-tables')

@section('title', __('DataTables'))

@section('content')
<h1 class="text-xl font-bold mb-2 text-gray-900">{{ __('DataTables') }}</h1>

<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg p-4">
                <table id="example" class="divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


@push('js')
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#example').DataTable({
            responsive: true,
            stateSave: true,
            dom: '<"flex mb-2"lf><"flex justify-center"r>t<"flex mt-2"ip>',
            processing: true,
            serverSide: true,
            ajax: '{{ route('data-tables.data') }}',
            language: {
                processing: '<i class="fas fa-spinner fa-spin mr-1"></i> Processing...'
            },
            columns: [
                { data: 'name', name: 'name' },
                { data: 'position', name: 'position' },
                { data: 'office', name: 'office' },
                { data: 'age', name: 'age' },
                { data: 'start_date', name: 'start_date' },
                { data: 'salary', name: 'salary' },
            ],
            })
            .columns.adjust()
            .responsive.recalc();

        table.processing(true);
    });

</script>
@endpush