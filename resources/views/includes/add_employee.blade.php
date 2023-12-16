<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
			<!-- Log on to codeastro.com for more projects! -->
        
            <div class="modal-header">
            <h5 class="modal-title"><b>Add New Employee</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>

            
            <div class="modal-body">
			<!-- Log on to codeastro.com for more projects! -->

                <div class="card-body text-left">

                    <form method="POST" action="{{ route('employees.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name <i>(without spaces)</i></label>
                            <input type="text" class="form-control" pattern="^[^\s]+$" placeholder="Please input an Employee's Name, and hyphens (-) are permitted." id="name" name="name"
                                required />
                        </div>
                        <div class="form-group">
                            <label for="position">Position <i>(without spaces)</i></label>
                            <input type="text" class="form-control" pattern="^[^\s]+$" placeholder="Please input Employee's Position, and hyphens (-) are permitted. id="position" name="position"
                                required />
                        </div>

                        
                        <div class="form-group"><!-- Log on to codeastro.com for more projects! -->
                            <label for="email" class="col-sm-3 control-label">Email</label>


                            <input type="email" class="form-control" id="email" name="email">

                        </div>
                        <div class="form-group">
                            <label for="schedule" class="col-sm-3 control-label">Schedule</label>


                            <select class="form-control" id="schedule" name="schedule" required>
                                <option value="" selected>- Select -</option>
                                @foreach($schedules as $schedule)
                                <option value="{{$schedule->slug}}">{{$schedule->slug}} -> from {{$schedule->time_in}}
                                    to {{$schedule->time_out}} </option>
                                @endforeach

                            </select>

                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-success waves-effect waves-light">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-danger waves-effect m-l-5" data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
			<!-- Log on to codeastro.com for more projects! -->

        </div>

    </div>
</div>
</div>