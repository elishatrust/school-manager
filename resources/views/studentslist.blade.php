<div class="card mb-3">
    <img src="/image/education.jpg" class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="fs-4 py-3">Student information</h5>

<div class="search py-2">
    <form action="{{url('/search/')}}" method="GET">
        <input type="text" name="search" placeholder="Search" required/>
        <input type="submit" name="search" class="btn-sm btn-info" value="Search">
    </form>
</div>


        <div class="table-responsive">
            <table class="table table-responsive table-md">
                <thead class="table-light">
                <tr>
                    <th>S/N</th>
                    <th>CNE</th>
                    <th>FIRST NAME</th>
                    <th>SECOND NAME</th>
                    <th>AGE</th>
                    <th>SPECIALITY</th>
                    <th>OPERATIONS</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">

                    @foreach ($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->cne}}</td>
                        <td>{{$student->firstName}}</td>
                        <td>{{$student->secondName}}</td>
                        <td>{{$student->age}}</td>
                        <td>{{$student->speciality}}</td>
                        <td>
                            <a href="{{url('/show/'.$student->id)}}" class="text-dark"><i class="bi bi-eye"></i></a>
                            <a href="{{url('/edit/'.$student->id)}}" class="text-info"><i class="bi bi-pencil px-2"></i></a>
                            <a href="{{url('/delete/'.$student->id)}}" class="text-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>



    </div>
</div>
