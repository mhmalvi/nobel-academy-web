<div class="rpl-modal" id="rpl-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="rpl-modal-dialog">
        <div class="rpl-modal-content">
            <button type="button" class="rpl-modal-close" id="close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="rpl-modal-body">
                <div class="success">
                    <h2>Thank You!</h2>
                    <lord-icon
                        src="https://cdn.lordicon.com//lupuorrc.json"
                        trigger="loop"
                        colors="primary:#ffffff,secondary:#3fd4fb"
                        style="width:250px;height:250px">
                    </lord-icon>
                    <h4>Your Response Submitted Successfully</h5>
                </div>
                <form id="msform" class="show">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card form-group">
                            <label class="fieldlabels">What qualification are you looking for? *</label>
                            <select class="form-control" id="qualification">
                                <option value>Select the qualification you looking for...</option>
                            </select>
                        </div> 
                        
                        <button type="button" class="next action-button-next">Next</button>
                    </fieldset>

                    <fieldset>
                        <div class="form-card form-group">
                            <div class="radio">
                                <div class="fieldlabels">How many years of relevant work experience do you have? *</div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        <input type="radio" name="relevant" id="one" value="1 - 2 years" />
                                        <label for="one" class="exp-lbl">
                                            <div>1 - 2 <br> Years</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <input type="radio" name="relevant" id="two" value="3 - 4 years">
                                        <label for="two" class="exp-lbl">
                                            <div>3 - 4 <br> Years</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <input type="radio" name="relevant" id="three" value="5 - 9 years">
                                        <label for="three" class="exp-lbl">
                                            <div>5 - 9 <br> Years</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <input type="radio" name="relevant" id="four" value="10 + years">
                                        <label for="four" class="exp-lbl">
                                            <div>10 + <br> Years</div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="radio">
                                <div class="fieldlabels">Where is your work experience? *</div>
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <input type="radio" name="work_location" id="wlOne" value="1 - 2 years" />
                                        <label for="wlOne" class="exp-lbl">
                                            <div>Australia</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <input type="radio" name="work_location" id="wlTwo" value="3 - 4 years">
                                        <label for="wlTwo" class="exp-lbl">
                                            <div>Overseas</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <input type="radio" name="work_location" id="wlThree" value="5 - 9 years">
                                        <label for="wlThree" class="exp-lbl">
                                            <div>Other</div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <button type="button" class="previous action-button-previous">Previous</button>
                        <button type="button" class="next action-button-next">Next</button>
                    </fieldset>

                    <fieldset>
                        <div class="form-card form-group">
                            <div class="radio">
                                <div class="fieldlabels">What state do you live in? *</div>
                                <div class="row">
                                    <div class="col-sm-3 col-6 col-xs-6">
                                        <input type="radio" name="location" id="locOne" value="NSW" />
                                        <label for="locOne" class="exp-lbl p-1">
                                            <img src="{{asset('assets/images/maps/01.png')}}" alt="nsw">
                                            <div>NSW</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-6 col-xs-6">
                                        <input type="radio" name="location" id="locTwo" value="VIC">
                                        <label for="locTwo" class="exp-lbl p-1">
                                            <img src="{{asset('assets/images/maps/02.png')}}" alt="vic">
                                            <div>VIC</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-6 col-xs-6">
                                        <input type="radio" name="location" id="locThree" value="QLD">
                                        <label for="locThree" class="exp-lbl p-1">
                                            <img src="{{asset('assets/images/maps/03.png')}}" alt="qld">
                                            <div>QLDs</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-6 col-xs-6">
                                        <input type="radio" name="location" id="locFour" value="SA">
                                        <label for="locFour" class="exp-lbl p-1">
                                            <img src="{{asset('assets/images/maps/04.png')}}" alt="sa">
                                            <div>SA</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="row pt-sm-5">
                                    <div class="col-sm-3 col-6 col-xs-6">
                                        <input type="radio" name="location" id="locFive" value="WA" />
                                        <label for="locFive" class="exp-lbl p-1">
                                            <img src="{{asset('assets/images/maps/05.png')}}" alt="wa">
                                            <div>WA</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-6 col-xs-6">
                                        <input type="radio" name="location" id="locSix" value="ACT">
                                        <label for="locSix" class="exp-lbl p-1">
                                            <img src="{{asset('assets/images/maps/06.png')}}" alt="act">
                                            <div>ACT</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-6 col-xs-6">
                                        <input type="radio" name="location" id="locSeven" value="NT">
                                        <label for="locSeven" class="exp-lbl p-1">
                                            <img src="{{asset('assets/images/maps/07.png')}}" alt="nt">
                                            <div>NT</div>
                                        </label>
                                    </div>
                                    <div class="col-sm-3 col-6 col-xs-6">
                                        <input type="radio" name="location" id="locEight" value="TAS">
                                        <label for="locEight" class="exp-lbl p-1">
                                            <img src="{{asset('assets/images/maps/08.png')}}" alt="tas">
                                            <div>TAS</div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <button type="button" class="previous action-button-previous">Previous</button>
                        <button type="button" class="next action-button-next">Next</button>
                    </fieldset>

                    <fieldset>
                        <div class="form-card">
                            <div class="fieldlabels">Full Name *</div>
                            <div class=" form-group">
                                <input type="text" id="name" class="form-control" placeholder="Please enter your full name">
                            </div>
                            <div class="fieldlabels">Email Address *</div>
                            <div class=" form-group">
                                <input type="email" id="email" class="form-control" placeholder="example@email.com" >
                            </div>
                            <div class="fieldlabels">Contact Number *</div>
                            <div class=" form-group"> 
                                <input type="text" id="phone" class="form-control" placeholder="Enter your contact number" >
                            </div>
                        </div> 

                        <button type="button" class="previous action-button-previous">Previous</button>
                        <button type="button" class="next action-button-next">Next</button>
                    </fieldset>

                    <fieldset>
                        <div class="form-card">
                            <div class="form-group">
                                <label class="fieldlabels">Remarks:</label>
                                <textarea id="remark" class="form-control" rows="5" placeholder="Do you have any query?"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="fieldlabels filesLbl" for="files" id="filesLbl">Upload your documents</label>
                                <input type="file" class="form-control files" id="files" onchange="fileUpload(event)" multiple/>
                            </div>
                        </div> 
                        
                        <button type="button" class="previous action-button-previous">Previous</button>
                        <button type="submit" class="submit action-button-next">Submit</button>
                    </fieldset>
                </form>
            </div>
        </div>

        <div class="load-scrn" aria-hidden="true">
            <h4>Please wait</h4>
            <lord-icon
                src="https://cdn.lordicon.com//dpinvufc.json"
                trigger="loop"
                colors="primary:#002b46,secondary:#0a2e5c"
                style="width:80px;height:80px">
            </lord-icon>
            <h4>We are processing your request!</h4>
        </div>
    </div>
</div>