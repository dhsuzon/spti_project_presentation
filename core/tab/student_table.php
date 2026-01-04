   <div class="row">
       <div class="col-md-12">
           <div class="card shadow-sm border-0">
               <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-graduate mr-1"></i> Students Information
                </h6>

                   <?php if (isset($_SESSION['student_success'])): ?>
                   <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                       style="background-color: #d1e7dd; color: #0f5132;">
                       <i class="fas fa-check-circle mr-2"></i>
                       <strong>Success!</strong> <?php echo $_SESSION['student_success']; ?>
                       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
                   <?php unset($_SESSION['student_success']); ?>

                   <?php elseif (isset($_SESSION['db_student_error'])): ?>
                   <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                       style="background-color: #f8d7da; color: #842029;">
                       <i class="fas fa-exclamation-triangle mr-2"></i>
                       <strong>Error!</strong> <?php echo $_SESSION['db_student_error']; ?>
                       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
                   <?php unset($_SESSION['db_student_error']); ?>
                   <?php elseif (isset($_SESSION['students_row_delete_message_success'])): ?>
                   <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                       style="background-color: #f8d7da; color: #842029;">
                       <i class="fas fa-exclamation-triangle mr-2"></i>
                       <strong>Error!</strong> <?php echo $_SESSION['students_row_delete_message_success']; ?>
                       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
                   <?php unset($_SESSION['students_row_delete_message_success']); ?>
                   <?php elseif (isset($_SESSION['notices_row_delete_message_error'])): ?>
                   <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert"
                       style="background-color: #f8d7da; color: #842029;">
                       <i class="fas fa-exclamation-triangle mr-2"></i>
                       <strong>Error!</strong> <?php echo $_SESSION['students_row_delete_message_error']; ?>
                       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
                   <?php unset($_SESSION['students_row_delete_message_error']); ?>
                   <?php endif; ?>
               </div>
               <div class="card shadow mb-4">
                   <div class="card-header py-3 d-flex justify-content-between align-items-center">
                       <h6 class="m-0 font-weight-bold text-primary">Student List</h6>
                       <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#studentModal">
                           <i class="fas fa-user-plus"></i> Add New Student
                       </button>
                   </div>
                   <div class="card-body">
                       <div class="table-responsive">
                           <table class="table table-bordered table-hover" id="studentTable" width="100%"
                               cellspacing="0">
                               <thead class="bg-light">
                                   <tr>
                                       <th>Image</th>
                                       <th>Name & Roll</th>
                                       <th class="d-none d-md-table-cell">Reg No</th>
                                       <th>Department</th>
                                       <th class="d-none d-md-table-cell">Semester/Session</th>
                                       <th>Status</th>
                                       <th class="text-center">Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php include_once  __DIR__."/student_data_fetch.php"; ?>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>