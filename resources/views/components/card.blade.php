 @props(['cardTitle'=> '', 'cardTools'=>'', 'cardFooter'=>''])
<div class="card">
    <div class="card-body">
        <h3 class="card-header">{{$cardTitle}}</h3>
        <div class="card-tools text-right">
          {{$cardTools}}
        </div>
        <div class="card-body">
            {{$slot}}
        </div>
        <div class="card-footer">
          {{$cardFooter}}
        </div>
    </div>
</div>
