@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="white-box" style="background:white; text-align:center;">
        <label for="" class="bigger-label pt-5" style="font-size: 30px;">رانچڠن ڤ & ڤ هارين دري رومه</label>
        <div class="white-box" style="text-align:right;">
            <div class="row p-3" style="justify-content:flex-end;">
                <div class="col-2 border">
                    <select name="" id="" class="form-control main-select2">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <div class="col-2 border"> : تاهون</div>
            </div>
            <div class="row p-3" style="justify-content:flex-end;">
                <div class="col-2 border">
                    <select name="tajuk" id="" class="form-control main-select2">
                        <option value="Tilawah"> تلاوة </option>
                        <option value="Hafazan">حفظن</option>
                        <option value="Tafsir">تفسير</option>
                    </select>
                </div>
                <div class="col-2 border"> : تاجوق</div>
            </div>
            <div class="row p-3" style="justify-content:flex-end;">
                <div class="col-2 border">
                    <input type="datetime-local" class="form-control" name="sampai" id="">
                </div>
                <div class="col-2 border">
                    هيڠݢا
                </div>
                <div class="col-2 border">
                    <input type="datetime-local" class="form-control" name="dari" id="">
                </div>
                <div class="col-2 border"> : ماس & تاريخ</div>
            </div>
            <div class="row p-3" style="justify-content:flex-end;">
                <div class="col-2 border">
                    <select name="tajuk" id="" class="form-control main-select2">
                        <option value="Membaca"> ممباچ </option>
                        <option value="Menghafaz">مڠحفظ</option>
                        <option value="Mengetahui">مڠتهوءي</option>
                        <option value="Memahami"> ممهمي </option>
                        <option value="Menterjemah">منترجمه</option>
                        <option value="Menulis">منوليس</option>
                        <option value="Mengklasifikasi">مڠکلاسيفيکاسي</option>
                        <option value="Menganalisis">مغاناليسيس</option>

                    </select>
                </div>
                <div class="col-2 border"> : كماهيرن</div>
            </div>            
        </div>

    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('.main-select2').select2();
});
</script>
@endsection
