<!DOCTYPE html>
<html>
<head>
    <title>Assets History Report</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #f0f0f0; }
        .btn { background: green; color: white; padding: 6px 12px; text-decoration: none; }
    </style>
</head>
<body>
    <h2>Assets History Report</h2>
    <table>
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Asset Name</th>
                <th>Specifications</th>
                <th>Value</th>
                <th>Type</th>
                <th>Serial No</th>
                <th>Warranty</th>
                <th>Model</th>
                <th>Brand</th>
                <th>Description</th>
                <th>Status</th>
                <th>Condition</th>
                <th>Current Value</th>
                <th>Allocated To</th>
                <th>Allocated Date</th>
                <th>Retrieved Date</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($assets as $i => $a)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $a->assetModel->name ?? '-' }}</td>
                <td>{{ $a->assetModel->specifications ?? '-' }}</td>
                <td>{{ $a->assetModel->value ?? '-' }}</td>
                <td>{{ $a->assetModel->type->asset_type_name ?? '-' }}</td>
                <td>{{ !empty($a->assetModel->serial_no) ? $a->assetModel->serial_no : '-' }}</td>
                 <td>{{ !empty($a->assetModel->warranty) ? $a->assetModel->warranty : '-' }}</td>
                <td>{{ $a->assetModel->model ?? '-' }}</td>
                <td>{{ $a->assetModel->brand ?? '-' }}</td>
                <td>{{ $a->description ?? '-' }}</td>
                <td>{{ $a->status ?? '-' }}</td>
                <td>
                    @php $cond = $a->assetModel->condition ?? ''; @endphp
                    {{
                        $cond === 'Scrap' ? 'Scrapped' :
                        ($cond === 'OutWarranty' ? 'Out of Warranty' :
                        ($cond === 'InWarranty' ? 'Good' : '-'))
                    }}
                </td>
                <td>{{ $a->assetModel->value ?? '-' }}</td>
                <td>{{ $a->employee->first_name ?? '-' }} {{ $a->employee->emp_id ?? '' }}</td>
                <td>{{ $a->allocated_date ?? '-' }}</td>
           <td>{{ $a->retrieved_date ?? '-' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
