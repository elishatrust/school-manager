
    @include('header')

    @include('navbar')

    <div class="container text-center py-2" style="margin-top:80px!important;">
        <h1>Student Manager System</h1>
    </div>

    @if ($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-8">
                @include('studentslist')
            </section>
            <section class="col-md-4">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">About</h5>
                      <p>
                        Lorem ipsum is a placeholder text commonly used to demonstrate the visual form
                        of a document or a typeface without relying on meaningful content. Lorem ipsum
                        may be used as a placeholder before final copy is available. It is also used to
                        temporarily replace text in a process called greeking, which allows designers to
                        consider the form of a webpage or publication, without the meaning of the text <br>
                        influencing the design. Lorem ipsum is typically a corrupted version of De finibus
                        bonorum et malorum, a 1st-century BC text by the Roman statesman and philosopher
                        Cicero, with words altered, added, and removed to make it nonsensical and improper <br>
                        Latin. Versions of the Lorem ipsumtext have been used in typesetting at least since
                        the 1960s, when it was popularized by advertisements for Letraset transfer sheets.
                        Lorem ipsum was introduced to the digital world in the mid-1980s, when Aldus employed <br>
                        it in graphic and word-processing templates for its desktop publishing program PageMaker.
                        Other popular word processors, including Pages and Microsoft Word, have since adopted
                        Lorem ipsum, as have many LaTeX packages, web content managers such as Joomla!
                        and WordPress, and CSS libraries such as Semantic UI.
                      </p>

                    </div>
                  </div>

            </section>
        </div>
    </div>

    @elseif($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-8">
                @include('studentslist')
            </section>
            <section class="col-md-4">
                <div class="card mb-3">
                    <img src="/image/student.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="fs-5 py-3">Fill information of new student</h5>
                        <form action="{{url('/store')}}" method="POST">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="cne">CNE</label>
                                <input type="text" name="cne" class="form-control" placeholder="Enter your cne" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="firstName">First Name</label>
                                <input type="text" name="firstName" class="form-control" placeholder="Enter your first name" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="secondName">Second Name</label>
                                <input type="text" name="secondName" class="form-control" placeholder="Enter your second name" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="age">Age</label>
                                <input type="number" name="age" class="form-control" placeholder="Enter your age" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="speciality">Speciality</label>
                                <input type="text" name="speciality" class="form-control" placeholder="Enter your speciality" required>
                            </div>
                            <div class=" mb-2">
                                <input type="submit" value="Save" class="btn btn-info">
                                <input type="reset" value="Reset" class="btn btn-dark">
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

    @elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-8">
                @include('studentslist')
            </section>
            <section class="col-md-4">
                <div class="card mb-3">
                    <img src="/image/user.png" class="card-img-top w-100 px-5" height="170" >
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th class="text-end">CNE: </th>
                                    <td>{{$student->cne}}</td>
                                </tr>
                                <tr>
                                    <th class="text-end">First name</th>
                                    <td>{{$student->firstName}}</td>
                                </tr>
                                <tr>
                                    <th class="text-end">Second name: </th>
                                    <td>{{$student->secondName}}</td>
                                </tr>
                                <tr>
                                    <th class="text-end">Age: </th>
                                    <td>{{$student->age}}</td>
                                </tr>
                                <tr>
                                    <th class="text-end">Speciality: </th>
                                    <td>{{$student->speciality}}</td>
                                </tr>
                                <tr>
                                    <th class="text-end">Membership date: </th>
                                    <td>{{$student->created_at}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </section>
        </div>
    </div>

    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-8">
                @include('studentslist')
            </section>
            <section class="col-md-4">
                <div class="card mb-3">
                    <img src="/image/student.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="fs-5 py-3">Update student information</h5>
                        <form action="{{url('/update/'.$student->id)}}" method="POST">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="cne">CNE</label>
                                <input type="text" value="{{$student->cne}}" name="cne" class="form-control" placeholder="Enter your cne">
                            </div>
                            <div class="form-group mb-2">
                                <label for="firstName">First Name</label>
                                <input type="text" value="{{$student->firstName}}" name="firstName" class="form-control" placeholder="Enter your first name">
                            </div>
                            <div class="form-group mb-2">
                                <label for="secondName">Second Name</label>
                                <input type="text" value="{{$student->secondName}}" name="secondName" class="form-control" placeholder="Enter your second name">
                            </div>
                            <div class="form-group mb-2">
                                <label for="age">Age</label>
                                <input type="number" value="{{$student->age}}" name="age" class="form-control" placeholder="Enter your age">
                            </div>
                            <div class="form-group mb-2">
                                <label for="speciality">Speciality</label>
                                <input type="text" value="{{$student->speciality}}" name="speciality" class="form-control" placeholder="Enter your speciality">
                            </div>
                            <div class=" mb-2">
                                <input type="submit" value="Update" class="btn btn-info">
                                <input type="reset" value="Reset" class="btn btn-dark">
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

    @endif

    @include('footer')
