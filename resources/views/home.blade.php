@extends('layouts.app')

@section('content')
<div class="white-box p-3" style="background:white; text-align:center; height: 100%;" id="printableArea">
    <label for="" class="bigger-label pt-2" style="font-size: 30px;">رانچڠن ڤ & ڤ هارين دري رومه</label>
    <div class="row justify-content-start"><a href="#" class="btn btn-sm btn-success mt-2" onclick="window.print()">Print Preview</a></div>
    <div class="row pt-3 justify-content-end">
        <div class="col border-right-0 border">
            <div class="row">
                <div class="col">
                    <select name="tahun" id="" class="form-control main-select2 border-0" style="text-align:right;">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">6</option>
                    </select>
                </div>
                <div class="col-2 border-left" style="text-align:right;">تاهون</div>
            </div>
            <div class="row">
                <div class="col border-top">
                    <div class="row justify-content-between">
                        <input type="datetime-local" name="masa_tamat" id="" class="form-control col border-0">
                        <p>هيڠݢ</p>
                        <input type="datetime-local" name="masa_mula" id="" class="form-control col border-0">
                    </div>
                </div>
                <div class="col-2 border-top border-left" style="text-align:right;">ماس  &  تاريخ</div>
            </div>
        </div>
        <div class="col border">
            <div class="row">
                <div class="col">
                    <select name="tajuk" id="" class="form-control main-select2 border-0 text-sm-right">
                        <option value="تلاوة">تلاوة</option>
                        <option value="حفظن">حفظن</option>
                        <option value="تفسير">تفسير</option>
                    </select>
                </div>
                <div class="col-3 border-left" style="text-align:right;">تاجوق</div>
            </div>
            <div class="row">
                <div class="col border-top">
                    <select name="" id="" class="form-control main-select2" style="text-align:right;">
                        <option value="مڠاناليسيس">مڠاناليسيس</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">6</option>
                    </select>
                </div>
                <div class="col-3 border-top border-left" style="text-align:right;">کماهيرن</div>

            </div>
            <div class="row">
                <div class="col border-top">
                    <select name="" id="" class="form-control main-select2" style="text-align:right;">
                        <option value="الكوثر">الكوثر</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">6</option>
                    </select>
                </div>
                <div class="col-3 border-top border-left" style="text-align:right;">ايسي ڤلاجرن</div>
            </div>
        </div>
    </div>
    <div class="row justify-content-end pt-3">
        <div class="col-6">
            <input type="text" class="form-control text-right" value="القرءان">
        </div>
        <div class="col-sm-2" style="text-align:right;">: بيدڠ </div>
    </div>
    <div class="row justify-content-end  pt-3">
        <div class="col-6">
            <select name="" id="" class="form-control main-select2" style="text-align:right;">
                <option value="منوليس ايات  / کلمه درڤد سورة">منوليس ايات  / کلمه درڤد سورة</option>
                <option value="ممباچ دڠن برتجويد">ممباچ دڠن برتجويد</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
            </select>
        </div>
        <div class="col-sm-2" style="text-align:right;">اوبجيکتيف  :  موريد داڤت </div>
    </div>
    <div class="row justify-content-end pt-3">
        <div class="col">
            <div class="row">
                <div class="col">
                    <select name="" id="" class="form-control main-select2">
                        <option value="">تسميع</option>
                    </select>
                </div>
                <div class="col">ڤندکتن برڤوستکن موريد</div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <select name="" id="" class="form-control main-select2">
                        <option value="">باچاءن ڬورور</option>
                    </select>
                </div>
                <div class="col">ڤندکتن برڤوستکن ڬورور</div>
            </div>
        </div>
        <div class="col-sm-2" style="text-align:right;">: اکتيۏيتي</div>
    </div>
    <div class="row justify-content-end pt-3">
        <div class="col">
            <div class="row">
                <div class="col">
                    <select name="" id="" class="form-control main-select2">
                        <option value="">ݢمبر</option>
                    </select>
                </div>
                <div class="col">ڤتا اءي-ثينك</div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <select name="" id="" class="form-control main-select2">
                        <option value="">ڽاڽين</option>
                    </select>
                </div>
                <div class="col">کچردسن ڤلباݢاي</div>
            </div>
        </div>
        <div class="col-sm-2" style="text-align:right;">: کماهيرن برفيکير</div>
    </div>
    <div class="row justify-content-end pt-3">
        <div class="col">
            <div class="row">
                <div class="col">
                    <select name="" id="" class="form-control main-select2">
                        <option value="">تونجوق اجر ڬورور</option>
                    </select>
                </div>
                <div class="col">: اکتيۏيتي ڤموليهن</div>
            </div>
        </div>
        <div class="col">
            <input type="text" class="form-control" style="text-align:right;">
        </div>
        <div class="col">
            <input type="text" class="form-control" style="text-align:right;">
        </div>
        <div class="col-sm-2" style="text-align:right;">: حاصيل ڤمبلاجرن</div>
    </div>
    <hr style="border: 2px solid black;">
    {{-- another --}}


    {{-- another --}}



</div>


@endsection
@push('page_scripts')
<script>
    $('.main-select2').select2();

    </script>
@endpush

