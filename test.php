                                <div class="tab-pane" id="takethings">
                                    <div class="accordion">
                                        <div class="well well-lg">
                                            <div class="tabbable" id="takethings_list">
                                                <ul class="nav nav-tabs">

                                                    <li class="active">
                                                        <a href="#takethings-findpax" data-toggle="tab"><span
                                                                class="glyphicon glyphicon-bullhorn"
                                                                aria-hidden="true">车找人</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#takethings-findcar" data-toggle="tab"><span
                                                                class="glyphicon glyphicon-bullhorn"
                                                                aria-hidden="true">人找车</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#takethings-pubinfo" data-toggle="tab"><span
                                                                class="glyphicon glyphicon-pencil"
                                                                aria-hidden="true">发布信息</span></a>
                                                    </li>

                                                </ul>
                                                <div class="tab-content">

                                                    <div class="tab-pane" id="takethings-findpax">

                                                    </div>
                                                    <div class="tab-pane" id="takethings-findcar">

                                                    </div>
                                                    <div class="tab-pane" id="takethings-pubinfo">

                                                        <form action="/bytheway/pubrec.php" method="post"
                                                              style="margin-top: 5%">

                                                            <div class="row">

                                                                <div class="row">

                                                                    <div class="col-lg-3">

                                                                    </div>

                                                                    <div class=" col-lg-3">
                                                                        <input checked="true" type="radio" name="flag"
                                                                               value="0"/>
                                                                        我要发车
                                                                    </div>
                                                                    <div class=" col-lg-3">
                                                                        <input type="radio" name="flag" value="1"/>

                                                                        我要坐车
                                                                    </div>
                                                                </div>

                                                                <br>

                                                                <div class="col-lg-2">
                                                                    出发时间*
                                                                </div>

                                                                <div class=" col-lg-4">
                                                                    <input type="text" class="form-control"
                                                                           id="timepicker" Name="timepicker"
                                                                           placeholder="点击选择时间">
                                                                    <input type="hidden" id="datetime" Name="datetime"
                                                                           value="test">
                                                                </div>

                                                            </div>
                                                            <br>

                                                            <div class="row">

                                                                <div class="col-lg-2">
                                                                    出发地*
                                                                </div>


                                                                <div class=" col-lg-8">
                                                                    <div class="docs-methods">
                                                                        <div class="form-inline">
                                                                            <div id="distpicker">
                                                                                <div class="form-group">
                                                                                    <label class="sr-only"
                                                                                           for="province">Province</label>
                                                                                    <select class="form-control"
                                                                                            id="province"></select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="sr-only" for="city">City</label>
                                                                                    <select class="form-control"
                                                                                            id="city"></select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="sr-only"
                                                                                           for="district">District</label>
                                                                                    <select class="form-control"
                                                                                            id="district"></select>
                                                                                    <!--为了隐私 要不就不要用户输入地址了， 直接选个区-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" id="dept_add" Name="dept_add"
                                                                           value="test">
                                                                    <input type="hidden" id="dept_city" Name="dept_city"
                                                                           value="test">
                                                                    <input type="hidden" id="dept_prov" Name="dept_prov"
                                                                           value="test">
                                                                </div>


                                                            </div>

                                                            <br>

                                                            <div class="row">

                                                                <div class="col-lg-2">
                                                                    目的地*
                                                                </div>
                                                                <div class=" col-lg-8">
                                                                    <div class="docs-methods">
                                                                        <div class="form-inline">
                                                                            <div data-toggle="distpicker">
                                                                                <div class="form-group">
                                                                                    <label class="sr-only"
                                                                                           for="province">Province</label>
                                                                                    <select class="form-control"
                                                                                            id="target-province"></select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="sr-only" for="city">City</label>
                                                                                    <select class="form-control"
                                                                                            id="target-city"></select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="sr-only"
                                                                                           for="district">District</label>
                                                                                    <select class="form-control"
                                                                                            id="target-district"></select>
                                                                                    <!--为了隐私 要不就不要用户输入地址了， 直接选个区-->
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" id="dest_add" Name="dest_add"
                                                                           value="test">
                                                                    <input type="hidden" id="dest_city" Name="dest_city"
                                                                           value="test">
                                                                    <input type="hidden" id="dest_prov" Name="dest_prov"
                                                                           value="test">
                                                                </div>


                                                            </div>

                                                            <br>

                                                            <div class="row">

                                                                <div class="col-lg-2">
                                                                    人数*
                                                                </div>

                                                                <div class=" col-lg-2">
                                                                    <div class="form-group">
                                                                        <select class="form-control" id="pax_num_sel">
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                            <option>6</option>
                                                                        </select>
                                                                        <input type="hidden" id="pax_num" Name="pax_num"
                                                                               value="test">
                                                                    </div>

                                                                </div>
                                                            </div>



                                                            <div class="row">

                                                                <div class="col-lg-2">
                                                                    手机号*
                                                                </div>

                                                                <div class=" col-lg-2">

                                                                    <input type="text" Name="phone"  required="">


                                                                </div>
                                                            </div>

                                                            <br>

                                                            <div class="row">

                                                                <div class="col-lg-2">
                                                                    微信号
                                                                </div>

                                                                <div class=" col-lg-2">

                                                                    <input type="text" Name="wechat" >

                                                                </div>
                                                            </div>

                                                            <br>

                                                            <div class="row">

                                                                <div class="col-lg-2">
                                                                    描述
                                                                </div>

                                                                <div class=" col-lg-4">
                                                                    <textarea id="descpt_input"
                                                                              style="width:380px;height:80px;"
                                                                              ></textarea>
                                                                    <input type="hidden" id="descpt" Name="descpt"
                                                                           value="">
                                                                </div>
                                                            </div>

                                                            <br>

                                                            <!--<button class="btn btn-block btn-primary" type="button"-->
                                                            <!--id="submit">发布-->
                                                            <!--</button>-->

                                                            <input type="submit" class="btn btn-block btn-primary"
                                                                   id="submit" Name="submit" value="Publish">


                                                        </form>

                                                    </div>

                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div> 