<div class="modal fade" id="applyNow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Applying For <span id="myModalLabel"></span></h4>
        </div>
        <div class="modal-body">
            <form action="{{route('apply')}}" method="post" id="applyNowForm">
                @csrf
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your full name">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email address">
                    </div>
                    <div class="col-md-6">
                        <label for="contact">Contact</label>
                        <input type="text" name="contact" class="form-control" placeholder="Enter your mobile number">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="nationality">Nationality</label>
                        <input type="text" name="nationality" class="form-control" placeholder="Enter your nationality">
                    </div>
                    <div class="col-md-6">
                        <label for="course">Applying For</label>
                        <input type="text" name="course" id="course" class="form-control" readonly>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="msg">Any Question For Us?</label>
                        <textarea name="msg" class="form-control" rows="5"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('applyNowForm').submit();">Apply</button>
        </div>
      </div>
    </div>
  </div>