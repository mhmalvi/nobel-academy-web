<div class="rpl-modal" id="rpl-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="rpl-modal-dialog">
        <button type="button" class="rpl-modal-close" id="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="rpl-modal-content">
            <form id="msform">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                </div> <br> <!-- fieldsets -->
                <fieldset>
                    <div class="form-card form-group">
                        <label class="fieldlabels">What qualification are you looking for? *</label>
                        <select class="form-control">
                            <option value="">Select the qualification you looking for...</option>
                        </select>
                    </div> 
                    
                    <input type="button" name="next" class="next action-button-next" value="Next" />
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
                    <input type="button" name="next" class="next action-button-next" value="Next" />
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                    <input type="button" name="next" class="next action-button-next" value="Next" />
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                </fieldset>
                <fieldset>
                    <div class="form-card">
                        <div class="fieldlabels">Enter your details below *</div>
                        <div class=" form-group">
                            <input type="text" id="name" class="form-control" placeholder="Please enter your full name">
                        </div>
                        <div class=" form-group">
                            <input type="email" id="email" class="form-control" placeholder="example@email.com" >
                        </div>
                        <div class=" form-group"> 
                            <input type="text" id="phone" class="form-control" placeholder="Enter your contact number" >
                        </div>
                    </div> 
                    <input type="button" name="next" class="next action-button-next" value="Next" />
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />>
                </fieldset>
                <fieldset>
                    <div class="form-card">
                        <div class="form-group">
                            <label class="fieldlabels">Upload your documents</label>
                            <input type="file" class="form-control" id="file"/>
                        </div>
                        <div class="form-group">
                            <label class="fieldlabels">Remarks:</label>
                            <textarea id="remark" class="form-control" rows="5" placeholder="Do you have any question?"></textarea>
                        </div>
                    </div> 
                    <button type="submit" class="next action-button-next">Submit</button>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                </fieldset>
            </form>
        </div>
    </div>
</div>