lấy toàn bộ dữ liệu từ bảng `Model::all()`

lấy dữ liệu theo 1 điều kiện
`Model::where(‘tên cột’, “phép so sánh”, Giá trị)->get();`

lấy theo nhiều điều kiện (đk1 and đk2)
`Model::where(đk1)
        ->where(đk2)
        ->get()`
lấy theo nhiều điều kiện (đk1 or đk2)
`Model::where(đk1)
        ->orWhere(đk2)
        ->get()`

Sắp xếp thứ tự lấy ra (order by)
`Model::where(đk1)
        ->where(đk2)
        ->orderBy('Tên cột', "desc|asc')
        ->get()`

Lấy ra 1 bản ghi dựa vào id
`Model::find(id)`

Xóa bản ghi dựa vào id
`Model::destroy(id)`

Tạo mới/cập nhật thông tin cho csdl
`Model->save()`