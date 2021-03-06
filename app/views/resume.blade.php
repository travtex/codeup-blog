@extends('layouts.master')

@section('content')

<div class="page-content">
  <div class="container">
      <div class="jumbotron welcome">
        <div class="row">
          <div class="col-xs-8">
            <h1>Travis C. Flatt</h1>
            <p>Full-stack web programmer with a broad range of technical familiarity.  Experienced with front end web design, server side development, and graphic design.</p>
          <div class="col-xs-4">
            <a class="btn btn-primary btn-lg" target="_blank" href="http://www.studioquixotic.com">
              <i class="fa fa-picture-o"></i> &nbsp;Design</a>
          </div>
          <div class="col-xs-4">
             <a class="btn btn-success btn-lg" target="_blank" href="https://github.com/travtex">
              <i class="fa fa-lightbulb-o"></i> &nbsp;Development</a>
          </div>
        </div>
        <div class="col-xs-4">
          <img class="profile-pic" src="img/travis.jpg">
          <a id="email" class="btn btn-info" href="mailto:tflatt74@gmail.com">
            <i class="fa fa-envelope-o"></i> &nbsp;E-Mail Me</a></img>
        </div>
      </div>
    </div>

      <!-- Nav tabs -->
      <div class="container">
      <h2>R&eacute;sum&eacute;</h2>
        <ul class="nav nav-tabs">
          <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
          <li><a href="#education" data-toggle="tab">Education</a></li>
          <li><a href="#experience" data-toggle="tab">Experience</a></li>
          <li><a href="#skills" data-toggle="tab">Skills</a></li>
          <li><a href="#misc" data-toggle="tab">Miscellaneous</a></li>
        </ul>
      </div>
