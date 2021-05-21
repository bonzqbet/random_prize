@extends('layout.master')


@section('content')
<div class="container">
    <div class="content-header">
    <div class="row md-5">
        <div class="col md-12 my-3">
            <h2>Random Prize</h2>
        </div>
    </div>
</div>
@if(isset($award_result))
@foreach($award_result as $keycheck => $valuecheck)
  @foreach($valuecheck as $keycheck_2 => $valuecheck_2)
    @if($valuecheck_2 == 'true')
      <?php $award_corrcted = 'true' ?>
      <?php $award_prize[] = $valuecheck['prize'] ?>
    @endif
    <?php $award_data = $valuecheck['data'] ?>
  @endforeach
@endforeach

<!-- ตรวจสอบว่าถูกรางวัลหรือไม่ ถ้าถูกส่งเงื่อนไขให้แสดงผลตรง ตรวจราลวัล -->
@foreach($award_result as $keycheck_false => $valuecheck_false)
  @if(count($valuecheck_false) == 3)
    <?php $award_corrcted_false = 'false' ?>
  @endif
  @if(count($valuecheck_false) != 3)
    <?php $award_corrcted_false = 'true' ?>
    <?php break; ?>
  @endif
@endforeach

@if(!empty($award_prize))
  @foreach($award_prize as $key => $value)
    @if($value == 'first_prize')
      <?php $str[] = 'รางวัลที่ 1' ?>
    @endif
    @if($value == 'seconde_prize')
      <?php $str[] = 'รางวัลที่ 2' ?>
    @endif
    @if($value == 'neight_first_prize')
      <?php $str[] = 'รางวัลเลขข้างเคียงรางวัลที่ 1' ?>
    @endif
    @if($value == 'two_digit_prize')
      <?php $str[] = 'รางวัลเลขท้าย 2 ตัว' ?>
    @endif
  @endforeach
@endif

@if(!empty($str))
<?php $substr = null; ?>
  @foreach($str as $keyStr => $valueStr)
    @if(!empty($substr))
      <?php $substr .= ' และ'.$valueStr; ?>
    @endif
    @if(empty($substr))
      <?php $substr = $valueStr; ?>
    @endif
    @endforeach
@endif
@endif

<form action="{{ route('prizepul.create') }}">

<!-- <span class="btn btn-primary"  onclick="RandomAll()">ดำเนินการสุ่มรางวัล</span> -->
<button id="btn_save" class="btn btn-primary" onclick="RandomAll()" >ดำเนินการสุ่มรางวัล</button>
<!-- <button id="btn_save" class="btn btn-secondary Remove" >บันทึก</button> -->
@if(isset($all_prize))
@csrf
@method('DELETE')
<a href="/delete/{{ $all_prize['id'] }}" class="btn btn-danger">รีเซ็ต</a>
@endif


<div class="disNone">
<input type="text" name="first_prize" id="first-prize0" value="@if(isset($all_prize['first_prize'])) {{ $all_prize['first_prize'] }} @endif">

<input type="text" name="seconde_prize1" id="seconde-prize0" value="@if(isset($all_prize['seconde_prize'][0][0])) {{ $all_prize['seconde_prize'][0][0] }} @endif">
<input type="text" name="seconde_prize2" id="seconde-prize1" value="@if(isset($all_prize['seconde_prize'][0][1])) {{ $all_prize['seconde_prize'][0][1] }} @endif">
<input type="text" name="seconde_prize3" id="seconde-prize2" value="@if(isset($all_prize['seconde_prize'][0][2])) {{ $all_prize['seconde_prize'][0][2] }} @endif">

<input type="text" name="neight_first_prize1" id="neight-first-prize0" value="@if(isset($all_prize['neight_first_prize'][0][0])) {{ $all_prize['neight_first_prize'][0][0] }} @endif">
<input type="text" name="neight_first_prize2" id="neight-first-prize1" value="@if(isset($all_prize['neight_first_prize'][0][1])) {{ $all_prize['neight_first_prize'][0][1] }} @endif">

<input type="text" name="two_digit_prize1" id="two-digit-prize0" value="@if(isset($all_prize['two_digit_prize'][0][0])) {{ $all_prize['two_digit_prize'][0][0] }} @endif">
<input type="text" name="two_digit_prize2" id="two-digit-prize1" value="@if(isset($all_prize['two_digit_prize'][0][0])) {{ $all_prize['two_digit_prize'][0][1] }} @endif">
<input type="text" name="two_digit_prize3" id="two-digit-prize2" value="@if(isset($all_prize['two_digit_prize'][0][0])) {{ $all_prize['two_digit_prize'][0][2] }} @endif">
<input type="text" name="two_digit_prize4" id="two-digit-prize3" value="@if(isset($all_prize['two_digit_prize'][0][0])) {{ $all_prize['two_digit_prize'][0][3] }} @endif">
<input type="text" name="two_digit_prize5" id="two-digit-prize4" value="@if(isset($all_prize['two_digit_prize'][0][0])) {{ $all_prize['two_digit_prize'][0][4] }} @endif">
<input type="text" name="two_digit_prize6" id="two-digit-prize5" value="@if(isset($all_prize['two_digit_prize'][0][0])) {{ $all_prize['two_digit_prize'][0][5] }} @endif">
<input type="text" name="two_digit_prize7" id="two-digit-prize6" value="@if(isset($all_prize['two_digit_prize'][0][0])) {{ $all_prize['two_digit_prize'][0][6] }} @endif">
<input type="text" name="two_digit_prize8" id="two-digit-prize7" value="@if(isset($all_prize['two_digit_prize'][0][0])) {{ $all_prize['two_digit_prize'][0][7] }} @endif">
<input type="text" name="two_digit_prize9" id="two-digit-prize8" value="@if(isset($all_prize['two_digit_prize'][0][0])) {{ $all_prize['two_digit_prize'][0][8] }} @endif">
<input type="text" name="two_digit_prize10" id="two-digit-prize9" value="@if(isset($all_prize['two_digit_prize'][0][0])) {{ $all_prize['two_digit_prize'][0][9] }} @endif">
</div>

</form>
<h2>ตารางแสดงผลรางวัล</h2>


First Prize
<div class="grid-container1">
  <div class="grid-item1 none">1</div>  
  <div class="grid-item1"><div class="first-prize0">@if(isset($all_prize['first_prize'])) {{ $all_prize['first_prize'] }} @endif</div></div>
  <div class="grid-item1 none">1</div>
</div>

Second Prize
<div class="grid-container">
  <div class="grid-item"><div class="second-prize0">@if(isset($all_prize['seconde_prize'][0][0])) {{ $all_prize['seconde_prize'][0][0] }} @endif</div></div>
  <div class="grid-item"><div class="second-prize1">@if(isset($all_prize['seconde_prize'][0][1])) {{ $all_prize['seconde_prize'][0][1] }} @endif</div></div>
  <div class="grid-item"><div class="second-prize2">@if(isset($all_prize['seconde_prize'][0][2])) {{ $all_prize['seconde_prize'][0][2] }} @endif</div></div>    
</div>

First Prize Neighbors
<div class="grid-container1V2">
  <div class="grid-item1V2 none">1</div>  
  <div class="grid-item1V2"><div class="neighbors-prize0">@if(isset($all_prize['neight_first_prize'][0][0])) {{ $all_prize['neight_first_prize'][0][0] }} @endif</div></div>
  <div class="grid-item1V2"><div class="neighbors-prize1">@if(isset($all_prize['neight_first_prize'][0][1])) {{ $all_prize['neight_first_prize'][0][1] }} @endif</div></div>
  <div class="grid-item1V2 none">1</div>

</div>
Two Digit Suffix
<div class="grid-container2">
  <div class="grid-item2"><div class="suffix-prize0">@if(isset($all_prize['two_digit_prize'][0][0])) {{ $all_prize['two_digit_prize'][0][0] }} @endif</div></div>  
  <div class="grid-item2"><div class="suffix-prize1">@if(isset($all_prize['two_digit_prize'][0][1])) {{ $all_prize['two_digit_prize'][0][1] }} @endif</div></div>
  <div class="grid-item2"><div class="suffix-prize2">@if(isset($all_prize['two_digit_prize'][0][2])) {{ $all_prize['two_digit_prize'][0][2] }} @endif</div></div>
  <div class="grid-item2"><div class="suffix-prize3">@if(isset($all_prize['two_digit_prize'][0][3])) {{ $all_prize['two_digit_prize'][0][3] }} @endif</div></div>
  <div class="grid-item2"><div class="suffix-prize4">@if(isset($all_prize['two_digit_prize'][0][4])) {{ $all_prize['two_digit_prize'][0][4] }} @endif</div></div>
  <div class="grid-item2"><div class="suffix-prize5">@if(isset($all_prize['two_digit_prize'][0][5])) {{ $all_prize['two_digit_prize'][0][5] }} @endif</div></div>  
  <div class="grid-item2"><div class="suffix-prize6">@if(isset($all_prize['two_digit_prize'][0][6])) {{ $all_prize['two_digit_prize'][0][6] }} @endif</div></div>
  <div class="grid-item2"><div class="suffix-prize7">@if(isset($all_prize['two_digit_prize'][0][7])) {{ $all_prize['two_digit_prize'][0][7] }} @endif</div></div>
  <div class="grid-item2"><div class="suffix-prize8">@if(isset($all_prize['two_digit_prize'][0][8])) {{ $all_prize['two_digit_prize'][0][8] }} @endif</div></div>
  <div class="grid-item2"><div class="suffix-prize9">@if(isset($all_prize['two_digit_prize'][0][9])) {{ $all_prize['two_digit_prize'][0][9] }} @endif</div></div>
</div>


</div>
<div class="container">
    <div class="content-header">
    <div class="row md-5">
        <div class="col md-12 my-3">
            <div class="DivbuttomBorder">
            <h2>Check Award</h2>
            </div>
        </div>
    </div>
</div>

<div class="row" >
    <div class="col-lg-3">

    </div>
    <div class="col-lg-6">
        <div class="card" style="margin-top:50px;margin-bottom:50px;">
          
          <h5 class="card-title" style="margin-top:30px;margin-left:20px;">ตรวจสอบรางวัล</h5>
          @if(isset($award_corrcted))
          <span class="span-center">{{ $data_award }} ถูก{{ $substr }}</span>
          @endif
          @if(isset($award_corrcted_false))
            @if($award_corrcted_false == 'false')
            <span class="span-center">{{ $data_award }} ไม่ถูกรางวัลใดเลย</span>
            @endif
          @endif
          <div class="card-body">
            
            
            <form action="/Award" method="get">
            <div class="form-group">
              <input type="number" class="form-control" name="number_award" placeholder="กรอกเลขล็อตเตอรี่..." value="@if(isset($award_data)){{$award_data}}@endif" required>
                    </div>
                    <button type="submit" id="check_award" class="btn btn-primary btn-block" >ตรวจรางวัล</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        var base_url = window.location.origin;

        console.log(base_url);

        $("#check_award").click(function(event){
          // event.stopPropagation();
          if($('#first-prize0').val() == ''){
            event.preventDefault();
            alert("กรุณากดบันทึกข้อมูลก่อนทำรายการต่อ");
          }
        });

        // $("form").submit(function(e){
        //         alert('submit intercepted');
        //         e.preventDefault(e);
        // });
    });
</script>

@endsection