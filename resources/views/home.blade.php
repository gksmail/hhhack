@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
     <div class="col-xs-2">
     </div>
     <div class="col-xs-4">
        <div class="panel panel-default panel-floating panel-floating-inline" style="background-color:white;">
           <div class="panel-body" style="text-align:center;">
               <a href="/employeers" class="title"><i class="fa fa-gift"></i>&nbsp;Рабочие</a>
            </div>
         </div>
     </div>
     <div class="col-xs-4">
        <div class="panel panel-default panel-floating panel-floating-inline" style="background-color:white">
           <div class="panel-body" style="text-align:center;">
              <a href="/lessons" class="title"><i class="fa fa-users"></i>&nbsp;Уроки</a>
            </div>
         </div>
     </div>
  </div>
</div>
@endsection