<!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane fade in active" id="overview">
          <div class="container">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Overview</h3>
              </div>
              <div class="panel-body">
                <div class="page-header">
                  <h3>Travis C. Flatt <small>Junior Web Developer</small></h3>
                </div>
                <p class="text-justify">Extremely self-motivated and reliable worker seeking to transition from Healthcare to the Information Technology field through a combination of formal education, informal self-directed learning, and hands-on experience.  Healthcare experience has provided solid experience in customer service, autonomy, and continuing education that is readily portable to the dynamic and customer-focused IT industry.</p>
                <p><i class="fa fa-phone-square fa-lg"></i> &nbsp;(210) 865-7058</p>
                <p><i class="fa fa-envelope fa-lg"></i> <a href="mailto:tflatt74@gmail.com"> &nbsp;tflatt74@gmail.com</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="education">
          <div class="container">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Education</h3>
              </div>
              <div class="panel-body">
                <div class="page-header">
                  <h3>My Education <small>Lifelong Learning</small></h3>
                </div>
                <p class="bg-success color-head">LAMP Stack &amp; Javascript</p>
                <dl>
                  <div class="row">
                    <div class="col-xs-8">
                      <p><strong>Codeup<br />San Antonio, TX</strong></p>
                      <p><br />Web development bootcamp focusing on web development using Linux, Aphache, PHP, and MySQL.  Cirriculum includes creating web apps with the Laravel framework, and font-end development with CSS, Twitter Bootstrap, and Javascript. <br /><br /><em>In Progress, anticipated completion April 2014</em></p>
                    </div>
                    <div class="col-xs-4">
                      <img src="img/codup.jpeg" class="image-responsive img-rounded" style="height:200px; width:200px;"/>
                    </div>
                  </div>
                </dl>
                <p class="bg-primary color-head">AAS Respiratory Care</p>
                <dl>
                  <div class="row">
                    <div class="col-xs-8">
                    <p><strong>Howard College<br />San Angelo, TX</strong></p>
                    <p><br />Applied Associate's Degree in cardiopulmonary clinical care.  Cirriculum includes respiratory pathology, pharmacology, patient management, principles of mechanical ventilation, and healthcare ethics.<br /><br /><em>June 2007</em></p>
                  </div>
                    <div class="col-xs-4">
                      <img src="img/stethoscope.jpg" class="image-responsive img-rounded" style="height:200px; width:200px;" />
                    </div>
                  </div>
                </dl>
                <p class="bg-success color-head">AA Liberal Arts</p>
                <dl>
                  <div class="row">
                    <div class="col-xs-8">
                      <p><strong>Central New Mexico University<br />Albuquerque, NM</strong></p>
                      <p><br />Associate of Arts in Liberal Arts.  General cirriculum includes maths, sciences, and liberal arts.<br /><br /><em>June 2001</em></p>
                    </div>
                    <div class="col-xs-4">
                      <img src="img/books.jpg" class="image-responsive img-rounded" style="height:200px; width:200px;" />
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="experience">
          <div class="container">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Experience</h3>
              </div>
              <div class="panel-body">
                <div class="page-header">
                  <h3>My Experience <small>Getting Things Done</small></h3>
                </div>
                  <p class="bg-success color-head">Registered Respiratory Therapist</p>
                  <h5>Baptist Health System <small> March 2012 - January 2014</small></h5>
                  <ul>
                    <li>Neonatal respiratory therapist</li>
                    <li>Scheduling for NICU respiratory therapists</li>
                    <li>Training new hires on NICU core competencies</li>
                  </ul>
                  <hr />
                  <h5>Willow Creek Women's Hospital <small> April 2010 - January 2012</small></h5>
                  <ul>
                    <li>Neonatal respiratory therapist</li>
                    <li>Provide coverage for adult patients</li>
                    <li>Coverage for transport and emergency patients, both adult and neonatal</li>
                  </ul>
                  <hr />
                  <h5>Methodist Children's Hospital <small> June 2007 - March 2010 </small></h5>
                  <ul>
                    <li>Neonatal &amp; Pediatric respiratory therapist</li>
                    <li>Code &amp; delivery team</li>
                    <li>Training new hires on core competencies</li>
                  </ul>
                  <br />
                  <p class="bg-primary color-head">Procurement Specialiast</p>
                  <h5>State of New Mexico: Tourism &amp; Corrrections Industries <small> 1997 - 2004</small></h5>
                  <ul>
                    <li>Design, Develop, and Maintain Corrections Industries Website</li>
                    <li>Procurement, Vendor Relations, Contract Management</li>
                    <li>Image Manipulation/Layout for Tourism Marketing Campaigns</li>
                    <li>Purchase Orders, Supply Management</li>
                    <li>Author State Procurement Code Guide for Employees</li>
                  </ul>
                  <br />
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="skills">
          <div class="container">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Skills</h3>
              </div>
              <div class="panel-body">
                <div class="page-header">
                  <h3>My Skills <small>Tools of the Trade</small></h3>
                </div>
                  <ul>
                    <li>HTML5/XHTML</li>
                    <li>CSS/CSS3</li>
                    <li>Javascript/jQuery</li>
                    <li>Cross-browser and Responsive Web Design</li>
                    <li>Graphic manipulation &amp; optimization (GIMP)</li>
                    <li>Multiple OS Familiarity:
                      <ul>
                        <li>Windows 98/NT/7/8</li>
                        <li>Linux (Various distributions)</li>
                        <li>Mac OSX</li>
                      </ul></li>
                    <li>Programming Fundamentals</li>
                    <li>Syntax Familiarity:
                      <ul>
                        <li>PHP</li>
                        <li>Javascript</li>
                        <li>Java</li>
                        <li>Ruby</li>
                      </ul></li>
                    <li>Wordpress (Core &amp; Avia framework)</li>
                    <li>Bootstrap framework</li>
                  </ul>
                  <br />
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="misc">
          <div class="container">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Miscellaneous</h3>
              </div>
              <div class="panel-body">
                <div class="page-header">
                  <h3>More About Me <small>For the Curious</small></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@stop

@section('bottomscript')
	<script src="js/resume.js"></script>
@stop