@extends('layouts.dashboard.header')

@section('content')<div class="container">
        <h1>الكولونات</h1>
        <a href="{{ route('coupons.create') }}" class="btn btn-primary mb-2">إنشاء كوبون</a>
        @if ($coupons->isEmpty())
            <p>لايوجد كوبون</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>الإسم</th>
                        <th>النوع</th>
                        <th>قيمة الخصم</th>
                        <th>Cart Value</th>
                        <th>ـاريخ الإنتهى</th>
                        <th>الإجراءت</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coupons as $coupon)
                        <tr>
                            <td>{{ $coupon->name }}</td>
                            <td>{{ $coupon->type }}</td>
                            <td>{{ $coupon->coupon_value }}</td>
                            <td>{{ $coupon->cart_value }}</td>
                            <td>{{ $coupon->expiry_date }}</td>
                            <td>
                                <a href="{{ route('coupons.show', $coupon) }}" class="btn btn-info btn-sm">عرض</a>
                                <a href="{{ route('coupons.edit', $coupon) }}" class="btn btn-primary btn-sm">تعديل</a>
                                <form action="{{ route('coupons.destroy', $coupon) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this coupon?')">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

 
@endsection