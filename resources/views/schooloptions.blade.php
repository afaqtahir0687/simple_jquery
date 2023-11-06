<option>Select School</option>
@foreach ($school as  $school)
<option value="{{$school->id}}">{{$school->name}}</option>    
@endforeach