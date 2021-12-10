<!doctype html>
    <html lang='en'>
        <head>
        <title>Home - Ormond Server</title>
        <meta http-equiv='content-type' content='text/html; charset=UTF-8; x-content-type-options=nosniff;'>
        <meta name='viewport' content='width=device-width, initial-scale=1' />
        <link rel='shortcut icon' type='image/png' href='/img/computer.png?v=2' />
        <link rel='stylesheet' type='text/css' href='https://use.fontawesome.com/releases/v5.13.1/css/all.css'>
        <link rel='stylesheet' type='text/css' href='/css/main.css'>
        <link rel='stylesheet' type='text/css' href='/css/codemirror-edits.css'>
        <link rel='stylesheet' type='text/css' href='/vendor/bootstrap/css/sb.min.css'>
        <link rel='stylesheet' type='text/css' href='/vendor/datatables/dataTables.bootstrap4.min.css'>
        <link rel='stylesheet' type='text/css' href='/vendor/codemirror/lib/codemirror.css' />
        <link rel='stylesheet' type='text/css' href='/vendor/codemirror/addon/dialog/dialog.css' />
        <link rel='stylesheet' type='text/css' href='/vendor/codemirror/addon/search/matchesonscrollbar.css' />
        <link rel='stylesheet' type='text/css' href='/vendor/codemirror/addon/display/fullscreen.css' />
        <link rel='stylesheet' type='text/css' href='/vendor/codemirror/addon/fold/foldgutter.css' />
        <link rel='stylesheet' type='text/css' href='/vendor/codemirror/addon/hint/show-hint.css' />
        <link rel='stylesheet' type='text/css' href='/vendor/codemirror/addon/lint/lint.css' />
        <link rel='stylesheet' type='text/css' href='/vendor/summernote/summernote.css' />
        <link rel='stylesheet' type='text/css' href='/vendor/datepicker/css/bootstrap-datepicker.min.css'>
        <link rel='stylesheet' type='text/css' href='https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css'>
        <script type='text/javascript' src='/vendor/jquery/jquery-3.5.1.min.js'></script>
        <script type='text/javascript' src='/vendor/jquery/jquery-ui.min.js'></script>
        <script type='text/javascript' src='/vendor/bootstrap/js/bootstrap.bundle.min.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/lib/codemirror.js'></script>
        <script type='text/javascript' src='/vendor/go/go.js'></script>
        <script type='text/javascript' src='/vendor/go/text-editor.js'></script>
        <script type='text/javascript' src='/vendor/datepicker/js/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='/js/cookie.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/dialog/dialog.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/search/searchcursor.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/search/search.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/scroll/annotatescrollbar.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/search/matchesonscrollbar.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/search/jump-to-line.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/comment/comment.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/display/fullscreen.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/display/placeholder.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/edit/closebrackets.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/edit/closetag.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/edit/matchbrackets.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/edit/matchtags.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/edit/trailingspace.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/fold/foldcode.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/fold/foldgutter.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/fold/brace-fold.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/fold/xml-fold.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/fold/markdown-fold.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/fold/comment-fold.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/hint/css-hint.js'></script>
	<script type='text/javascript' src='/vendor/codemirror/addon/hint/html-hint.js'></script>
	<script type='text/javascript' src='/vendor/codemirror/addon/hint/javascript-hint.js'></script>
	<script type='text/javascript' src='/vendor/codemirror/addon/hint/show-hint.js'></script>
	<script type='text/javascript' src='/vendor/codemirror/addon/hint/sql-hint.js'></script>
	<script type='text/javascript' src='/vendor/codemirror/addon/hint/xml-hint.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/runmode/runmode.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/addon/selection/active-line.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/mode/clike/clike.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/mode/css/css.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/mode/htmlmixed/htmlmixed.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/mode/javascript/javascript.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/mode/php/php.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/mode/sql/sql.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/mode/textile/textile.js'></script>
        <script type='text/javascript' src='/vendor/codemirror/mode/xml/xml.js'></script>
        <script type='text/javascript' src='/vendor/datatables/jquery.dataTables.min.js'></script>
        <script type='text/javascript' src='/vendor/datatables/dataTables.bootstrap4.min.js'></script>
        <script type='text/javascript' src='/vendor/diff-match-patch/diff_match_patch.js'></script>
        
        <script type='text/javascript' src='/vendor/ckeditor5/ckeditor.js'></script>
		<script type='text/javascript' src='/vendor/summernote/summernote.min.js'></script>
        <script type='text/javascript' src='/js/main.js'></script>
    </head>
        <body id='page-top' class='sidebar-toggled light'>
            <div id='wrapper'>
                <ul class='navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled' id='accordionSidebar'>
            <a class='sidebar-brand d-flex align-items-center justify-content-center' href='/'>
                <div class='sidebar-brand-icon'><i class='fas fa-home'></i></div>
            </a>
            <hr class='sidebar-divider'><div class='sidebar-heading pb-3'><i class='fas fa-fw fa-chalkboard-teacher'></i> Courses</div><li class='nav-item'>
                        <a class='nav-link collapsed pt-0' href='#' data-toggle='collapse' data-target='#BIA-354' aria-expanded='false' aria-controls='collapsePages'><span> BIA 354</span></a>
                        <div id='BIA-354' class='collapse' aria-labelledby='headingPages' data-parent='#accordionSidebar'>
                            <div class='bg-white py-2 collapse-inner rounded'>
                                <h6 class='collapse-header'>Directories</h6>
                                <a href='/index.php?course=354&section=2&schema=scl05176&download=true' class='btn btn-info btn-circle btn-sm collapse-item-icon' data-toggle='tooltip' data-placement='bottom' title='Note: For password security reasons, db.php files will not be downloaded.'><i class='fas fa-download'></i></a>
                                <a class='collapse-item mb-1' href='/courses/354/Students/scl05176'><i class='fas fa-folder fa-sm fa-fw mr-2 text-primary'></i>Personal</a>
                                <a href='/index.php?course=354&section=2&schema=354groupb2&download=true' class='btn btn-success btn-circle btn-sm collapse-item-icon'><i class='fas fa-download' data-toggle='tooltip' data-placement='bottom' title='Note: For password security reasons, db.php files will not be downloaded.'></i></a>
                        <a class='collapse-item mb-1' href='/courses/354/Groups/Group-B2'><i class='fas fa-folder fa-sm fa-fw mr-2 text-primary'></i>Group B2</a>
                                <h6 class='collapse-header'>Course Pages</h6>
                    <a href='/office.php?office-id=BIA-354-B' class='collapse-item'><i class='fas fa-building fa-sm fa-fw mr-2 text-primary'></i>Virtual Office</a>
                                <h6 class='collapse-header'>Student Examples</h6><a class='collapse-item' href='/courses/354/Examples/Costa-Rica-Software'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>Costa Rica Software</a><a class='collapse-item' href='/courses/354/Examples/Cupboard'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>Cupboard</a><a class='collapse-item' href='/courses/354/Examples/Dinkers'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>Dinkers</a><a class='collapse-item' href='/courses/354/Examples/EITC-Coalition'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>EITC Coalition</a><a class='collapse-item' href='/courses/354/Examples/Edge'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>Edge</a><a class='collapse-item' href='/courses/354/Examples/Geospec/login.php'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>Geospec</a><a class='collapse-item' href='/courses/354/Examples/GolfUSA'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>GolfUSA</a><a class='collapse-item' href='/courses/354/Examples/IEI'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>IEI</a><a class='collapse-item' href='/courses/354/Examples/Jackson-Street-Books'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>Jackson Street Books</a><a class='collapse-item' href='/courses/354/Examples/Lacrosse'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>Lacrosse</a><a class='collapse-item' href='/courses/354/Examples/Oath/LandingPage.php'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>Oath</a><a class='collapse-item' href='/courses/354/Examples/Parking-Management'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>Parking Management</a><a class='collapse-item' href='/courses/354/Examples/Pius-Choir'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>Pius Choir</a><a class='collapse-item' href='/courses/354/Examples/Quiz-App'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>Quiz App</a><a class='collapse-item' href='/courses/354/Examples/Recruiters-of-Minnesota'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>Recruiters of Minnesota</a><a class='collapse-item' href='/courses/354/Examples/Student-Life'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>Student Life</a><a class='collapse-item' href='/courses/354/Examples/Travel-Agency'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>Travel Agency</a><a class='collapse-item' href='/courses/354/Examples/Waukee-Lacrosse'><i class='fas fa-swatchbook fa-sm fa-fw mr-2 text-primary'></i>Waukee Lacrosse</a>
                            </div>
                        </div>
                    </li>
            <hr class='sidebar-divider'><div class='sidebar-heading pb-3'><i class='fas fa-fw fa-cubes'></i> Features</div><li class='nav-item'>
                    <a class='nav-link collapsed pt-0' href='/features/charts-maps' data-toggle='collapse' data-target='#charts-maps' aria-expanded='false' aria-controls='collapsePages'><span>Charts & Maps</span></a>
                    <div id='charts-maps' class='collapse' aria-labelledby='headingPages' data-parent='#accordionSidebar'>
                        <div class='bg-white py-2 collapse-inner rounded'>
                            <h6 class='collapse-header'>Charts & Maps</h6>
                            <a class='collapse-item' href='/features/charts-maps/area-chart.php'><i class='fas fa-chart-area fa-sm fa-fw mr-2 text-primary' ></i>Area Chart</a><a class='collapse-item' href='/features/charts-maps/bar-chart.php'><i class='fas fa-chart-bar fa-sm fa-fw mr-2 text-primary' style='transform: scaleY(-1) rotate(90deg)'></i>Bar Chart</a><a class='collapse-item' href='/features/charts-maps/bubble-chart.php'><i class='fas fa-soap fa-sm fa-fw mr-2 text-primary' ></i>Bubble Chart</a><a class='collapse-item' href='/features/charts-maps/calendar-chart.php'><i class='fas fa-calendar-alt fa-sm fa-fw mr-2 text-primary' ></i>Calendar Chart</a><a class='collapse-item' href='/features/charts-maps/column-chart.php'><i class='fas fa-chart-bar fa-sm fa-fw mr-2 text-primary' ></i>Column Chart</a><a class='collapse-item' href='/features/charts-maps/donut-chart.php'><i class='fas fa-dot-circle fa-sm fa-fw mr-2 text-primary' ></i>Donut Chart</a><a class='collapse-item' href='/features/charts-maps/geo-chart.php'><i class='fas fa-globe-americas fa-sm fa-fw mr-2 text-primary' ></i>Geo Chart</a><a class='collapse-item' href='/features/charts-maps/histogram.php'><i class='fab fa-deezer fa-sm fa-fw mr-2 text-primary' ></i>Histogram</a><a class='collapse-item' href='/features/charts-maps/line-chart.php'><i class='fas fa-chart-line fa-sm fa-fw mr-2 text-primary' ></i>Line Chart</a><a class='collapse-item' href='/features/charts-maps/maps.php'><i class='fas fa-map fa-sm fa-fw mr-2 text-primary' ></i>Maps</a><a class='collapse-item' href='/features/charts-maps/pie-chart.php'><i class='fas fa-chart-pie fa-sm fa-fw mr-2 text-primary' ></i>Pie Chart</a><a class='collapse-item' href='/features/charts-maps/polar-area-chart.php'><i class='fas fa-bullseye fa-sm fa-fw mr-2 text-primary' ></i>Polar Area Chart</a><a class='collapse-item' href='/features/charts-maps/radar-chart.php'><i class='fas fa-draw-polygon fa-sm fa-fw mr-2 text-primary' ></i>Radar Chart</a><a class='collapse-item' href='/features/charts-maps/scatter-chart.php'><i class='fas fa-braille fa-flip-vertical fa-sm fa-fw mr-2 text-primary' ></i>Scatter Chart</a><a class='collapse-item' href='/features/charts-maps/stacked-chart.php'><i class='fas fa-layer-group fa-sm fa-fw mr-2 text-primary' ></i>Stacked Chart</a><a class='collapse-item' href='/features/charts-maps/treemap.php'><i class='fas fa-th-large fa-sm fa-fw mr-2 text-primary' ></i>Treemap</a>
                        </div>
                    </div>
                </li><li class='nav-item'>
                    <a class='nav-link collapsed pt-0' href='/features/drop-down-alternatives' data-toggle='collapse' data-target='#drop-down-alternatives' aria-expanded='false' aria-controls='collapsePages'><span>Drop-down Alternatives</span></a>
                    <div id='drop-down-alternatives' class='collapse' aria-labelledby='headingPages' data-parent='#accordionSidebar'>
                        <div class='bg-white py-2 collapse-inner rounded'>
                            <h6 class='collapse-header'>Drop-down Alternatives</h6>
                            <a class='collapse-item' href='/features/drop-down-alternatives/datalist.php'><i class='fas fa-list-alt fa-sm fa-fw mr-2 text-primary' ></i>Datalist</a><a class='collapse-item' href='/features/drop-down-alternatives/multi-select.php'><i class='fas fa-mouse-pointer fa-sm fa-fw mr-2 text-primary' ></i>Multi Select</a><a class='collapse-item' href='/features/drop-down-alternatives/option-group.php'><i class='fas fa-object-group fa-sm fa-fw mr-2 text-primary' ></i>Option Group</a><a class='collapse-item' href='/features/drop-down-alternatives/option-groups-&-multi-select.php'><i class='far fa-object-group fa-sm fa-fw mr-2 text-primary' ></i>Option Groups & Multi Select</a>
                        </div>
                    </div>
                </li><li class='nav-item'>
                    <a class='nav-link collapsed pt-0' href='/features/file-handling' data-toggle='collapse' data-target='#file-handling' aria-expanded='false' aria-controls='collapsePages'><span>File Handling</span></a>
                    <div id='file-handling' class='collapse' aria-labelledby='headingPages' data-parent='#accordionSidebar'>
                        <div class='bg-white py-2 collapse-inner rounded'>
                            <h6 class='collapse-header'>File Handling</h6>
                            <a class='collapse-item' href='/features/file-handling/export-to-csv.php'><i class='fas fa-file-csv fa-sm fa-fw mr-2 text-primary' ></i>Export To CSV</a><a class='collapse-item' href='/features/file-handling/storing-files.php'><i class='fas fa-copy fa-sm fa-fw mr-2 text-primary' ></i>Storing Files</a>
                        </div>
                    </div>
                </li><li class='nav-item'>
                    <a class='nav-link collapsed pt-0' href='/features/jquery-ajax' data-toggle='collapse' data-target='#jquery-ajax' aria-expanded='false' aria-controls='collapsePages'><span>Jquery & AJAX</span></a>
                    <div id='jquery-ajax' class='collapse' aria-labelledby='headingPages' data-parent='#accordionSidebar'>
                        <div class='bg-white py-2 collapse-inner rounded'>
                            <h6 class='collapse-header'>Jquery & AJAX</h6>
                            <a class='collapse-item' href='/features/jquery-ajax/ajax.php'><i class='fas fa-sync-alt fa-sm fa-fw mr-2 text-primary' ></i>AJAX</a><a class='collapse-item' href='/features/jquery-ajax/data-tables.php'><i class='fas fa-table fa-sm fa-fw mr-2 text-primary' ></i>Data Tables</a><a class='collapse-item' href='/features/jquery-ajax/drag-drop.php'><i class='fas fa-grip-vertical fa-sm fa-fw mr-2 text-primary' ></i>Drag Drop</a><a class='collapse-item' href='/features/jquery-ajax/email.php'><i class='fas fa-envelope fa-sm fa-fw mr-2 text-primary' ></i>Email</a><a class='collapse-item' href='/features/jquery-ajax/monthly-calendar.php'><i class='fas fa-calendar-alt fa-sm fa-fw mr-2 text-primary' ></i>Monthly Calendar</a><a class='collapse-item' href='/features/jquery-ajax/weekly-calendar.php'><i class='fas fa-calendar-week fa-sm fa-fw mr-2 text-primary' ></i>Weekly Calendar</a>
                        </div>
                    </div>
                </li><li class='nav-item'>
                    <a class='nav-link collapsed pt-0' href='/features/login-registration' data-toggle='collapse' data-target='#login-registration' aria-expanded='false' aria-controls='collapsePages'><span>Login & Registration</span></a>
                    <div id='login-registration' class='collapse' aria-labelledby='headingPages' data-parent='#accordionSidebar'>
                        <div class='bg-white py-2 collapse-inner rounded'>
                            <h6 class='collapse-header'>Login & Registration</h6>
                            <a class='collapse-item' href='/features/login-registration/login.php'><i class='fas fa-sign-in-alt fa-sm fa-fw mr-2 text-primary' ></i>Login</a><a class='collapse-item' href='/features/login-registration/register.php'><i class='fas fa-money-check fa-sm fa-fw mr-2 text-primary' ></i>Register</a>
                        </div>
                    </div>
                </li><li class='nav-item'>
                    <a class='nav-link collapsed pt-0' href='/features/other' data-toggle='collapse' data-target='#other' aria-expanded='false' aria-controls='collapsePages'><span>Other</span></a>
                    <div id='other' class='collapse' aria-labelledby='headingPages' data-parent='#accordionSidebar'>
                        <div class='bg-white py-2 collapse-inner rounded'>
                            <h6 class='collapse-header'>Other</h6>
                            <a class='collapse-item' href='/features/other/get-method.php'><i class='fas fa-external-link-square-alt fa-sm fa-fw mr-2 text-primary' ></i>Get Method</a><a class='collapse-item' href='/features/other/radio-buttons.php'><i class='fas fa-check-circle fa-sm fa-fw mr-2 text-primary' ></i>Radio Buttons</a><a class='collapse-item' href='/features/other/scraping-websites.php'><i class='fas fa-cloud-download-alt fa-sm fa-fw mr-2 text-primary' ></i>Scraping Websites</a>
                        </div>
                    </div>
                </li>
            
            <hr class='sidebar-divider'><div class='sidebar-heading pb-3'><i class='fas fa-fw fa-users'></i> BIA Association</div><li class='nav-item'><a class='nav-link pt-0' href='https://forms.gle/UXVB7RyQavCNTVo59'><span>Join Here</span></a></li>
            <hr class='sidebar-divider d-none d-md-block'>
            <div class='text-center d-none d-md-inline'>
            <button class='rounded-circle border-0' id='sidebarToggle'></button>
            </div>
        </ul>
                <div id='content-wrapper' class='d-flex flex-column'>
                    <div id='content'>
                        <div id='connection-error'></div>
                        <nav class='navbar navbar-expand navbar-light bg-white topbar mb-4 shadow'>
                <button id='sidebarToggleTop' class='btn btn-link rounded-circle mr-3'>
                    <i class='fa fa-bars'></i>
                </button>
                <ol class='breadcrumb bg-white mr-auto my-2 my-md-0 mw-100'>
        <li class='breadcrumb-item d-none d-md-inline'><a href='/'>Home</a></li>
        
    </ol>
                <ul class='navbar-nav ml-auto'>
                    
                    <li class='nav-item dropdown no-arrow mx-1'>
                <a class='nav-link dropdown-toggle' href='#' id='alertsDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'><i class='fas fa-bell fa-fw'></i><span class='badge badge-danger badge-counter'>1</span></a>
                <div class='dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in' aria-labelledby='alertsDropdown'>
                    <h6 class='dropdown-header'>Alerts</h6>
                    <a class='dropdown-item d-flex align-items-center' href='/alerts.php?alert-id=48#alert-48'>
                    <div class='mr-3'><div class='icon-circle bg-success'><i class='fas fa-puzzle-piece text-white'></i></div></div>
                    <div class='clamp'><div class='small text-gray-500'>October 20, 2021</div><span class='font-weight-bold'>This new update enhances site tabs. If the tabs overflow when multiple queries are executed or if the screen size is too small, the tabs will be condensed into a drop-down menu. The image below shows an example of running 6 queries with the menu collapsed:The image below shows the same menu but expanded:</span></div>
                </a><a class='dropdown-item d-flex align-items-center' href='/alerts.php?alert-id=47#alert-47'>
                    <div class='mr-3'><div class='icon-circle bg-success'><i class='fas fa-puzzle-piece text-white'></i></div></div>
                    <div class='clamp'><div class='small text-gray-500'>April 1, 2021</div><span class='font-weight-bold'>This update allows for using data from other columns to insert mock data (see the SQL Column type in the image below):Additionally, person title and person degree have been added as mock data types.</span></div>
                </a><a class='dropdown-item d-flex align-items-center' href='/alerts.php?alert-id=46#alert-46'>
                    <div class='mr-3'><div class='icon-circle bg-success'><i class='fas fa-puzzle-piece text-white'></i></div></div>
                    <div class='clamp'><div class='small text-gray-500'>March 10, 2021</div><span class='font-weight-bold'>Files can now be restored to any given point in the file's history by clicking the history icon next to the timestamp when editing a file. Note: this only works on files that were created on March 5, 2021 and after.</span></div>
                </a><a class='dropdown-item d-flex align-items-center' href='/alerts.php?alert-id=45#alert-45'>
                    <div class='mr-3'><div class='icon-circle bg-warning'><i class='fas fa-wrench text-white'></i></div></div>
                    <div class='clamp'><div class='small text-gray-500'>March 2, 2021</div><span class='font-weight-bold'>This update fixes many of the real-time editing issues in TXT files and other scripting files (fingers crossed). Time stamps for activity is now tracked to the millisecond instead of the second which should remedy many of the previous issues that existed. Additionally, other flaws were removed so TXT documents wouldn't reset cursor positions when a user edited a file.</span></div>
                </a><a class='dropdown-item d-flex align-items-center' href='/alerts.php?alert-id=44#alert-44'>
                    <div class='mr-3'><div class='icon-circle bg-success'><i class='fas fa-puzzle-piece text-white'></i></div></div>
                    <div class='clamp'><div class='small text-gray-500'>February 26, 2021</div><span class='font-weight-bold'>This update is mainly for administrators and instructors. A new feature was added to replay an entire file from start to finish. The benefit is that instead of browsing through all the textual activity, a user needs only drag a slider to see the file edits on a given file at any point in time.</span></div>
                </a>
                    <a class='dropdown-item text-center small text-gray-500' href='/alerts.php'>Show All Alerts</a>
                </div>
            </li>
                    <li class='nav-item dropdown no-arrow mx-1'>
                    <a class='nav-link dropdown-toggle' href='#' id='messagesDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><i class='fas fa-ticket-alt fa-fw'></i></a>
                    <div class='dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in' aria-labelledby='messagesDropdown'>
                        <h6 class='dropdown-header'>Ticket Information</h6>
                        <span class='dropdown-item text-center small text-gray-800'>Position in Line: <span class='text-danger'>0</span></span>
                        
                        <a class='dropdown-item text-center small text-gray-500' href='/support.php'>No open tickets exist! Click to view all your tickets.</a>
                    </div>
                </li>
                    <div class='topbar-divider d-none d-sm-block'></div>
                    <li class='nav-item dropdown no-arrow'>
                        <a id='scl05176' class='active-user nav-link dropdown-toggle ' href='#' id='userDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            <span class='mr-2 d-none d-lg-inline text-gray-600 small'>Sam Lehmann</span>
                            <div class='btn btn-sm btn-circle btn-primary'><i class='fas fa-user'></i></div>
                        </a>
                        <div class='dropdown-menu dropdown-menu-right shadow animated--grow-in' aria-labelledby='userDropdown'><a class='dropdown-item' href='/settings.php'><i class='fas fa-cogs fa-sm fa-fw mr-2 text-primary'></i> Settings</a>
                <a class='dropdown-item' href='/support.php'><i class='fas fa-life-ring fa-sm fa-fw mr-2 text-primary'></i> Support</a>
                <div class='dropdown-divider'></div>
                <a class='dropdown-item' href='/activity.php'><i class='fas fa-chart-bar fa-sm fa-fw mr-2 text-primary'></i> Activity</a>
                <a class='dropdown-item' href='/attendance.php'><i class='fas fa-calendar-check fa-sm fa-fw mr-2 text-primary'></i> Attendance</a>
                <a class='dropdown-item' href='/office.php'><i class='fas fa-building fa-sm fa-fw mr-2 text-primary'></i> Virtual Office</a>
                
                <a class='dropdown-item' href='/randomizer.php'><i class='fas fa-spinner fa-sm fa-fw mr-2 text-primary'></i> Randomizer</a>
                <a class='dropdown-item' href='/personal/blog'><i class='fas fa-blog fa-sm fa-fw mr-2 text-primary'></i> Blog</a>
                <div class='dropdown-divider'></div>
                
                <a class='dropdown-item logout' href='#' data-toggle='modal' data-target='#modal'><i class='fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger'></i> Logout</a></div>
                    </li>
                </ul>
            </nav>
                        <div class='container-fluid'>
                            <div id='message'></div>
                            <form id='download-code' method='POST'></form>
		<div class='row'>
			<div id='schema-orientation' class='col-xl-12 col-lg-12'>
                <div class='row'>
                    <div class='col-xl-12 col-lg-12'>
                        <div class='card border-left-info shadow mb-4'>
                            <div class='card-header py-3 d-flex flex-row align-items-center justify-content-between'>
                                <h6 class='m-0 font-weight-bold text-info'>Query Execution</h6>
                                <div class='dropdown no-arrow'>
									<a class='btn btn-sm btn-info btn-circle' href='#' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
										<i class='fas fa-bars fa-sm fa-fw'></i>
									</a>
									<div class='dropdown-menu dropdown-menu-right shadow animated--fade-in' x-placement='bottom-end' style='position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-142px, 19px, 0px);'>
										<div class='dropdown-header'>Actions:</div>
										<a id='submit-query' class='dropdown-item' href='#' data-toggle='tooltip' data-placement='right' data-original-title='Cmd+Shift+Enter'><i class='fas fa-bolt fa-sm fa-fw mr-2 text-info'></i> Execute All Queries</a>
										<a id='submit-selected-query' class='dropdown-item' href='#' data-toggle='tooltip' data-placement='right' data-original-title='Cmd+Enter'><i class='fa fa-i-cursor  fa-sm fa-fw mr-2 text-info'></i> Execute Selected Queries</a>
										<div class='dropdown-divider'></div>
										<a class='toggle-orientation dropdown-item d-none d-lg-block' href='#'><i class='fa fa-pause  fa-sm fa-fw mr-2 text-info'></i> Toggle Orientation</a>
										<a class='dropdown-item download-code' href='#'><i class='fa fa-download fa-sm fa-fw mr-2 text-info'></i> Download Code</a>
										<a id='keyboard-shortcuts' class='dropdown-item' href='#' data-toggle='modal' data-target='#modal'><i class='fa fa-info-circle fa-sm fa-fw mr-2 text-info'></i> Keyboard Shortcuts</a>
									</div>
                                </div>
                            </div>
							<div class='card-body'>
								<div id='schemas' class='form-group mb-3'>
			<label for='schema'>Select Schema</label>
			<select id='schema' class='form-control form-control-sm mb-0'><option value='354groupb2' >Group B2 (354groupb2)</option><option value='lecture354b' >Lecture (lecture354b)</option><option value='scl05176' selected>Sam Lehmann (scl05176)</option></select>
		</div>
								<div class='form-group mb-0'>
									<label for='schema'>Enter Query or Queries</label>
									<textarea id='editing' placeholder='Enter one or more queries here...' name='query' class='d-none'>SELECT SHA1 ("iLvB!A354"); 
SELECT md5 ("pA5sw0rdsR4chumPs"); </textarea>
								</div>
							</div>
                        </div>
                    </div>
                </div>
			</div>
            <div id='results-orientation' class='col-xl-12 col-lg-12'>
				<div id='results' class='tab-area'></div>
            </div>
 		</div>
                            
                        </div>
                    </div>
                    <footer class='sticky-footer bg-white shadow'>
        <div class='container my-auto'>
            <div class='copyright text-center my-auto'>
                <span>Copyright 2021 © Dustin Ormond | Associate Professor of Business Intelligence and Analytics | Creighton University | Logged in as <b>scl05176</b></span>
            </div>
        </div>
    </footer>
                </div>
                
            </div>
            <a class='scroll-to-top rounded' href='#page-top'><i class='fas fa-angle-up'></i></a>
            <div class='modal fade' id='modal' tabindex='-1' role='dialog' aria-labelledby='modal-label' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered' role='document'></div>
            </div>
        </body>
    </html>