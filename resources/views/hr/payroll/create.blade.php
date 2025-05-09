@extends('layouts.app')

@section('content')
<div class="container max-w-4xl p-6 mx-auto mt-6 bg-white rounded shadow">
    <h2 class="mb-4 text-2xl font-bold">Create Payroll Record</h2>

    <form action="{{ route('hr.payroll.store') }}" method="POST">
        @csrf

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div>
                <label for="employee_id" class="block text-sm font-medium">Employee</label>
                <select name="employee_id" id="employee_id" class="w-full p-2 text-black border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <option value="" disabled selected>Select Employee</option>
                    @foreach($employees as $employee)
                        <option value="{{ $employee->id }}" class="text-black">{{ $employee->employee_name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="month" class="block text-sm font-medium">Month</label>
                <input type="text" name="month" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="e.g. April 2025">
            </div>

            <div>
                <label for="basic_salary" class="block text-sm font-medium">Basic Salary</label>
                <input type="number" name="basic_salary" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="allowances" class="block text-sm font-medium">Allowances</label>
                <input type="number" name="allowances" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="deductions" class="block text-sm font-medium">Deductions</label>
                <input type="number" name="deductions" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="overtime_hours" class="block text-sm font-medium">Overtime Hours</label>
                <input type="number" name="overtime_hours" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="overtime_rate" class="block text-sm font-medium">Overtime Rate</label>
                <input type="number" step="0.01" name="overtime_rate" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="net_salary" class="block text-sm font-medium">Net Salary</label>
                <input type="number" step="0.01" name="net_salary" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
        </div>

        <div class="mt-4">
            <label for="remarks" class="block text-sm font-medium">Remarks</label>
            <textarea name="remarks" rows="3" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>

        <div class="flex justify-end gap-4 mt-6">
            <a href="{{ route('hr.payroll.index') }}" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Cancel</a>
            <button type="submit" class="px-4 py-2 text-black bg-indigo-600 rounded hover:bg-indigo-700">Save</button>
        </div>
    </form>
</div>
@endsection
