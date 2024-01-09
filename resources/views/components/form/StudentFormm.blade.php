<form action="{{ route('student.update', $student->id) }}" method="post">
    @csrf
    <div class="card">
        <div class="mb-3">
            <label for="" class="form-label">First Name</label>
            <input type="text" class="form-control" id="" placeholder="john doe" name="Fname" value="{{ $student->Fname }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="" 66 value="{{ $student->Lname }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Address</label>
            <input type="text" class="form-control" id="" placeholder="Street Address" name="address" value="{{ $student->address }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">City</label>
            <input type="text" class="form-control" id="" placeholder="Kandy" name="city" value="{{ $student->city }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">State</label>
            <input type="text" class="form-control" id="" placeholder="Califonia" name="state" value="{{ $student->state }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Zip Code</label>
            <input type="text" class="form-control" id="" placeholder="0000" name="Zcode" value="{{ $student->Zcode }}">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" placeholder="YYYY-MM-DD" name="dob" value="{{ $student->dob }}">
        </div>
        <div>
            <input type="submit" value="update" class="btn btn-success">
        </div>
    </div>
</form>
