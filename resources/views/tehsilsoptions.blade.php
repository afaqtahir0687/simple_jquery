<option>Select Tehsil</option>
@foreach ($tehsil as  $tehsil)
<option value="{{$tehsil->id}}">{{$tehsil->name}}</option>    
@endforeach