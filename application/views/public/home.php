<div class="row">
    <center>
        <div class="col-sm-12">
            <h3>Management of CINV - Indian Practice.</h3>
        </div>
    </center>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Personal Informations</h3>
            </div>
            <!-- BASIC FORM ELEMENTS -->
            <!--===================================================-->
            
             <?php 
             $form_location = 'home/submit';
             echo form_open($form_location,'class="panel-body form-horizontal form-padding"') ?> 
                <!--Name-->
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label for="name"><strong>Name*:</strong></label>
                        <input type="text" placeholder="Enter Name" class="form-control input-sm" id="name" name="name" style="width: 60%;" value="<?php echo set_value('name'); ?>">
                        <?php echo form_error('name', '<div class="error text-danger">', '</div>'); ?>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label for="email"><strong>Email*:</strong></label>
                        <input type="text" placeholder="Enter Email" class="form-control input-sm" id="email" name="email" style="width: 60%;" value="<?php echo set_value('email'); ?>">
                        <?php echo form_error('email', '<div class="error text-danger">', '</div>'); ?>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label for="contact"><strong>Contact*:</strong></label>
                        <input type="text" placeholder="Enter Contact" class="form-control input-sm" id="contact" name="contact" style="width: 60%;" value="<?php echo set_value('contact'); ?>">
                        <?php echo form_error('contact', '<div class="error text-danger">', '</div>'); ?>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label for="speciality"><strong>Speciality*:</strong></label>
                        <input type="text" placeholder="Enter Speciality" class="form-control input-sm" id="speciality" name="speciality" style="width: 60%;" value="<?php echo set_value('speciality'); ?>">
                        <?php echo form_error('speciality', '<div class="error text-danger">', '</div>'); ?>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label for="hospital"><strong>Hospital*:</strong></label>
                        <input type="text" placeholder="Enter Hospital" class="form-control input-sm" id="hospital" name="hospital" style="width: 60%;" value="<?php echo set_value('hospital'); ?>">
                        <?php echo form_error('hospital', '<div class="error text-danger">', '</div>'); ?>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label for="place"><strong>Place*:</strong></label>
                        <input type="text" placeholder="Enter Place" class="form-control input-sm" id="place" name="place" style="width: 60%;" value="<?php echo set_value('place'); ?>">
                        <?php echo form_error('place', '<div class="error text-danger">', '</div>'); ?>
                      </div>
                  </div>
                </div>
             
                <br>
                <h4>Questions</h4>(All Questions are Mandatory)
                <hr>
                <ol>
                    <!-- Question 1 -->
                    <div class="form-group pad-ver">
                        <li class="col-md-12 question">
                            Are you aware of the following guidelines for the prescribing of antiemetic therapy?
                                <!-- Radio Buttons -->
                                <div class="row">
                                  <div class="col-md-1 col-sm-6 col-xs-3">
                                    <p class="value"><strong>A. </strong> ASCO</p>
                                  </div>
                                  <div class="col-md-5 col-sm-6 col-xs-6">
                                      <label class="radio-inline">
                                      <input type="radio" name="question1A" value="yes" <?php if (isset($_POST['question1A']) && $_POST['question1A']=="yes") echo "checked";?>>
                                       <span class="graphical-radio"></span><span class="value"> YES</span> 
                                    </label>
                                      <label class="radio-inline">
                                      <input type="radio" name="question1A" value="no" <?php if (isset($_POST['question1A']) && $_POST['question1A']=="no") echo "checked";?>>
                                       <span class="graphical-radio"></span><span class="value"> NO</span> 
                                    </label>
                                  </div>
                                  <?php echo form_error('question1A', '<div class="error text-danger">', '</div>'); ?>
                                </div>

                                <div class="row"> 
                                  <div class="col-md-1 col-sm-6 col-xs-3">
                                    <p class="value"><strong>B. </strong> MASCC</p>
                                  </div>
                                  <div class="col-md-5 col-sm-6 col-xs-6">
                                      <label class="radio-inline">
                                      <input type="radio" name="question1B" value="yes" <?php if (isset($_POST['question1B']) && $_POST['question1B']=="yes") echo "checked";?>>
                                       <span class="graphical-radio"></span><span class="value"> YES</span> 
                                    </label>
                                      <label class="radio-inline">
                                      <input type="radio" name="question1B" value="no" <?php if (isset($_POST['question1B']) && $_POST['question1B']=="no") echo "checked";?>>
                                       <span class="graphical-radio"></span><span class="value"> NO</span> 
                                    </label>
                                  </div>
                                  <?php echo form_error('question1B', '<div class="error text-danger">', '</div>'); ?>
                                </div>
                                <div class="row">
                                  <div class="col-md-1 col-sm-6 col-xs-3">
                                    <p class="value"><strong>C. </strong> NCCN</p>
                                  </div>
                                  <div class="col-md-5 col-sm-6 col-xs-6">
                                      <label class="radio-inline">
                                      <input type="radio" name="question1C" value="yes" <?php if (isset($_POST['question1C']) && $_POST['question1C']=="yes") echo "checked";?>>
                                       <span class="graphical-radio"></span><span class="value"> YES</span> 
                                    </label>
                                      <label class="radio-inline">
                                      <input type="radio" name="question1C" value="no" <?php if (isset($_POST['question1C']) && $_POST['question1C']=="no") echo "checked";?>>
                                       <span class="graphical-radio"></span><span class="value"> NO</span> 
                                    </label>
                                  </div>
                                  <?php echo form_error('question1C', '<div class="error text-danger">', '</div>'); ?>
                                </div>
                        </li>
                    </div>
