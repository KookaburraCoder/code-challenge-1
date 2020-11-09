@extends('layouts.main')

@section('content')
<table class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
    <tbody>
        @forelse ($customers as $customer)
            <tr>
                <td style="background-color: {{ $customer->colour }}">{{ $customer->Name }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No Customers</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection