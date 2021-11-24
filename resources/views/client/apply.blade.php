@extends('client.layout')
@section('title')
    {{ trans_choice('general.apply',1) }}
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">

<div>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 30%;
  background-color: #fff;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 2px;
}

#customers tr:nth-child(even){background-color: #f2f2f2}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 4px;
  padding-bottom: 4px;
  text-align: left;
  background-color: #3F51B5;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th><b>Loan Product Summary</b></th>
    <th><b>Amount Range</b></th>
    
  </tr>
  <tr>
    <td>ICS Sharp Sharp</td>
    <td>0-99,000</td>
    
  </tr>
  <tr>
    <td>ICS DO Good</td>
    <td>100,000-250,000</td>
    
  </tr>
  <tr>
    <td>ICS Jolly</td>
    <td>251,000-350,000</td>
    
  </tr>
  <tr>
    <td>ICS Yanfu Yanfu</td>
    <td>351,000-500,000</td>
   
  </tr>
  <tr>
    <td>ICS School Meal (AIUWA STUDENT)</td>
    <td>200,000-800,000</td>
    
  </tr>
  
</table>
</div>
<br>
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h6 class="panel-title">{{ trans_choice('general.apply',1) }}</h6>

                    <div class="heading-elements">
                        
                    </div>
                </div>
                {!! Form::open(array('url' => url('client/application/store'), 'method' => 'post', 'name' => 'form',"enctype"=>"multipart/form-data")) !!}
                <div class="panel-body">
                    <div class="form-group">
                        {!! Form::label('branch_id',trans_choice('general.branch',1),array('class'=>'')) !!}
                        {!! Form::select('branch_id',$branches,null, array('class' => 'form-control','placeholder'=>'','required'=>'required')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('loan_product_id',trans_choice('general.product',1),array('class'=>'')) !!}
                        {!! Form::select('loan_product_id',$products,null, array('class' => 'form-control','placeholder'=>'','required'=>'required', 'id'=>'loan_product_id')) !!}
                        <input type="text" name="" id="max_principal" value="1" style="display: none;">
                    </div>

                    <div class="form-group">
                        {!! Form::label('bank',trans_choice('Bank',1),array('class'=>'')) !!}
                        {!! Form::text('bank',null, array('class' => 'form-control',  'placeholder'=>'','required'=>'required','id'=>'bank')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('account_number',trans_choice('Account Number',1),array('class'=>'')) !!}
                        {!! Form::text('account_number',null, array('class' => 'form-control', 'placeholder'=>'','required'=>'required', 'id'=>'account_number')) !!}

                    <div class="form-group">
                        {!! Form::label('gross_salary',trans_choice('Monthly Salary',1),array('class'=>'')) !!}
                        {!! Form::text('grosssalary',null, array('class' => 'form-control',  'placeholder'=>'','required'=>'required','id'=>'grosssalary')) !!}
                    </div>
        
                    <div class="form-group">
                        {!! Form::label('amount',trans_choice('general.amount',1),array('class'=>'')) !!}
                        {!! Form::text('amount',null, array('class' => 'form-control', 'placeholder'=>'','required'=>'required', 'id'=>'amount')) !!}
                        @if(Session::has('amount_error'))
                        {{Session::get('amount_error')}};
                        @endif
                    </div>

                    <div class="form-group">
                        {!! Form::label('interest',trans_choice('Interest',1),array('class'=>'')) !!}
                        {!! Form::text('interest',null, array('class' => 'form-control', 'placeholder'=>'','required'=>'required','id'=>'interest')) !!}
                    </div>
 
                  <div class="form-group">
                        {!! Form::label('notes',trans_choice('general.note',2),array('class'=>'')) !!}
                        {!! Form::textarea('notes',null, array('class' => 'form-control', 'rows'=>"3")) !!}
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary pull-right">{{trans_choice('general.save',1)}}</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script>


$(document).ready(function () {

var total = 0;
$("#grosssalary").keyup(function(){
var x =Number($("#grosssalary").val());
var num = parseInt($('#max_principal').val());
total = x*0.33*num;
$("#amount").val(total);
});

$('#loan_product_id').change(()=> {
    let str = $('option:selected', this).text();
    let split = str.split('(');
    let front = split[1];
    let num = front.slice(0, -7);
     console.log(num);
    $('#max_principal').val(num);
});

$("#grosssalary").keyup(function(){
var b = Number($("#amount").val());
sum = total * 0.032
$("#interest").val(sum);

});
});
    </script>
@endsection