<hr>
                    <!-- Question 2 -->
                    <div class="form-group pad-ver">
                        <li class="col-md-12 question">
                            To what extent do you adhere to the following guidelines when prescribing antiemetics? Please indicate 
                            your level of adherence to these guidelines using a 1 to 7 scale where 1 = I don't adhere to this guideline and 7 = I completely adhere to this guideline.
                        <div class="row">
                          <div class="col-md-1 col-sm-6 col-xs-2">
                            <p class="value"><strong>A. </strong> ASCO</p>
                          </div>
                          <div class="col-md-5 col-sm-6 col-xs-10">
                            <label class="radio-inline">
                              <input type="radio" name="question2A" value="1" <?php if (isset($_POST['question2A']) && $_POST['question2A']=="1") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 1</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question2A" value="2" <?php if (isset($_POST['question2A']) && $_POST['question2A']=="2") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 2</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question2A" value="3" <?php if (isset($_POST['question2A']) && $_POST['question2A']=="3") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 3</span> 
                            </label>
                              <label class="radio-inline">
                              <input type="radio" name="question2A" value="4" <?php if (isset($_POST['question2A']) && $_POST['question2A']=="4") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 4</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question2A" value="5" <?php if (isset($_POST['question2A']) && $_POST['question2A']=="5") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 5</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question2A" value="6" <?php if (isset($_POST['question2A']) && $_POST['question2A']=="6") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 6</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question2A" value="7" <?php if (isset($_POST['question2A']) && $_POST['question2A']=="7") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 7</span> 
                            </label>
                          </div>
                          <?php echo form_error('question2A', '<div class="error text-danger">', '</div>'); ?>
                        </div>
                        <div class="row">
                          <div class="col-md-1 col-sm-6 col-xs-2">
                            <p class="value"><strong>B. </strong> MASCC</p>
                          </div>
                          <div class="col-md-5 col-sm-6 col-xs-10">
                            <label class="radio-inline">
                              <input type="radio" name="question2B" value="1" <?php if (isset($_POST['question2B']) && $_POST['question2B']=="1") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 1</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question2B" value="2" <?php if (isset($_POST['question2B']) && $_POST['question2B']=="2") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 2</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question2B" value="3" <?php if (isset($_POST['question2B']) && $_POST['question2B']=="3") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 3</span> 
                            </label>
                              <label class="radio-inline">
                              <input type="radio" name="question2B" value="4" <?php if (isset($_POST['question2B']) && $_POST['question2B']=="4") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 4</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question2B" value="5" <?php if (isset($_POST['question2B']) && $_POST['question2B']=="5") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 5</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question2B" value="6" <?php if (isset($_POST['question2B']) && $_POST['question2B']=="6") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 6</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question2B" value="7" <?php if (isset($_POST['question2B']) && $_POST['question2B']=="7") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 7</span> 
                            </label>
                          </div>
                          <?php echo form_error('question2B', '<div class="error text-danger">', '</div>'); ?>
                        </div>
                        <div class="row">
                          <div class="col-md-1 col-sm-6 col-xs-2">
                            <p class="value"><strong>C. </strong> NCCN</p>
                          </div>
                          <div class="col-md-5 col-sm-6 col-xs-10">
                            <label class="radio-inline">
                              <input type="radio" name="question2C" value="1" <?php if (isset($_POST['question2C']) && $_POST['question2C']=="1") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 1</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question2C" value="2" <?php if (isset($_POST['question2C']) && $_POST['question2C']=="2") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 2</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question2C" value="3" <?php if (isset($_POST['question2C']) && $_POST['question2C']=="3") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 3</span> 
                            </label>
                              <label class="radio-inline">
                              <input type="radio" name="question2C" value="4" <?php if (isset($_POST['question2C']) && $_POST['question2C']=="4") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 4</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question2C" value="5" <?php if (isset($_POST['question2C']) && $_POST['question2C']=="5") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 5</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question2C" value="6" <?php if (isset($_POST['question2C']) && $_POST['question2C']=="6") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 6</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question2C" value="7" <?php if (isset($_POST['question2C']) && $_POST['question2C']=="7") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 7</span> 
                            </label>
                          </div>
                          <?php echo form_error('question2C', '<div class="error text-danger">', '</div>'); ?>
                        </div>
                        </li>
                    </div>
                    <hr>
                          <!-- Question 3 -->
                    <div class="form-group pad-ver">
                        <li class="col-md-12 question">
                           In the columns below, please indicate what percentages of your patients receive each of the indicated antiemetic drugs or drug combinations regardless of line of therapy or administration.
                           <div class="row">
                              <div class="col-sm-6"></div>
                              <div class="col-sm-3"><strong>Moderately emetogenic chemotherapy regimens</strong></div>
                              <div class="col-sm-3"><strong>Highly emetogenic chemotherapy regimens</strong></div>
                          </div><hr>
                          <div class="row">
                              <div class="col-sm-6">A. Steroids monotherapy (eg, dexamethasone monotherapy)</div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3A1" placeholder="Percentage (%)" value="<?php echo set_value('question3A1'); ?>">
                                <?php echo form_error('question3A1', '<div class="error text-danger">', '</div>'); ?>
                              </div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3A2" placeholder="Percentage (%)" value="<?php echo set_value('question3A2'); ?>">
                                <?php echo form_error('question3A2', '<div class="error text-danger">', '</div>'); ?>
                              </div>
                          </div><hr>
                            <div class="row">
                              <div class="col-sm-6">B. 5‐HT3 antagonist monotherapy +/− steroids (eg, ondansetron [Zofran], granisetron [Kytril], tropisetron [Navoban] monotherapy)</div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3B1" placeholder="Percentage (%)" value="<?php echo set_value('question3B1'); ?>">
                                <?php echo form_error('question3B1', '<div class="error text-danger">', '</div>'); ?>
                              </div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3B2" placeholder="Percentage (%)" value="<?php echo set_value('question3B2'); ?>">
                                <?php echo form_error('question3B2', '<div class="error text-danger">', '</div>'); ?>
                              </div>
                           </div>
                           <hr>
                           <div class="row">
                             <div class="col-sm-6">C. 5‐HT3 antagonist monotherapy +/− steroids (eg, palonosetron [Aloxi] monotherapy)</div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3C1" placeholder="Percentage (%)" value="<?php echo set_value('question3C1'); ?>">
                                <?php echo form_error('question3C1', '<div class="error text-danger">', '</div>'); ?>
                              </div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3C2" placeholder="Percentage (%)" value="<?php echo set_value('question3C2'); ?>">
                                <?php echo form_error('question3C2', '<div class="error text-danger">', '</div>'); ?>
                              </div>
                            </div><hr>
                            <div class="row">
                              <div class="col-sm-6">D. NK1 antagonist monotherapy +/− steroids (eg. aprepitant [Emend] monotherapy)</div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3D1" placeholder="Percentage (%)" value="<?php echo set_value('question3D1'); ?>">
                                <?php echo form_error('question3D1', '<div class="error text-danger">', '</div>'); ?>
                              </div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3D2" placeholder="Percentage (%)" value="<?php echo set_value('question3D2'); ?>">
                                <?php echo form_error('question3D2', '<div class="error text-danger">', '</div>'); ?>
                              </div>
                           </div><hr>
                           <div class="row">
                              <div class="col-sm-6">E. NK1 antagonist monotherapy +/− steroids (eg, fosaprepitant [Ivemend] monotherapy)</div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3E1" placeholder="Percentage (%)" value="<?php echo set_value('question3E1'); ?>">
                                <?php echo form_error('question3E1', '<div class="error text-danger">', '</div>'); ?>
                              </div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3E2" placeholder="Percentage (%)" value="<?php echo set_value('question3E2'); ?>">
                                <?php echo form_error('question3E2', '<div class="error text-danger">', '</div>'); ?>
                              </div>
                           </div><hr>
                           <div class="row">
                              <div class="col-sm-6">F. 5‐HT3 antagonist + NK1 antagonist +/− steroids (eg, ondansetron/granisetron/tropisetron + aprepitant)</div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3F1" placeholder="Percentage (%)" value="<?php echo set_value('question3F1'); ?>">
                                <?php echo form_error('question3F1', '<div class="error text-danger">', '</div>'); ?>
                              </div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3F2" placeholder="Percentage (%)" value="<?php echo set_value('question3F2'); ?>">
                                <?php echo form_error('question3F2', '<div class="error text-danger">', '</div>'); ?>
                              </div>
                           </div><hr>
                             <div class="row">
                              <div class="col-sm-6">G. 5‐HT3 antagonist + NK1 antagonist +/− steroids (eg, ondansetron/granisetron/tropisetron + fosaprepitant)</div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3G1" placeholder="Percentage (%)" value="<?php echo set_value('question3G1'); ?>">
                                <?php echo form_error('question3G1', '<div class="error text-danger">', '</div>'); ?>
                              </div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3G2" placeholder="Percentage (%)" value="<?php echo set_value('question3G2'); ?>">
                                <?php echo form_error('question3G2', '<div class="error text-danger">', '</div>'); ?>
                              </div>
                           </div><hr>
                            <div class="row">
                              <div class="col-sm-6">H. 5‐HT3 antagonist + NK1 antagonist +/− steroids (eg, palonosetron + aprepitant)</div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3H1" placeholder="Percentage (%)" value="<?php echo set_value('question3H1'); ?>">
                                <?php echo form_error('question3H1', '<div class="error text-danger">', '</div>'); ?>
                              </div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3H2" placeholder="Percentage (%)" value="<?php echo set_value('question3H2'); ?>">
                                <?php echo form_error('question3H2', '<div class="error text-danger">', '</div>'); ?>
                            </div>
                           </div><hr>
                             <div class="row">
                              <div class="col-sm-6">I. 5‐HT3 antagonist + NK1 antagonist +/− steroids (eg, palonosetron + aprepitant)</div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3I1" placeholder="Percentage (%)" value="<?php echo set_value('question3I1'); ?>">
                                <?php echo form_error('question3I1', '<div class="error text-danger">', '</div>'); ?>
                            </div>
                              <div class="col-sm-3">
                                <input type="text" class="form-control" name="question3I2" placeholder="Percentage (%)" value="<?php echo set_value('question3I2'); ?>">
                                <?php echo form_error('question3I2', '<div class="error text-danger">', '</div>'); ?>
                            </div>
                           </div>
                        </li>
                    </div>

