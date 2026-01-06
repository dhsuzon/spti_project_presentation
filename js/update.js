$(document).ready(function () {
  // teacher update log
  $(document).on("click", ".edit-teacher-btn", function () {
    $("#m_title").html('<i class="fas fa-user-edit mr-2"></i> Update Teacher');
    $("#m_btn").text("Update Information");

    $("#t_id").val($(this).data("id"));
    $("#t_name").val($(this).data("name"));
    $("#t_designation").val($(this).data("designation"));
    $("#t_dept").val($(this).data("dept"));
    $("#t_phone").val($(this).data("phone"));
    $("#t_email").val($(this).data("email"));

    var img = $(this).data("image");
    if (img) {
      $("#t_img_view").attr("src", "./images/faculty/" + img);
      $("#img_preview").show();
      $("#teacherImg").removeAttr("required");
    }
  });
  // add teacher modal reset
  $('[data-bs-target="#addTeacherModal"]')
    .not(".edit-teacher-btn")
    .on("click", () => {
      $("#m_title").html(
        '<i class="fas fa-user-plus mr-2"></i> Add New Teacher'
      );
      $("#m_btn").text("Save Information");
      $("#teacherForm")[0].reset();
      $("#t_id").val("");
      $("#img_preview").hide();
      $("#teacherImg").attr("required", "required");
    });

  // notice update log
  $(document).on("click", ".edit-notice-btn", function () {
    $("#n_modal_title").html('<i class="fas fa-edit mr-2"></i> Update Notice');
    $("#n_btn").text("Update Notice");

    $("#n_id").val($(this).data("id"));
    $("#n_title").val($(this).data("title"));

    var file = $(this).data("file");
    if (file) {
      $("#current_file_name").text(file);
      $("#file_view_section").show();
    } else {
      $("#file_view_section").hide();
    }

    $("#n_file").removeAttr("required");
  });
  // add notice modal reset
  $('[data-bs-target="#noticeModal"]')
    .not(".edit-notice-btn")
    .on("click", function () {
      $("#n_modal_title").html(
        '<i class="fas fa-bullhorn mr-2"></i> Add New Notice'
      );
      $("#n_btn").text("Save Notice");
      $("#noticeForm")[0].reset();
      $("#n_id").val("");
      $("#file_view_section").hide();
    });
  // edit student
  $(".edit-student-btn").on("click", function () {
    $("#studentModalLabel").text("Edit Student Details");

    $("#student_id").val($(this).data("id"));
    $("#student_name").val($(this).data("name"));
    $("#roll_no").val($(this).data("roll"));
    $("#reg_no").val($(this).data("reg"));
    $("#student_department").val($(this).data("dept"));
    $("#semester").val($(this).data("semester"));
    $("#session").val($(this).data("session"));
    $("#phone").val($(this).data("phone"));
    $("#status").val($(this).data("status"));
  });

  //  reset student
  $("#studentModal").on("hidden.bs.modal", function () {
    $(this).find("form").trigger("reset");
    $("#studentModalLabel").text("Add New Student");
    $("#student_id").val("");
  });
  //    edited reset and create logic banner
  $(".add-btn").on("click", function () {
    $("#modalTitle").text("Add New Banner");
    $("#submitBtn").text("Upload Banner Now");
    $("#bannerForm").attr("action", "./core/admin/banner_process.php");
    $("#banner_id").val("");
    $("#banner_title").val("");
    $("#currentImageContainer").hide();
    $("#banner_image").attr("required", true);
    $("#imageHelp").text("Recommended size: 1920x800 px");
  });

  //  edit banner
  $(".edit-banner-btn").on("click", function () {
    $("#modalTitle").text("Edit Banner Details");
    $("#submitBtn").text("Update Banner");
    $("#bannerForm").attr("action", "./core/admin/banner_process.php");

    var id = $(this).data("id");
    var title = $(this).data("title");
    var image = $(this).data("image");

    $("#banner_id").val(id);
    $("#banner_title").val(title);
    $("#banner_image").attr("required", false);

    $("#old_banner_preview").attr("src", "./images/banners/" + image);
    $("#currentImageContainer").show();
    $("#imageHelp").text("no new banner add then old banner");
  });
  // add gallery
  $(".add_gallery_btn").on("click", function () {
    $("#gallery_title").text("Add New Gallery");
    $("#sub_btn").text("Upload Gallery Now");
    $("#galleryForm").attr("action", "./core/admin/gallery_process.php");
    $("#gallery_id").val("");
    $("#gallery_caption").val("");
    $("#currentImageContainer_gallery").hide();
    $("#gallery_image").attr("required", true);
    $("#imageHelp_gallery").text("Recommended size: 1920x800 px");
  });
  //  edit gallery
  $(".edit_gallery_btn").on("click", function () {
    $("#gallery_title").text("Edit Gallery Details");
    $("#sub_btn").text("Update Gallery");
    $("#galleryForm").attr("action", "./core/admin/gallery_process.php");

    var g_id = $(this).data("id");
    var g_caption = $(this).data("caption");
    var g_image = $(this).data("image");

    $("#gallery_id").val(g_id);
    $("#gallery_caption").val(g_caption);
    $("#gallery_image").attr("required", false);

    $("#old_gallery_preview").attr("src", "./images/gallery/" + g_image);
    $("#currentImageContainer_gallery").show();
    $("#imageHelp_gallery").text("no new gallery add then old gallery");
  });
  // add author member
  $(document).on("click", ".add-auth-btn", function () {
    $("#auth_modalTitle").text("Add New Member");
    $("#auth_submitBtn").attr("name", "save_member").text("Save Member Now");
    $("#authMemberForm")[0].reset();
    $("#auth_m_id").val("");
    $("#auth_image_preview_container").hide();
    $("#auth_m_image").attr("required", true);
  });
  // edit author member
  $(document).on("click", ".edit-auth-btn", function () {
    $("#auth_modalTitle").text("Update Member Info");
    $("#auth_submitBtn").attr("name", "save_member").text("Update Member");

    $("#auth_m_id").val($(this).data("id"));
    $("#auth_m_name").val($(this).data("name"));
    $("#auth_m_desig").val($(this).data("desig"));
    $("#auth_m_inst").val($(this).data("inst"));
    $("#auth_m_role").val($(this).data("role"));
    $("#auth_m_msg").val($(this).data("msg"));

    var img = $(this).data("image");
    if (img) {
      $("#auth_old_img_view").attr("src", "./images/authors/" + img);
      $("#auth_image_preview_container").show();
      $("#auth_m_image").removeAttr("required");
    }

    $("#authMemberModal").modal("show");
  });

  // edit department
  $(document).on("click", ".edit-dept-btn", function () {
    $("#dept_modal_title").text("Update Department");
    $("#dept_submit_btn").text("Update Now");

    $("#dept_m_id").val($(this).data("id"));
    $("#dept_m_name").val($(this).data("name"));
    $("#dept_m_hname").val($(this).data("hname"));
    $("#dept_m_hemail").val($(this).data("hemail"));
    $("#dept_m_hcontact").val($(this).data("hcontact"));
    $("#dept_m_intro").val($(this).data("intro"));
    $("#dept_m_job").val($(this).data("job"));
    $("#dept_m_exam").val($(this).data("exam"));
  });

  // add department
  $(document).on("click", ".add-dept-btn", function () {
    $("#dept_modal_title").text("Add New Department");
    $("#dept_submit_btn").text("Save Department");
    $("#deptForm")[0].reset();
    $("#dept_m_id").val("");
  });

  // edit facilite
  $(document).on("click", ".edit_btn", function () {
    var id = $(this).data("id");
    var title = $(this).data("title");
    var desc = $(this).data("desc");
    var icon = $(this).data("icon");

    $("#f_id").val(id);
    $("#f_title").val(title);
    $("#f_desc").val(desc);
    $("#f_header").text("Edit Facility");
    $("#f_btn").text("Update Facility");

    if (icon != "" && icon != undefined) {
      $("#old_icon_img").attr("src", "./images/logo/" + icon);
      $("#icon_preview_box").show();
      $("#f_icon").removeAttr("required");
    } else {
      $("#icon_preview_box").hide();
      $("#f_icon").attr("required", "required");
    }

    $("#facilityModal").modal("show");
  });

  // add facilities
  $("#add_new_btn").click(function () {
    $("#facilityForm")[0].reset();
    $("#f_id").val("");
    $("#icon_preview_box").hide();
    $("#f_icon").attr("required", "required");
    $("#f_header").text("Add Facility");
    $("#f_btn").text("Save Facility");
    $("#facilityModal").modal("show");
  });

  // add and edit technology card
  $("#add_tech").on("click", function () {
    $("#tech_title").text("Add New Technology");
    $("#sub_tech_btn").text("add new technoloy card");

    $("#tech_id").val("");
    $("#dept_id").val("");
    $("#tech_name").val("");
    $("#prev_img").addClass("d-none");
    $("#tech_image").prop("required", true);
  });

  $(document).on("click", ".edit_tech", function () {
    $("#tech_title").text("Update Technology Card");
    $("#sub_tech_btn")
      .text("Update Technology Card")
      .removeClass("btn-primary")
      .addClass("btn-info");

    $("#tech_id").val($(this).data("id"));
    $("#dept_id").val($(this).data("dept"));
    $("#tech_name").val($(this).data("tech"));

    var imgName = $(this).data("image");
    if (imgName) {
      $("#prev_img")
        .attr("src", "images/technology_image/" + imgName)
        .removeClass("d-none");
    }

    $("#tech_image").prop("required", false);
  });
});
