<form action="{{route('specificationdata')}}" method="POST">
    @csrf
    <label for="">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
    @error('name')
        {{$message}}
    @enderror
    <label for="">Sequence number</label>

    <input type="number" name="sequence" id="">
    <label for="">Status</label>
    <input type="checkbox" name="Status" id="">
    <button type="submit">Go</button>
</form>