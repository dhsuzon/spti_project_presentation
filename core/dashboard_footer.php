<!-- add teacher and edit modal -->
<div class="modal fade" id="addTeacherModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border: none; border-radius: 8px; overflow: hidden;">
            <div class="modal-header" style="background: #417690; color: white; border-bottom: none;">
                <h5 class="modal-title" id="m_title" style="font-weight: 500;">
                    <i class="fas fa-user-plus mr-2"></i> Add New Teacher
                </h5>
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="./core/admin/teacher_process.php" method="POST" enctype="multipart/form-data"
                id="teacherForm">
                <div class="modal-body p-4" style="background: #fdfdfd;">

                    <input type="hidden" name="teacher_id" id="t_id">

                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label class="small font-weight-bold text-uppercase text-muted">Full Name</label>
                            <input type="text" name="name" id="t_name" class="form-control shadow-none"
                                placeholder="Enter teacher name" maxlength="100" pattern="^[A-Za-z\s\.\:]{5,100}$"
                                title="name must be A-Z,a-z \s \.\: and length gather than equal 5 and less than equal  100"
                                required>
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label class="small font-weight-bold text-uppercase text-muted">Designation</label>
                            <input type="text" name="designation" id="t_designation" class="form-control shadow-none"
                                placeholder="e.g. Senior Instructor" maxlength="100"
                                pattern="^[a-zA-Z\s\,\-\(\)\.]{2,100}$"
                                title="length must be  gather than equal 2  and less than equal 100  " required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label class="small font-weight-bold text-uppercase text-muted">Department</label>
                            <select name="teacher_department" id="t_dept" class="form-control shadow-none"
                                maxlength="100" title="length must be less than equal 100" required>
                                <option value="" disabled selected>Select Department</option>
                                <option value="Computer">Computer</option>
                                <option value="Civil">Civil</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Mechanical">Mechanical</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label class="small font-weight-bold text-uppercase text-muted">Phone Number</label>
                            <input type="tel" name="phone" id="t_phone" class="form-control shadow-none" maxlength="15"
                                pattern="^[0-9]{11,15}$" placeholder="017XXXXXXXX"
                                title="length must be gather than equal 11 and less than equal 15 only numeric "
                                required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label class="small font-weight-bold text-muted">Email Address</label>
                            <input type="email" name="email" id="t_email" class="form-control shadow-none"
                                placeholder="example@mail.com" maxlength="255"
                                title="length must be less than  equal 255" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label class="small font-weight-bold text-muted">Teacher's Image</label>
                            <div id="img_preview" class="mb-2" style="display:none;">
                                <img id="t_img_view" src="" width="60" class="img-thumbnail">
                            </div>
                            <input type="file" name="teacher_image" class="form-control shadow-none" id="teacherImg"
                                required maxlength="255" title="length must be less than  equal 255" required>
                        </div>
                    </div>

                    <div class="modal-footer bg-light border-top-0 px-4">
                        <button type="button" class="btn btn-secondary btn-sm px-4"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="save_teacher" id="m_btn"
                            class="btn btn-primary btn-sm px-4 shadow-sm" style="background: #264b5d; border: none;">
                            Save Information
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- add notice and edit modal -->
<div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border: none; border-radius: 8px; overflow: hidden;">
            <div class="modal-header" style="background: #417690; color: white; border-bottom: none;">
                <h5 class="modal-title" id="n_modal_title">
                    <i class="fas fa-bullhorn mr-2"></i> Add New Notice
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <form action="./core/admin/notice_process.php" method="POST" enctype="multipart/form-data" id="noticeForm">
                <div class="modal-body p-4">
                    <input type="hidden" name="notice_id" id="n_id">

                    <div class="form-group mb-3">
                        <label class="small font-weight-bold text-uppercase text-muted">Notice Title</label>
                        <input type="text" name="notice_title" id="n_title" class="form-control shadow-none"
                            placeholder="Enter notice title" required maxlength="255">
                    </div>
                    <div class="form-group mb-3">
                        <label class="small font-weight-bold text-uppercase text-muted">Notice Date</label>
                        <input type="date" name="notice_date" id="n_date" class="form-control shadow-none"
                            placeholder="Enter notice date" required>
                    </div>

                    <div class="form-group mb-3">
                        <label class="small font-weight-bold text-uppercase text-muted">Notice File / Image
                            (Optional)</label>
                        <input type="file" name="notice_file" id="n_file" class="form-control shadow-none"
                            maxlength="255">

                        <div id="file_view_section" class="mt-2" style="display:none;">
                            <small class="text-info"><i class="fas fa-link"></i> Current File: <span
                                    id="current_file_name"></span></small>
                        </div>
                    </div>

                    <div class="modal-footer bg-light border-top-0 px-0 mt-3">
                        <button type="button" class="btn btn-secondary btn-sm px-4"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="save_notice" id="n_btn" class="btn btn-primary btn-sm px-4"
                            style="background: #264b5d; border: none;">
                            Save Notice
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- add student and edit modal -->
<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-white" style="background: #417690; color: white; border-bottom: none;">
                <h5 class="modal-title" id="studentModalLabel">Add New Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="core/admin/student_process.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="student_id" id="student_id">

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label font-weight-bold">Student Name</label>
                            <input type="text" name="student_name" id="student_name" class="form-control"
                                placeholder="Enter full name" maxlength="100" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label font-weight-bold">Roll No</label>
                            <input type="text" name="roll_no" id="roll_no" class="form-control" placeholder="101102"
                                maxlength="10" required pattern="^[0-9]{4,10}$"
                                title="must be Roll no numeric length  gather than equal 4 and less than equal 10">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label font-weight-bold">Registration No</label>
                            <input type="tel" name="reg_no" id="reg_no" class="form-control" placeholder="1502030405"
                                maxlength="16" required pattern="^[0-9]{8,16}$"
                                title="must be Registation no numeric length  gather than equal 8 and less than equal 16">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label font-weight-bold">Department</label>
                            <select name="student_department" id="student_department" class="form-select" maxlength="50"
                                required>
                                <option value="">Select Department</option>
                                <option value="Computer">Computer</option>
                                <option value="Civil">Civil</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Mechanical">Mechanical</option>
                                <option value="Electronics">Electronics</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label font-weight-bold">Semester</label>
                            <select name="semester" id="semester" class="form-select" maxlenght="20" required>
                                <option value="1st">1st</option>
                                <option value="2nd">2nd</option>
                                <option value="3rd">3rd</option>
                                <option value="4th">4th</option>
                                <option value="5th">5th</option>
                                <option value="6th">6th</option>
                                <option value="7th">7th</option>
                                <option value="8th">8th</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label font-weight-bold">Session</label>
                            <input type="text" name="session" id="session" class="form-control" placeholder="2021-22"
                                maxlength="20" required pattern="^[0-9\-]{4,9}$"
                                title="must be session  numeric length  gather than equal 4 and less than equal 9 or inclue \-">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label font-weight-bold">Phone Number</label>
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="017xxxxxxxx"
                                maxlength="15 " pattern="^[0-9]{11,15}$"
                                title="must be phone number n numeric length  gather than equal 11 and less than equal 16">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label font-weight-bold">Status</label>
                            <select name="status" id="status" class="form-select">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label font-weight-bold">Student Image</label>
                            <input type="file" name="student_image" class="form-control shadow-sm" accept="image/*">
                            <small class="text-muted">Keep blank if you don't want to change image.</small
                                maxlength="255">
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="save_student" class="btn btn-primary px-4"
                        style="background: #417690; color: white; border-bottom: none;">Save Student</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--  add banner and edit -->