<hr>
                    <!-- Question 4 -->
                    <div class="form-group pad-ver">
                        <li class="col-md-12 question">
                            In your personal clinical practice, how do you consider the following regimens in terms of emetogenic potential when it comes to decide for the antiemetic drugs? Cisplatin >50 mg/m2; cisplatin <50 mg/m2; cyclophosphamide >1500 mg/m2; cyclophosphamide <1500 mg/m2; anthracyclines + cyclophosphamide (AC)
                        <div class="row">
                          <div class="col-md-5 col-sm-6">
                            <label class="radio">
                              <input type="radio" name="question4" value="mildly emetogenic" <?php if (isset($_POST['question4']) && $_POST['question4']=="mildly emetogenic") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> Mildly Emetogenic</span> 
                            </label>
                            <label class="radio">
                              <input type="radio" name="question4" value="moderately emetogenic" <?php if (isset($_POST['question4']) && $_POST['question4']=="moderately emetogenic") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> Moderately Emetogenic</span> 
                            </label>
                            <label class="radio">
                              <input type="radio" name="question4" value="highly emetogenic" <?php if (isset($_POST['question4']) && $_POST['question4']=="highly emetogenic") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> Highly Emetogenic</span> 
                          </div>
                        </div>
                        </li>
                        <?php echo form_error('question4', '<div class="error text-danger">', '</div>'); ?>
                    </div>
                    <hr>
                    <!-- Question 5 -->
                    <div class="form-group pad-ver">
                        <li class="col-md-12 question">
                            For the categories below, please indicate what percentages of your patients who receive antiemetic drugs report emesis, hence you consider as non‐responders to current antiemetic treatments.
                            <div class="row">
                              <div class="col-md-4 col-sm-6 col-xs-8">
                                  <strong>A. MEC – Acute emesis</strong> 
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-8">
                                  <input type="text" placeholder="Percentage(%)" name="question5A" value="<?php echo set_value('question5A'); ?>">
                                  <?php echo form_error('question5A', '<div class="error text-danger">', '</div>'); ?>
                              </div> 


                              <div class="col-md-4 col-sm-6 col-xs-8">
                                   <strong>B. MEC – Delayed emesis</strong> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-8">
                                   <input type="text" placeholder="Percentage(%)" name="question5B" value="<?php echo set_value('question5B'); ?>">
                                   <?php echo form_error('question5B', '<div class="error text-danger">', '</div>'); ?>
                              </div>  


                              <div class="col-md-4 col-sm-6 col-xs-8">
                                  <strong>C. HEC – Acute emesis</strong> 
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-8">
                                  <input type="text" placeholder="Percentage(%)" name="question5C" value="<?php echo set_value('question5C'); ?>">
                                  <?php echo form_error('question5C', '<div class="error text-danger">', '</div>'); ?>
                              </div>   
                              <div class="col-md-4 col-sm-6 col-xs-8">
                                  <strong>D. HEC – Delayed emesis</strong> 
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-8">
                                  <input type="text" placeholder="Percentage(%)" name="question5D" value="<?php echo set_value('question5D'); ?>">
                                  <?php echo form_error('question5D', '<div class="error text-danger">', '</div>'); ?>
                              </div>   
                            </div>
                           
                        </li>
                    </div>
                    <hr>

                    <!-- Question 6 -->
                    <div class="form-group pad-ver">
                        <li class="col-md-12 question">
                            Considering your patients who reported emesis despite antiemetic treatments what percentage experience nausea, or vomiting, or both?
                            <div class="row">
                              <div class="col-md-4 col-sm-6 col-xs-8">
                                  <strong>A .patients reporting only nausea</strong> 
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-8">
                                  <input type="text" placeholder="Percentage(%)" name="question6A" value="<?php echo set_value('question6A'); ?>">
                                  <?php echo form_error('question6A', '<div class="error text-danger">', '</div>'); ?>
                              </div>   


                              <div class="col-md-4 col-sm-6 col-xs-8">
                                   <strong>B .patients reporting only vomiting</strong> 
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-8">
                                   <input type="text" placeholder="Percentage(%)" name="question6B" value="<?php echo set_value('question6B'); ?>">
                                   <?php echo form_error('question6B', '<div class="error text-danger">', '</div>'); ?>
                              </div>   


                              <div class="col-md-4 col-sm-6 col-xs-8">
                                  <strong>C .patients reporting both nausea and vomiting</strong> 
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-8">
                                  <input type="text" placeholder="Percentage(%)" name="question6C" value="<?php echo set_value('question6C'); ?>">
                                  <?php echo form_error('question6C', '<div class="error text-danger">', '</div>'); ?>
                              </div>      
                            </div>
                           
                        </li>
                    </div>
                    <hr>
                    <!-- Question 7 -->
                    <div class="form-group pad-ver">
                        <li class="col-md-12 question">
                            In your opinion, what are the main reasons why patients report emesis despite being treated? Please indicate what percentage of patients experience emesis for the following reasons in your personal practice:
                             <div class="row">
                              <div class="col-md-5 col-sm-6 col-xs-10 pt-5">
                                   <strong>A. actual emetogenicity higher than expected</strong> <br>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-10 pt-5">
                                   <input type="text" placeholder="Percentage(%)" name="question7A" value="<?php echo set_value('question7A'); ?>">
                                   <?php echo form_error('question7A', '<div class="error text-danger">', '</div>'); ?>
                              </div>   
                              <div class="col-md-5 col-sm-6 col-xs-10 pt-5">
                                   <strong>B. “weaker” antiemetics (eg, monotherapy instead of combination) were used</strong> 
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-10 pt-5">
                                   <input type="text" placeholder="Percentage(%)" name="question7B" value="<?php echo set_value('question7B'); ?>">
                                   <?php echo form_error('question7B', '<div class="error text-danger">', '</div>'); ?>
                              </div>   
                              <div class="col-md-5 col-sm-6 col-xs-10">
                                  <strong>C. mistakes/issues with the administration (ie, time of administration, etc)</strong> 
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-10">
                                  <input type="text" placeholder="Percentage(%)" name="question7C" value="<?php echo set_value('question7C'); ?>">
                                  <?php echo form_error('question7C', '<div class="error text-danger">', '</div>'); ?>
                              </div>   
                              <div class="col-md-5 col-sm-6 col-xs-10">
                                  <strong>D. other: Mainly psychological cofactors, anxiety, individual sensitivity</strong> 
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-10">
                                  <input type="text" placeholder="Percentage(%)" name="question7D" value="<?php echo set_value('question7D'); ?>">
                                  <?php echo form_error('question7D', '<div class="error text-danger">', '</div>'); ?>
                              </div>   
                            </div>
                        </li>
                    </div>
                    <hr>
                    <!-- Question 8 -->
                    <div class="form-group pad-ver">
                        <li class="col-md-12 question">
                          <div class="col-md-9">
                              Considering all your patients treated with antiemetic therapies for whom you prescribe treatments to take at home, what percentage of these patients made mistakes/missed one or more administrations?
                               <input type="text" name="question8" class="form-control input-sm" placeholder="Enter Percentage (%)" style="width: 30%;" value="<?php echo set_value('question8'); ?>">
                               <?php echo form_error('question8', '<div class="error text-danger">', '</div>'); ?>
                          </div>  
                        </li>
                    </div>
                    <hr>
                    <!-- Question 9 -->
               <div class="form-group pad-ver">
                        <li class="col-md-12 question">
                            What percentage of your patients who receive chemotherapy treatment or target therapy undergo additional medical visits or require additional therapy (eg, you had to undertake an unplanned visit and/ or prescribe a rescue antiemetic treatment) for emesis‐related reasons after receiving their cycle of chemotherapy?
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                <strong>A. After MEC</strong>
                                <!-- Checkboxes -->
                                <div class="checkbox">
                                    <input id="demo-form-checkbox6" class="magic-checkbox" type="checkbox" value=">30%" name="question9A[]" <?php echo set_checkbox('question9A[]', '>30%', FALSE); ?>>
                                    <label for="demo-form-checkbox6">>30%</label>
                                </div>
                                <div class="checkbox">
                                    <input id="demo-form-checkbox7" class="magic-checkbox" type="checkbox" value="21% to 30%" name="question9A[]"  <?php echo set_checkbox('question9A[]', '21% to 30%', FALSE); ?>>
                                    <label for="demo-form-checkbox7">21%‐30%</label>
                                </div>
                                <div class="checkbox">
                                    <input id="demo-form-checkbox8" class="magic-checkbox" type="checkbox" value="11% to 20%" name="question9A[]" <?php echo set_checkbox('question9A[]', '11% to 20%', FALSE); ?>>
                                    <label for="demo-form-checkbox8">11%‐20%</label>
                                </div>
                                <div class="checkbox">
                                    <input id="demo-form-checkbox9" class="magic-checkbox" type="checkbox" value="1% to 10%" name="question9A[]" <?php echo set_checkbox('question9A[]', '1% to 10%', FALSE); ?>>
                                    <label for="demo-form-checkbox9">1%‐10%</label>
                                </div>
                                <div class="checkbox">
                                    <input id="demo-form-checkbox10" class="magic-checkbox" type="checkbox" value="none" name="question9A[]" <?php echo set_checkbox('question9A[]', 'none', FALSE); ?>>
                                    <label for="demo-form-checkbox10">None</label>
                                </div>
                                <?php echo form_error('question9A', '<div class="error text-danger">', '</div>'); ?>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <strong>B. After HEC</strong>
                                <!-- Checkboxes -->
                                <div class="checkbox">
                                    <input id="demo-form-checkbox1" class="magic-checkbox" type="checkbox" value=">30%" name="question9B[]" <?php echo set_checkbox('question9B[]', '>30%', FALSE); ?>>
                                    <label for="demo-form-checkbox1">>30%</label>
                                </div>
                                <div class="checkbox">
                                    <input id="demo-form-checkbox2" class="magic-checkbox" type="checkbox" value="21% to 30%" name="question9B[]" <?php echo set_checkbox('question9B[]', '21% to 30%', FALSE); ?>>
                                    <label for="demo-form-checkbox2">21%‐30%</label>
                                </div>
                                <div class="checkbox">
                                    <input id="demo-form-checkbox3" class="magic-checkbox" type="checkbox" value="11% to 20%" name="question9B[]" <?php echo set_checkbox('question9B[]', '11% to 20%', FALSE); ?>>
                                    <label for="demo-form-checkbox3">11%‐20%</label>
                                </div>
                                <div class="checkbox">
                                    <input id="demo-form-checkbox4" class="magic-checkbox" type="checkbox" value="1% to 10%" name="question9B[]" <?php echo set_checkbox('question9B[]', '1% to 10%', FALSE); ?>>
                                    <label for="demo-form-checkbox4">1%‐10%</label>
                                </div>
                                <div class="checkbox">
                                    <input id="demo-form-checkbox5" class="magic-checkbox" type="checkbox" value="none" name="question9B[]" <?php echo set_checkbox('question9B[]', 'none', FALSE); ?>>
                                    <label for="demo-form-checkbox5">None</label>
                                </div>
                            </div>
                            <?php echo form_error('question9B', '<div class="error text-danger">', '</div>'); ?>
                            </div>
                        </li>
                    </div>
                <hr>
                    <!-- Question 10 -->
                    <div class="form-group pad-ver">
                        <li class="col-md-12 question">
                          To what extent do you perceive unplanned visits and/or changes in planned antiemetic treatment due to emesis problems in treated patients as an issue in your personal clinical practice? Please answer using a 1 to 7 scale, where 1 = it is not at all an issue and 7 = it is a major issue.
                            <div class="row">
                          <div class="col-md-5 col-sm-6">
                            <label class="radio-inline">
                              <input type="radio" name="question10" value="1" <?php if (isset($_POST['question10']) && $_POST['question10']=="1") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 1</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question10" value="2" <?php if (isset($_POST['question10']) && $_POST['question10']=="2") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 2</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question10" value="3" <?php if (isset($_POST['question10']) && $_POST['question10']=="3") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 3</span> 
                             </label>
                             <label class="radio-inline">
                              <input type="radio" name="question10" value="4" <?php if (isset($_POST['question10']) && $_POST['question10']=="4") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 4</span> 
                             </label>
                             <label class="radio-inline">
                              <input type="radio" name="question10" value="5" <?php if (isset($_POST['question10']) && $_POST['question10']=="5") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 5</span> 
                             </label>
                             <label class="radio-inline">
                              <input type="radio" name="question10" value="6" <?php if (isset($_POST['question10']) && $_POST['question10']=="6") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 6</span> 
                             </label>
                             <label class="radio-inline">
                              <input type="radio" name="question10" value="7" <?php if (isset($_POST['question10']) && $_POST['question10']=="7") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 7</span> 
                             </label>
                          </div>
                          <?php echo form_error('question10', '<div class="error text-danger">', '</div>'); ?>
                        </div>
                            
                        </li>
                    </div>
                    <hr>
                      <!-- Question 11 -->
                    <div class="form-group pad-ver">
                        <li class="col-md-12 question">
                          To what extent do you perceive hospitalisation due to emesis as an issue in your personal clinical practice. Please answer using a 1 to 7 scale where 1 = it is not at all an issue and 7 = it is a major issue.
                            <div class="row">
                          <div class="col-md-5 col-sm-6">
                            <label class="radio-inline">
                              <input type="radio" name="question11" value="1" <?php if (isset($_POST['question11']) && $_POST['question11']=="1") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 1</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question11" value="2" <?php if (isset($_POST['question11']) && $_POST['question11']=="2") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 2</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question11" value="3" <?php if (isset($_POST['question11']) && $_POST['question11']=="3") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 3</span> 
                             </label>
                             <label class="radio-inline">
                              <input type="radio" name="question11" value="4" <?php if (isset($_POST['question11']) && $_POST['question11']=="4") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 4</span> 
                             </label>
                             <label class="radio-inline">
                              <input type="radio" name="question11" value="5" <?php if (isset($_POST['question11']) && $_POST['question11']=="5") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 5</span> 
                             </label>
                             <label class="radio-inline">
                              <input type="radio" name="question11" value="6" <?php if (isset($_POST['question11']) && $_POST['question11']=="6") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 6</span> 
                             </label>
                             <label class="radio-inline">
                              <input type="radio" name="question11" value="7" <?php if (isset($_POST['question11']) && $_POST['question11']=="7") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 7</span> 
                             </label>
                          </div>
                          <?php echo form_error('question11', '<div class="error text-danger">', '</div>'); ?>
                        </div>
                            
                        </li>
                    </div>
                    <hr>
                       <!-- Question 12 -->
                    <div class="form-group pad-ver">
                        <li class="col-md-12 question">
                          To what extent do you perceive patient adherence/compliance to antiemetic treatments as an issue in your personal clinical practice? Please answer using a 1 to 7 scale, where 1 = it is not at all an issue and 7 = it is a major issue.
                            <div class="row">
                          <div class="col-md-5 col-sm-6">
                            <label class="radio-inline">
                              <input type="radio" name="question12" value="1" <?php if (isset($_POST['question12']) && $_POST['question12']=="1") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 1</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question12" value="2" <?php if (isset($_POST['question12']) && $_POST['question12']=="2") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 2</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question12" value="3" <?php if (isset($_POST['question12']) && $_POST['question12']=="3") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 3</span> 
                             </label>
                             <label class="radio-inline">
                              <input type="radio" name="question12" value="4" <?php if (isset($_POST['question12']) && $_POST['question12']=="4") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 4</span> 
                             </label>
                             <label class="radio-inline">
                              <input type="radio" name="question12" value="5" <?php if (isset($_POST['question12']) && $_POST['question12']=="5") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 5</span> 
                             </label>
                             <label class="radio-inline">
                              <input type="radio" name="question12" value="6" <?php if (isset($_POST['question12']) && $_POST['question12']=="6") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 6</span> 
                             </label>
                             <label class="radio-inline">
                              <input type="radio" name="question12" value="7" <?php if (isset($_POST['question12']) && $_POST['question12']=="7") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 7</span> 
                             </label>
                          </div>
                          <?php echo form_error('question12', '<div class="error text-danger">', '</div>'); ?>
                        </div>
                            
                        </li>
                    </div>
                  <hr>
                       <!-- Question 13 -->
                    <div class="form-group pad-ver">
                        <li class="col-md-12 question">
                         Please indicate how much you agree with the list of statements below, indicating 7 for agree completely and 1 for disagree completely. 
                         <ol type="A">
                           <li>I sometimes avoid or reduce highly emetogenic chemotherapy for some patients because of chemotherapy‐induced nausea and vomiting</li>
                           <li>Patients sometimes ask to change or cancel chemotherapy because they experienced emesis on previous courses of therapy</li>
                           <li>An antiemetic drug administered orally even on day 1 would be much appreciated by me and my patients</li>
                         </ol>   
                            <div class="row">
                          <div class="col-md-5 col-sm-6">
                            <label class="radio-inline">
                              <input type="radio" name="question13" value="1" <?php if (isset($_POST['question13']) && $_POST['question13']=="1") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 1</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question13" value="2" <?php if (isset($_POST['question13']) && $_POST['question13']=="2") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 2</span> 
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="question13" value="3" <?php if (isset($_POST['question13']) && $_POST['question13']=="3") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 3</span> 
                             </label>
                             <label class="radio-inline">
                              <input type="radio" name="question13" value="4" <?php if (isset($_POST['question13']) && $_POST['question13']=="4") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 4</span> 
                             </label>
                             <label class="radio-inline">
                              <input type="radio" name="question13" value="5" <?php if (isset($_POST['question13']) && $_POST['question13']=="5") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 5</span> 
                             </label>
                             <label class="radio-inline">
                              <input type="radio" name="question13" value="6" <?php if (isset($_POST['question13']) && $_POST['question13']=="6") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 6</span> 
                             </label>
                             <label class="radio-inline">
                              <input type="radio" name="question13" value="7" <?php if (isset($_POST['question13']) && $_POST['question13']=="7") echo "checked";?>>
                               <span class="graphical-radio"></span><span class="value"> 7</span> 
                             </label>
                          </div>
                          <?php echo form_error('question13', '<div class="error text-danger">', '</div>'); ?>
                        </div>
                            
                        </li>
                    </div>
                    <hr>
                </ol>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-md-4 ">
                            <button class="btn btn-success" type="submit" name="submit" value="Submit" style="width: 60%;">Submit</button>
                        </div>
                    </div>
                </div>
            <?php echo form_close(); ?>
            <!--===================================================-->
            <!-- END BASIC FORM ELEMENTS -->
            </div>
        </div>
    </div>