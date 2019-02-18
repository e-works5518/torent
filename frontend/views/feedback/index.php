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
                    <li><a href="/annual/2018" >Annual appraisal</a></li>
                    <li><a href="/feedback" class="active">Feedback</a></li>
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
    <section class="table-list gray-bg feedback">
        <div class="container">
            <div class="feedback-links flex">
                <a href="javascript:void(0);" class="btn-border give-feedback-btn inline-block transition">Request feedback <i class="fas fa-chevron-right"></i></a>

                <a class="btn-border" href="#">Provide feedback <i class="fas fa-chevron-right"></i></a>
                <a class="btn-border" href="#">Download report <i class="far fa-file-pdf"></i></a>
            </div>
            <h1 class="content-title">Feedback received</h1>
            <div class="table-item">
                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Job title</th>
                        <th>Department</th>
                        <th>Internal/External</th>
                        <th>Project</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><span><img src="/html/assets/images/members/member-1.png" alt="" class="request-to-whom"></span> Ani Hakobyan</td>
                        <td>Regional  marketing  manager - CIS  & Mongolia</td>
                        <td>Member firm  development</td>
                        <td>Internal</td>
                        <td>CyberSecurity Standards  implementation in CIS</td>
                        <td>Pending acceptance</td>
                    </tr>
                    <tr>
                        <td><span><img src="/html/assets/images/members/member-1.png" alt="" class="request-to-whom"></span> Ani Hakobyan</td>
                        <td>Regional  marketing  manager - CIS  & Mongolia</td>
                        <td>Member firm  development</td>
                        <td>Internal</td>
                        <td>CyberSecurity Standards  implementation in CIS</td>
                        <td>Pending acceptance</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <h1 class="content-title">Feedback provided</h1>
            <div class="table-item">
                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Job title</th>
                        <th>Department</th>
                        <th>Internal/External</th>
                        <th>Project</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><span><img src="/html/assets/images/members/member-2.png" alt="" class="request-to-whom"></span> Vladislav Muradyan</td>
                        <td>Regional  marketing  manager - CIS  & Mongolia</td>
                        <td>Member firm  development</td>
                        <td>Internal</td>
                        <td>CyberSecurity Standards  implementation in CIS</td>
                        <td>Pending acceptance</td>
                    </tr>
                    <tr>
                        <td><span><img src="/html/assets/images/members/member-2.png" alt="" class="request-to-whom"></span> Vladislav Muradyan</td>
                        <td>Regional  marketing  manager - CIS  & Mongolia</td>
                        <td>Member firm  development</td>
                        <td>Internal</td>
                        <td>CyberSecurity Standards  implementation in CIS</td>
                        <td>Pending acceptance</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="table-list white-bg feedback">
        <div class="container">
            <h1 class="content-title">Team members feedback</h1>
            <div class="table-item">
                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Job title</th>
                        <th>Department</th>
                        <th>Internal/External</th>
                        <th>Project</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><span><img src="/html/assets/images/members/member-2.png" alt="" class="request-to-whom"></span> Vladislav Muradyan</td>
                        <td>Regional  marketing  manager - CIS  & Mongolia</td>
                        <td>Member firm  development</td>
                        <td>Internal</td>
                        <td>CyberSecurity Standards  implementation in CIS</td>
                        <td><strong>View dashboard</strong></td>
                    </tr>
                    <tr>
                        <td><span><img src="/html/assets/images/members/member-2.png" alt="" class="request-to-whom"></span> Vladislav Muradyan</td>
                        <td>Regional  marketing  manager - CIS  & Mongolia</td>
                        <td>Member firm  development</td>
                        <td>Internal</td>
                        <td>CyberSecurity Standards  implementation in CIS</td>
                        <td><strong>View dashboard</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<div class="popup-layer transition">
    <div class="popup relative">
        <a href="javascript:void(0);" class="popup-close absolute" title="Close popup"></a>
        <h3>Request feedback</h3>
        <ul class="requests-tab-title flex">
            <li><a href="javascript:void(0);" class="transition active">Internal</a></li>
            <li><a href="javascript:void(0);" class="transition">External</a></li>
        </ul>
        <div class="requests-list active absolute">
            <div class="request-body">
                <div>
                    <select>
                        <option>Select person</option>
                        <option>Select </option>
                        <option>Select </option>
                    </select>
                </div>
                <div>
                    <select>
                        <option>Reason for feedback</option>
                        <option>Reason for </option>
                        <option>Reason for </option>
                    </select>
                </div>
                <div><input type="text" name="" placeholder="Project name / other"></div>
            </div>
            <div><button class="submit-btn transition">Request feedback</button></div>
        </div>
        <div class="requests-list absolute">
            <div class="request-body">
                <div><input type="email" name="" placeholder="Email"></div>
                <div><input type="text" name="" placeholder="Name"></div>
                <div><input type="text" name="" placeholder="Company / Position"></div>
                <div>
                    <select>
                        <option>Reason for feedback</option>
                        <option>Reason for </option>
                        <option>Reason for </option>
                    </select>
                </div>
                <div><input type="text" name="" placeholder="Project name / other"></div>
            </div>
            <div><button class="submit-btn transition">Request feedback</button></div>
        </div>
    </div>
</div>