<div class="modal fade" id="bannerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-white" style="background: #417690;">
                <h5 class="modal-title" id="modalTitle">Add New Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="./core/admin/banner_process.php" method="POST" enctype="multipart/form-data" id="bannerForm">
                <div class="modal-body">
                    <input type="hidden" name="banner_id" id="banner_id">

                    <div class="mb-3">
                        <label class="form-label font-weight-bold">Banner Title</label>
                        <input type="text" name="banner_title" id="banner_title" class="form-control"
                            placeholder="Enter banner title" maxlength="255" pattern="^.{0,255}$"
                            title="banner title 0 or less than equal 255">
                    </div>

                    <div id="currentImageContainer" class="mb-3 text-center" style="display: none;">
                        <label class="form-label d-block text-start">Current Image</label>
                        <img src="" id="old_banner_preview" class="img-thumbnail"
                            style="max-height: 120px; width: 100%; object-fit: cover;">
                    </div>

                    <div class="mb-3">
                        <label class="form-label font-weight-bold" id="imageLabel">Select Banner Image</label>
                        <input type="file" name="banner_image" id="banner_image" class="form-control" accept="image/*"
                            maxlength="255" pattern="^.{0,255}$">
                        <small class="text-muted" id="imageHelp">Recommended size: 1920x800 px</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="save_banner" id="submitBtn" class="btn text-white"
                        style="background: #417690;">Save Banner</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- add gallery model -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-white" style="background: #417690;">
                <h5 class="modal-title" id="gallery_title">Add New Gallery</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="./core/admin/gallery_process.php" method="POST" enctype="multipart/form-data"
                id="galleryForm">
                <div class="modal-body">
                    <input type="hidden" name="gallery_id" id="gallery_id">

                    <div class="mb-3">
                        <label class="form-label font-weight-bold">Gallery Caption</label>
                        <input type="text" name="gallery_caption" id="gallery_caption" class="form-control"
                            placeholder="Enter Gallery Caption" required maxlength="255" pattern="^[A-Za-z,\s]{0,255}$"
                            title="must be length less than equal 255 and fflow this pattern [A-Za-z,\s]{0,255} ">
                    </div>

                    <div id="currentImageContainer_gallery" class="mb-3 text-center" style="display: none;">
                        <label class="form-label d-block text-start">Current Image</label>
                        <img src="" id="old_gallery_preview" class="img-thumbnail"
                            style="max-height: 120px; width: 100%; object-fit: cover;">
                    </div>

                    <div class="mb-3">
                        <label class="form-label font-weight-bold" id="image_Label">Select Gallery Image</label>
                        <input type="file" name="gallery_image" id="gallery_image" class="form-control" accept="image/*"
                            maxlength="255" pattern="^.{1,255}$" title="must be length less than equal 255 ">
                        <small class="text-muted" id="imageHelp_gallery">Recommended size: 1920x800 px</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="save_gallery" id="sub_btn" class="btn text-white"
                        style="background: #417690;">Save Gallery</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- add author modal -->

<div class="modal fade" id="authMemberModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form id="authMemberForm" action="./core/admin/member_process.php" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header  text-white" style="background: #417690;">
                    <h5 class="modal-title" id="auth_modalTitle">Add Member</h5>
                    <button class="close text-white btn-close" type="button"
                        data-bs-dismiss="modal"><span></span></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="member_id" id="auth_m_id">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Member Role</label>
                            <select name="member_role" id="auth_m_role" class="form-control" required>
                                <option value="director">Director</option>
                                <option value="principal">Principal</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Full Name</label>
                            <input type="text" name="name" id="auth_m_name" class="form-control" required
                                maxlength="255">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Designation</label>
                            <input type="text" name="designation" id="auth_m_desig" class="form-control"
                                maxlength="255">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Institution</label>
                            <input type="text" name="institution" id="auth_m_inst" class="form-control" maxlength="255">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label>Message</label>
                        <textarea name="message" id="auth_m_msg" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <label>Photo</label>
                            <input type="file" name="image" id="auth_m_image" class="form-control-file border w-100 p-1"
                                maxlength="255">
                        </div>
                        <div class="col-md-4 text-center">
                            <div id="auth_image_preview_container" style="display:none;">
                                <img id="auth_old_img_view" src="" width="70" class="img-thumbnail shadow-sm">
                                <br><small class="text-danger">Current Photo</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="save_member" id="auth_submitBtn" class="btn text-white"
                        style="background: #417690;">Save
                        Member</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- department_model -->
