<?php
//$this->registerJsFile('/js/jq.js');
//$this->registerJsFile('/js/feedback/feedback-src.js');
$this->params['feedback'] = true;

$this->title = "Feedback requests";
?>

<div class="main-content">
    <section class="nav-tab">
        <div class="container">
            <div class="flex">
                <ul>
                    <li><a href="/annual" class="active">Annual appraisal</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    <li><a href="/conversations">Coaching sessions</a></li>
                </ul>
                <div class="change-year">
                    <label>Change year</label>
                    <select>
                        <option>2018</option>
                        <option>2019</option>
                    </select>
                </div>
            </div>
        </div>
    </section>
    <section class="table-list gray-bg annual-appraisal">
        <div class="container">
            <h1 class="content-title">My annual appraisal</h1>
            <div class="table-item">
                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Manager</th>
                        <th>Goals</th>
                        <th>Behavioral competencies</th>
                        <th>Your impact</th>
                        <th>Development plan</th>
                        <th>Report</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Ani Hakobyan</td>
                        <td>Regional  marketing  manager - CIS  & Mongolia</td>
                        <td>Member firm  development</td>
                        <td>Gurgen Hakobyan</td>
                        <td><strong><a href="/goals/2018">View goals</a></strong></td>
                        <td><strong>View behavioral competencies</strong></td>
                        <td><strong>View your impact</strong></td>
                        <td><strong>View development plan</strong></td>
                        <td><a href="#"><i class="far fa-file-pdf"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <h1 class="content-title">Team members’ annual appraisal</h1>
            <div class="table-item">
                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Manager</th>
                        <th>Goals</th>
                        <th>Behavioral competencies</th>
                        <th>Your impact</th>
                        <th>Development plan</th>
                        <th>Report</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><span><img src="assets/images/members/member-2.png" alt="" class="request-to-whom"></span> Karen Poghosyan</td>
                        <td>Regional  marketing  manager - CIS  & Mongolia</td>
                        <td>Member firm  development</td>
                        <td>Gurgen Hakobyan</td>
                        <td><strong>View goals</strong></td>
                        <td><strong>View behavioral competencies</strong></td>
                        <td><strong>View your impact</strong></td>
                        <td><strong>View development plan</strong></td>
                        <td><a href="#"><i class="far fa-file-pdf"></i></a></td>
                    </tr>
                    <tr>
                        <td><span><img src="assets/images/members/member-2.png" alt="" class="request-to-whom"></span> Karen Poghosyan</td>
                        <td>Regional  marketing  manager - CIS  & Mongolia</td>
                        <td>Member firm  development</td>
                        <td>Gurgen Hakobyan</td>
                        <td><strong>View goals</strong></td>
                        <td><strong>View behavioral competencies</strong></td>
                        <td><strong>View your impact</strong></td>
                        <td><strong>View development plan</strong></td>
                        <td><a href="#"><i class="far fa-file-pdf"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="main-bottom">
        <div class="container flex">
            <div class="bottom-left purple">
                <h2>
                    Setting S.M.A.R.T.  objectives
                </h2>
                <p>Objectives should be aligned with Grant Thornton's strategic priorities. Typically an individual and coach agree three to four stretch objectives for the coming year usin the SMART approach.</p>
                <a href="#">Read more</a>
            </div>
            <div class="bottom-right">
                <h2>MyPerformance system  user guidelines</h2>
                <p>Here you will find answers on how to use the system, set your g</p>
                <a href="#">Read more</a>
            </div>
        </div>
    </section>
</div>