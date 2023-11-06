<option>Select States</option>
@foreach ($states as  $state)
<option value="{{$state->id}}">{{$state->name}}</option>    
@endforeach