<div class="modal fade" id="deptModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <form id="deptForm" action="./core/admin/department_process.php" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header text-white" style="background: #417690;">
                    <h5 class="modal-title" id="dept_modal_title">Add New Department</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="dept_id" id="dept_m_id">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Department Name</label>
                            <input type="text" name="dept_name" id="dept_m_name" class="form-control" required
                                maxlength="100">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Head Name</label>
                            <input type="text" name="head_name" id="dept_m_hname" class="form-control" required
                                maxlength="255">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Head Email</label>
                            <input type="email" name="head_email" id="dept_m_hemail" class="form-control"
                                maxlength="255">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Head Contact</label>
                            <input type="text" name="head_contact" id="dept_m_hcontact" class="form-control"
                                maxlength="20" pattern="^[0-9]{11,15}$"
                                title="contsct muste numeric length gather than qual 11 and less than equall 15">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Introduction</label>
                        <textarea name="intro_text" id="dept_m_intro" class="form-control" rows="2"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Job Sectors</label>
                            <textarea name="job_sector" id="dept_m_job" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Exam System</label>
                            <textarea name="exam_system" id="dept_m_exam" class="form-control" rows="2"></textarea>
                        </div>
                    </div>

                    <hr>
                    <h6 class="mb-3 text-muted">Upload Icons & Images (Max 5MB each)</h6>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label class="form-label small">Dept. Icon</label>
                            <input type="file" name="dept_icon" class="form-control form-control-sm" maxlength="255">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label small">Job Icon</label>
                            <input type="file" name="job_icon" class="form-control form-control-sm" maxlength="255">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label small">Exam Icon</label>
                            <input type="file" name="exam_icon" class="form-control form-control-sm" maxlength="255">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label small">Head Photo</label>
                            <input type="file" name="head_image" class="form-control form-control-sm" maxlength="255">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="save_dept" id="dept_submit_btn" class="btn text-white"
                        style="background: #417690;">
                        Save Department
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- facilities modal -->
<div class="modal fade" id="facilityModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form action="./core/admin/facilitie_process.php" method="POST" id="facilityForm" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header text-white" style="background: #417690;">
                    <h5 class="modal-title" id="f_header">Add Facility</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="f_id">

                    <div class="mb-3">
                        <label class="form-label">Upload Facilities Icon </label>
                        <input type="file" name="icon" class="form-control" id="f_icon" maxlength="255">

                        <div id="icon_preview_box" class="mt-2" style="display:none;">
                            <img src="" id="old_icon_img" width="50" class="img-thumbnail">
                            <small class="text-muted d-block">Current Icon</small>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text" name="title" id="f_title" class="form-control" required maxlength="100">
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="description" id="f_desc" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="save_facility" class="btn text-white" id="f_btn"
                        style="background: #417690;">Save Facility
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- techo card modal -->
<div class="modal fade" id="techModal" tabindex="-1" aria-labelledby="techModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header  text-white" id="modalHeader" style="background: #417690;">
                <h5 class="modal-title" id="tech_title">Add New Technology</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form action="./core/admin/course_process.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="tech_id" id="tech_id">

                <div class="modal-body">
                    <div class="mb-3 text-start">
                        <label class="form-label">Department</label>
                        <select name="dept_id" id="dept_id" class="form-select" required>
                            <option value="">-- select department --</option>
                            <?php
                            $depts = mysqli_query($conn, "SELECT id, dept_name FROM departments");
                            while($d = mysqli_fetch_assoc($depts)){
                                echo "<option value='".$d['id']."'>".$d['dept_name']."</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label"> Coures Card Title</label>
                        <input type="text" name="tech_name" id="tech_name" class="form-control" required
                            maxlength="100">
                    </div>
                    <div class="mb-3 text-center">
                        <label class="form-label d-block text-start">Course Card Image</label>
                        <img id="prev_img" src="" width="100" class="img-thumbnail mb-2 d-none">
                        <input type="file" name="tech_image" id="tech_image" class="form-control" maxlength="255">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="save_action" id="sub_tech_btn" class="btn text-white"
                        style="background: #417690;">Save
                        Technology Card</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- contact info add or edit modal -->
<div class="modal fade" id="settingsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-white" id="modal_header" style="background-color:#264B5D">
                <h5 class="modal-title" id="contact_title">Add Institute Contact Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="./core/admin/contact_process.php" method="POST">
                <input type="hidden" name="setting_id" id="setting_id">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label font-weight-bold">Institute Name</label>
                        <input type="text" name="inst_name" id="inst_name" class="form-control" required
                            maxlength="200">
                    </div>
                    <div class="mb-3">
                        <label class="form-label font-weight-bold">Address</label>
                        <textarea name="site_address" id="site_address" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label font-weight-bold">Email</label>
                        <input type="email" name="site_email" id="site_email" class="form-control" required
                            maxlength="255">
                    </div>
                    <div class="mb-3">
                        <label class="form-label font-weight-bold">Phone</label>
                        <input type="text" name="site_phone" id="site_phone" class="form-control" required
                            maxlengtht="15" pattern="^[0-9+]{11,15}$"
                            title="phone must be numeric and lenghtgatther than equal 11 or less than equal 15">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="save_settings" id="contact_btn" class="btn text-white"
                        style="background-color:#264B5D">Save Contact
                        Info</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- scholarships info add or edit modal -->
<div class="modal fade" id="scholarModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-white" id="modal_scholar_header" style="background-color:#264B5D">
                <h5 class="modal-title" id="scholar_title">Add New scholarships Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="./core/admin/scholar_process.php" method="POST">
                <input type="hidden" name="scholar_id" id="scholarshirps_id">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label font-weight-bold">Scholar Title</label>
                        <input type="text" name="scholar_title" id="scholarshirps_title" class="form-control" required
                            maxlength="200">
                    </div>
                    <div class="mb-3">
                        <label class="form-label font-weight-bold">Scholar Description</label>
                        <textarea name="scholar_des" id="scholarships_des" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="save_scholar" id="scholar_btn" class="btn text-white"
                        style="background-color:#264B5D">Save Scholar
                        Info</button>
                </div>
            </form>
        </div>
    </div>
</div>




<!-- admission info add or edit modal -->
<div class="modal fade" id="admissionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header text-white" id="modal_admission_header" style="background-color:#264B5D">
                <h5 class="modal-title" id="admission_title"><i class="fas fa-plus-circle mr-2"></i> Add New Admission
                    Info</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form action="./core/admin/admission_process.php" method="POST">
                <input type="hidden" name="admission_id" id="admission_id">

                <div class="modal-body p-4">
                    <div class="mb-3">
                        <label class="form-label font-weight-bold"> Admission Category Role </label>
                        <select name="admission_category" id="admission_info_category" class="form-control" required>
                            <option value="">Select Category</option>
                            <option value="header_title">Main Heading (প্রধান শিরোনাম)</option>
                            <option value="header_desc">Main Description (প্রধান বর্ণনা)</option>
                            <option value="eligibility">Eligibility (ভর্তির যোগ্যতা)</option>
                            <option value="rules">Rules (ভর্তির নিয়মাবলী)</option>
                            <option value="documents">Documents (প্রয়োজনীয় কাগজপত্র)</option>
                        </select>
                        <small class="text-muted">টাইটেল বা বর্ণনা আপডেট করতে চাইলে সংশ্লিষ্ট অপশনটি সিলেক্ট
                            করুন।</small>
                    </div>

                    <div class="mb-3">
                        <label class="form-label font-weight-bold">Admission Information</label>
                        <textarea name="admission_info" id="admission_info_text" class="form-control" rows="5"
                            placeholder="এখানে বিস্তারিত তথ্য লিখুন..." required></textarea>
                    </div>
                </div>

                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="save_admission" id="admission_btn" class="btn text-white px-4"
                        style="background-color:#264B5D">
                        <i class="fas fa-save mr-1"></i> Save Information
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="js/update.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>

</html>