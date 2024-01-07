<form action="{{ route('student.save') }}" method="post">
    @csrf
    <div class="card">
        <div class="mb-3">
            <label for="" class="form-label">First Name</label>
            <input type="text" class="form-control" id="" placeholder="john doe" name="Fname">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="" placeholder="Fernando" name="Lname">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Address</label>
            <input type="text" class="form-control" id="" placeholder="Street Address" name="address">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">City</label>
            <input type="text" class="form-control" id="" placeholder="Kandy" name="city">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">State</label>
            <input type="text" class="form-control" id="" placeholder="Califonia" name="state">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Zip Code</label>
            <input type="text" class="form-control" id="" placeholder="0000" name="Zcode">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" placeholder="YYYY-MM-DD" name="dob">
        </div>
        <div>
            <input type="submit" value="save" class="btn btn-primary">
        </div>
    </div>
</form>
