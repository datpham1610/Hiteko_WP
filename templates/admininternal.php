<?php /* Template name: Admin Internal */ ?>
<?php get_header(); ?>
    <?php   if(!is_user_logged_in() || wp_get_current_user()->roles[0] != 'administrator'): 
                wp_redirect(site_url());
                exit;
            endif;
    ?>
    <div class="internal">
        <div class="section1">
            <div class="size-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/internal.png" class="img-fluid" alt="">
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-page">
                                <span>NỘI BỘ HITEKO</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list-inline text-center tab-title">
                            <li class="list-inline-item active" data-show-id="1" id='tab-internal-1'>LESSION LEARN</li>
                            <li class="list-inline-item" data-show-id="2" id='tab-internal-2'>DAILY TO DO LIST</li>
                        </ul>
                    </div>
                    <div class="col-md-12 tab-content show-content" id='content-1'>
                        <?php $post = query_posts(array( 
                            'post_type' => 'lesson learn',
                            'showposts' => -1,
                             )
                        );?>
                        <?php while(have_posts()):the_post(); ?>
                        <div class="details-project">
                            <?php the_title(); ?>
                            <div class="update">
                                <span>
                                    Xem Chi Tiết
                                </span>
                            </div>
                            <div class="delete-red" id="<?php echo get_the_ID(); ?>">
                                <span class="utm-b">
                                    Xóa
                                </span>
                            </div>
                            <div class="content">
                                <div class="close">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/goTop.png" class="img-fluid" alt="">
                                </div>
                                <div class="heading">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4">
                                            <a href="https://hitekodemo.cf/wp-admin/post.php?post=<?php echo get_the_ID(); ?>&action=edit" class="button-edit utm-b"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            Chỉnh sửa</a>
                                        </div>
                                        <div class="col-lg-9 col-md-8"></div>
                                        <div class="col-md-12">
                                            <div class="date-lesson">
                                                Ngày: <?php echo get_the_date('j/m/Y') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="address">
                                                <?php the_title(); ?><br>
                                                <?php the_field('address'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <div class="learn">
                                                BÀI HỌC KINH NGHIỆM <br> LESSION LEARN
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="body">
                                    <table class="table table-responsive  my-table">
                                        <thead>
                                            <tr>
                                                <th><span>STT</span> <br> No</th>
                                                <th><span>CÔNG TÁC THỰC HIỆN</span> <br>
                                                    Description
                                                </th>
                                                <th>
                                                    <span>ĐÃ THỰC HIỆn</span><br>
                                                    Actually
                                                </th>
                                                <th>
                                                    <span>CÁCH NÊN XỬ LÝ</span><br>
                                                    Solution
                                                </th>
                                                <th>
                                                    <span>BÀI HỌC RÚT RA SAU KHI XỬ LÝ</span><br>
                                                    Lesson learn
                                                </th>
                                                <th>
                                                    <span>GHI CHÚ</span> <br>
                                                    Remarks
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(have_rows('lesson_learn')): ?>
                                            <?php $stt = 1; ?>
                                            <?php while(have_rows('lesson_learn')):the_row(); ?>             
                                            <tr>
                                                <td class="text-center utm-rg"><?php echo $stt ?></td>
                                                <td class="utm-rg">
                                                    <?php the_sub_field('description'); ?>
                                                </td>
                                                <td class="utm-rg text-justify">
                                                    <?php the_sub_field('actually');?> 
                                                </td>
                                                <td class="utm-i text-justify">
                                                    <?php the_sub_field('solution'); ?>
                                                </td>
                                                <td class="utm-rg text-justify">
                                                    <?php the_sub_field('lesson'); ?>
                                                </td>
                                                <td class="utm-rg">
                                                   <?php the_sub_field('remarks'); ?>
                                                </td>
                                            </tr>
                                            <?php $stt++;endwhile; ?>
                                        <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                    <div class="add-lesson col-md-2 offset-md-5 text-md-center">
                        <a href="https://hitekodemo.cf/wp-admin/post-new.php?post_type=lessonlearn">Thêm mới</a>
                    </div>
                    <div class="col-md-12 tab-content" id='content-2'>
                        <?php $current_user = wp_get_current_user();?>
                        <div class="employee-position">
                            Ngày / Date: <span><?php echo date('d/m/Y') ?></span>
                        </div>
                        <div class="row filter-admin">
                            <div class="col-lg-3 col-md-4">
                                <label>Tiến độ :</label>
                                <select id="complete-or-not" class="add-complete utm-b">
                                    <option value="1">Đã hoàn thành</option>
                                    <option value="2" selected>Chưa hoàn thành</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <label>Nhân viên:</label>
                                <select id="filter-em" class="add-complete  utm-b">
                                    <option value="0">All</option>
                                    <?php $user_query = get_users(); $index=1;?>
                                    <?php 
                                        $term_user_list = [];
                                        foreach ($user_query as $key => $value) {
                                            if( ($value->roles)[0] != "administrator") {
                                                $term_user_list[] = $value->data;
                                            }
                                        }
                                        foreach ($term_user_list as $value) :
                                    ?>
                                        <option value="<?php echo $value->ID ?>"><?php echo $value->display_name; ?></option>    
                                    <?php 
                                        endforeach;
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-2 d-md-flex flex-md-column justify-content-md-end">
                                <button class="filter-submit">Lọc dữ liệu</button>
                            </div>
                        </div>
                        <div class="todolist" id="todolistadmin">
                            <table class="table table-hover text-center daily-to-do-list">
                                <thead>
                                    <tr class="">
                                        <th class="utm-b">STT<br><span class="utm-i">No.</span></th>
                                        <th class="utm-b">NỘI DUNG CÔNG VIỆC <br><span class="utm-i">Task</span></th>
                                        <th class="utm-b">NGƯỜI THỰC HIỆN<br><span class="utm-i">PIC</span></th>
                                        <th class="utm-b">NGÀY HOÀN THÀNH<br><span class="utm-i">Deadline</span></th>
                                        <th class="utm-b">GHI CHÚ <br><span class="utm-i">Notes</span></th>
                                        <th class="utm-b">HOÀN THÀNH <br><span class="utm-i">Check</span></th>
                                        <th class="utm-b">HÀNH ĐỘNG <br><span class="utm-i">Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php     
                                    $post = query_posts(array( 
                                        'post_type' => 'daily_to_do_list',
                                        'posts_per_page' => 10,
                                            'meta_query' => array(
                                                'relation'=> 'and',
                                                array(
                                                    'key'     => "check",
                                                    'value'   => 100,
                                                    'compare' => '!='
                                                ),
                                            ),
                                    ));
                                    $i = 1;
                                ?>
                                <?php while(have_posts()):the_post(); 
                                    $user = get_userdata( get_field('name')); 
                                ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php the_title(); ?></td>
                                        <td>
                                            <?php 
                                                $user = get_userdata( get_field('name')); 
                                                echo $user->display_name;
                                            ?>   
                                        </td>
                                        <td><?php the_field('date') ?></td>
                                        <td><?php the_field('notes') ?></td>
                                        <td class="d-md-flex flex-md-row justify-content-center  ">
                                            
                                            <span><a class="quality"><?php the_field('check') ?></a>%</span>
                                            
                                        </td>
                                        <td>
                                            <div class="edit admin d-inline-block" data-id="<?php echo get_the_ID(); ?>">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </div>
                                            <div class="delete admin d-inline-block" data-delete-id="<?php echo get_the_ID(); ?>">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </div>
                                        </td>
                                    </tr>
                                <?php 
                                    $i++ ;
                                    endwhile;
                                ?>                                
                                </tbody>
                            </table>
                            <div class="page-nav">
                                <?php wp_pagenavi(); ?>
                            </div>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade admin" id="editmodal">
        <div class="modal-dialog modal-lg d-flex flex-column justify-content-center">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header ">
                    <h4 class="modal-title ml-auto mr-auto">EDIT TASK</h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" value="" class="postid">
                        <input id="" type="text" class="form-control task" placeholder="Nội dung công việc (*)">
                    </div>
                    <div class="form-group d-flex flex-md-row flex-column">
                        <input id="" class=" w-50 mr-md-3 form-control calendar date" placeholder="Ngày hoàn thành (*)">
                        <input id="" class=" w-50 ml-md-3 form-control check percent" type="number" max=100  min=0  placeholder="Tiến độ hoàn thành (*)">
                    </div>
                    <div class="form-group">
                        <textarea id="" class="form-control notes notes" placeholder="Ghi chú"></textarea>
                    </div>
                    <div class="row mt-4">
                        <?php wp_nonce_field('edit_daily'); ?>
                        <div class="col-6">
                            
                        </div>
                        <div class="col-6 d-flex flex-row justify-content-end">
                            <button  class="forgot-pw">Save</button>
                            <button  class="btn-login">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade admin" id="deletemodal">
        <div class="modal-dialog modal-md d-flex flex-column justify-content-center">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header ">
                    <h4 class="modal-title ml-auto mr-auto">DELETE TASK</h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 pb-md-3">
                            <h5 class="text-center"> Bạn có muốn xóa nội dung này ? </h5>
                        </div>
                        <input class="postid" type="hidden" value="0">
                        <?php wp_nonce_field('delete_daily'); ?>
                        <div class="col-6 offset-md-3 pb-md-3">
                            <button id="edit-task" class="forgot-pw form-control">Có</button>
                        </div>
                        <div class="col-6 offset-md-3 d-flex flex-row justify-content-end">
                            <button id="delete-task" class="btn-login form-control">Không</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade user" id="deletelesson">
        <div class="modal-dialog modal-md d-flex flex-column justify-content-center">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header ">
                    <h4 class="modal-title ml-auto mr-auto">DELETE LESSON</h4>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 pb-md-3">
                            <h5 class="text-center"> Bạn có muốn xóa nội dung này ? </h5>
                        </div>
                        <input class="postid" type="hidden" value="">
                        <?php wp_nonce_field('delete_daily'); ?>
                        <div class="col-6 offset-md-3 pb-md-3">
                            <button id="edit-task" class="forgot-pw form-control">Có</button>
                        </div>
                        <div class="col-6 offset-md-3 d-flex flex-row justify-content-end">
                            <button id="delete-task" class="btn-login form-control">Không</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
